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
 *  * File: KeyIntegrationRequest.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Requests;

/**
 * Class KeyIntegrationRequest
 * @package Boxberry\Requests
 */
class GetKeyIntegrationRequest extends Request
{
    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\Models\KeyIntegration';
    /**
     * @var array
     */
    protected $propNameMap = array(
        'Token' => 'token'
    );
    /**
     * @var string
     */
    protected $token = null;

    /**
     * @return string
     */
   	
	public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
	/**
     * @return bool
     */
    function checkRequiredFields()
    {
        if ($this->token === null) {
            return false;
        }
        return true;
    }
}