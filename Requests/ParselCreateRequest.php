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
 *  * File: ParselCreateRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

use Boxberry\Models\Parsel;

/**
 * Class ParselCreateRequest
 * @package Boxberry\Requests
 */
class ParselCreateRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\\Client\\ParselCreateResponse';
    /**
     * @var array
     */
    protected $propNameMap = array(
        'root' => 'parsel'
    );
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var Parsel
     */
    protected $parsel = null;

    /**
     * @return Parsel
     */
    public function getParsel()
    {
        return $this->parsel;
    }
    /**
     * @param Parsel $parsel
     */
    public function setParsel(Parsel $parsel)
    {
        $this->parsel = $parsel;
    }

    /**
     * @return bool
     */
    function checkRequiredFields()
    {
        if ($this->getParsel() === null) {
            return false;
        }
        return true;
    }
}