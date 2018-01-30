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
 *  * File: DeliverCostCollection.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Collections;


use Boxberry\Models\DeliveryCosts;
use Boxberry\Collections\Exceptions\BadValueException;

/**
 * Class DeliverCostCollection
 * @package Boxberry\Collections
 */
class DeliverCostCollection extends Collection
{
    /**
     * DeliverCostIterator constructor.
     * @param array $data
     */
    public function __construct($data)
    {
        if (is_array($data)&&!empty($data)) {
            foreach ($data as $key => $value)
            {
                $this->offsetSet($key, new DeliveryCosts($value));
            }
        }
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     * @throws BadValueException
     */
    public function offsetSet($offset, $value)
    {
        if (!$value instanceof DeliveryCosts) {
            throw new BadValueException();
        }
        if (is_null($offset)) {
            $this->_container[] = $value;
        } else {
            $this->_container[$offset] = $value;
        }
    }
}