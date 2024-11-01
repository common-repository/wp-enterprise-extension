<?php


if (!defined('ABSPATH')) exit; // Exit if accessed directly


function wex_cleanse_content_from_msword_foibles($patient)
{

    $invalid = array("“", "”", "–", "’", "‘", "©", "®", "«", "»", "¢", "¹", "º", "¼", "½", "¾", "²", "³", "°", "†", "‡", "™", "…", "↑", "↓", "←", "→");
    $valid = array("\"", "\"", "-", "'", "'", "&copy;", "&reg;", "&laquo;", "&raquo;", "&cent;", "&sup1;", "&ordm;", "&frac14;", "&frac12;", "&frac34;", "&sup2;", "&sup3;", "&deg;", "&#8224;", "&#8225;", "&#8482;", "&#8230;" . "&uarr;", "&darr;", "&larr;", "&rarr;");

    $patient = str_ireplace($invalid, $valid, $patient);

    return $patient;
} // end idg_cleanse_content_from_msword_foibles


add_filter('the_content', 'wex_cleanse_content_from_msword_foibles');


// Force images and uploads to be stored with relative paths
function wex_relativePathForUploads($fileInfos)
{
    global $blog_id;
    if (function_exists("get_blog_option")) {
        $path = get_blog_option($blog_id, 'siteurl');
    } else {
        $path = get_option($blog_id, 'siteurl');
    }

    $fileInfos['url'] = str_replace('https://', 'http://', $fileInfos['url']);
    $fileInfos['url'] = str_replace($path, '', $fileInfos['url']);

    return $fileInfos;
}

add_filter('wp_handle_upload', 'wex_relativePathForUploads');


// Remove version numbers amd gemerator descriptions
add_filter('script_loader_src', 'wex_remove_src_version');
add_filter('style_loader_src', 'wex_remove_src_version');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);


function wex_remove_src_version($src)
{

    global $wp_version;

    $version_str = '?ver=' . $wp_version;
    $version_str_offset = strlen($src) - strlen($version_str);

    if (substr($src, $version_str_offset) == $version_str)
        return substr($src, 0, $version_str_offset);
    else
        return $src;

}


// Add wp_wysiwyg to custom fields plugin

add_action('acf/register_fields', 'wex_register_fields');

function wex_register_fields()
{
    include_once(WEX_PLUGIN_DIR . '/components/acf-fields/wp_wysiwyg-v4.php');
}


/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
if (!function_exists('wex_post_is_in_descendant_category')) {
    function wex_post_is_in_descendant_category($cats, $_post = null)
    {
        foreach ((array)$cats as $cat) {
            // get_term_children() accepts integer ID only
            $descendants = get_term_children((int)$cat, 'category');
            if ($descendants && in_category($descendants, $_post))
                return true;
        }
        return false;
    }
}


add_shortcode('theme_uri', 'wex_theme_uri_shortcode');

function wex_theme_uri_shortcode($attrs = array(), $content = '')
{
    $theme_uri = is_child_theme()
        ? get_stylesheet_directory_uri()
        : get_template_directory_uri();

    return trailingslashit($theme_uri);
}


add_shortcode('blog_uri', 'wex_blog_uri_shortcode');

function wex_blog_uri_shortcode($attrs = array(), $content = '')
{
    return trailingslashit(site_url());
}


register_activation_hook(__FILE__, 'extend_date_archives_flush_rewrite_rules');


function wex_extend_date_archives_flush_rewrite_rules()
{
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}

register_activation_hook(__FILE__, 'wex_extend_date_archives_flush_rewrite_rules');
add_action('created_category', 'wex_extend_date_archives_flush_rewrite_rules');
add_action('edited_category', 'wex_extend_date_archives_flush_rewrite_rules');
add_action('delete_category', 'wex_extend_date_archives_flush_rewrite_rules');
add_action('save_post', 'wex_extend_date_archives_flush_rewrite_rules');


function wex_extend_date_archives_add_rewrite_rules_nocategorybase($category_rewrite)
{
    // Use if WP No Category Base Plugin is Present
    //if(!isset($category_rewrite)){$category_rewrite = array();}
    $categories = get_categories(array('hide_empty' => false));
    foreach ($categories as $category) {
        $category_nicename = $category->slug;
        if ($category->parent == $category->cat_ID) { // recursive recursion
            $category->parent = 0;
        } elseif ($category->parent != 0) {
            $category_nicename = get_category_parents($category->parent, false, '/', true) . $category_nicename;
        }

        $category_rewrite['(' . $category_nicename . ')/([0-9][0-9][0-9][0-9])/?$'] = 'index.php?category_name=$matches[1]&year=$matches[2]';
        $category_rewrite['(' . $category_nicename . ')/([0-9][0-9][0-9][0-9])/([0-9][0-9])/?$'] = 'index.php?category_name=$matches[1]&year=$matches[2]&monthnum=$matches[3]';
    }

    return $category_rewrite;
}

function wex_extend_date_archives_add_rewrite_rules($wp_rewrite)
{

    // Use if WP No Category Base Plugin is NOT Present
    $rules = array();
    $structures = array(
        $wp_rewrite->get_category_permastruct() . $wp_rewrite->get_date_permastruct(),
        $wp_rewrite->get_category_permastruct() . $wp_rewrite->get_month_permastruct(),
        $wp_rewrite->get_category_permastruct() . $wp_rewrite->get_year_permastruct(),
    );
    foreach ($structures as $s) {
        $rules += $wp_rewrite->generate_rewrite_rules($s);
    }

    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}

//if(function_exists("no_category_base_rewrite_rules")){
if (in_array("wp-no-category-base/no-category-base.php", (array)get_option('active_plugins', array()))) {
    add_filter('category_rewrite_rules', 'wex_extend_date_archives_add_rewrite_rules_nocategorybase', 57);
} else {
    add_action('generate_rewrite_rules', 'wex_extend_date_archives_add_rewrite_rules');
}


function wex_force_ssl()
{
    global $post;
    $post_id = $post;
    if (is_object($post_id)) {
        $post_id = $post_id->ID;
    }

    $force_ssl = get_post_meta($post_id, 'wex-force-ssl', true);

    if ($force_ssl == 1) {
        if ($_SERVER["HTTPS"] != "on") {
            $newurl = "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            header("Location: $newurl");
            exit();
        }

    }
}

add_action('wp_head', 'wex_force_ssl');







