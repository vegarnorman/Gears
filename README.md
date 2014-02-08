Gears
=====


What is this?
-------------

Gears is a tiny publishing system developed by Vegar Norman. It was started as a little experiment to see how tiny a "content management system" could be made, without having to use a database to store content.


What will Gears do?
-------------------

Gears is built to do two things only:

+ It will create a tiny, but fully functional blog for you, complete with pagination.
+ It will enable you to serve and link static pages in a functional manner.


What will Gears NOT do?
-----------------------

+ It does not come with the ability to let users comment on blog posts.
+ It does not come with search capabilities.
+ It does not come with tagging or categorization.
+ It does not come with a back-end or control panel to create or modify posts or pages.


Features
--------

While Gears might not necessarily have the abundance of functionality other CMS systems can offer, it does what it is supposed to do and does it well. Also, it does come with a few nice features:

+ Incredibly easy to integrate into an existing website solution
+ Very low system requirements (PHP 5.3 or higher)
+ Very small in size


Getting started
---------------

+ Download and copy the entire `gears` folder into the root of your website.
+ Change up the `gears/settings.php` file to your liking.
+ Let PHP require the Gears script at the very top of any page you want to use Gears with, like so: `<?php require "gears/gears.php"; ?>`
+ To actually use the functionality in Gears, use `<?php Gears::Blog(); ?>` to run a blog on a page, and `<?php Gears::Run(); ?>` to have Gears dynamically load pages.
+ That's it, you're done installing Gears.


Other noteworthy stuff
----------------------

If you want to load a specific page or blog post, you can do so by using the `loadPage()` and `loadPost()` functions inside Gears. For instance, if you want to load the page `gears/content/pages/about-me.php`, you would call the function like so: `<?php Gears::loadPage("about-me"); ?>`. Note that we do not include the full path to the file nor the file extension - just the name of the file. Gears will know where to look. The same syntax is used for the `loadPost()` function.

Gears also comes with a few sample pages and posts, which you can delete if you want. Looking into the `gears/settings.php` file will probably also help if you're having problems.

Feel free to extend and build upon Gears as much as you'd like - drop me a line if you want to show me something you've built with it or if you have extended it to include more functionality!
