<?php


if (!defined('ABSPATH')) exit; // Exit if accessed directly

add_action('tgmpa_register', 'wex_initialize');

function wex_initialize()
{

    $pluginList[] = array('name' => 'Advanced Custom Fields', 'slug' => 'advanced-custom-fields', 'required' => true);
    $pluginList[] = array('name' => 'All In One SEO Pack', 'slug' => 'all-in-one-seo-pack', 'required' => false);
    $pluginList[] = array('name' => 'All In One WP Security', 'slug' => 'all-in-one-wp-security-and-firewall', 'required' => true);
    $pluginList[] = array('name' => 'AP Extended MIME Types', 'slug' => 'ap-extended-mime-types', 'required' => false);
    $pluginList[] = array('name' => 'Attribution Query String Manager', 'slug' => 'attribution-query-string-manager', 'required' => false);
    $pluginList[] = array('name' => 'Codepress Admin Columns', 'slug' => 'codepress-admin-columns', 'required' => false);
    $pluginList[] = array('name' => 'Custom Single', 'slug' => 'custom-single', 'required' => false);
    $pluginList[] = array('name' => 'Disable Comments', 'slug' => 'disable-comments', 'required' => false);
    $pluginList[] = array('name' => 'Duplicate Post', 'slug' => 'duplicate-post', 'required' => false);
    $pluginList[] = array('name' => 'Enable Media Replace', 'slug' => 'enable-media-replace', 'required' => true);
    $pluginList[] = array('name' => 'Exploit Scanner', 'slug' => 'exploit-scanner', 'required' => true);
    $pluginList[] = array('name' => 'Global Content Blocks', 'slug' => 'global-content-blocks', 'required' => true);
    $pluginList[] = array('name' => 'Good Writer Checkify', 'slug' => 'good-writer-checkify', 'required' => false);
    $pluginList[] = array('name' => 'Members', 'slug' => 'members', 'required' => true);
//		$pluginList[]=array('name' => 'Oasis Workflow', 'slug' => 'oasis-workflow', 'required' =>false);
    $pluginList[] = array('name' => 'Redirection', 'slug' => 'redirection', 'required' => true);
    $pluginList[] = array('name' => 'Force Regenerate Thumbnails', 'slug' => 'force-regenerate-thumbnails', 'required' => true);
    $pluginList[] = array('name' => 'Relative Image URLs', 'slug' => 'relative-image-urls', 'required' => true);
    $pluginList[] = array('name' => 'Search Exclude', 'slug' => 'search-exclude', 'required' => false);
    $pluginList[] = array('name' => 'Simple History', 'slug' => 'simple-history', 'required' => false);
    $pluginList[] = array('name' => 'AP Extended MIME Types', 'slug' => 'ap-extended-mime-types', 'required' => false);
    $pluginList[] = array('name' => 'SSH SFTP Updater Support', 'slug' => 'ssh-sftp-updater-support', 'required' => true);
    $pluginList[] = array('name' => 'WP No Category Base', 'slug' => 'wp-no-category-base', 'required' => false);
    $pluginList[] = array('name' => 'WP Updates Notifier', 'slug' => 'wp-updates-notifier', 'required' => false);
    $pluginList[] = array('name' => 'XML Sitemap & Google News Feeds', 'slug' => 'xml-sitemap-feed', 'required' => true);
    $pluginList[] = array('name' => 'Yet Another Related Posts Plugin', 'slug' => 'yet-another-related-posts-plugin', 'required' => false);


    $theme_text_domain = 'wex-plugin';
    $config = array(
        'domain' => $theme_text_domain, // Text domain - likely want to be the same as your theme.
        'default_path' => '', // Default absolute path to pre-packaged plugins
        'parent_menu_slug' => 'themes.php', // Default parent menu slug
        'parent_url_slug' => 'themes.php', // Default parent URL slug
        'menu' => 'install-required-plugins', // Menu slug
        'has_notices' => true, // Show admin notices or not
        'is_automatic' => false, // Automatically activate plugins after installation or not
        'message' => '', // Message to output right before the plugins table
        'strings' => array(
            'page_title' => __('Install Required Plugins', $theme_text_domain),
            'menu_title' => __('Install Plugins', $theme_text_domain),
            'installing' => __('Installing Plugin: %s', $theme_text_domain), // %1$s = plugin name
            'oops' => __('Something went wrong with the plugin API.', $theme_text_domain),
            'notice_can_install_required' => _n_noop('WP Enterprise Expansion requires the following plugin: %1$s.', 'WP Enterprise Expansion requires the following plugins: %1$s.'), // %1$s = plugin name(s)
            'notice_can_install_recommended' => _n_noop('WP Enterprise Expansion recommends the following plugin: %1$s.', 'WP Enterprise Expansion recommends the following plugins: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'), // %1$s = plugin name(s)
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'), // %1$s = plugin name(s)
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'), // %1$s = plugin name(s)
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins'),
            'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins'),
            'return' => __('Return to Required Plugins Installer', $theme_text_domain),
            'plugin_activated' => __('Plugin activated successfully.', $theme_text_domain),
            'complete' => __('All plugins installed and activated successfully. %s', $theme_text_domain), // %1$s = dashboard link
            'nag_type' => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa($pluginList, $config);

}// end wex_initialize




