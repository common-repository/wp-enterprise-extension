<?php


if (!defined('ABSPATH')) exit; // Exit if accessed directly

function wex_add_cssHeader_endpoint()
{
    add_rewrite_endpoint('wex', EP_ALL);
}

add_action('init', 'wex_add_cssHeader_endpoint');


function wex_cssHeader_template_redirect()
{
    global $wp_query;

    // if this is not a request for json or a singular object then bail
    if (!isset($wp_query->query_vars['wex']) || (!is_singular() && !is_home()))
        return;

    if (!is_home()) {
        $cssPostID = get_the_ID();
    } else {
        $cssPostID = get_option('page_on_front');
    }

    if ($wp_query->query_vars['wex'] == 'css') {
        header('Content-Type: text/css');
        // include custom template

        if (get_post_meta($cssPostID, "wex_custom_head_content", true) == true) {
            $bits = get_post_meta($cssPostID, "wex_custom_head_css", true);
            if ($bits != "") {
                echo do_shortcode($bits);
            }
        }
    }

    exit;
}

//wex_cssHeader_template_redirect

add_action('template_redirect', 'wex_cssHeader_template_redirect');

add_filter('request', 'wex_cssHeader_set_queryvar');
function wex_cssHeader_set_queryvar($vars)
{
    if (isset($vars['wex']) && $vars['wex'] === '') {
        // This sets a default value
        $vars['wex'] = 'css';
    }
    return $vars;
}


