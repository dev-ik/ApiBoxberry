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
 *  * File: ParselCheckResponse.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Client;

use Boxberry\Client\Exceptions\BadResponseException;

/**
 * Class ParselCheckResponse
 * @package Boxberry\Client
 */
class ParselCheckResponse
{
    /**
     * @var string
     */
    protected $label = null;

    /**
     * ParselCheckResponse constructor.
     * @param $data
     * @throws BadResponseException
     */
    public function __construct($data)
    {
        if (isset($data['label'])) {
            $this->label = $data['label'];
        } else {
            throw new BadResponseException;
        }
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }
}