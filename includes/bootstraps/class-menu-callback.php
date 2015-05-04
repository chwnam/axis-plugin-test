<?php

namespace axis_plugin_test\bootstraps;

use axis_framework\includes\bootstraps\Base_Menu_Callback;


class Menu_Callback extends Base_Menu_Callback {

	protected function __construct( array $args = array() ) {

		parent::__construct( $args );
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
