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
 *  * File: ShortZip.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;


/**
 * Class ShortZip
 * @package Boxberry\Models
 */
class ShortZip extends AbstractModel
{
    /**
     * @var string
     */
    protected $expressDelivery = null;
    /**
     * @var string
     */
    protected $zoneExpressDelivery = null;

    /**
     * @return string
     */
    public function getExpressDelivery()
    {
        return $this->expressDelivery;
    }

    /**
     * @param string $expressDelivery
     */
    public function setExpressDelivery($expressDelivery)
    {
        $this->expressDelivery = $expressDelivery;
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

}