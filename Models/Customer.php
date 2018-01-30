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
 *  * File: Customer.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Class Customer
 * @package Boxberry\Models
 */
class Customer extends AbstractModel
{
    /**
     * @var array
     */
    protected $propNameMap = array(
        'fio' => 'fio',
        'phone' => 'phone',
        'phone2' => 'phone2',
        'email' => 'email',
        'name' => 'name',
        'address' => 'address',
        'inn ' => 'inn',
        'kpp' => 'kpp',
        'r_s' => 'rS',
        'bank' => 'bank',
        'kor_s' => 'korS',
        'bik' => 'bik'
    );
    /**
     * @var string
     */
    protected $fio = null;
    /**
     * @var string
     */
    protected $phone = null;
    /**
     * @var string
     */
    protected $phone2 = null;
    /**
     * @var string
     */
    protected $email = null;
    /**
     * @var string
     */
    protected $name = null;
    /**
     * @var string
     */
    protected $address = null;
    /**
     * @var string
     */
    protected $inn = null;
    /**
     * @var string
     */
    protected $kpp = null;
    /**
     * @var string
     */
    protected $rS = null;
    /**
     * @var string
     */
    protected $bank = null;
    /**
     * @var string
     */
    protected $korS = null;
    /**
     * @var string
     */
    protected $bik = null;

    /**
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * @param string $fio
     */
    public function setFio($fio)
    {
        $this->fio = $fio;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * @param string $phone2
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * @param string $inn
     */
    public function setInn($inn)
    {
        $this->inn = $inn;
    }

    /**
     * @return string
     */
    public function getKpp()
    {
        return $this->kpp;
    }

    /**
     * @param string $kpp
     */
    public function setKpp($kpp)
    {
        $this->kpp = $kpp;
    }

    /**
     * @return string
     */
    public function getRS()
    {
        return $this->rS;
    }

    /**
     * @param string $rS
     */
    public function setRS($rS)
    {
        $this->rS = $rS;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param string $bank
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return string
     */
    public function getKorS()
    {
        return $this->korS;
    }

    /**
     * @param string $korS
     */
    public function setKorS($korS)
    {
        $this->korS = $korS;
    }

    /**
     * @return string
     */
    public function getBik()
    {
        return $this->bik;
    }

    /**
     * @param string $bik
     */
    public function setBik($bik)
    {
        $this->bik = $bik;
    }
}