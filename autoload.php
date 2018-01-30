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
 *  * File: autoload.php
 *  * Created: 26.07.2016
 *  *
 */

spl_autoload_register(function($class) {
    $classPath = explode('\\', $class);

    if ($classPath[0] != 'Boxberry') {
        return;
    }

    $classPath = array_slice($classPath, 1, count($classPath));
    $filePath = dirname(__FILE__) . '/' . implode('/', $classPath) . '.php';
	
    if (file_exists($filePath)) {
        require_once($filePath);
    }
});