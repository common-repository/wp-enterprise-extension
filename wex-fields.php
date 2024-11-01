<?php

if (!defined('ABSPATH')) exit; // Exit if accessed directly


function prefab_field_meta()
{

    global $wpdb;

    $Fielder = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE post_type=\"acf\" AND post_name = \"acf_head-tag-customization\" ");

    $postID = $Fielder->ID;
    unset($Fielder);

    $meta[$postID][] = array('field_52af956f5e9c9', 'a:12:{s:3:"key";s:19:"field_52af956f5e9c9";s:5:"label";s:47:"Custom CSS (This will be encased in STYLE tags)";s:4:"name";s:19:"wex_custom_head_css";s:4:"type";s:8:"textarea";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:9:"maxlength";s:0:"";s:10:"formatting";s:4:"none";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"1";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:19:"field_52af84fb7f913";s:8:"operator";s:2:"==";s:5:"value";s:1:"1";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:1;}');
    $meta[$postID][] = array('field_52af958f5e9ca', 'a:12:{s:3:"key";s:19:"field_52af958f5e9ca";s:5:"label";s:24:"Custom Meta / Javascript";s:4:"name";s:30:"wex_custom_meta_and_javascript";s:4:"type";s:8:"textarea";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:9:"maxlength";s:0:"";s:10:"formatting";s:4:"none";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"1";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:19:"field_52af84fb7f913";s:8:"operator";s:2:"==";s:5:"value";s:1:"1";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:2;}');
    $meta[$postID][] = array('rule', 'a:5:{s:5:"param";s:11:"post_format";s:8:"operator";s:2:"==";s:5:"value";s:8:"standard";s:8:"order_no";i:0;s:8:"group_no";i:0;}');
    $meta[$postID][] = array('rule', 'a:5:{s:5:"param";s:9:"post_type";s:8:"operator";s:2:"==";s:5:"value";s:4:"page";s:8:"order_no";i:0;s:8:"group_no";i:1;}');
    $meta[$postID][] = array('_edit_last', '1');
    $meta[$postID][] = array('field_52af84fb7f913', 'a:10:{s:3:"key";s:19:"field_52af84fb7f913";s:5:"label";s:28:"Add custom code the HEAD tag";s:4:"name";s:23:"wex_custom_head_content";s:4:"type";s:10:"true_false";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:7:"message";s:0:"";s:13:"default_value";s:1:"0";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:0;}');
    $meta[$postID][] = array('position', 'normal');
    $meta[$postID][] = array('layout', 'default');
    $meta[$postID][] = array('hide_on_screen', '');

    $Fielder = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE post_type=\"acf\" AND post_name = \"acf_footer\" ");
    $postID = $Fielder->ID;
    unset($Fielder);

    $meta[$postID][] = array('_edit_last', '1');
    $meta[$postID][] = array('position', 'normal');
    $meta[$postID][] = array('layout', 'default');
    $meta[$postID][] = array('hide_on_screen', '');
    $meta[$postID][] = array('field_52af7f9ab3463', 'a:10:{s:3:"key";s:19:"field_52af7f9ab3463";s:5:"label";s:22:"Add Custom Footer Code";s:4:"name";s:22:"add_custom_footer_code";s:4:"type";s:10:"true_false";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:7:"message";s:0:"";s:13:"default_value";s:1:"0";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:19:"field_52aa2ad108ee2";s:8:"operator";s:2:"==";s:5:"value";s:1:"1";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:0;}');
    $meta[$postID][] = array('field_52af7fbcb3464', 'a:12:{s:3:"key";s:19:"field_52af7fbcb3464";s:5:"label";s:18:"custom_footer_code";s:4:"name";s:18:"custom_footer_code";s:4:"type";s:10:"wp_wysiwyg";s:12:"instructions";s:106:"This field can be used to execute any unique scripts required (or any other html elements for that matter.";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:5:"teeny";s:1:"0";s:13:"media_buttons";s:1:"1";s:3:"dfw";s:1:"1";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"1";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:19:"field_52af7f9ab3463";s:8:"operator";s:2:"==";s:5:"value";s:1:"1";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:1;}');
    $meta[$postID][] = array('rule', 'a:5:{s:5:"param";s:13:"page_template";s:8:"operator";s:2:"!=";s:5:"value";s:21:"page-custom-blank.php";s:8:"order_no";i:0;s:8:"group_no";i:0;}');
    $meta[$postID][] = array('rule', 'a:5:{s:5:"param";s:9:"post_type";s:8:"operator";s:2:"==";s:5:"value";s:4:"page";s:8:"order_no";i:1;s:8:"group_no";i:0;}');
    $meta[$postID][] = array('rule', 'a:5:{s:5:"param";s:11:"post_format";s:8:"operator";s:2:"==";s:5:"value";s:8:"standard";s:8:"order_no";i:0;s:8:"group_no";i:1;}');


    //var_dump($meta);
    foreach ($meta as $ID => $metapost) {
        foreach ($metapost as $metaBit) {
            update_post_meta($ID, $metaBit[0], $metaBit[1], $metaBit[1]);
            // echo "PostID = $postID ".$metaBit[0]." ".$metaBit[1]." \n";
        }
    }
    $meta = null;


} // prefab_field_meta


