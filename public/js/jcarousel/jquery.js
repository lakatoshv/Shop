<!doctype html>
<!--[if IE 7 ]>		 <html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>		 <html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>		 <html class="no-js ie ie9 lte9>" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head data-live-domain="blog.jquery.com">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>jQuery 1.4.2 Released | Official jQuery Blog</title>

	<meta name="author" content="jQuery Foundation - jquery.org">
	<meta name="description" content="jQuery: The Write Less, Do More, JavaScript Library">

	<meta name="viewport" content="width=device-width">

	<link rel="shortcut icon" href="http://blog.jquery.com/wp-content/themes/jquery.com/i/favicon.ico">

	<link rel="stylesheet" href="http://blog.jquery.com/wp-content/themes/jquery/css/base.css?v=1">
	<link rel="stylesheet" href="http://blog.jquery.com/wp-content/themes/jquery.com/style.css">
	<link rel="pingback" href="http://blog.jquery.com/xmlrpc.php" />
	<!--[if lt IE 7]><link rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->

	<script src="http://blog.jquery.com/wp-content/themes/jquery/js/modernizr.custom.2.6.2.min.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(unescape('%3Cscript src="http://blog.jquery.com/wp-content/themes/jquery/js/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>

	<script src="http://blog.jquery.com/wp-content/themes/jquery/js/plugins.js"></script>
	<script src="http://blog.jquery.com/wp-content/themes/jquery/js/main.js"></script>

	<script src="//use.typekit.net/wde1aof.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Official jQuery Blog &raquo; Feed" href="http://blog.jquery.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Official jQuery Blog &raquo; Comments Feed" href="http://blog.jquery.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Official jQuery Blog &raquo; jQuery 1.4.2 Released Comments Feed" href="http://blog.jquery.com/2010/02/19/jquery-142-released/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/blog.jquery.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.2"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='https://api.w.org/' href='http://blog.jquery.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://blog.jquery.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://blog.jquery.com/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='14 Days of jQuery Summary: Days 8-14, jQuery 1.4.1 Released' href='http://blog.jquery.com/2010/01/29/14-days-of-jquery-summary-days-8-14-jquery-1-4-1-released/' />
<link rel='next' title='jQuery Conference 2010: San Francisco Bay Area Announced' href='http://blog.jquery.com/2010/03/15/jquery-conference-2010-san-francisco-announced/' />
<meta name="generator" content="WordPress 4.7.2" />
<link rel="canonical" href="http://blog.jquery.com/2010/02/19/jquery-142-released/" />
<link rel='shortlink' href='http://blog.jquery.com/?p=370' />
<link rel="alternate" type="application/json+oembed" href="http://blog.jquery.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fblog.jquery.com%2F2010%2F02%2F19%2Fjquery-142-released%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://blog.jquery.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fblog.jquery.com%2F2010%2F02%2F19%2Fjquery-142-released%2F&#038;format=xml" />

</head>
<body class="jquery singular">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<header>
	<section id="global-nav">
		<nav>
			<div class="constrain">
				<ul class="projects">
					<li class="project jquery"><a href="http://jquery.com/" title="jQuery">jQuery</a></li>
					<li class="project jquery-ui"><a href="http://jqueryui.com/" title="jQuery UI">jQuery UI</a></li>
					<li class="project jquery-mobile"><a href="http://jquerymobile.com/" title="jQuery Mobile">jQuery Mobile</a></li>
					<li class="project sizzlejs"><a href="http://sizzlejs.com/" title="Sizzle">Sizzle</a></li>
					<li class="project qunitjs"><a href="http://qunitjs.com/" title="QUnit">QUnit</a></li>
				</ul>
				<ul class="links">
					<li><a href="http://plugins.jquery.com/">Plugins</a></li>
					<li class="dropdown"><a href="http://contribute.jquery.org/">Contribute</a>
						<ul>
							<li><a href="http://contribute.jquery.org/cla/">CLA</a></li>
							<li><a href="http://contribute.jquery.org/style-guide/">Style Guides</a></li>
							<li><a href="http://contribute.jquery.org/triage/">Bug Triage</a></li>
							<li><a href="http://contribute.jquery.org/code/">Code</a></li>
							<li><a href="http://contribute.jquery.org/documentation/">Documentation</a></li>
							<li><a href="http://contribute.jquery.org/web-sites/">Web Sites</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="http://events.jquery.org/">Events</a>
						<ul class="wide">
							<li><a href="http://appendto.com/what-we-do/training/schedule/jquery-virtual-training-april-2014/">Apr 16-17 | jQuery Virtual Training</a></li>
							<li><a href="http://jqueryuk.com/?utm_source=jqueryorg&utm_medium=banner&utm_campaign=jqueryorgbanner">May 16 | jQuery UK</a></li>
							<li><a href="http://appendto.com/what-we-do/training/schedule/jquery-virtual-training-june-2014/">Jun 17-19 | jQuery Virtual Training</a></li>
							<li><a href="http://events.jquery.org/2014/chicago/">Sep 12-13 | jQuery Chicago</a></li>
							<li><a href="http://2014.cssdevconf.com/">Oct 13-15 | CSS Dev Conf 2014</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="https://jquery.org/support/">Support</a>
						<ul>
							<li><a href="http://learn.jquery.com/">Learning Center</a></li>
							<li><a href="http://try.jquery.com/">Try jQuery</a></li>
							<li><a href="http://irc.jquery.org/">IRC/Chat</a></li>
							<li><a href="http://forum.jquery.com/">Forums</a></li>
							<li><a href="http://stackoverflow.com/tags/jquery/info">Stack Overflow</a></li>
							<li><a href="https://jquery.org/support/">Commercial Support</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="https://jquery.org/">jQuery Foundation</a>
						<ul>
							<li><a href="https://jquery.org/join/">Join</a></li>
							<li><a href="https://jquery.org/members/">Members</a></li>
							<li><a href="https://jquery.org/team/">Team</a></li>
							<li><a href="http://brand.jquery.org/">Brand Guide</a></li>
							<li><a href="https://jquery.org/donate/">Donate</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</section>
