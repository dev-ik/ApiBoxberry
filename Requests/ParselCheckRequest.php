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
 *  * File: ParselCheckRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

/**
 * Class ParselCheckRequest
 * @package Boxberry\Requests
 */
class ParselCheckRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\\Client\\ParselCheckResponse';
    /**
     * @var array
     */
    protected $propNameMap = array(
        'ImId' => 'imId'
    );

    /**
     * @var null
     */
    protected $imId = null;

    /**
     * @return null
     */
    public function getImId()
    {
        return $this->imId;
    }

    /**
     * @param null $imId
     */
    public function setImId($imId)
    {
        $this->imId = $imId;
    }

    /**
     * @return bool
     */
    function checkRequiredFields()
    {
        if ($this->getImId() === null) {
            return false;
        }
        return true;
    }

}