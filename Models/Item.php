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
 *  * File: Item.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Class Item
 * @package Boxberry\Models
 */
class Item extends AbstractModel
{
    /**
     * @var array
     */
    protected $propNameMap = array(
        'id' => 'id',
        'name' => 'name',
        'Unitname' => 'unitName',
        'nds' => 'nds',
        'price' => 'price',
        'quantity' => 'quantity'
    );
    /**
     * @var string
     */
    protected $id = null;
    /**
     * @var string
     */
    protected $name = null;
    /**
     * @var string
     */
    protected $unitName = null;
    /**
     * @var string
     */
    protected $nds = null;
    /**
     * @var string
     */
    protected $price = null;
    /**
     * @var string
     */
    protected $quantity = null;
    /**
     * @var string
     */
    protected $weight = null;
    /**
     * @return array
     */
    public function getPropNameMap()
    {
        return $this->propNameMap;
    }

    /**
     * @param array $propNameMap
     */
    public function setPropNameMap($propNameMap)
    {
        $this->propNameMap = $propNameMap;
    }

    /**
     * @return null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param null $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getUnitName()
    {
        return $this->unitName;
    }

    /**
     * @param string $unitName
     */
    public function setUnitName($unitName)
    {
        $this->unitName = $unitName;
    }

    /**
     * @return string
     */
    public function getNds()
    {
        return $this->nds;
    }

    /**
     * @param string $nds
     */
    public function setNds($nds)
    {
        $this->nds = $nds;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}