</header>

<div id="container">
	<div id="logo-events" class="constrain clearfix">
		<h2 class="logo"><a href="/" title="Official jQuery Blog">Official jQuery Blog</a></h2>

		<aside><div id="broadcast"></div></aside>
	</div>

	<nav id="main" class="constrain clearfix">
		<div class="menu-top-container">
	<ul id="menu-top" class="menu">
<li class="menu-item"><a href="http://jquery.com/download/">Download</a></li>
<li class="menu-item"><a href="http://api.jquery.com/">API Documentation</a></li>
<li class="menu-item current"><a href="http://blog.jquery.com/">Blog</a></li>
<li class="menu-item"><a href="http://plugins.jquery.com/">Plugins</a></li>
<li class="menu-item"><a href="http://jquery.com/browser-support/">Browser Support</a></li>
	</ul>
</div>

		<form method="get" class="searchform" action="http://blog.jquery.com/">
	<button type="submit" class="icon-search"><span class="visuallyhidden">search</span></button>
	<label>
		<span class="visuallyhidden">Search Official jQuery Blog</span>
		<input type="text" name="s" value=""
			placeholder="Search">
	</label>
</form>
	</nav>

	<div id="content-wrapper" class="clearfix row">


<div class="content-right twelve columns">
	<div id="content">
		<h1 class="entry-title">jQuery 1.4.2 Released</h1>
				<div class="entry-posted">
			<span class="sep">Posted on </span><a href="http://blog.jquery.com/2010/02/19/jquery-142-released/" title="4:09 pm" rel="bookmark"><time class="entry-date" datetime="2010-02-19T16:09:56+00:00" pubdate>February 19, 2010</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="http://blog.jquery.com/author/admin/" title="View all posts by John Resig" rel="author">John Resig</a></span></span>		</div>
				<hr>

		
