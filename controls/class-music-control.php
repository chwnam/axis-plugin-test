<?php

namespace axis_plugin_test\controls;

use axis_framework\control\Base_Control;


class Music_Control extends Base_Control {

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function index() {
		echo "this is a fallback function, index.";
	}

	public function play( $args ) {

		\axis_framework\core\util\axis_dump_pre( $args );
	}

	public function stop() {
	}
}