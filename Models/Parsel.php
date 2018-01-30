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
 *  * File: Parsel.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

use Boxberry\Collections\Items;

/**
 * Class Parsel
 * @package Boxberry\Models
 */
class Parsel extends ParselStory
{
    /**
     * @var array
     */
    protected $propNameMap = array(
        'order_id' => 'orderId',
        'updateByTrack' => 'updateByTrack',
        'PalletNumber' => 'palletNumber',
        'barCode' => 'barCode',
        'price' => 'price',
        'payment_sum' => 'paymentSum',
        'delivery_sum' => 'deliverySum',
        'vid' => 'vid',
        'kurdost' => 'courierDelivery',
        'customer' => 'customer',
        'items' => 'items',
        'weights' => 'weights',
        'shop' => 'shop'
    );
    /**
     * @var string
     */
    protected $imId = null;
    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var string
     */
    protected $orderId = null;
    /**
     * @var string
     */
    protected $palletNumber = null;
    /**
     * @var string
     */
    protected $barCode = null;
    /**
     * @var string
     */
    protected $price = null;
    /**
     * @var string
     */
    protected $paymentSum = null;
    /**
     * @var string
     */
    protected $deliverySum = null;
    /**
     * @var string
     */
    protected $vid = null;
    /**
     * @var Items
     */
    protected $items = null;
    /**
     * @var Customer
     */
    protected $customer = null;
    /**
     * @var CourierDelivery
     */
    protected $courierDelivery = null;
    /**
     * @var array
     */
    protected $weights = null;
    /**
     * @var array
     */
    protected $shop = null;

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
    public function getImId()
    {
        return $this->imId;
    }

    /**
     * @param null $imId
     */
    public function setImId($imId)
    {
        $this->imId = $imId;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param null $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return CourierDelivery
     */
    public function getCourierDelivery()
    {
        return $this->courierDelivery;
    }

    /**
     * @param CourierDelivery $courierDelivery
     */
    public function setCourierDelivery(CourierDelivery $courierDelivery)
    {
        $this->courierDelivery = $courierDelivery;
    }

    /**
     * @return array
     */
    public function getWeights()
    {
        return $this->weights;
    }

    /**
     * @param $weights
     */
    public function setWeights($weights)
    {
        $this->weights = $weights;
    }

    /**
     * @return array
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * @param $shop
     */
    public function setShop($shop)
    {
        $this->shop = $shop;
    }

    /**
     * @return string
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * @param $vid
     */
    public function setVid($vid)
    {
        $this->vid = $vid;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getPalletNumber()
    {
        return $this->palletNumber;
    }

    /**
     * @param $palletNumber
     */
    public function setPalletNumber($palletNumber)
    {
        $this->palletNumber = $palletNumber;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param null $barCode
     */
    public function setBarCode($barCode)
    {
        $this->barCode = $barCode;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPaymentSum()
    {
        return $this->paymentSum;
    }

    /**
     * @param $paymentSum
     */
    public function setPaymentSum($paymentSum)
    {
        $this->paymentSum = $paymentSum;
    }

    /**
     * @return string
     */
    public function getDeliverySum()
    {
        return $this->deliverySum;
    }

    /**
     * @param $deliverySum
     */
    public function setDeliverySum($deliverySum)
    {
        $this->deliverySum = $deliverySum;
    }

    /**
     * @return Items
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $items
     */
    public function setItems($items)
    {
        if ($items instanceof Items) {
            $this->items = $items;
        } else {
            $this->items = new Items($items);
        }
        $this->weights['weight'] = 0;
        foreach($items as $item) {
            if ($item->getWeight() !== null) {
                $this->weights['weight'] += $item->getWeight();
            }
        }
    }
}