<p>jQuery 1.4.2 is now out! This is the second minor release on top of jQuery 1.4, fixing some outstanding bugs from the 1.4 release and landing some nice improvements.</p>
<p>I would like to thank the following people that provided patches for this release: Ben Alman, Justin Meyer, Neeraj Singh, and Noah Sloan.</p>
<h3>Downloading</h3>
<p>As usual, we provide two copies of jQuery, one minified (we now use the <a href="http://code.google.com/closure/compiler/">Google Closure Compiler</a> as the default minifier) and one uncompressed (for debugging or reading).</p>
<ul>
<li><a href="http://code.jquery.com/jquery-1.4.2.min.js">jQuery Minified</a> (24kb <a href="http://www.julienlecomte.net/blog/2007/08/13/">Gzipped</a>)</li>
<li><a href="http://code.jquery.com/jquery-1.4.2.js">jQuery Regular</a> (155kb)</li>
</ul>
<p>You can feel free to include the above URLs directly into your site and you will get the full performance benefits of a quickly-loading jQuery.</p>
<p>Additionally you can also load the URLs directly from either Google or Microsoft&#8217;s CDNs:</p>
<ul>
<li><a href="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js</a></li>
<li><a href="http://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js">http://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js</a></li>
</ul>
<h3>New Features</h3>
<p>A full list of the API changes can be found in the <a href="http://api.jquery.com/category/version/1.4.2/">1.4.2 category on the jQuery API site</a>.</p>
<p>In this release we&#8217;ve added two new methods: <strong><a href="http://api.jquery.com/delegate">.delegate()</a> and <a href="http://api.jquery.com/undelegate">.undelegate()</a></strong>. These methods serve as complements to the existing <a href="http://api.jquery.com/live">.live()</a> and <a href="http://api.jquery.com/die">.die()</a> methods in jQuery. They simplify the process of watching for specific events from a certain root within the document.</p>
<p>For example:</p>
<pre class="javascript">$("table").delegate("td", "hover", function(){
	$(this).toggleClass("hover");
});</pre>
<p>This is equivalent to the following code written using <code>.live()</code>:</p>
<pre class="javascript">$("table").each(function(){
	$("td", this).live("hover", function(){
		$(this).toggleClass("hover");
	});
});</pre>
<p>Additionally, <code>.live()</code> is roughly equivalent to the following <code>.delegate()</code> code.</p>
<pre class="javascript">$(document).delegate("td", "hover", function(){
	$(this).toggleClass("hover");
});</pre>
<h3>What&#8217;s Changed?</h3>
<p>There has been some large code rewrites within this release, both for performance and for fixing long-standing issues.</p>
<h4>Performance Improvements</h4>
<p>As is the case with virtually every release of jQuery: We&#8217;ve worked hard to continue to improve the performance of the code base, making sure that you&#8217;re provided with the best performing JavaScript code possible.</p>
<p>According to the numbers presented by the <a href="http://ejohn.org/files/142/">Taskspeed benchmark</a> we&#8217;ve improved the performance of jQuery about 2x compared to jQuery 1.4.1 and about 3x compared to jQuery 1.3.2.</p>
<p><center><a href="http://www.flickr.com/photos/jeresig/4366089781/" title="jQuery Taskspeed Results (Feb 14, 2010) by John Resig, on Flickr"><img src="http://farm5.static.flickr.com/4015/4366089781_509c29aff8.jpg" width="500" height="375" alt="jQuery Taskspeed Results (Feb 14, 2010)" /></a></center></p>
<p>Specifically we&#8217;ve improved the performance of 4 areas within jQuery:</p>
<ul>
<li>The performance of calling <a href="http://api.jquery.com/bind">.bind()</a> and <a href="http://api.jquery.com/unbind">.unbind()</a>. (<a href="http://dev.jquery.com/ticket/5972">Ticket</a>)</li>
<li>The performance of <a href="http://api.jquery.com/empty">.empty()</a>, <a href="http://api.jquery.com/remove">.remove()</a>, and <a href="http://api.jquery.com/html">.html()</a>. (<a href="http://dev.jquery.com/ticket/5974">Ticket</a>)</li>
<li>The performance of inserting a single DOM node into a document. (<a href="http://dev.jquery.com/ticket/5979">Ticket</a>, <a href="http://github.com/jquery/jquery/commit/0db207da238e879dad20f68178e6248750d3b984">Additional Commit</a>)</li>
<li>The performace of calling <code>$("body")</code>. (<a href="http://github.com/jquery/jquery/commit/b8076a914ba9d400dc9c48d866b145df6fabafcf">Commit</a>)</li>
</ul>
<p>While comprehensive benchmarks like Taskspeed can be interesting if deconstructed into individual sub-tests for further study, as a project we tend to stay away from using them as an accurate measure of true, overall, library performance. Considering how many aspects make up a library, not to mention the different techniques that they offer, cumulative results rarely reflect how an actual user may use a library.</p>
<p>For example, we saw significant overall performance speed-ups in Taskspeed simply by optimizing the <code>$("body")</code> selector because it&#8217;s called hundreds of times within the tests. Additionally we saw large gains by optimizing <code>.bind()</code> and <code>.unbind()</code> by a fraction of a millisecond &#8211; an inconsequential amount &#8211; especially considering that any cases where you would bind hundreds of events you would likely want to use <code>.live()</code> or <code>.delegate()</code> instead.</p>
<p>We&#8217;ve collected some <a href="http://www.flickr.com/photos/jeresig/4366089661/">results from the other major libraries</a> as well but are less interested in those results and far more interested in the performance improvements that we&#8217;ve made relative to older versions of jQuery itself.</p>
<p>We will continue to work on optimizing the jQuery code base &#8211; indefinitely. It&#8217;s always a major concern for us to try and provide the fastest JavaScript/DOM-development experience possible. And yes, there will likely always be ways to gain additional performance &#8211; either through internal optimizations or by pushing critical functionality off into browser-land for standardization.</p>
<h4>Event Rewrite</h4>
<p>The largest internal changes have come through a much-needed structural rewrite of the events module. Many quirky issues related to event binding have been resolved with these fixes.</p>
<p>Namely event handlers are no longer stored as object properties in jQuery&#8217;s internal object store (with metadata attached to the handlers). Instead they&#8217;re now stored within an internal array of objects.</p>
<p>If you&#8217;ve ever had the opportunity to play around with <code>.data("events")</code> on a jQuery element you would find that it returns an object with all the event types currently bound, within it.</p>
<p>To enumerate some of the changes that have occurred during this rewrite:</p>
<ul>
<li>It&#8217;s now possible to bind identical handlers with different data, namespaces, and event types universally.</li>
<li>Execution of event handlers will continue after one handler removes itself (or its sibling handlers).</li>
<li>We no longer attach data/namespace information directly to the event handlers (only a unique tracking ID).</li>
<li>We no longer use proxy functions, internally, to try and encapsulate handlers.</li>
<li>Execution order of events is now guaranteed in all browsers. Google Chrome had a long-standing error in their object-looping logic that has been routed around.</li>
</ul>
<p>As a side-effect of these changes we had to change the newly-exposed special add/special remove APIs in order to accommodate the new event data objects. Ben Alman is in the process of writing up a large tutorial on jQuery&#8217;s special event system and we will be making additional announcements when that occurs.</p>
<h4>Bug Fixes</h4>
<p>There were a total of <a href="http://dev.jquery.com/report/40">40 tickets closed</a> in this minor release. Some relating to differences between jQuery 1.3.2 and jQuery 1.4.x, some fixing long-standing issues (like in the case of the event module rewrite).</p>
<p><strong>Raw Data</strong></p>
<p>This is the raw data that we collected to generate the aforementioned charts.</p>
<pre>	jQuery 1.3.2	jQuery 1.4.1	jQuery 1.4.2	Prototype 1.6.1	MooTools 1.2.4	Dojo 1.4.1	YUI 3.0.0
FF 3.5	2182	806	 565	 2156	 1073	 575	 1885
FF 3.6	1352	677	 519	 2067	 857	 750	 1494
Opera	983	697	 222	 793	 678	 218	 1201
Safari	610	435	 252	 315	 235	 238	 612
Chrome	1591	703	 293	 271	 312	 222	 745
IE 8	2470	1937	 1141	 3045	 4749	 1420	 2922
IE 7	4468	3470	 1705	 9863	 10034	 1737	 5830
IE 6	6517	4468	 2110	 13499	 11453	 2202	 7295</pre>
			<div id="comments">
	
	
			<h2 id="comments-title">
			119 thoughts on &ldquo;<span>jQuery 1.4.2 Released</span>&rdquo;		</h2>

				<nav id="comment-nav-above">
			<h1 class="assistive-text">Comment navigation</h1>
			<div class="nav-previous"><a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-2/#comments" >&larr; Older Comments</a></div>
			<div class="nav-next"></div>
		</nav>
		
		<ol class="commentlist">
				<li class="comment even thread-even depth-1" id="li-comment-525065">
		<article id="comment-525065" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://1.gravatar.com/avatar/dd68d66041ebc530f186d10d965fe346?s=68&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/dd68d66041ebc530f186d10d965fe346?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://seomanoj.blogspot.com' rel='external nofollow' class='url'>Manoj</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-525065"><time pubdate datetime="2010-11-18T05:21:43+00:00">November 18, 2010 at 5:21 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>I am Preparing for Google Adword Professional exam.<br />
