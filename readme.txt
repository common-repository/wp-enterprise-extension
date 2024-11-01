=== WP Enterprise Extension ===
Contributors: kasigi
Tags: enterprise, acf, 
Requires at least: 3.1
Tested up to: 3.9.0
License: GPLv2 or later



== Description ==
The WP Enterprise Extension (WEX) is a multi-function plugin that adds a set of enhancements to tailor wordpress to an enterprise setting. It adds additional media upload types, customizes the post & page edit pages, and enables bulk installation of security and user management plugins (improving consistency across instances of wordpress in an organization).

WEX will additionally add a new page template - "Blank" which is a utility template that enables developers to create non-html pages.

== ACF Content Fields ==

The centerpiece of the WEX enhancements are the modifications to the post/page system.  It adds the following sections to the post/page:

Head Tag Customizer
Many posts/pages will need customized CSS, Java-script, or in rare cases, unique meta tags (this does NOT include the SEO meta tags).  The �Head Tag Customization� section enables the insertion of CSS and any other tags (usually Java-script) into the <head> of the page.
The Custom CSS section will be inserted inside a <style> tag, output below the inclusion of the external CSS files.
The Custom Meta / Java-script section will be summarily output into the <head> section.
Both fields recognize and process shortcodes.

Custom Footer Code
This field will inject HTML at the very bottom of the page.  While it can be used to display content, it�s real intended use is for developers to place code such as Java-script or one-off tracking pixels, or any other use where the code MUST be at the bottom of the page.

== Shortcodes ==

[theme_uri] - outputs the full URL of the blog and the active theme folder
[blog_uri] - shortcode equivalent of site_url()

== Installation ==
1) Upload WEX to the plugins folder
2) Activate WEX
3) WEX will assist in the download and installation of the other required plugins.

== Frequently Asked Questions ==

Are all of the additional plugins WEX suggests required?
No. WEX divides plugins into Recommended and Required groups.

Why is the CSS section of the Head Tag Customer separated from the Meta/Javascript tag and how is it different?
The CSS section actually simulates a separate CSS file being loaded rather than outputting it directly in the <head> tag. This is to enable many responsive/html5 libraries that support elderly versions of Internet Explorer that are only able to manage CSS in external files.

Does WEX have any specific customization to maintain functionality when combined with other plugins?
Yes. WEX is specifically designed to work with the WP No Category Base base plugin.

== Screenshots ==

* No screenshots

== Changelog ==

= 0.1.1 =
Updated TGB to 2.4.0 to support Wordpress 3.9
Formatted Code

= 0.1.0 =
Initial Release

== Upgrade Notice ==

