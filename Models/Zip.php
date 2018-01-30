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
 *  * File: Zip.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Class Zip
 * @package Boxberry\Models
 */
class Zip extends ShortZip
{
    /**
     * @var string
     */
    protected $zip = null;
    /**
     * @var string
     */
    protected $city = null;
    /**
     * @var string
     */
    protected $region = null;
    /**
     * @var string
     */
    protected $area = null;
    /**
     * @var string
     */
    protected $zoneExpressDelivery = null;

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getZoneExpressDelivery()
    {
        return $this->zoneExpressDelivery;
    }

    /**
     * @param string $zoneExpressDelivery
     */
    public function setZoneExpressDelivery($zoneExpressDelivery)
    {
        $this->zoneExpressDelivery = $zoneExpressDelivery;
    }

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param string $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
}