Is there any practice exam available????.<br />
Please give me details about it</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-525075">
		<article id="comment-525075" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://1.gravatar.com/avatar/d7c1c570509ee5a3d681115588c486b4?s=68&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/d7c1c570509ee5a3d681115588c486b4?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://www.taurofc.com' rel='external nofollow' class='url'>Roberto</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-525075"><time pubdate datetime="2010-11-20T02:19:33+00:00">November 20, 2010 at 2:19 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>Hi People<br />
I got a menu that use jquery 1.3.2 and get problems width this post gadget because of jquery 1.4.2. ¿What can I do? regards</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment even thread-even depth-1" id="li-comment-525117">
		<article id="comment-525117" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://0.gravatar.com/avatar/6b9598811ade4f6b1437afd1d9a65114?s=68&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/6b9598811ade4f6b1437afd1d9a65114?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://www.daskarhosting.com' rel='external nofollow' class='url'>Daskar</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-525117"><time pubdate datetime="2010-11-29T01:38:28+00:00">November 29, 2010 at 1:38 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>If you want to know more about the SECRETS of SEO join with me</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-525120">
		<article id="comment-525120" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://1.gravatar.com/avatar/dd68d66041ebc530f186d10d965fe346?s=68&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/dd68d66041ebc530f186d10d965fe346?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://pamanojseo.wordpress.com' rel='external nofollow' class='url'>Manoj</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-525120"><time pubdate datetime="2010-11-29T23:43:26+00:00">November 29, 2010 at 11:43 pm</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>Question:<br />
 Is there a way to see how the pages that have been indexed are ranked without having to type it in at Google and then start searching ?</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment even thread-even depth-1" id="li-comment-525136">
		<article id="comment-525136" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://1.gravatar.com/avatar/dd68d66041ebc530f186d10d965fe346?s=68&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/dd68d66041ebc530f186d10d965fe346?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://pamanojseo.wordpress.com' rel='external nofollow' class='url'>seo in chennai</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-525136"><time pubdate datetime="2010-12-03T09:29:37+00:00">December 3, 2010 at 9:29 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>What do you think of pop-under exchanges? I&#8217;m having trouble getting visitors to my site,<br />
