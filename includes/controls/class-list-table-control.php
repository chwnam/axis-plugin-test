<?php

namespace axis_plugin_test\controls;

use axis_framework\includes\controls\Base_Control;


class List_Table_Control extends Base_Control {

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function run() {

		/** @var \axis_plugin_test\views\List_Table_View $view */
		$view = $this->loader->view( 'axis_plugin_test\views', 'list-table' );
		echo $view->render( 'list-table' );
	}
}