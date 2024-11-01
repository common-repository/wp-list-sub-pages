=== wp_list_sub_pages ===
Contributors: dsampaolo
Tags: wp_list_pages, sub_pages, page tree, page, plugin
Requires at least: 2.0
Tested up to: 2.7
Stable tag: trunk

wp_list_sub_pages will list only pages within the same category (top-level parent) as the current page.

== Description ==

This Wordpress plugin is oly one function. It takes exactly the same parameters as wp_list_pages, except for child_of, which is used internally.
When called on in template file, it will list :
* on the homepage of the blog, every page and subpage (default, this can be overriden by parameters)
* on every other page, only the pages with the same top-parent (parent of level 1)


== Installation ==

1. Upload `wp_list_sub_pages.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php wp_list_sub_pages(); ?>` in your templates

== Frequently Asked Questions ==

== Screenshots ==