so I&#8217;m thinking about trying one. Are they effective?</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-525208">
		<article id="comment-525208" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://0.gravatar.com/avatar/0a570f92a8600e72b816bf4de4175810?s=68&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/0a570f92a8600e72b816bf4de4175810?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://bridge-india.in' rel='external nofollow' class='url'>Haneefa Abdulla</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-525208"><time pubdate datetime="2010-12-28T06:06:17+00:00">December 28, 2010 at 6:06 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>Hi,</p>
<p>I E Browser reports an error warning on line 4618 when I load jquery from the following library.</p>
<p><a href="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js" rel="nofollow">http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js</a><br />
I need this js for the right functioning of jScrollPane. Please fix this error</p>
<p>Haneefa<br />
Bridge-India</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="post pingback">
		<p>Pingback: <a href='http://lainvestmentrealestate.wordpress.com/2011/03/11/reasons-to-be-excited-about-drupal-7/' rel='external nofollow' class='url'>Reasons to be excited about Drupal 7 &laquo; Los Angeles Investment Realestate</a></p>
	</li><!-- #comment-## -->
	<li class="post pingback">
		<p>Pingback: <a href='http://loft42seattle.com/reasons-to-be-excited-about-drupal-7/' rel='external nofollow' class='url'>Reasons to be excited about Drupal 7 :: Real Estate Tips</a></p>
	</li><!-- #comment-## -->
	<li class="post pingback">
		<p>Pingback: <a href='http://linux.genuineinteractive.com/genuine-corporate/web/reasons-to-be-excited-about-drupal-7/' rel='external nofollow' class='url'>Reasons to be excited about Drupal 7 &raquo; Genuine is the digital agency for the age of engagement</a></p>
	</li><!-- #comment-## -->
	<li class="post pingback">
		<p>Pingback: <a href='http://programmaticponderings.wordpress.com/2011/09/28/interactive-form-functionality-on-the-client-side-using-jquery/' rel='external nofollow' class='url'>Interactive Form Functionality on the Client-Side Using jQuery &laquo; Programmatic Ponderings</a></p>
	</li><!-- #comment-## -->
	<li class="post pingback">
		<p>Pingback: <a href='http://www.colourblendcreative.com/c/using-knockout-js-to-perform-crud-operations-ajax-in-asp-net/' rel='external nofollow' class='url'>Using knockout to perform CRUD operations (Ajax) in ASP.NET | Colour Blend Creative</a></p>
	</li><!-- #comment-## -->
	<li class="comment even thread-even depth-1" id="li-comment-531434">
		<article id="comment-531434" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://1.gravatar.com/avatar/1a20c0ab7327369c5970156c207857cf?s=68&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/1a20c0ab7327369c5970156c207857cf?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://www.laurizon.ca' rel='external nofollow' class='url'>Laure @Laurizon</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-531434"><time pubdate datetime="2012-04-15T19:04:05+00:00">April 15, 2012 at 7:04 pm</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>Good to read well explained complexe programming. Not always easy to find that kind of documentation.<br />
Good work jQuery! Thanks for all the information.</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-533400">
		<article id="comment-533400" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://2.gravatar.com/avatar/8bcecacd4a2db4f36e068191b64d6290?s=68&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/8bcecacd4a2db4f36e068191b64d6290?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn">seoul national university</span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-533400"><time pubdate datetime="2012-09-20T03:05:03+00:00">September 20, 2012 at 3:05 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>Although not a perfect alternative to fighting the growing spam problem, we turned off the built in commenting system and prefer people comment through their Facebook account.</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment even thread-even depth-1" id="li-comment-533736">
		<article id="comment-533736" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://2.gravatar.com/avatar/2ab5665a6eb2f0006d501307f0d909d7?s=68&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/2ab5665a6eb2f0006d501307f0d909d7?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://www.tuljabhavani.in' rel='external nofollow' class='url'>Kedar</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-533736"><time pubdate datetime="2012-10-02T06:58:10+00:00">October 2, 2012 at 6:58 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>After Successful efforts of developers Now They developed Jquery 1.8.2<br />
