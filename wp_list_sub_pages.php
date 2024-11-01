<?php
/*
 Plugin Name: wp_list_sub_pages
 Plugin URI: http://www.php-experts.org
 Description: On every page, shows only pages of with the same ancestor (level 1 parent). Usefull to emulate "Categories" within static pages.
 Version: 0.1
 Author: Didier Sampaolo
 Author URI: http://www.php-experts.org
 */
error_reporting(E_ALL);

function wp_list_sub_pages($string) {
	$id = get_the_ID();
	$pages = get_pages('depth=1');

	$topParent = null;
	foreach($pages as $page) {
		if ($page->post_parent == "0") {
			if ($page->ID == $id) {
				$topParent = $id;
			}
		}
	}

	if($topParent == null) {
		foreach($pages as $page) {
			if ($page->post_parent == "0") {
				$pageID = $page->ID;
				$subpages = get_pages('child_of='.$pageID);
				foreach($subpages as $subpage) {
					if ($subpage->ID == $id) {
						$topParent = $pageID;
					}
				}
			}
		}
	}
	wp_list_pages('child_of='.$topParent.'&'.$string);
}
