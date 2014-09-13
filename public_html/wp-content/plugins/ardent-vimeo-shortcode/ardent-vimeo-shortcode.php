<?php

/*
Plugin Name: Ardent Vimeo Shortcode
Plugin URI: http://www.ardentmedia.net/
Description: Allows the user to embed Vimeo movie clips by entering a shortcode ([vimeo]) into the post area.
Author: Luke Scalf
Version: 1.0
Author URI: http://www.ardentmedia.net/
*/

class ardent_vimeo
{
	function shortcode($atts, $content = null)
	{
		extract(shortcode_atts(array(
			'clip_id' 	=> '',
			'width' 	=> '',
			'height' 	=> '',
		), $atts));
		
		if(empty($clip_id) || !is_numeric($clip_id)) return '<!-- Ardent Vimeo: Invalid clip_id -->';
		if(!$height && !$height) $width = 870;
		if($height && !$width) $width = intval($height * 16 / 9);
		if(!$height && $width) $height = intval($width * 9 / 16);

		return '<iframe src="http://player.vimeo.com/video/' . $clip_id . '?title=0&amp;byline=0&amp;portrait=0" width="' . $width . '" height="' . $height	. '" frameborder="0"></iframe>';
	}
}
add_shortcode('vimeo', array('ardent_vimeo', 'shortcode'));