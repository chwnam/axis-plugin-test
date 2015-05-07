<?php

namespace axis_plugin_test\contexts;

use axis_framework\bootstraps\contexts\Base_Context;


class Plugin_Context extends Base_Context {

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function init_context() {

		$this->add_action(
			'wp_dashboard_setup',
			'wp_dashboard_setup_widgets_callback'
		);
	}

	public function wp_dashboard_setup_widgets_callback() {

		wp_add_dashboard_widget(
			'dashboard_widget',
			'Example Dashboard Widget',
			array( &$this, 'dashboard_widget_callback' ),
			array( &$this, 'dashboard_widget_handle_callback' )
		);
	}

	public function dashboard_widget_callback() {

		# get saved data
		if( !$widget_options = get_option( 'my_dashboard_widget_options' ) )
			$widget_options = array( );

		# default output
		$output = sprintf(
			'<h2 style="text-align:right">%s</h2>',
			__( 'Please, configure the widget ☝' )
		);

		# check if saved data contains content
		$saved_feature_post = isset( $widget_options['feature_post'] )
			? $widget_options['feature_post'] : false;

		# custom content saved by control callback, modify output
		if( $saved_feature_post ) {
			$post = get_post( $saved_feature_post );
			if( $post ) {
				$content = do_shortcode( html_entity_decode( $post->post_content ) );
				$output = "<h2>{$post->post_title}</h2><p>{$content}</p>";
			}
		}
		echo "<div class='feature_post_class_wrap'>
        <label style='background:#ccc;'>$output</label>
	    </div>
	    ";
	}

	public function dashboard_widget_handle_callback() {

		# get saved data
		if( !$widget_options = get_option( 'my_dashboard_widget_options' ) )
			$widget_options = array( );

		# process update
		if( 'POST' == $_SERVER['REQUEST_METHOD'] && isset( $_POST['my_dashboard_widget_options'] ) ) {
			# minor validation
			$widget_options['feature_post'] = absint( $_POST['my_dashboard_widget_options']['feature_post'] );
			# save update
			update_option( 'my_dashboard_widget_options', $widget_options );
		}

		# set defaults
		if( !isset( $widget_options['feature_post'] ) )
			$widget_options['feature_post'] = '';


		echo "<p><strong>Available Pages</strong></p>
    <div class='feature_post_class_wrap'>
        <label>Title</label>";
		wp_dropdown_pages( array(
			'post_type'        => 'page',
			'selected'         => $widget_options['feature_post'],
			'name'             => 'my_dashboard_widget_options[feature_post]',
			'id'               => 'feature_post',
			'show_option_none' => '- Select -'
		) );
		echo "</div>";
	}
}