Congrats</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-533967">
		<article id="comment-533967" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://2.gravatar.com/avatar/2f2206e50c2c95a29b57642bb747e407?s=68&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/2f2206e50c2c95a29b57642bb747e407?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://www.kobimedya.com' rel='external nofollow' class='url'>kobimedya</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-533967"><time pubdate datetime="2012-10-10T04:04:46+00:00">October 10, 2012 at 4:04 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>Good to read well explained complexe programming.</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="post pingback">
		<p>Pingback: <a href='http://programmaticponderings.wordpress.com/2010/04/03/interactive-form-functionality-on-the-client-side-using-jquery/' rel='external nofollow' class='url'>Interactive Form Functionality on the Client-Side Using jQuery &laquo; ProgrammaticPonderings</a></p>
	</li><!-- #comment-## -->
	<li class="comment even thread-even depth-1" id="li-comment-535743">
		<article id="comment-535743" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://2.gravatar.com/avatar/83b4fd2822503d408099d1c18bc97733?s=68&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/83b4fd2822503d408099d1c18bc97733?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://www.beybi.org' rel='external nofollow' class='url'>beybi</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-535743"><time pubdate datetime="2013-01-21T09:33:38+00:00">January 21, 2013 at 9:33 am</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>After Successful efforts of developers Now They developed Jquery 1.8.2<br />
 Congrats</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-535877">
		<article id="comment-535877" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<img alt='' src='http://2.gravatar.com/avatar/b82ab5a98e953118c3a250cac741d2d6?s=68&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/b82ab5a98e953118c3a250cac741d2d6?s=136&amp;d=mm&amp;r=g 2x' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn"><a href='http://adopte-une-copine.com/' rel='external nofollow' class='url'>Adopte</a></span> on <a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-3/#comment-535877"><time pubdate datetime="2013-01-24T19:49:21+00:00">January 24, 2013 at 7:49 pm</time></a> <span class="says">said:</span>
									</div><!-- .comment-author .vcard -->

				
			</div>

			<div class="comment-content"><p>Good post and right to the point. I don&#8217;t know if this is in fact the best place to ask but do you folks have any ideea where to employ some professional writers? Thanks in advance :)</p>
</div>

			<div class="reply">
							</div><!-- .reply -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<li class="post pingback">
		<p>Pingback: <a href='http://metodoikt.wordpress.com/2013/02/11/optimiza-tu-javascript-para-mejorar-el-rendimiento-de-tu-web/' rel='external nofollow' class='url'>Optimiza tu javascript para mejorar el rendimiento de tu web &laquo; Ideas, Knowledge y Tecnología</a></p>
	</li><!-- #comment-## -->
		</ol>

				<nav id="comment-nav-below">
			<h1 class="assistive-text">Comment navigation</h1>
			<div class="nav-previous"><a href="http://blog.jquery.com/2010/02/19/jquery-142-released/comment-page-2/#comments" >&larr; Older Comments</a></div>
			<div class="nav-next"></div>
		</nav>
		
	
	
</div><!-- #comments -->
	</div>
	<div id="sidebar" class="widget-area" role="complementary">
	<aside class="widget">
		<h3 class="widget-title">Categories</h3>
		<ul>
				<li class="cat-item cat-item-16"><a href="http://blog.jquery.com/category/events/" >Events</a>
</li>
	<li class="cat-item cat-item-20"><a href="http://blog.jquery.com/category/foundation/" >Foundation</a>
</li>
	<li class="cat-item cat-item-3"><a href="http://blog.jquery.com/category/jquery/" >jQuery</a>
</li>
	<li class="cat-item cat-item-2"><a href="http://blog.jquery.com/category/jquery-ui/" >jQuery UI</a>
</li>
	<li class="cat-item cat-item-24"><a href="http://blog.jquery.com/category/projects/" >Projects</a>
</li>
	<li class="cat-item cat-item-4"><a href="http://blog.jquery.com/category/weekly-news/" >Weekly News</a>
