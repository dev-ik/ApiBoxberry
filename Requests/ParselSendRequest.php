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
 *  * File: ParselSendRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

use Boxberry\Collections\Exceptions\BadValueException;
use Boxberry\Collections\ImgIdsCollection;

/**
 * Class ParselSendRequest
 * @package Boxberry\Requests
 */
class ParselSendRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\\Client\\ParselCheckResponse';
    /**
     * @var array
     */
    protected $propNameMap = array(
        'ImIds' => 'imgIdsList'
    );
    /**
     * @var ImgIdsCollection
     */
    protected $imgIdsList = null;

    /**
     * @return string
     */
    public function getImgIdsList()
    {
        $array = iterator_to_array($this->imgIdsList, false);
        return implode(',', $array);
    }

    /**
     * @param $imgIdsList
     * @throws BadValueException
     */
    public function setImgIdsList($imgIdsList)
    {
        if ($imgIdsList instanceof ImgIdsCollection) {
            $this->imgIdsList = $imgIdsList;
        } elseif (is_array($imgIdsList)) {
            $this->imgIdsList = new ImgIdsCollection($imgIdsList);
        } else {
            throw new BadValueException;
        }
    }

    /**
     * @return bool
     */
    function checkRequiredFields()
    {
        if ($this->imgIdsList === null || empty($this->imgIdsList)) {
            return false;
        }
        return true;
    }
}