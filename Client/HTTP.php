<?php
/**
 *
 *  * This file is part of Boxberry Api.
 *  *
 *  * (c) 2016, T. I. R. Ltd.
 *  * Evgeniy Mosunov, Alexander Borovikov
 *  *
 *  * For the full copyright and license information, please view LICENSE
 *  * file that was distributed with this source code
 *  *
 *  * File: HTTP.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Client;

use Boxberry\Client\Exceptions\BadResponseException;
use HttpException;
/**
 * Class HTTP
 * @package Boxberry\Client
 */
class HTTP
{
    static $lifetime = 3600;

    static $notLifeTime = [
       'GetKeyIntegration',
    ];
	
	public static function getCacheTimeLife()
	{
		return self::$lifetime;
	}
	
	public static function setCacheTimeLife($time)
	{
		self::$lifetime = $time;
	}

    static  function get_cache($key,$emptyLifeTime = false){
		$file = $key . '.cache';
        $cache_file =  __DIR__ .'/Cache/' . $file;
        if ((empty(self::$lifetime) || self::$lifetime==0 || self::$lifetime==false) && $emptyLifeTime == false){
            return false;
        }
		
        if ((is_file($cache_file) && (filemtime($cache_file) >= (time() - (self::$lifetime))) && $emptyLifeTime == false) || $emptyLifeTime == true){
            return @file_get_contents($cache_file);
        }
        return false;
    }
    static  function set_cache($key, $cnt){
		$file = $key . '.cache';
        $cache_file =  __DIR__ .'/Cache/' . $file;
        return file_put_contents($cache_file, $cnt);
    }
    /**
     * @param $api_url
     * @param $args
     * @return Response
     * @throws \HttpException
     */
    static function get($api_url, $args)
    {
        return self::send('GET', $api_url, $args);
    }

    /**
     * @param $api_url
     * @param $args
     * @return Response
     * @throws HttpException
     */
    static function post($api_url, $args)
    {
          return self::send('POST', $api_url, $args);
    }

    /**
     * @param $method
     * @param $api_url
     * @param $args
     * @return Response
     * @throws BadResponseException
     * @throws \HttpException
     */
    static private function send($method, $api_url, $args)
    {

        $hashRequest =  md5($api_url . (is_array($args) && !empty($args) ? '?' . http_build_query($args) : ''));
		if ($out = self::get_cache($hashRequest, in_array($args["method"],self::$notLifeTime))){
            $answer = json_decode($out, true);
        }else {

            if ($curl = curl_init()) {
                if ($method == 'GET') {
					curl_setopt($curl, CURLOPT_URL, $api_url . (is_array($args) && !empty($args) ? '?' . http_build_query($args) : ''));
                } elseif ($method == 'POST') {

					curl_setopt($curl, CURLOPT_URL, $api_url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $args);
                }
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

                $errno = curl_errno($curl);
                $error = curl_error($curl);
                $out = curl_exec($curl);
                curl_close($curl);

                if ($errno) {
                    throw new HttpException($error);
                }

                if (!$answer = json_decode($out, true)) {
                    throw new BadResponseException();
                }

                if (isset($answer['err']) && !empty($answer['err'])) {
                    throw new BadResponseException($answer['err']);
                }
                if (isset($answer[0]['err'])) {
                    throw new BadResponseException($answer[0]['err']);
                }
            } else {
                throw new HttpException('Can not create connection to ' . $api_url . ' with args ' . $args, 404);
            }
            self::set_cache($hashRequest,$out);

        }
		return new Response($answer);
    }
}