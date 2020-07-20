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
 *  * File: DeliveryCosts.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

use Boxberry\Client\Exceptions\BadResponseException;

/**
 * Class DeliveryCosts
 * @package Boxberry\Models
 */
class DeliveryCosts extends AbstractModel
{
    /**
     * @var string
     */
    protected $price = null;

    /**
     * @var string
     */
    protected $price_base = null;

    /**
     * @var string
     */
    protected $price_service = null;

    /**
     * @var string
     */
    protected $delivery_period = null;

    /**
     * DeliveryCosts constructor.
     * @param array $data
     * @throws BadResponseException
     */
    public function __construct(array $data)
    {
        if ((float)$data['price_base'] <=0 ) {
            throw new BadResponseException('Доставка до выбранного места невозможна');
        }
        $this->price = $data['price'];
        $this->price_base = $data['price_base'];
        $this->price_service = $data['price_service'];
        $this->delivery_period = $data['delivery_period'];
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPriceService()
    {
        return $this->price_service;
    }

    /**
     * @param string $price_service
     */
    public function setPriceService($price_service)
    {
        $this->price_service = $price_service;
    }

    /**
     * @return string
     */
    public function getPriceBase()
    {
        return $this->price_base;
    }

    /**
     * @param string $price_base
     * @throws BadResponseException
     */
    public function setPriceBase($price_base)
    {
        if ((float)$price_base <=0 ) {
            throw new BadResponseException('Доставка до выбранного места невозможна');
        }
        $this->price_base = $price_base;
    }

    /**
     * @return string
     */
    public function getDeliveryPeriod()
    {
        return $this->delivery_period;
    }

    /**
     * @param string $delivery_period
     */
    public function setDeliveryPeriod($delivery_period)
    {
        $this->delivery_period = $delivery_period;
    }
}