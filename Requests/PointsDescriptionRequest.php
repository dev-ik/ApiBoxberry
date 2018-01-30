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
 *  * File: PointsDescriptionRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

/**
 * Class PointsDescriptionRequest
 * @package Boxberry\Requests
 */
class PointsDescriptionRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\\Models\\Point';
    /**
     * @var array
     */
    protected $propNameMap = array(
        'code' => 'code',
        'photo' => 'photo'
    );
    /**
     * @var string
     */
    protected $code = null;
    /**
     * @var int
     */
    protected $photo = 0;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param int $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return bool
     */
    function checkRequiredFields()
    {
        if ($this->code === null) {
           return false;
        }
        return true;
    }
}