if (function_exists("register_field_group")) {
    global $wpdb;

    $wex_acf_present = $wpdb->get_results("SELECT post_name FROM " . $wpdb->prefix . "posts WHERE post_type = \"acf\";", ARRAY_A);

    $wex_acf_groups = array();
    foreach ($wex_acf_present as $wex_acf_one_present) {
        $wex_acf_groups[] = $wex_acf_one_present['post_name'];
    }

    if (!in_array('acf_head-tag-customization', $wex_acf_groups)) {
//echo "MOO MOO MOO";
        $post = array(
            'post_content' => "", // The full text of the post.
            'post_name' => "acf_head-tag-customization", // The name (slug) for your post
            'post_title' => "Head Tag Customization", // The title of your post.
            'post_status' => 'publish', // Default 'draft'.
            'post_type' => 'acf', // Default 'post'.
            'ping_status' => 'closed', // Pingbacks or trackbacks allowed. Default is the option 'default_ping_status'.
            'post_parent' => 0, // Sets the parent of the new post, if any. Default 0.
            'menu_order' => count($wex_acf_groups), // If new post is a page, sets the order in which it should appear in supported menus. Default 0.
            'post_date' => date('Y-m-d H:i:s'), // The time post was made.
            'post_date_gmt' => gmdate('Y-m-d H:i:s'), // The time post was made, in GMT.
            'comment_status' => 'closed' // Default is the option 'default_comment_status', or 'closed'.
        );

        $postID = wp_insert_post($post);


        $wex_acf_groups[] = 'wex_custom_head_content';

        register_field_group(array(
            'id' => 'acf_head-tag-customization',
            'title' => 'Head Tag Customization',
            'fields' => array(
                array(
                    'key' => 'field_52af84fb7f913',
                    'label' => 'Add custom code the HEAD tag',
                    'name' => 'wex_custom_head_content',
                    'type' => 'true_false',
                    'message' => '',
                    'default_value' => 0,
                ),
                array(
                    'key' => 'field_52af956f5e9c9',
                    'label' => 'Custom CSS (This will be encased in STYLE tags)',
                    'name' => 'wex_custom_head_css',
                    'type' => 'textarea',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_52af84fb7f913',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                        'allorany' => 'all',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'formatting' => 'none',
                ),
                array(
                    'key' => 'field_52af958f5e9ca',
                    'label' => 'Custom Meta / Javascript',
                    'name' => 'wex_custom_meta_and_javascript',
                    'type' => 'textarea',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_52af84fb7f913',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                        'allorany' => 'all',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'formatting' => 'none',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_format',
                        'operator' => '==',
                        'value' => 'standard',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                ),
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                        'order_no' => 0,
                        'group_no' => 1,
                    ),
                ),
            ),
            'options' => array(
                'position' => 'normal',
                'layout' => 'default',
                'hide_on_screen' => array(),
            ),
            'menu_order' => count($wex_acf_groups),
        ));


    }


    if (!in_array('acf_footer', $wex_acf_groups)) {

        $post = array(
            'post_content' => "", // The full text of the post.
            'post_name' => "acf_footer", // The name (slug) for your post
            'post_title' => "Footer", // The title of your post.
            'post_status' => 'publish', // Default 'draft'.
            'post_type' => 'acf', // Default 'post'.
            'ping_status' => 'closed', // Pingbacks or trackbacks allowed. Default is the option 'default_ping_status'.
            'post_parent' => 0, // Sets the parent of the new post, if any. Default 0.
            'menu_order' => count($wex_acf_groups), // If new post is a page, sets the order in which it should appear in supported menus. Default 0.
            'post_date' => date('Y-m-d H:i:s'), // The time post was made.
            'post_date_gmt' => gmdate('Y-m-d H:i:s'), // The time post was made, in GMT.
            'comment_status' => 'closed' // Default is the option 'default_comment_status', or 'closed'.
        );

        $postID = wp_insert_post($post);


        $wex_acf_groups[] = 'wex_custom_footer_code';
        register_field_group(array(
            'id' => 'acf_footer',
            'title' => 'Footer',
            'fields' => array(
                array(
                    'key' => 'field_52af7f9ab3463',
                    'label' => 'Add Custom Footer Code',
                    'name' => 'wex_custom_footer_code',
                    'type' => 'true_false',
                    'message' => '',
                    'default_value' => 0,
                ),
                array(
                    'key' => 'field_52af7fbcb3464',
                    'label' => 'custom_footer_code',
                    'name' => 'wex_custom_footer_code',
                    'type' => 'wp_wysiwyg',
                    'instructions' => 'This field can be used to execute any unique scripts required (or any other html elements for that matter.',
                    'conditional_logic' => array(
                        'status' => 1,
                        'rules' => array(
                            array(
                                'field' => 'field_52af7f9ab3463',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                        'allorany' => 'all',
                    ),
                    'default_value' => '',
                    'teeny' => 0,
                    'media_buttons' => 1,
                    'dfw' => 1,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-custom-blank.php',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                        'order_no' => 1,
                        'group_no' => 0,
                    ),
                ),
                array(
                    array(
                        'param' => 'post_format',
                        'operator' => '==',
                        'value' => 'standard',
                        'order_no' => 0,
                        'group_no' => 1,
                    ),
                ),
            ),
            'options' => array(
                'position' => 'normal',
                'layout' => 'default',
                'hide_on_screen' => array(),
            ),
            'menu_order' => count($wex_acf_groups),
        ));
    }
    if (is_admin()) {
        prefab_field_meta();
    }
}


