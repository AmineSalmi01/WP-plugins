<?php

/*
Plugin Name: Duplicate Post
Plugin URI: https://wordpress.com
Description: Permet de dupliquer le articles de WordPress !
Version: 0.1
Author: Amine
Author URI: https://wordpress.com
*/

use Pentiminax\DuplicatePost\PentiminaxPlugin;

if ( ! defined( 'ABSPATH' ) )
	exit;

define('PENTIMINAX_PLUGIN_DIR', plugin_dir_path(__FILE__));

require PENTIMINAX_PLUGIN_DIR . 'vendor/autoload.php';

$plugin = new PentiminaxPlugin(__FILE__);