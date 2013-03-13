<?php
/*
Plugin Name:  WOW Slider
Description: This module easily adds image sliders created with WOWSlider app.
Author: WOWSlider.com
Version: 3.0
Author URI: http://wowslider.com/
*/

/* Copyright (C) 2013 WOWSlider.com. All rights reserved. */

// template tag
function wowslider($id = 0, $write = true){
    static $active = array();
    $id = (int)$id;
    if (in_array($id, $active)) return '';
    $active[] = $id; 
    $out = wowslider_get($id);
    if ($write) echo $out;
    else return $out;
}

// wowslider in pages/posts
function wowslider_injection($output){
    if (preg_match_all('/\[wowslider id="(\d+)"\]/', $output, $matches)){
        $ids = array_unique($matches[1]);
        foreach ($ids as $id)
            $output = str_replace('[wowslider id="' . $id . '"]', wowslider($id, false), $output);
    }
    return $output;
}

// initialization
define('WOWSLIDER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('WOWSLIDER_PLUGIN_PATH', str_replace('\\', '/', dirname(__FILE__)) . '/');
add_filter('the_content', 'wowslider_injection');
require_once WOWSLIDER_PLUGIN_PATH . 'admin-bar.php';
require_once WOWSLIDER_PLUGIN_PATH . 'api.php';
require_once WOWSLIDER_PLUGIN_PATH . 'helpers.php';
if (is_admin()) require_once WOWSLIDER_PLUGIN_PATH . 'admin.php';

wp_enqueue_script('jquery');
if (file_exists(WOWSLIDER_PLUGIN_PATH . 'data/wowslider.js')){
	wp_register_script('wowslider', WOWSLIDER_PLUGIN_URL . 'data/wowslider.js', array('jquery'));
	wp_enqueue_script('wowslider');
}

?>
