<?php

/*
Plugin Name: Jobs
Plugin URI: https://www.wp-hacks.com
Description: A queue system for WordPress
Authors: Mohammed Afzal, Abu Zar Hashmi
Version: 1.0.0
Author URI: http://www.wp-hacks.com
*/

if (!function_exists('add_filter')) {
    exit;
}

require_once 'ClassLoader.php';

$classLoader = new Psr4AutoloaderClass;

$classLoader->addNamespace('TBD', dirname(__FILE__) . '/src');

$classLoader->register();
