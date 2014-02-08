<h1>Welcome to Gears!</h1>

<p>
	Gears is a simple, lightweight PHP-based publishing system that will allow you to quickly set up a website with both static pages as well as a blog in nothing flat. Gears requires that you have a server with PHP5 installed.
</p>

<p>
	Here are some very basic instructions.
</p>

<ol>
	<li>Copy the <code>gears</code> folder into the root folder of your website.</li>
	<li>Go into <code>gears/settings.php</code> and make sure everything is set up to your liking. By default, blog.php will be where your blog posts live.</li>
	<li>Start making some content. You can put new static pages in <code>gears/content/pages/</code> and new blog posts in <code>gears/content/posts/</code>. You will have to create links for the static pages manually while new blog posts show up automatically on your website.</li>
	<li>Presto! You are now using Gears like a pro! Not too hard, right?</li>
</ol>

<p>
	Gears come with two essential PHP functions: <code>Gears::Run()</code> and <code>Gears::Blog()</code> - the former will generate static pages and the latter will make a blog. If you want to change things up, the entire application lives in <code>gears/gears.php</code>. Let me know if you come up with something cool you'd like to see implemented!
</p>

<p>
	Have fun!<br />
	<em>Vegar</em>
</p>
