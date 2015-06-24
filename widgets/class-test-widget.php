<?php

namespace axis_plugin_test\widgets;

use axis_plugin_test\bootstraps\Plugin_Callback;

class Test_Widget extends \WP_Widget {

	private $loader;

	public function __construct() {

		parent::__construct(
			'test_widget',
			'Test Widget',
			array(
				'description'   => 'Test widget\'s description',
			)
		);

		$plugin_callback = Plugin_Callback::get_instance();
		$this->loader = $plugin_callback->get_loader();
	}

	public function widget( $args, $instance ) {

		echo $args['before_widget'] . "Test Widget" . $args['after_widget'];
	}

	public function form( $instance ) {

		$defaults = array( 'title' => '', 'movie' => '', 'song' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults );
		$context = array(
			'widget' => $this,
			'instance' => $instance
		);

		$this->loader->simple_view( 'simple/widget/test-widget', $context );
	}

	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['movie'] = strip_tags( $new_instance['movie'] );
		$instance['song'] = strip_tags( $new_instance['song'] );

		return $instance;
	}
}