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
 *  * File: ParselStoryRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

use Boxberry\Collections\Exceptions\BadValueException;

/**
 * Class ParselStoryRequest
 * @package Boxberry\Requests
 */
class ParselStoryRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\\Collections\\ListStoriesCollection';

    /**
     * @var array
     */
    protected $propNameMap = array(
        'from' => 'from',
        'to'   => 'to'
    );

    /**
     * @var string
     */
    protected $from = null;

    /**
     * @var string
     */
    protected $to = null;

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param $from
     * @throws BadValueException
     */
    public function setFrom($from)
    {
        $timeUnix = strtotime($from);
        if ($timeUnix === false) {
            throw new BadValueException;
        }
        $this->from = date('Ymd');
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param $to
     * @throws BadValueException
     */
    public function setTo($to)
    {
        $timeUnix = strtotime($to);
        if ($timeUnix === false) {
            throw new BadValueException;
        }
        $this->from = date('Ymd');
    }

    /**
     * @return bool
     */
    function checkRequiredFields()
    {
        return true;
    }
}