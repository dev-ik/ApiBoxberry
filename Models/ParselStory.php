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
 *  * File: ParselStory.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Class ParselStory
 * @package Boxberry\Models
 */
class ParselStory extends AbstractModel
{
    /**
     * @var string
     */
    protected $track = null;
    /**
     * @var string
     */
    protected $label = null;
    /**
     * @var string
     */
    protected $date = null;
    /**
     * @var bool
     */
    protected $send = false;
    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * @var string
     */
    protected $imId = null;

    /**
     * @var null
     */
    protected $updateByTrack = null;

    /**
     * @return string
     */
    public function getUpdateByTrack()
    {
        return $this->updateByTrack;
    }

    /**
     * @param null $imId
     */
    public function setUpdateByTrack($updateByTrack)
    {
        $this->updateByTrack = $updateByTrack;
    }
    /**
     * @return string
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param string $track
     */
    public function setTrack($track)
    {
        $this->track = $track;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return boolean
     */
    public function isSend()
    {
        return $this->send;
    }

    /**
     * @param boolean $send
     */
    public function setSend($send)
    {
        $this->send = $send;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return string
     */
    public function getImId()
    {
        return $this->imId;
    }

    /**
     * @param string $imId
     */
    public function setImId($imId)
    {
        $this->imId = $imId;
    }
}