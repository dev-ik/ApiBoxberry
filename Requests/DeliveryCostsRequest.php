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
 *  * File: DeliveryCostsRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

/**
 * Class DeliveryCostsRequest
 * @package Boxberry\Requests
 */
class DeliveryCostsRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\\Models\\DeliveryCosts';

    /**
     * @var array
     */
    protected $propNameMap = array(
        'weight' => 'weight',
        'target'  => 'target',
        'ordersum' => 'ordersum',
        'deliverysum' => 'deliverysum',
        'targetstart' => 'targetstart',
        'height' => 'height',
        'width' => 'width',
        'depth' => 'depth',
        'zip' => 'zip',
        'paysum' => 'paysum',
        'sucrh' => 'sucrh',
        'version' => 'version',
        'cms' => 'cms',
        'url' => 'url'
    );
    /**
     * @var string
     */
    protected $weight = null;
    /**
     * @var string
     */
    protected $target = null;
    /**
     * @var string
     */
    protected $ordersum = null;
    /**
     * @var string
     */
    protected $deliverysum = null;
    /**
     * @var string
     */
    protected $targetstart = null;
    /**
     * @var string
     */
    protected $height = null;
    /**
     * @var string
     */
    protected $width = null;
    /**
     * @var string
     */
    protected $depth = null;
    /**
     * @var string
     */
    protected $zip = null;
    /**
     * @var string
     */
    protected $paysum = null;
    /**
     * @var int
     */
    protected $sucrh = 0;
    /**
     * @var string
     */
    protected $version = null;
    /**
     * @var string
     */
    protected $cms = null;
    /**
     * @var string
     */
    protected $url = null;

    /**
     * @return int
     */
    public function getsucrh()
    {
        return $this->sucrh;
    }

    /**
     * @param int $sucrh
     */
    public function setsucrh($sucrh)
    {
        $this->sucrh = $sucrh;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getCms()
    {
        return $this->cms;
    }

    /**
     * @param string $cms
     */
    public function setCms($cms)
    {
        $this->cms = $cms;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return string
     */
    public function getOrdersum()
    {
        return $this->ordersum;
    }

    /**
     * @param string $ordersum
     */
    public function setOrdersum($ordersum)
    {
        $this->ordersum = $ordersum;
    }

    /**
     * @return string
     */
    public function getDeliverysum()
    {
        return $this->deliverysum;
    }

    /**
     * @param string $deliverysum
     */
    public function setDeliverysum($deliverysum)
    {
        $this->deliverysum = $deliverysum;
    }

    /**
     * @return string
     */
    public function getTargetstart()
    {
        return $this->targetstart;
    }

    /**
     * @param string $targetstart
     */
    public function setTargetstart($targetstart)
    {
        $this->targetstart = $targetstart;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param string $depth
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getPaysum()
    {
        return $this->paysum;
    }

    /**
     * @param string $paysum
     */
    public function setPaysum($paysum)
    {
        $this->paysum = $paysum;
    }

    /**
     * @return bool
     */
    function checkRequiredFields()
    {      
		if ($this->getWeight() === null || ($this->getTarget() === null && $this->getZip() === null)) {
            return false;
        }
        return true;
    }
}