<?php

//  YOUR SITE
//  Site title, description, language and author.
define("SITE_NAME", "My Gears-powered page");
define("SITE_DESCRIPTION", "This is my awesome website, powered by the awesome Gears Publishing System!");
define("SITE_LANGUAGE", "en");
define("SITE_AUTHOR", "Your Name Here");


//	PATHS
//	On a clean install of Gears, these should probably be left untouched.
//	If you want different folder names or locations, change them here.
define("PAGES_FOLDER", "gears/content/pages/");
define("POSTS_FOLDER", "gears/content/posts/");
define("SYSTEM_FOLDER", "gears/system");


//	PAGE CONSTANTS
//	Add and change these as you see fit. Note that the 404 page should
//	not be moved from the system folder.
define("INDEX_PAGE", "index.php");
define("NOT_FOUND_PAGE", "gears/system/404.php");
define("NO_POSTS_EXIST_PAGE", "gears/system/no-posts.php");
define("BLOG_PAGE", "blog.php");
define("SINGLE_POST_PAGE", "single.php");
define("SINGLE_PAGE_PAGE", "/");


//	DOCUMENT EXTENSION
//	This is the file extension Gears will be looking for when searching
//	for posts and pages. Change at your own risk.
define("DOCUMENT_EXTENSION", ".php");


//	PAGINATION
//	The number of posts displayed on each page before the pagination
//	links are rendered.
define("PAGINATION", 5);


//  WRAPPERS
//  Wrap posts and pages in tags everytime they are shown
define("WRAP_PAGE", true);
define("WRAP_PAGE_TAG", "div");
define("WRAP_PAGE_CLASS", "gears-page");

define("WRAP_POST", true);
define("WRAP_POST_TAG", "article");
define("WRAP_POST_CLASS", "gears-post");


//  BLOG POST OPTIONS
//  Permalinks, post footers, etc.
define("SHOW_PERMALINK", true);
define("SHOW_POST_FOOTER", true);
define("POST_DATE_FORMAT", "d/m/Y");


//  USER INTERFACE LABELS
//  Defines the labels for your user interface. Change these up as much as you want.
define("LABEL_PERMALINK", "Permalink");
define("LABEL_PREVIOUS_PAGE", "Previous page");
define("LABEL_NEXT_PAGE", "Next page");
define("LABEL_LAST_CHANGED", "Post last changed:");

?>
