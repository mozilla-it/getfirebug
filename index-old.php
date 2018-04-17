<?php include('perch/runtime.php'); ?>

<?php // set page type
    $pagetype = "home";
    include("$_SERVER[DOCUMENT_ROOT]/includes/header.php");
?>

<div id="features-wrap">

<div id="features" class="group">

<div class="feature1 group">
	<dl>
		<dt><a href="/html"><img src="img/icons/inspect.png" width="32" height="32"><span>Inspect</span></a></dt>
		<dd>Pinpoint an element in a webpage with ease and precision.</dd>
	</dl>
	<dl>
		<dt><a href="/logging"><img src="img/icons/log.png" width="32" height="32"><span>Log</span></a></dt>
		<dd>Send messages to the console direct from your webpage through Javascript.</dd>
	</dl>
	<dl>
		<dt><a href="/javascript"><img src="img/icons/profile.png" width="32" height="32"><span>Profile</span></a></dt>
		<dd>Measure your Javascript performance in the Console's Profiler.</dd>
	</dl>
</div>

<div class="feature2">
	<dl>
		<dt><a href="/errors"><img src="img/icons/debug.png" width="32" height="32"><span>Debug</span></a></dt>
		<dd>Step-by-step interactive debugging in a visual environment.</dd>
	</dl>
	<dl>
		<dt><a href="/network"><img src="img/icons/analyze.png" width="32" height="32"><span>Analyze</span></a></dt>
		<dd>Look at detailed measurements of your site's network activity.</dd>
	</dl>
	<dl>
		<dt><a href="/layout"><img src="img/icons/layout.png" width="32" height="32"><span>Layout</span></a></dt>
		<dd>Tweak and position HTML elements with CSS and the Layout panels.</dd>
	</dl>
</div>

</div> <!-- /END features -->

</div> <!-- /END features-wrap -->

<div id="secondary" class="group">

<div id="contentarea" class="group">

<div id="content" class="group">
<h2 class="heading">Recent news</h2>
<div id="blog">

<?php
require_once("$_SERVER[DOCUMENT_ROOT]/includes/simplepie.inc");

$feed = new SimplePie();
$feed->set_feed_url('https://blog.getfirebug.com/feed');
$feed->init();
$feed->handle_content_type();
$first_items = array();
$items_per_feed = 3;

for ($x = 0; $x < $feed->get_item_quantity($items_per_feed); $x++)
    $first_items[] = $feed->get_item($x);

foreach ($first_items as $item):
    $feed = $item->get_feed();

$author = $item->get_author();
?>

<div class="post">
<h2><a href="<?php echo $item->get_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php echo $item->get_title(); ?>"><?php echo $item->get_title(); ?></a></h2>
<div class="postDate"><?php echo $item->get_date('j F Y | g:i a'); ?> by <?php echo $author->get_name();?> </div>

<div class="entry">
<?php echo $item->get_content(); ?>
</div>

<p class="postmetadata">  <a href="<?php echo $item->get_permalink(); ?>#respond" title="Comment on <?php echo $item->get_title(); ?>">Comment on this entry &#187;</a></p>
</div>
<?php endforeach; ?>

<h3>Read more blog posts on the <a href="http://blog.getfirebug.com/">Firebug weblog &raquo;</a></h3>

</div> <!-- /END blog -->

</div> <!-- /END content -->

</div> <!-- /END contentarea -->

</div> <!-- /END secondary -->

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/footer.txt"); ?>
