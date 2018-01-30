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
 *  * File: Response.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Client;

/**
 * Дефолтный класс ответа HTTP
 * Class Response
 * @package Boxberry\Client
 */
class Response
{
    /**
     * @var array
     */
    protected $_answer = null;

    /**
     * Response constructor.
     * @param array $_answer
     */
    public function __construct(array $_answer)
    {
        $this->_answer = $_answer;
    }

    /**
     * @return array
     */
    public function getAnswer()
    {
        return $this->_answer;
    }
}