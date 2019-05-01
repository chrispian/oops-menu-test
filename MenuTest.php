<?php

/**
 * Plugin Name: Register Menu Test
 *
 * @author Chrispian Burks <chrispian.burks@webdevstudios.com>
 * @since 2019-05-01
 */

$autoload = __DIR__ . '/vendor/autoload.php';

if ( ! is_readable( $autoload ) ) {
	throw new \Exception( "Can't find the class autoloader. Did you run `composer install`?" );
}

require_once $autoload;

$plugin = new \CHB\MenuTest\RegisterMenu();
$plugin->register();


