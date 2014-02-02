<?php
/*
 Plugin Name: EasyAzon
 Plugin URI: http://easyazon.com/
 Description: Quickly and easily insert Amazon affiliate links into your site's content. By installing this plugin, you agree to the <a href="http://easyazon.com/terms/" target="_blank">EasyAzon terms of service</a>.
 Version: 3.0.5
 Author: EasyAzon
 Author URI: http://easyazon.com/
 */

define('EASYAZON_VERSION', '3.0.5');

require_once('easyazon-base/easyazon-base.php');
require_once('easyazon-core/easyazon-core.php');

// Settings link
function easyazon_add_settings_link($actions) {
	$actions = array('settings' => sprintf('<a href="%s" title="%s">%s</a>', easyazon_get_settings_link(), __('Configure EasyAzon.'), __('Settings'))) + $actions;

	return $actions;
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'easyazon_add_settings_link');