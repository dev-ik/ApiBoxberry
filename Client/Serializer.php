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
 *  * File: Serializer.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Client;

use Boxberry\Collections\Collection;

/**
 * Класс с единственным методом, преобразующий объект в массив.
 * Class Serializer
 * @package Boxberry\Client
 */
class Serializer
{
    /**
     * Рекурсивный метод, который обходит объект по его гетерам и записывает значения в массив,
     * получая имя из свойства PropNameMap.
     * @param $data
     * @return array
     */
    public function toArray ($data)
    {
        if (is_object($data) && method_exists($data, 'getPropNameMap')) {
            $result = array();
            foreach ($data->getPropNameMap() as $rightName => $ourName) {
                $obj = $data;
                $methodName = 'get' . ucfirst($ourName);

                if (!method_exists($obj, $methodName)) {
                    continue;
                }
                $value = $obj->$methodName();
                if (is_object($value)) {
                    if ($rightName == 'root') {
                        if ($value instanceof Collection) {
                            foreach ($value as $arrayItem)
                            {
                                $result[] = $this->toArray($arrayItem);
                            }
                        } else {
                            $result = $this->toArray($value);
                        }
                    } else {
                        if ($value instanceof Collection) {
                            foreach ($value as $arrayItem)
                            {
                                $result[$rightName][] = $this->toArray($arrayItem);
                            }
                        } else {
                            $result[$rightName] = $this->toArray($value);
                        }
                    }
                } elseif ($value !== null) {
                    $result[$rightName] = $value;
                }
            }
            return $result;
        }
        return $data;
    }
}