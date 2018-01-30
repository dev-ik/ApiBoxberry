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
 *  * File: ZipCheckRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

/**
 * Class ZipCheckRequest
 * @package Boxberry\Requests
 */
class ZipCheckRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\Models\ShortZip';
    /**
     * @var array
     */
    protected $propNameMap = array(
        'Zip' => 'zip'
    );
    /**
     * @var string
     */
    protected $zip = null;

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
     * @return bool
     */
    function checkRequiredFields()
    {
        if ($this->zip === null) {
            return false;
        }
        return true;
    }
}