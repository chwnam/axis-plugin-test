<?php

namespace axis_plugin_test\control;

use axis_framework\control\Base_Control;


class List_Table_Control extends Base_Control {

	protected $table_title;
	protected $add_new_text;
	protected $table_headers = array();

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function run() {

		/** @var \axis_plugin_test\views\List_Table_View $view */
		$view = $this->loader->view( 'axis_plugin_test\views', 'list-table' );

		$model = $this->loader->model( 'axis_plugin_test\models', 'axis-like');
		$fields = array_keys( $model->properties() );

		foreach( $fields as $field ) {
			$f = new \stdClass();
			$f->id = $field;
			$f->name = $field;
			$this->table_headers[] = $f;
		}

		$this->table_title = 'Axis Like Table Example';
		$this->add_new_text = __( 'Add New', 'axis_plugin_test' );

		echo $view->render(
			'list-table',
			array(
				'table_title' => $this->table_title,
				'add_new_text' => $this->add_new_text,
				'table_headers' => $this->table_headers,
			)
		);
	}
}