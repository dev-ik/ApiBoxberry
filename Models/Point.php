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
 *  * File: Point.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Class Point
 * @package Boxberry\Models
 */
class Point extends  ShortPoint
{
    /**
     * @var
     */
    protected $code = null;
    /**
     * @var
     */
    protected $name = null;
    /**
     * @var
     */
    protected $address = null;
    /**
     * @var
     */
    protected $phone = null;
    /**
     * @var
     */
    protected $tripDescription = null;
    /**
     * @var
     */
    protected $deliveryPeriod = null;
    /**
     * @var
     */
    protected $cityCode = null;
    /**
     * @var
     */
    protected $cityName = null;
    /**
     * @var
     */
    protected $tarrifZone = null;
    /**
     * @var
     */
    protected $settlement = null;
    /**
     * @var
     */
    protected $area = null;
    /**
     * @var
     */
    protected $country = null;
    /**
     * @var
     */
    protected $gps = null;
    /**
     * @var
     */
    protected $onlyPrepaidOrders = null;
    /**
     * @var
     */
    protected $addressReduce = null;
    /**
     * @var
     */
    protected $acquiring = null;
    /**
     * @var
     */
    protected $digitalSignature = null;
    /**
     * @var
     */
    protected $typeOfOffice = null;
    /**
     * @var
     */
    protected $nalKD = null;
    /**
     * @var
     */
    protected $metro = null;
    /**
     * @var
     */
    protected $workSchedule = null;
    /**
     * @var
     */
    protected $workMoBegin = null;
    /**
     * @var
     */
    protected $workMoEnd = null;
    /**
     * @var
     */
    protected $workTuBegin = null;
    /**
     * @var
     */
    protected $workTuEnd = null;
    /**
     * @var
     */
    protected $workWeBegin = null;
    /**
     * @var
     */
    protected $workWeEnd = null;
    /**
     * @var
     */
    protected $workThBegin = null;
    /**
     * @var
     */
    protected $workThEnd = null;
    /**
     * @var
     */
    protected $workFrBegin = null;
    /**
     * @var
     */
    protected $workFrEnd = null;
    /**
     * @var
     */
    protected $workSaBegin = null;
    /**
     * @var
     */
    protected $workSaEnd = null;
    /**
     * @var
     */
    protected $workSuBegin = null;
    /**
     * @var
     */
    protected $workSuEnd = null;
    /**
     * @var
     */
    protected $lunchMoBegin = null;
    /**
     * @var
     */
    protected $lunchMoEnd = null;
    /**
     * @var
     */
    protected $lunchTuBegin = null;
    /**
     * @var
     */
    protected $lunchTuEnd = null;
    /**
     * @var
     */
    protected $lunchWeBegin = null;
    /**
     * @var
     */
    protected $lunchWeEnd = null;
    /**
     * @var
     */
    protected $lunchThBegin = null;
    /**
     * @var
     */
    protected $lunchThEnd = null;
    /**
     * @var
     */
    protected $lunchFrBegin = null;
    /**
     * @var
     */
    protected $lunchFrEnd = null;
    /**
     * @var
     */
    protected $lunchSaBegin = null;
    /**
     * @var
     */
    protected $lunchSaEnd = null;
    /**
     * @var
     */
    protected $lunchSuBegin = null;
    /**
     * @var
     */
    protected $lunchSuEnd = null;
    /**
     * @var
     */
    protected $photos = null;
    /**
     * @var
     */
    protected $terminalCode = null;
    /**
     * @var
     */
    protected $terminalName = null;
    /**
     * @var
     */
    protected $terminalOrganization = null;
    /**
     * @var
     */
    protected $terminalCityCode = null;
    /**
     * @var
     */
    protected $terminalCityName = null;
    /**
     * @var
     */
    protected $terminalAddress = null;
    /**
     * @var
     */
    protected $terminalPhone = null;
    /**
     * @var
     */
    protected $reception = null;
    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getTripDescription()
    {
        return $this->tripDescription;
    }

