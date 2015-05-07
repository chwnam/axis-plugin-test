<?php

namespace axis_plugin_test\controls;

use axis_framework\controls\Base_Control;


class Axis_Plugin_Test_Control extends Base_Control {

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function run() {

		$this->loader->simple_view( 'simple/axis-plugin-test-view' );
	}
}