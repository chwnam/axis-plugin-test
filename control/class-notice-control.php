<?php

namespace axis_plugin_test\control;

use axis_framework\control\Base_Control;


class Notice_Control extends Base_Control {

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function success() {
		echo '<div class="success"><p>SUCCESS!</p></div>';
	}

	public function shortcode( $args, $enclosed_text ) {
		echo $enclosed_text;
	}
}