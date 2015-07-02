<?php

namespace axis_plugin_test\form;

use axis_framework\form\Base_Form;
use axis_framework\form\tag;


class My_Form extends Base_Form {

	public function __construct() {

		parent::__construct( 'my-nonce-action', 'my-nonce-name' );
	}

	protected function build_structure() {

		static $structure = array(

			'name'    => 'my-form',
			'comment' => 'My form',
			'method'  => 'post',
			'action'  => '',
			'referer' => TRUE,
			'echo'    => TRUE,
			array(
				'type'        => 'text',
				'name'        => 'field_one',
				'label'       => 'field one',
				'description' => 'my field one',
				'required'    => TRUE,
			),
			array(
				'type'  => 'hidden',
				'name'  => 'action',
				'value' => 'my-form',
			),
			array(
				'type'       => 'submit',
				'attributes' => array(
					'class' => 'button button-primary',
				),
			),
		);

		if( empty( $structure['action'] ) ) {
			$structure['action'] = admin_url( 'admin-post.php' );
		}

		return $structure;
	}

	protected function validate( array &$data ) {

	}
}