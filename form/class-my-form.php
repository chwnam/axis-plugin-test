<?php

namespace axis_plugin_test\form;

use axis_framework\form\Base_Form;


class My_Form extends Base_Form {

	public function __construct() {
		parent::__construct( 'my-nonce-action', 'my-nonce-name' );
	}

	protected function build_structure() {

		$structure = array(
			'field_one'    => array(
				'tag'   => 'input',
				'type'  => 'text',
				'id'    => 'field_one',
				'name'  => 'field_one',
				'class' => '',
				'value' => get_option( 'blogdescription' )
			),

			'field_two'    => array(
				'tag'   => 'input',
				'type'  => 'text',
				'id'    => 'field_two',
				'name'  => 'field_two',
				'class' => '',
				'value' => 'static value',
				'readonly' => 'readonly'
			),

			'div1' => array(
				'tag'     => 'div',
				'content' => array(
					'tag' => 'select',
					'name' => 'sel_name',
					'content' => array(
						array(
							'tag'     => 'option',
							'value'   => '1',
							'content' => 1
						),
						array(
							'tag'     => 'option',
							'value'   => '2',
							'content' => 2
						),
						array(
							'tag'     => 'option',
							'value'   => '3',
							'content' => 3
						)
					)
				)
			),

			'hr' => array(
				'tag' => 'hr'
			)
		);

		return $structure;
	}

	protected function validate() {

	}
}