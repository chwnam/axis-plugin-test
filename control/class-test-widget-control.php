<?php

namespace axis_plugin_test\control;

use axis_framework\control\Base_Control;


class Test_Widget_Control extends Base_Control {

	private $instance;

	public function __construct( array $args = array() ) {

		parent::__construct( $args );

		if( isset( $args['instance'] ) ) {
			$this->instance = &$args['instance'];
		}
	}

	public function run() {

		$this->loader->simple_view( 'simple/axis-plugin-test-view' );
	}
}