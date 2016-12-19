=== Plugin Name ===
Contributors: jonathanjanssens
Donate link: http://j14s.uk
Tags: custom post type, custom post type ui, cpt ui, export, sync
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 4.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Save Custom Post Type UI content types to a file so they can be added to source control and you only have to install CPT UI on your dev environment

== Description ==

Save Custom Post Type UI (CPT UI) content types to a file so they can be added to source control and you only have to install CPT UI on your dev environment.

When you update or save a custom post type or taxonomy in CPT UI, the export code will be automatically dumped into your theme in the `cptui` folder.

All you have to do is include those files (`cptui/post_types.php` and `cptui/taxonomies.php`) in your theme and all your post types and taxonomies will work in your different environments without having to install CPT UI on live or staging.

`
// only load if cptui not intialised
if(!function_exists('cptui_init')) {
    require 'cptui/post_types.php';
    require 'cptui/taxonomies.php';
}
`

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Plugin Name screen to configure the plugin
4. That's it

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.
