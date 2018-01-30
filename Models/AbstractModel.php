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
 *  * File: AbstractModel.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Абстрактная модель
 * Class AbstractModel
 * @package Boxberry\Models
 */
abstract class AbstractModel
{
    /**
     * @var array
     */
    protected $propNameMap = array();
    /**
     * AbstractModel constructor.
     * @param $data
     */
    public function __construct($data = null)
    {
        if ($data === null) {
            return;
        }
        if (isset($data[0]) && is_array($data[0])) {
            $data = $data[0];
        }
        foreach ($data as $propertyName => $propertyValue)
        {
            $methodName = 'set'.$propertyName;
            if (method_exists($this, $methodName)) {
                $this->$methodName($propertyValue);
            }
        }
    }

    /**
     * @return array
     */
    public function getPropNameMap()
    {
        return $this->propNameMap;
    }
}