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
 *  * File: Product.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;


/**
 * Class Product
 * @package Boxberry\Models
 */
class Product extends AbstractModel
{
    /**
     * @var string
     */
    protected $name = null;
    /**
     * @var string
     */
    protected $give = null;
    /**
     * @var string
     */
    protected $return = null;

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
    public function getGive()
    {
        return $this->give;
    }

    /**
     * @param string $give
     */
    public function setGive($give)
    {
        $this->give = $give;
    }

    /**
     * @return string
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param string $return
     */
    public function setReturn($return)
    {
        $this->return = $return;
    }

}