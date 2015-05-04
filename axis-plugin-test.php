<?php
/**
 * Plugin Name: Axis Plugin Test
 * Description: Axis Framework testing plugin for developers.
 * Plugin URI: https://github.com/chwnam/axis-plugin.git
 * Version: 1.0
 * Author: Changwoo Nam
 * Author URI: http://changwoo.pe.kr
 */

define( 'AXIS_PLUGIN_TEST_ROOT' , dirname( __FILE__ ) );
define( 'AXIS_ENABLE_DUMP_PRE', TRUE );

/** @noinspection PhpIncludeInspection */
require_once( AXIS_PLUGIN_TEST_ROOT . '/../axis-framework/axis-framework.php' );

$bootstrap = new axis_framework\includes\bootstraps\Bootstrap();
$bootstrap->auto_discover_and_run( 'axis_plugin_test\bootstraps', __FILE__ );