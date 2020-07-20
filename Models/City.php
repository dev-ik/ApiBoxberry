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
 *  * File: City.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Class City
 * @package Boxberry\Models
 */
class City extends AbstractModel
{
    /**
     * @var string $name
     */
    protected $name = null;
    /**
     * @var string $name
     */
    protected $code = null;

    /**
     * @var int
     */
    protected $receptionLaP;

    /**
     * @var int
     */
    protected $deliveryLaP;

    /**
     * @var int
     */
    protected $reception;

    /**
     * @var int
     */
    protected $foreignReceptionReturns;

    /**
     * @var int
     */
    protected $terminal;

    /**
     * @var string
     */
    protected $kladr;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $uniqName;

    /**
     * @var string
     */
    protected $district;

    /**
     * @var string
     */
    protected $prefix;

    /**
     * @var int
     */
    protected $courierReception;

    /**
     * @var int
     */
    protected $courierDelivery;

    /**
     * @var
     */
    protected $pickupPoint;

    /**
     * @return string
     */
    public function getName()
    {
        return mb_strtoupper($this->name);
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $code
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }
}