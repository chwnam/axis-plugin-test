<?php

namespace axis_plugin_test\contexts;

require_once( AXIS_CONTEXT_PATH . '/trait-plugin-callback.php' );

use axis_framework\contexts\Base_Context;
use axis_framework\contexts\Plugin_Callback_Trait;


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
			$this->control_helper( 'axis_plugin_test\controls', 'axis-plugin-test' )
		);

		add_submenu_page(
			'axis_plugin_test',
			'ListTable',
			'ListTable',
			'manage_options',
			'axis_plugin_list_table',
			$this->control_helper( 'axis_plugin_test\controls', 'list-table' )
		);
	}
}