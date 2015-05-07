<?php extract( $instance ); ?>
<p>
	Title:
	<input class="widefat" name="<?php echo $widget->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
	Favorite Movie:
	<input class="widefat" name="<?php echo $widget->get_field_name( 'movie' ); ?>" type="text" value="<?php echo esc_attr( $movie ); ?>" />
</p>
<p>
	Favorite Song:
	<textarea class="widefat" name="<?php echo $widget->get_field_name( 'song' ); ?>"><?php echo esc_attr( $song ); ?></textarea>
</p>