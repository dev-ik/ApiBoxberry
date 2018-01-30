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
 *  * File: CourierDelivery.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Class CourierDelivery
 * @package Boxberry\Models
 */
class CourierDelivery extends CourierDeliveryShort
{
    /**
     * @var array
     */
    protected $propNameMap = array(
        'index' => 'index',
        'citi' => 'city',
        'addressp' => 'addressp',
        'timesfrom1' => 'timesfrom1',
        'timesfrom2' => 'timesfrom2',
        'timesto1' => 'timesto1',
        'timesto2 ' => 'timesto2',
        'timep' => 'timep',
        'commentk' => 'commentk'
    );
    /**
     * @var string
     */
    protected $index = null;
    /**
     * @var string
     */
    protected $city = null;
    /**
     * @var string
     */
    protected $addressp = null;
    /**
     * @var string
     */
    protected $timesfrom1 = null;
    /**
     * @var string
     */
    protected $timesto1 = null;
    /**
     * @var string
     */
    protected $timesfrom2 = null;
    /**
     * @var string
     */
    protected $timesto2 = null;
    /**
     * @var string
     */
    protected $timep = null;
    /**
     * @var string
     */
    protected $commentk = null;

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param string $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
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

    /**
     * @return string
     */
    public function getAddressp()
    {
        return $this->addressp;
    }

    /**
     * @param string $addressp
     */
    public function setAddressp($addressp)
    {
        $this->addressp = $addressp;
    }

    /**
     * @return string
     */
    public function getTimesfrom1()
    {
        return $this->timesfrom1;
    }

    /**
     * @param string $timesfrom1
     */
    public function setTimesfrom1($timesfrom1)
    {
        $this->timesfrom1 = $timesfrom1;
    }

    /**
     * @return string
     */
    public function getTimesto1()
    {
        return $this->timesto1;
    }

    /**
     * @param string $timesto1
     */
    public function setTimesto1($timesto1)
    {
        $this->timesto1 = $timesto1;
    }

    /**
     * @return string
     */
    public function getTimesfrom2()
    {
        return $this->timesfrom2;
    }

    /**
     * @param string $timesfrom2
     */
    public function setTimesfrom2($timesfrom2)
    {
        $this->timesfrom2 = $timesfrom2;
    }

    /**
     * @return string
     */
    public function getTimesto2()
    {
        return $this->timesto2;
    }

    /**
     * @param string $timesto2
     */
    public function setTimesto2($timesto2)
    {
        $this->timesto2 = $timesto2;
    }

    /**
     * @return string
     */
    public function getTimep()
    {
        return $this->timep;
    }

    /**
     * @param string $timep
     */
    public function setTimep($timep)
    {
        $this->timep = $timep;
    }

    /**
     * @return string
     */
    public function getCommentk()
    {
        return $this->commentk;
    }

    /**
     * @param string $commentk
     */
    public function setCommentk($commentk)
    {
        $this->commentk = $commentk;
    }
}