<?php 

/**
 * Get source of image uploaded to titan option
 */
function get_image_source_from_titan_option($titan, $option_id)
{
	$image_id = $titan->getOption( $option_id);
	$image_source = $image_id;
	if ( is_numeric( $image_id ) ) {
		$imageAttachment = wp_get_attachment_image_src( $image_id, "full" );
		$image_source = $imageAttachment[0];
	}
	return $image_source;
}

?>