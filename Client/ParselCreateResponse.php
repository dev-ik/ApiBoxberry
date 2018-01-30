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
 *  * File: ParselCreateResponse.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Client;

use Boxberry\Client\Exceptions\BadResponseException;

/**
 * Class ParselCreateResponse
 * @package Boxberry\Client
 */
class ParselCreateResponse
{
    /**
     * @var string
     */
    protected $track = null;
    /**
     * @var string
     */
    protected $label = null;

    /**
     * ParselCreateResponse constructor.
     * @param array $data
     * @throws BadResponseException
     */
    public function __construct(array $data)
    {
        if (isset($data['label'])) {
            $this->label = $data['label'];
        } else {
            throw new BadResponseException;
        }
        if (isset($data['track'])) {
            $this->track = $data['track'];
        } else {
            throw new BadResponseException;
        }
    }

    /**
     * @return string
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param string $track
     */
    public function setTrack($track)
    {
        $this->track = $track;
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