<?php

namespace axis_plugin_test\bootstraps;

use axis_framework\includes\bootstraps\Base_Plugin_Callback;


class Plugin_Callback extends Base_Plugin_Callback {

	protected function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function localize() {

	}

	public function on_activated() {

	}

	public function on_deactivated() {

	}

	public function on_uninstall() {

	}

	public function register_hooks() {

	}
}
