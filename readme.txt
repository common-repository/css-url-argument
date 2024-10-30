=== CSS Url Argument ===
Contributors: cema
Donate link: http://example.com/
Tags: css, argument, url, parameter, custom
Requires at least: 4.0
Tested up to: 4.9
Stable tag: 4.9
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds custom css file to header if specific url argument is present with a parameter.

== Description ==

Adds custom css file to header if specific url argument is present with a parameter.

For example:
	* you want to change the site title color without changing the theme or lossing the changes on update.
	  This plugin let's you add custom css files and either use them on load or on input of a custom parameter after the theme argument.
	  By using the plugin css (located `/wp-content/plugins/css_url_argument/scripts/css/` directory) or
	  use a custom css file (located `/wp-content/plugins/css_url_argument/custom_css/{your css file}` directory) with a parameter.

Use this plugin by adding `?theme={your css file name without .css}` to load custom css on parse of a parameter to the site.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/css_url_argument` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Upload Custom css file to `/wp-content/plugins/css_url_argument/custom_css/` directory.
4. Go to your domain url and add `?theme={your css file name}`


== Frequently Asked Questions ==

= Where to put the custom css files? =

look in the main folder for "custom_css".

= What does the shortcode do? =

If the code does not load because the page you are loading has no header at all, it will load the javascript that does the adding of custom css. So kind off a debug feature. 

== Screenshots ==

1. screenshot-1.png

== Changelog ==

= 1.1 =
* Changed; Cleaned up scripts
* Changed; ShortCode runs from js.
* Added; Example css file(s) yellow and purple.
* Added; Basic Admin Page.
* Added; Basic How To Admin SubPage.
* Added; Script to automatically load css on url parameter.
* Added; Plugin Css to automatically change anything needed like shortcode hide.
* Added; Shortcode [CSS_UP]

== Upgrade Notice ==

= 1.1 =
Upgrade notice: It's stable.

== Arbitrary section ==



== A brief Markdown Example ==

Ordered list:

1. Loads custom css when custom url parameter is present.
