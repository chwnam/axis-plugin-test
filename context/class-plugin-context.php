<?php

namespace axis_plugin_test\context;

require_once( AXIS_FRAMEWORK_PATH  . '/context/trait-plugin-callback.php' );

use axis_framework\context\Base_Context;
use axis_framework\context\Plugin_Callback_Trait;


class Plugin_Context extends Base_Context {

	use Plugin_Callback_Trait;

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function init_context() {

		$this->by_trait_add_admin_menu();
	}

	public function add_admin_menu() {

		add_menu_page(
			'AxisPluginTest',
			'AxisPluginTest',
			'manage_options',
			'axis_plugin_test',
			$this->control_helper( 'axis_plugin_test\control', 'axis-plugin-test', 'run' )
		);

		add_submenu_page(
			'axis_plugin_test',
			'ListTable',
			'ListTable',
			'manage_options',
			'axis_plugin_list_table',
			$this->control_helper( 'axis_plugin_test\control', 'list-table', 'run' )
		);

		add_submenu_page(
			'axis_plugin_test',
			'ModelTest',
			'ModelTest',
			'manage_options',
			'apt_model_test',
			$this->control_helper( 'apt\control', 'model-test', 'run' )
		);
	}
}