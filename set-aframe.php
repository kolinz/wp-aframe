<?php
/*
Plugin Name: Insert A-Frame
Plugin URI: https://github.com/kolinz/wp-aframe
Description: A-Frameを読み込んでWeb VRをWordPress内で実現するプラグイン
Author: Kohei Nishikawa
Version: 0.0.1
Author URI: https://github.com/kolinz
License: GPL2
*/

function add_aframe() {
	?>
    <!-- A-Frame:WebVR -->
	<script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    <?php
} 
add_action( 'wp_head', 'add_aframe' );
// end action