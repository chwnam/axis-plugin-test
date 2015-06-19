<?php

namespace axis_plugin_test\contexts;

use axis_framework\contexts\Base_Routing_Context;

class Routing_Context extends Base_Routing_Context {

	public function __construct( $args = [] ) {

		$args['query_vars']    = array( 'music', 'coffee', 'song', 'position', 'bitrate', );
		$args['rewrite_rules'] = array(
			array( 'music/(.+)/(.+)/(.+)/(.+)/?$',  'index.php?music=$matches[1]&song=$matches[2]&position=$matches[3]&bitrate=$matches[4]' ),
			array( 'coffee/?$',                     'index.php?coffee=index' ),
			array( 'coffee/([^&]+)/?$',             'index.php?coffee=$matches[1]' ),
			array( 'song/([^&]+)/?$',               'index.php?song=$matches[1]' ),
		);

		$args['delivery'] = array(
			'music'  => array( 'axis_plugin_test\controls', 'music' ),
			'coffee' => array( 'axis_plugin_test\controls', 'coffee' ),
		);

		parent::__construct( $args );
	}

	public function template_redirect_callback() {
		\axis_framework\core\utils\axis_dump_pre( $this->matched_query_vars );
	}
}