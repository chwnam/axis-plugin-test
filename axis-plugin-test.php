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
define( 'AXIS_PLUGIN_TEST_MAIN', __FILE__ );

/** @noinspection PhpIncludeInspection */
require_once( WP_PLUGIN_DIR . '/axis-framework/axis-framework.php' );

$dispatch = new axis_framework\contexts\Dispatch();
$dispatch->setup( __FILE__, 'axis_plugin_test\contexts' );

