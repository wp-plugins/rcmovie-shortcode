<?php
/*
Plugin Name: RCMovie Shortcode
Plugin URI: http://www.powie.de
Description: Embed RCMovie.de Videos
Version: 0.9.0
Author: Powie
Author URI: http://www.powie.de
License: GPL2 - Bearware 4,5%

*/

add_shortcode('rcmovie','rcmovie_shortcode');

function rcmovie_shortcode( $atts )
{
	$default_width  = '450';
    $default_height = '360';
   	$video_id    = $atts['id'];
    return  '<div class="rcmovie_sc" style="width:'.$default_width.'px; '. ((!empty($default_height)) ? 'height:'.$default_height.'px;' : '') . '">
   			 <object width="450" height="360" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
			  codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0">
			  <param name="movie" value="http://www.rcmovie.de/'.$video_id.'"></param>
			  <param name="wmode" value="transparent" />
			  <embed src="http://www.rcmovie.de/embed/'.$video_id.'" type="application/x-shockwave-flash" wmode="transparent" width="450" height="360">
			  </embed>
			 </object>
			</div>';
}

/* Man hilft anderen nicht indem man für sie tut was sie selbt tun könnten */
?>