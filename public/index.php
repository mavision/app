<?php

use Mavision\Framework\Foundation\Application;

/**
 * Mavision - A PHP Framework For Web Developers
 *
 * @package  Mavision
 * @author   Marwen Hlaoui <marwenhlaoui@gmail.com>
 */
 

/*
 * Start application time
 */
define('APP_START', microtime(true));

/*
 * Include composer auto loader
 */
require __DIR__.'/../vendor/autoload.php';

/*
 * Run the application
 */
$app = new Application(
	realpath(__DIR__.'/../')
);

die('Mavision ! ');

