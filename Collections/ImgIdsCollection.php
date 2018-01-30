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
 *  * File: ImgIdsCollection.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Collections;


/**
 * Class ImgIdsCollection
 * @package Boxberry\Collections
 */
class ImgIdsCollection extends Collection
{
    /**
     * ImgIdsCollection constructor.
     * @param $data
     */
    public function __construct($data = null)
    {
        if ($data === null) {
            return;
        }
        if (!is_array($data)) {
            $data = explode(',', $data);
        }
        foreach ($data as $key => $value)
        {
            $this->offsetSet($key, $value);
        }
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->_container[] = $value;
        } else {
            $this->_container[$offset] = $value;
        }
    }

}