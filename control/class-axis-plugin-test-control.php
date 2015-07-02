<?php

namespace axis_plugin_test\control;

use axis_framework\control\Base_Control;


class Axis_Plugin_Test_Control extends Base_Control {

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function run() {
		$view = $this->loader->generic_view();
		$form = $this->loader->form( 'axis_plugin_test\form', 'my' );
		echo $view->render( 'simple/axis-plugin-test-template', array( 'form' => &$form ) );
	}

	public function admin_post() {
		echo "that's nice!";
	}
}