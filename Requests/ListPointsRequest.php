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
 *  * File: ListPointsRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

/**
 * Class ListPointsMethod
 * @package Boxberry\Methods
 */
class ListPointsRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\\Collections\\ListPointsCollection';
    /**
     * @var array
     */
    protected $propNameMap = array(
        'CityCode' => 'cityCode',
        'prepaid'  => 'prepaid'
    );
    /**
     * @var string
     */
    protected $cityCode = null;
    /**
     * @var int
     */
    protected $prepaid = 1;
    /**
     * @return null
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }
    /**
     * @param string $cityCode
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
    }
    /**
     * @return int
     */
    public function getPrepaid()
    {
        return $this->prepaid;
    }
    /**
     * @param int $prepaid
     */
    public function setPrepaid($prepaid)
    {
        $this->prepaid = $prepaid;
    }

    /**
     * @return bool
     */
    function checkRequiredFields()
    {
        return true;
    }
}