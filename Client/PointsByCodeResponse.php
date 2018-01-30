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
 *  * File: PointsByCodeResponse.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Client;

use Boxberry\Client\Exceptions\BadResponseException;

/**
 * Class PointsByCodeResponse
 * @package Boxberry\Client
 */
class PointsByCodeResponse
{
    /**
     * @var string
     */
    protected $code = null;

    /**
     * PointsByCodeResponse constructor.
     * @param $data
     * @throws BadResponseException
     */
    public function __construct($data)
    {
        if (isset($data['Code'])) {
            $this->code = $data['Code'];
        } else {
            throw new BadResponseException;
        }
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
}