</li>
		</ul>
	</aside>
	<aside class="widget">
		<h3 class="widget-title">Recent Posts</h3>
		<ul>
			<li><a href="http://blog.jquery.com/2016/09/22/jquery-3-1-1-released/">jQuery 3.1.1 Released!</a></li><li><a href="http://blog.jquery.com/2016/07/27/the-jquery-foundation-and-standards-2/">The jQuery Foundation and Standards</a></li><li><a href="http://blog.jquery.com/2016/07/07/jquery-3-1-0-released-no-more-silent-errors/">jQuery 3.1.0 Released - No More Silent Errors</a></li><li><a href="http://blog.jquery.com/2016/06/09/jquery-3-0-final-released/">jQuery 3.0 Final Released!</a></li><li><a href="http://blog.jquery.com/2016/05/20/jquery-3-0-release-candidate-released/">jQuery 3.0 Release Candidate...Released!</a></li><li><a href="http://blog.jquery.com/2016/05/20/jquery-1-12-4-and-2-2-4-released/">jQuery 1.12.4 and 2.2.4 Released</a></li><li><a href="http://blog.jquery.com/2016/05/19/jquery-migrate-1-4-1-released-and-the-path-to-jquery-3-0/">jQuery Migrate 1.4.1 released, and the path to jQuery 3.0</a></li><li><a href="http://blog.jquery.com/2016/04/19/eslint-joins-the-jquery-foundation/">ESLint Joins the jQuery Foundation</a></li><li><a href="http://blog.jquery.com/2016/04/05/jquery-1-12-3-and-2-2-3-released/">jQuery 1.12.3 and 2.2.3 Released</a></li><li><a href="http://blog.jquery.com/2016/03/24/community-notice-on-npm-dependencies-in-your-projects/">Community Notice on npm dependencies in your projects</a></li>		</ul>
	</aside>
	<aside class="widget">
		<h3 class="widget-title">Archives</h3>
		<ul>
				<li><a href='http://blog.jquery.com/2016/09/'>September 2016</a></li>
	<li><a href='http://blog.jquery.com/2016/07/'>July 2016</a></li>
	<li><a href='http://blog.jquery.com/2016/06/'>June 2016</a></li>
	<li><a href='http://blog.jquery.com/2016/05/'>May 2016</a></li>
	<li><a href='http://blog.jquery.com/2016/04/'>April 2016</a></li>
	<li><a href='http://blog.jquery.com/2016/03/'>March 2016</a></li>
	<li><a href='http://blog.jquery.com/2016/02/'>February 2016</a></li>
	<li><a href='http://blog.jquery.com/2016/01/'>January 2016</a></li>
	<li><a href='http://blog.jquery.com/2015/12/'>December 2015</a></li>
	<li><a href='http://blog.jquery.com/2015/11/'>November 2015</a></li>
	<li><a href='http://blog.jquery.com/2015/09/'>September 2015</a></li>
	<li><a href='http://blog.jquery.com/2015/07/'>July 2015</a></li>
	<li><a href='http://blog.jquery.com/2015/04/'>April 2015</a></li>
	<li><a href='http://blog.jquery.com/2015/03/'>March 2015</a></li>
	<li><a href='http://blog.jquery.com/2015/02/'>February 2015</a></li>
	<li><a href='http://blog.jquery.com/2015/01/'>January 2015</a></li>
	<li><a href='http://blog.jquery.com/2014/12/'>December 2014</a></li>
	<li><a href='http://blog.jquery.com/2014/10/'>October 2014</a></li>
	<li><a href='http://blog.jquery.com/2014/09/'>September 2014</a></li>
	<li><a href='http://blog.jquery.com/2014/08/'>August 2014</a></li>
	<li><a href='http://blog.jquery.com/2014/07/'>July 2014</a></li>
	<li><a href='http://blog.jquery.com/2014/05/'>May 2014</a></li>
	<li><a href='http://blog.jquery.com/2014/04/'>April 2014</a></li>
	<li><a href='http://blog.jquery.com/2014/03/'>March 2014</a></li>
	<li><a href='http://blog.jquery.com/2014/01/'>January 2014</a></li>
	<li><a href='http://blog.jquery.com/2013/12/'>December 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/11/'>November 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/10/'>October 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/09/'>September 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/08/'>August 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/07/'>July 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/06/'>June 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/05/'>May 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/04/'>April 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/03/'>March 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/02/'>February 2013</a></li>
	<li><a href='http://blog.jquery.com/2013/01/'>January 2013</a></li>
	<li><a href='http://blog.jquery.com/2012/12/'>December 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/11/'>November 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/10/'>October 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/09/'>September 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/08/'>August 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/07/'>July 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/06/'>June 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/05/'>May 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/04/'>April 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/03/'>March 2012</a></li>
	<li><a href='http://blog.jquery.com/2012/01/'>January 2012</a></li>
	<li><a href='http://blog.jquery.com/2011/12/'>December 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/11/'>November 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/10/'>October 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/09/'>September 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/08/'>August 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/06/'>June 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/05/'>May 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/04/'>April 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/03/'>March 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/02/'>February 2011</a></li>
	<li><a href='http://blog.jquery.com/2011/01/'>January 2011</a></li>
	<li><a href='http://blog.jquery.com/2010/12/'>December 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/11/'>November 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/10/'>October 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/09/'>September 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/08/'>August 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/07/'>July 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/06/'>June 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/04/'>April 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/03/'>March 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/02/'>February 2010</a></li>
	<li><a href='http://blog.jquery.com/2010/01/'>January 2010</a></li>
	<li><a href='http://blog.jquery.com/2009/12/'>December 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/10/'>October 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/08/'>August 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/07/'>July 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/06/'>June 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/05/'>May 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/04/'>April 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/03/'>March 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/02/'>February 2009</a></li>
	<li><a href='http://blog.jquery.com/2009/01/'>January 2009</a></li>
	<li><a href='http://blog.jquery.com/2008/12/'>December 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/11/'>November 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/10/'>October 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/09/'>September 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/08/'>August 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/07/'>July 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/06/'>June 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/05/'>May 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/03/'>March 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/02/'>February 2008</a></li>
	<li><a href='http://blog.jquery.com/2008/01/'>January 2008</a></li>
	<li><a href='http://blog.jquery.com/2007/12/'>December 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/11/'>November 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/10/'>October 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/09/'>September 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/08/'>August 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/07/'>July 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/06/'>June 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/05/'>May 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/04/'>April 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/03/'>March 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/02/'>February 2007</a></li>
	<li><a href='http://blog.jquery.com/2007/01/'>January 2007</a></li>
	<li><a href='http://blog.jquery.com/2006/12/'>December 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/11/'>November 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/10/'>October 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/09/'>September 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/08/'>August 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/07/'>July 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/06/'>June 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/05/'>May 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/04/'>April 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/03/'>March 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/02/'>February 2006</a></li>
	<li><a href='http://blog.jquery.com/2006/01/'>January 2006</a></li>
		</ul>
	</aside>
