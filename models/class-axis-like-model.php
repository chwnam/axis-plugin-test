<?php

namespace axis_plugin_test\models;

use axis_framework\models\Base_Entity_Model;

class Axis_Like_Model extends Base_Entity_Model {

	protected $id;
	protected $post_id;
	protected $value;
	protected $date_time;
	protected $user_id;

	public static function get_table() {

		return 'wp_axis_like_post';
	}

	public static function get_searchable_fields() {

		return array();
	}

	public static function create_table() {

	}

	public static function delete_table() {

	}

	public function __construct( $args ) {
		parent::__construct( $args );
	}
}