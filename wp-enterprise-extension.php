<?php
/*
Plugin Name: WP Enterprise Extension (WEX)
Description: This plugin will install and begin the hardening process for enterprise installations.
Version: 0.1.0


*/
if (!defined('ABSPATH')) exit; // Exit if accessed directly
//Custom Theme Settings
if (!defined('WEX_PLUGIN_NAME')) {
    define('WEX_PLUGIN_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));
}

if (!defined('WEX_PLUGIN_DIR')) {
    define('WEX_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . WEX_PLUGIN_NAME);
}

if (!defined('WEX_VERSION_NUM')) {
    define('WEX_VERSION_NUM', '0.1.1');
}
add_option(WEX_VERSION_KEY, WEX_VERSION_NUM);

// Check to see if updates need to occur
if (get_option(WEX_VERSION_KEY) != WEX_VERSION_NUM) {
    // If there is any future update code needed it will go here

    // Then update the version value
    update_option(WEX_VERSION_KEY, WEX_VERSION_NUM);
}


if(is_admin()){require_once(WEX_PLUGIN_DIR . "/components/class-tgm-plugin-activation.php");}

require_once(WEX_PLUGIN_DIR . "/wex-functions.php");
require_once(WEX_PLUGIN_DIR . "/wex-fields.php");
require_once(WEX_PLUGIN_DIR . "/wex-header-css-generator.php");

if(is_admin()){require_once(WEX_PLUGIN_DIR . "/wex-initialize.php");}

add_filter('upload_mimes', 'wex_custom_upload_mimes');
function wex_custom_upload_mimes($existing_mimes)
{
    $existing_mimes['swf'] = 'application/x-shockwave-flash';
    $existing_mimes['svg'] = 'image/svg+xml';
    $existing_mimes['tif'] = 'image/tiff';
    $existing_mimes['tif'] = 'image/x-tiff';
    $existing_mimes['tiff'] = 'image/tiff';
    $existing_mimes['tiff'] = 'image/x-tiff';

    return $existing_mimes;
}


function wex_first_init()
{

    $blank_template = get_template_directory() . "page-custom-blank.php";

    if (!is_file($blank_template)) {
        if (is_writable(get_template_directory())) {
            copy(WEX_PLUGIN_DIR . '/components/page-custom-blank.php', $blank_template);
        }
    }
} // wex_first_init()

register_activation_hook(__FILE__, 'wex_first_init');


