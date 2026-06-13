<?php
/*
* Plugin Name: scroll to top
* Description: plugin for scorll to top
* Version: 1.0.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: ahmad esmaeili majd
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: https://example.com/my-plugin/
* Text Domain: scroll to top plugin
* Domain Path: /languages
*/

defined('ABSPATH') || exit;

define('STT_DIR_PATH', plugin_dir_path( __FILE__ ));
define('STT_DIR_URL', plugin_dir_url( __FILE__ ));

function register_assest() {
    wp_enqueue_style( 'stt_style', STT_DIR_URL.'assets/css/style.css', [], '1.0.0' );

    wp_enqueue_style('stt_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css');

    wp_enqueue_script( 'stt_js', STT_DIR_URL.'assets/js/main.js', ['jquery'], '1.0.0');
}

add_action( 'wp_enqueue_scripts', 'register_assest');

include_once STT_DIR_PATH . 'view/front/scroll.php';




