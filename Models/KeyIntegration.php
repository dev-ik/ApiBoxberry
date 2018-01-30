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
 *  * File: KeyIntegration.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;


/**
 * Class KeyIntegration
 * @package Boxberry\Models
 */
class KeyIntegration extends AbstractModel
{
    /**
     * @var string
     */
    protected $key = null;
		public function __construct(array $data)    {        $this->key = $data['key'];		parent::__construct();    }
    
    /**
     * @return string
     */
    public function getWidgetKey()
    {
        return $this->key;
    }

    /**
     * @param string $code
     */
    public function setWidgetKey($key)
    {
        $this->key = $key;
    }

}