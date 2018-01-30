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
 *  * File: WidgetSettingsRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

/**
 * Class WidgetSettingsRequest
 * @package Boxberry\Requests
 */
class WidgetSettingsRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\Models\WidgetSettings';

    protected $type = 3;
    /**
     * @var array
     */
    protected $propNameMap = array(
        'Prepaid' => 'prepaid',
        'CityCode'  => 'CityCode',
        'Code' => 'Code',
        'Hide_delivery_day' => 'hide_delivery_day',
        'Add_delivery_day' => 'add_delivery_day',
        'type'=>'type'
    );
	
	 /**
     * @return bool
     */
    function checkRequiredFields()
    {
        return true;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }
}