function embed_wex_head_fields()
{
    if (get_post_meta(get_the_ID(), "wex_custom_head_content", true) == true) {
        $bits = get_post_meta(get_the_ID(), "wex_custom_head_css", true);


        if ($bits != "") {
            echo "\n<link rel=\"stylesheet\" id=\"wex-head-css\" href=\"" . get_permalink(get_the_ID()) . "?wex=css\" type=\"text/css\" media=\"all\" />\n";
        }
        $bits = get_post_meta(get_the_ID(), "wex_custom_meta_and_javascript", true);
        if ($bits != "") {
            echo "\n" . do_shortcode($bits) . "\n";
        }
    }
}

// embed_wex_head_fields

add_action('wp_head', 'embed_wex_head_fields', 500);


function embed_wex_footer_fields()
{
    if (get_post_meta(get_the_ID(), "add_wex_custom_footer_code", true) == true) {
        $bits = get_post_meta(get_the_ID(), "wex_custom_footer_code", true);
        if ($bits != "") {

            $bits = do_shortcode($bits);

            $bits = wex_cleanse_content_from_msword_foibles($bits);

            if (function_exists("AQSM_LinkTrackingQSFilter")) {
                $bits = AQSM_LinkTrackingQSFilter($bits);
            }

            //$bits = apply_filters('wex_output',$bits,$bits);
            echo $bits;
        }
    }
}

// embed_wex_footer_fields

add_action('wp_footer', 'embed_wex_footer_fields', 500);


add_action('add_meta_boxes', 'wex_meta_box');

function wex_meta_box()
{
    //We Call this method to add a meta box
    add_meta_box('wex_meta_box'
        , 'Wordpress Enterprise Extension'
        , 'WEX_render_meta_box_content', "", "side", "low"
    );
}

// end wex_meta_box


//This is the code that adds elements to the user interface
function WEX_render_meta_box_content($post)
{

    wp_nonce_field('WEX_render_meta_box_content', 'WEX_inner_custom_box_nonce');

    $value = get_post_meta($post->ID, "wex-featured-post", true);
    if ($value == true) {
        $checked = "checked=\"checked\"";
    } else {
        $checked = "";
    }

    ?>

    <label class="wex-post-field-label" for="wex-featured-post">
        Featured Post :
    </label>
    <input type="checkbox"
           id="wex-featured-post"
           name="wex-featured-post"
           value="true" <?php echo $checked; ?>/>
    <br/>

    <?php

    $value = get_post_meta($post->ID, "wex-force-ssl", true);
    if ($value == true) {
        $checked = "checked=\"checked\"";
    } else {
        $checked = "";
    }
    ?>

    <label class="wex-post-field-label" for="wex-force-ssl">
        Only Display Page With SSL :
    </label>
    <input type="checkbox"
           id="wex-force-ssl"
           name="wex-force-ssl"
           value="true" <?php echo $checked; ?>/>
    <br/>

<?php

}

// end WEX_render_meta_box_content


/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function WEX_save_postdata($post_id)
{

    /*
     * We need to verify this came from the our screen and with proper authorization,
     * because save_post can be triggered at other times.
     */

    // Check if our nonce is set.
    if (!isset($_POST['WEX_inner_custom_box_nonce']))
        return $post_id;

    $nonce = $_POST['WEX_inner_custom_box_nonce'];

    // Verify that the nonce is valid.
    if (!wp_verify_nonce($nonce, 'WEX_render_meta_box_content'))
        return $post_id;

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

    // Check the user's permissions.
    if ('page' == $_POST['post_type']) {

        if (!current_user_can('edit_page', $post_id))
            return $post_id;

    } else {

        if (!current_user_can('edit_post', $post_id))
            return $post_id;
    }

    /* OK, its safe for us to save the data now. */

    if (isset($_POST['wex-force-ssl'])) {
        $mydata = true;
    } else {
        $mydata = false;
    }

    // Update the meta field in the database.
    update_post_meta($post_id, "wex-force-ssl", $mydata);


    if (isset($_POST['wex-featured-post'])) {
        $mydata = true;
    } else {
        $mydata = false;
    }

    // Update the meta field in the database.
    update_post_meta($post_id, "wex-featured-post", $mydata);


}

// end WEX_save_postdata

add_action('save_post', 'wex_save_postdata');



