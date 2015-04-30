<?php

// Define path to application directory
defined('LIBRARY_PATH')
    || define('LIBRARY_PATH', realpath(dirname(__FILE__) . '/../library'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'testing'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(LIBRARY_PATH),
    realpath(LIBRARY_PATH . '/../vendor/zendframework/zendframework1/library'),
    realpath(LIBRARY_PATH . '/../vendor/phpunit/phpunit')
)));

require_once 'Zend/Loader/Autoloader.php';
require_once realpath(LIBRARY_PATH . '/../vendor/autoload.php');
$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace('Bdigital_');
