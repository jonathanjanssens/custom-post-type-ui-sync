=== Plugin Name ===
Contributors: jonathanjanssens
Donate link: http://j14s.uk
Tags: custom post type, custom post type ui, cpt ui, export, sync
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Save Custom Post Type UI content types to a file so they can be added to source control and you only have to install CPT UI on your dev environment

== Description ==

Save Custom Post Type UI (CPT UI) content types to a file so they can be added to source control and you only have to install CPT UI on your dev environment.

When you update or save a custom post type or taxonomy in CPT UI, the export code will be automatically dumped into your theme in the `cptui` folder.

All you have to do is include those files (`cptui/post_types.php` and `cptui/taxonomies.php`) in your theme using the code below and all your post types and taxonomies will work in your different environments without having to install CPT UI on live or staging.

In functions.php, add:
`
// only load if Custom Post Type UI plugin is not intialised
if( !function_exists( 'cptui_init' ) ) {
    include 'cptui/post_types.php';
    include 'cptui/taxonomies.php';
}
`

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/custom-post-type-ui-sync` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. That's it

== Changelog ==

= 1.0 =
* Create plugin
