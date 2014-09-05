/*-----------------------------------------------------------------------------------*/
/* 1. Lollys Shortcodes  */
/*-----------------------------------------------------------------------------------*/

// Enable shortcodes in widget areas
//add_filter( 'widget_text', 'do_shortcode' );


// Replace WP autop formatting
if ( ! function_exists( 'lolly_remove_wpautop' ) ) {
	function lolly_remove_wpautop( $content ) {
		$content = do_shortcode( shortcode_unautop( $content ) );
		$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		return $content;
	} // End lolly_remove_wpautop()
}
/*-----------------------------------------------------------------------------------*/
/* 11. Quote - quote
/*-----------------------------------------------------------------------------------*/
/*

Optional arguments:
 - style: boxed
 - float: left, right

*/
function lolly_shortcode_quote($atts, $content = null) {
   	extract(shortcode_atts(array(	'style' => '',
   									'float' => ''), $atts));
   $class = '';
   if ( $style )
   		$class .= ' '.$style;
   if ( $float )
   		$class .= ' '.$float;
		
	$twitContent = lolly_remove_wpautop($content);
	$twitContent = strip_tags($twitContent);

      return '<div class="lolly-sc-quote' . $class . '"><blockquote>' . lolly_remove_wpautop($content) . 
      '&nbsp;<a class="quote-share-a" target="_blank" class="popup" href="https://twitter.com/intent/tweet?source=tweetbutton&text=' . $twitContent .
       '&via=lollydaskal"><i class="fa fa-twitter social-icon"></i></a>
		<a class="quote-share-a" target="_blank" class="popup" href="https://www.facebook.com/sharer/sharer.php?u='. get_permalink().'&t=' . lolly_remove_wpautop( $content ) . '"
		onclick="javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizeable=yes,scrollbars=yes,height=300,width=600");return false;"
   		title="Share on Facebook">
   		<i class="fa fa-facebook social-icon"></i></a></blockqoute></div>';
}
add_shortcode( 'quote', 'lolly_shortcode_quote' );