</div>
</div>

	</div>
</div>

<footer class="clearfix simple">
	<div class="constrain">
		<div class="row">
			<div class="six columns offset-by-three">
				<h3><span>Books</span></h3>
				<ul class="books">
					<li>
						<a href="http://www.packtpub.com/learning-jquery-with-simple-javascript-techniques-fourth-edition/book">
							<img src="http://blog.jquery.com/wp-content/themes/jquery/content/books/learning-jquery-4th-ed.jpg" alt="Learning jQuery 4th Edition by Karl Swedberg and Jonathan Chaffer" width="92" height="114">
							Learning jQuery Fourth Edition
							<cite>Karl Swedberg and Jonathan Chaffer</cite>
						</a>
					</li>
					<li>
						<a href="http://www.manning.com/derosa?a_aid=141d9491&a_bid=bdd5b7ad">
							<img src="http://blog.jquery.com/wp-content/themes/jquery/content/books/jquery-in-action.jpg" alt="jQuery in Action by Bear Bibeault, Yehuda Katz, and Aurelio De Rosa" width="92" height="114">
							jQuery in Action
							<cite>Bear Bibeault, Yehuda Katz, and Aurelio De Rosa</cite>
						</a>
					</li>
					<li>
						<a href="http://www.syncfusion.com/resources/techportal/ebooks/jquery?utm_medium=BizDev-jQuery.org0513">
							<img src="http://blog.jquery.com/wp-content/themes/jquery/content/books/jquery-succinctly.jpg" alt="jQuery Succinctly by Cody Lindley" width="92" height="114">
							jQuery Succinctly
							<cite>Cody Lindley</cite>
						</a>
					</li>
				</ul>
			</div>
		</div>

		
<div id="legal">
	<ul class="footer-site-links">
			<li><a class="icon-pencil" href="http://learn.jquery.com/">Learning Center</a></li>
			<li><a class="icon-group" href="http://forum.jquery.com/">Forum</a></li>
			<li><a class="icon-wrench" href="http://api.jquery.com/">API</a></li>
			<li><a class="icon-twitter" href="http://twitter.com/jquery">Twitter</a></li>
			<li><a class="icon-comments" href="http://irc.jquery.org/">IRC</a></li>
			<li><a class="icon-github" href="https://github.com/jquery">GitHub</a></li>
	</ul>
	<p class="copyright">
		Copyright 2017 <a href="https://jquery.org/team/">The jQuery Foundation</a>.
		<a href="https://jquery.org/license/">jQuery License</a>
		<span class="sponsor-line"><a href="http://digitalocean.com" rel="nofollow" class="do-link">Web hosting by Digital Ocean</a> | <a href="http://www.stackpath.com" rel="nofollow" class="sp-link">CDN by StackPath</a></span>
	</p>
</div>

	</div>
</footer>

<script type='text/javascript' src='http://blog.jquery.com/wp-includes/js/wp-embed.min.js?ver=4.7.2'></script>

</body>
</html>
