<?php

namespace axis_plugin_test\controls;

use axis_framework\controls\Base_Control;


class Coffee_Control extends Base_Control {

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function order() {
		echo 'this is an order page.';
	}

	public function drink() {
		echo 'this is an drink page.';
	}

	public function index() {
		echo 'this is an index page.';
	}
}