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
 *  * File: FullStatusesResponse.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Client;

use Boxberry\Client\Exceptions\BadResponseException;
use Boxberry\Collections\ListProductsCollection;
use Boxberry\Collections\ListStatusesCollection;

/**
 * Class FullStatusesResponse
 * @package Boxberry\Client
 */
class FullStatusesResponse
{
    /**
     * @var ListStatusesCollection
     */
    protected $statuses = null;
    /**
     * @var string
     */
    protected $PD = null;
    /**
     * @var ListProductsCollection
     */
    protected $products = null;

    /**
     * FullStatusesResponse constructor.
     * @param array $data
     * @throws BadResponseException
     */
    public function __construct(array $data)
    {
        if (isset($data['statuses']) && is_array($data['statuses'])) {
            $this->statuses = new ListStatusesCollection($data['statuses']);
        } else {
            throw new BadResponseException;
        }
        if (isset($data['products']) && is_array($data['products'])) {
            $this->products = new ListProductsCollection($data['products']);
        } else {
            throw new BadResponseException;
        }
        if (isset($data['PD'])) {
            $this->PD = $data['PD'];
        } else {
            throw new BadResponseException;
        }
    }

    /**
     * @return ListStatusesCollection
     */
    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * @param ListStatusesCollection $statuses
     */
    public function setStatuses(ListStatusesCollection $statuses)
    {
        $this->statuses = $statuses;
    }

    /**
     * @return string
     */
    public function getPD()
    {
        return $this->PD;
    }

    /**
     * @param string $PD
     */
    public function setPD($PD)
    {
        $this->PD = $PD;
    }

    /**
     * @return ListProductsCollection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ListProductsCollection $products
     */
    public function setProducts(ListProductsCollection $products)
    {
        $this->products = $products;
    }

}