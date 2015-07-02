<?php
// add_action( 'admin_notices',        axis_control( 'axis_plugin_test\control', 'notice', 'success' ) );
// add_shortcode( 'my-test-shortcode', axis_shortcode_control( 'axis_plugin_test\control', 'notice', 'shortcode' ) );

add_action(
	'admin_post_my-form',
	axis_control(
		AXIS_PLUGIN_TEST_MAIN,
		'axis_plugin_test\control',
		'axis-plugin-test',
		'admin_post'
	)
);