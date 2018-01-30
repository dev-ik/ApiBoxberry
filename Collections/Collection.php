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
 *  * File: Collection.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Collections;

/**
 * Абстрактная коллекция, служащая базой.
 * Class Collection
 * @package Boxberry\Collections
 */
abstract class Collection implements \ArrayAccess, \Countable, \Iterator, \Serializable
{
    /**
     * @var array
     */
    protected $_container = array();
    /**
     * @var int
     */
    protected $_position = 0;

    /**
     * Collection constructor.
     * @param $data
     */
    abstract function __construct($data);

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->_container[$offset]);
    }

    /**
     * @param mixed $offset
     * @return null
     */
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->_container[$offset] : null;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->_container[$offset]);
    }

    /**
     *
     */
    public function rewind()
    {
        $this->_position = 0;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->_container[$this->_position];
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->_position;
    }

    /**
     *
     */
    public function next()
    {
        ++$this->_position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->_container[$this->_position]);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->_container);
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize($this->_container);
    }

    /**
     * @param string $data
     */
    public function unserialize($data)
    {
        $this->_container = unserialize($data);
    }

    /**
     * @param array|null $data
     * @return array
     */
    public function __invoke(array $data = null)
    {
        if (!is_null($data)) {
            $this->_container = $data;
        }
        return $this->_container;
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this);
    }
}