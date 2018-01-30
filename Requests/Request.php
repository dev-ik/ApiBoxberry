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
 *  * File: Request.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

/**
 * Абстрактный класс, от него унаследуются все запросы.
 * Class Request
 * @package Boxberry\Requests
 */
abstract class Request
{
    /**
     * @var string
     */
    protected $resultClass = '';
    /**
     * @var array
     */
    protected $propNameMap = array();
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @return string
     */
    public function getResultClass()
    {
        return $this->resultClass;
    }

    /**
     * @return array
     */
    public function getPropNameMap()
    {
        return $this->propNameMap;
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        $path = explode('\\', get_class($this));
		return str_replace('Request', '', array_pop($path));
    }
    /**
     * @return bool
     */
    abstract function checkRequiredFields();
}