    /**
     * @param mixed $tripDescription
     */
    public function setTripDescription($tripDescription)
    {
        $this->tripDescription = $tripDescription;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPeriod()
    {
        return $this->deliveryPeriod;
    }

    /**
     * @param mixed $deliveryPeriod
     */
    public function setDeliveryPeriod($deliveryPeriod)
    {
        $this->deliveryPeriod = $deliveryPeriod;
    }

    /**
     * @return mixed
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param mixed $cityCode
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return mixed
     */
    public function getTarrifZone()
    {
        return $this->tarrifZone;
    }

    /**
     * @param mixed $tarrifZone
     */
    public function setTarrifZone($tarrifZone)
    {
        $this->tarrifZone = $tarrifZone;
    }

    /**
     * @return mixed
     */
    public function getSettlement()
    {
        return $this->settlement;
    }

    /**
     * @param mixed $settlement
     */
    public function setSettlement($settlement)
    {
        $this->settlement = $settlement;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getGps()
    {
        return $this->gps;
    }

    /**
     * @param mixed $gps
     */
    public function setGps($gps)
    {
        $this->gps = $gps;
    }

    /**
     * @return mixed
     */
    public function getOnlyPrepaidOrders()
    {
        return $this->onlyPrepaidOrders;
    }

    /**
     * @param mixed $onlyPrepaidOrders
     */
    public function setOnlyPrepaidOrders($onlyPrepaidOrders)
    {
        $this->onlyPrepaidOrders = $onlyPrepaidOrders;
    }

    /**
     * @return mixed
     */
    public function getAddressReduce()
    {
        return $this->addressReduce;
    }

    /**
     * @param mixed $addressReduce
     */
    public function setAddressReduce($addressReduce)
    {
        $this->addressReduce = $addressReduce;
    }

    /**
     * @return mixed
     */
    public function getAcquiring()
    {
        return $this->acquiring;
    }

    /**
     * @param mixed $acquiring
     */
    public function setAcquiring($acquiring)
    {
        $this->acquiring = $acquiring;
    }

    /**
     * @return mixed
     */
    public function getDigitalSignature()
    {
        return $this->digitalSignature;
    }

    /**
     * @param mixed $digitalSignature
     */
    public function setDigitalSignature($digitalSignature)
    {
        $this->digitalSignature = $digitalSignature;
    }

    /**
     * @return mixed
     */
    public function getTypeOfOffice()
    {
        return $this->typeOfOffice;
    }

    /**
     * @param mixed $typeOfOffice
     */
    public function setTypeOfOffice($typeOfOffice)
    {
        $this->typeOfOffice = $typeOfOffice;
    }

    /**
     * @return mixed
     */
    public function getNalKD()
    {
        return $this->nalKD;
    }

    /**
     * @param mixed $nalKD
     */
    public function setNalKD($nalKD)
    {
        $this->nalKD = $nalKD;
    }

    /**
     * @return mixed
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * @param mixed $metro
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;
    }

    /**
     * @return mixed
     */
    public function getWorkSchedule()
    {
        return $this->workSchedule;
    }

    /**
     * @param mixed $workSchedule
     */
    public function setWorkSchedule($workSchedule)
    {
        $this->workSchedule = $workSchedule;
    }

    /**
     * @return mixed
     */
    public function getWorkMoBegin()
    {
        return $this->workMoBegin;
    }

    /**
     * @param mixed $workMoBegin
     */
    public function setWorkMoBegin($workMoBegin)
    {
        $this->workMoBegin = $workMoBegin;
    }

    /**
     * @return mixed
     */
    public function getWorkMoEnd()
    {
        return $this->workMoEnd;
    }

    /**
     * @param mixed $workMoEnd
     */
    public function setWorkMoEnd($workMoEnd)
    {
        $this->workMoEnd = $workMoEnd;
    }

    /**
     * @return mixed
     */
    public function getWorkTuBegin()
    {
        return $this->workTuBegin;
    }

    /**
     * @param mixed $workTuBegin
     */
    public function setWorkTuBegin($workTuBegin)
    {
        $this->workTuBegin = $workTuBegin;
    }

    /**
     * @return mixed
     */
    public function getWorkTuEnd()
    {
        return $this->workTuEnd;
    }

    /**
     * @param mixed $workTuEnd
     */
    public function setWorkTuEnd($workTuEnd)
    {
        $this->workTuEnd = $workTuEnd;
    }

    /**
     * @return mixed
     */
    public function getWorkWeBegin()
    {
        return $this->workWeBegin;
    }

    /**
     * @param mixed $workWeBegin
     */
    public function setWorkWeBegin($workWeBegin)
    {
        $this->workWeBegin = $workWeBegin;
    }

    /**
     * @return mixed
     */
    public function getWorkWeEnd()
    {
        return $this->workWeEnd;
    }

    /**
     * @param mixed $workWeEnd
     */
    public function setWorkWeEnd($workWeEnd)
    {
        $this->workWeEnd = $workWeEnd;
    }

    /**
     * @return mixed
     */
    public function getWorkThBegin()
    {
        return $this->workThBegin;
    }

    /**
     * @param mixed $workThBegin
     */
    public function setWorkThBegin($workThBegin)
    {
        $this->workThBegin = $workThBegin;
    }

    /**
     * @return mixed
     */
    public function getWorkThEnd()
    {
        return $this->workThEnd;
    }

    /**
     * @param mixed $workThEnd
     */
    public function setWorkThEnd($workThEnd)
    {
        $this->workThEnd = $workThEnd;
    }

    /**
     * @return mixed
     */
    public function getWorkFrBegin()
    {
        return $this->workFrBegin;
    }

    /**
     * @param mixed $workFrBegin
     */
    public function setWorkFrBegin($workFrBegin)
    {
        $this->workFrBegin = $workFrBegin;
    }

    /**
     * @return mixed
     */
    public function getWorkFrEnd()
    {
        return $this->workFrEnd;
    }

    /**
     * @param mixed $workFrEnd
     */
    public function setWorkFrEnd($workFrEnd)
    {
        $this->workFrEnd = $workFrEnd;
    }

    /**
     * @return mixed
     */
    public function getWorkSaBegin()
    {
        return $this->workSaBegin;
    }

    /**
     * @param mixed $workSaBegin
     */
    public function setWorkSaBegin($workSaBegin)
    {
        $this->workSaBegin = $workSaBegin;
    }

    /**
     * @return mixed
     */
    public function getWorkSaEnd()
    {
        return $this->workSaEnd;
    }

    /**
     * @param mixed $workSaEnd
     */
    public function setWorkSaEnd($workSaEnd)
    {
        $this->workSaEnd = $workSaEnd;
    }

    /**
     * @return mixed
     */
    public function getWorkSuBegin()
    {
        return $this->workSuBegin;
    }

    /**
     * @param mixed $workSuBegin
     */
    public function setWorkSuBegin($workSuBegin)
    {
        $this->workSuBegin = $workSuBegin;
    }

    /**
     * @return mixed
     */
    public function getWorkSuEnd()
    {
        return $this->workSuEnd;
    }

    /**
     * @param mixed $workSuEnd
     */
    public function setWorkSuEnd($workSuEnd)
    {
        $this->workSuEnd = $workSuEnd;
    }

    /**
     * @return mixed
     */
    public function getLunchMoBegin()
    {
        return $this->lunchMoBegin;
    }

    /**
     * @param mixed $lunchMoBegin
     */
    public function setLunchMoBegin($lunchMoBegin)
    {
        $this->lunchMoBegin = $lunchMoBegin;
    }

    /**
     * @return mixed
     */
    public function getLunchMoEnd()
    {
        return $this->lunchMoEnd;
    }

    /**
     * @param mixed $lunchMoEnd
     */
    public function setLunchMoEnd($lunchMoEnd)
    {
        $this->lunchMoEnd = $lunchMoEnd;
    }

    /**
     * @return mixed
     */
    public function getLunchTuBegin()
    {
        return $this->lunchTuBegin;
    }

    /**
     * @param mixed $lunchTuBegin
     */
    public function setLunchTuBegin($lunchTuBegin)
    {
        $this->lunchTuBegin = $lunchTuBegin;
    }

    /**
     * @return mixed
     */
    public function getLunchTuEnd()
    {
        return $this->lunchTuEnd;
    }

    /**
     * @param mixed $lunchTuEnd
     */
    public function setLunchTuEnd($lunchTuEnd)
    {
        $this->lunchTuEnd = $lunchTuEnd;
    }

    /**
     * @return mixed
     */
    public function getLunchWeBegin()
    {
        return $this->lunchWeBegin;
    }

    /**
     * @param mixed $lunchWeBegin
     */
    public function setLunchWeBegin($lunchWeBegin)
    {
        $this->lunchWeBegin = $lunchWeBegin;
    }

    /**
     * @return mixed
     */
    public function getLunchWeEnd()
    {
        return $this->lunchWeEnd;
    }

    /**
     * @param mixed $lunchWeEnd
     */
    public function setLunchWeEnd($lunchWeEnd)
    {
        $this->lunchWeEnd = $lunchWeEnd;
    }

    /**
     * @return mixed
     */
    public function getLunchThBegin()
    {
        return $this->lunchThBegin;
    }

    /**
     * @param mixed $lunchThBegin
     */
    public function setLunchThBegin($lunchThBegin)
    {
        $this->lunchThBegin = $lunchThBegin;
    }

    /**
     * @return mixed
     */
    public function getLunchThEnd()
    {
        return $this->lunchThEnd;
    }

    /**
     * @param mixed $lunchThEnd
     */
    public function setLunchThEnd($lunchThEnd)
    {
        $this->lunchThEnd = $lunchThEnd;
    }

    /**
     * @return mixed
     */
    public function getLunchFrBegin()
    {
        return $this->lunchFrBegin;
    }

    /**
     * @param mixed $lunchFrBegin
     */
    public function setLunchFrBegin($lunchFrBegin)
    {
        $this->lunchFrBegin = $lunchFrBegin;
    }

    /**
     * @return mixed
     */
    public function getLunchFrEnd()
    {
        return $this->lunchFrEnd;
    }

    /**
     * @param mixed $lunchFrEnd
     */
    public function setLunchFrEnd($lunchFrEnd)
    {
        $this->lunchFrEnd = $lunchFrEnd;
    }

    /**
     * @return mixed
     */
    public function getLunchSaBegin()
    {
        return $this->lunchSaBegin;
    }

    /**
     * @param mixed $lunchSaBegin
     */
    public function setLunchSaBegin($lunchSaBegin)
    {
        $this->lunchSaBegin = $lunchSaBegin;
    }

    /**
     * @return mixed
     */
    public function getLunchSaEnd()
    {
        return $this->lunchSaEnd;
    }

    /**
     * @param mixed $lunchSaEnd
     */
    public function setLunchSaEnd($lunchSaEnd)
    {
        $this->lunchSaEnd = $lunchSaEnd;
    }

    /**
     * @return mixed
     */
    public function getLunchSuBegin()
    {
        return $this->lunchSuBegin;
    }

    /**
     * @param mixed $lunchSuBegin
     */
    public function setLunchSuBegin($lunchSuBegin)
    {
        $this->lunchSuBegin = $lunchSuBegin;
    }

    /**
     * @return mixed
     */
    public function getLunchSuEnd()
    {
        return $this->lunchSuEnd;
    }

    /**
     * @param mixed $lunchSuEnd
     */
    public function setLunchSuEnd($lunchSuEnd)
    {
        $this->lunchSuEnd = $lunchSuEnd;
    }

    /**
     * @return mixed
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param mixed $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * @return mixed
     */
    public function getTerminalCode()
    {
        return $this->terminalCode;
    }

    /**
     * @param mixed $terminalCode
     */
    public function setTerminalCode($terminalCode)
    {
        $this->terminalCode = $terminalCode;
    }

    /**
     * @return mixed
     */
    public function getTerminalName()
    {
        return $this->terminalName;
    }

    /**
     * @param mixed $terminalName
     */
    public function setTerminalName($terminalName)
    {
        $this->terminalName = $terminalName;
    }

    /**
     * @return mixed
     */
    public function getTerminalOrganization()
    {
        return $this->terminalOrganization;
    }

    /**
     * @param mixed $terminalOrganization
     */
    public function setTerminalOrganization($terminalOrganization)
    {
        $this->terminalOrganization = $terminalOrganization;
    }

    /**
     * @return mixed
     */
    public function getTerminalCityCode()
    {
        return $this->terminalCityCode;
    }

    /**
     * @param mixed $terminalCityCode
     */
    public function setTerminalCityCode($terminalCityCode)
    {
        $this->terminalCityCode = $terminalCityCode;
    }

    /**
     * @return mixed
     */
    public function getTerminalCityName()
    {
        return $this->terminalCityName;
    }

    /**
     * @param mixed $terminalCityName
     */
    public function setTerminalCityName($terminalCityName)
    {
        $this->terminalCityName = $terminalCityName;
    }

    /**
     * @return mixed
     */
    public function getTerminalAddress()
    {
        return $this->terminalAddress;
    }

    /**
     * @param mixed $terminalAddress
     */
    public function setTerminalAddress($terminalAddress)
    {
        $this->terminalAddress = $terminalAddress;
    }

    /**
     * @return mixed
     */
    public function getTerminalPhone()
    {
        return $this->terminalPhone;
    }

    /**
     * @param mixed $terminalPhone
     */
    public function setTerminalPhone($terminalPhone)
    {
        $this->terminalPhone = $terminalPhone;
    }

    /**
     * @return mixed
     */
    public function getReception()
    {
        return $this->reception;
    }

    /**
     * @param mixed $reception
     */
    public function setReception($reception)
    {
        $this->reception = $reception;
    }
}