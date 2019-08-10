<?php include('perch/runtime.php'); ?>

<?php // set page type 
    $pagetype = "community";
?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/header.php"); ?>

<div id="articleheader">
<?php perch_content("article_body"); ?>
</div>

<div id="secondary" class="group">

<div id="contentarea" class="group">

<div id="content" class="group">
<h2 class="heading">Recent Firebug Google Groups posts</h2>

<div class="article">

<?php require_once("$_SERVER[DOCUMENT_ROOT]/includes/simplepie.inc"); 

$feed = new SimplePie('http://groups.google.com/group/firebug/feed/rss_v2_0_msgs.xml');
$feed->handle_content_type();
$first_items = array();
$items_per_feed = 10;
	for ($x = 0; $x < $feed->get_item_quantity($items_per_feed); $x++)
	{
		$first_items[] = $feed->get_item($x);
	}

    foreach ($first_items as $item):
    $feed = $item->get_feed();
?>
<div class="post">
<h2><a href="<?php echo $item->get_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php echo $item->get_title(); ?>"><?php echo $item->get_title(); ?></a></h2>
<div class="postDate"><?php echo $item->get_date('j F Y | g:i a'); ?></div>

<div class="entry">
<?php echo $item->get_description(); ?>... <a href="<?php echo $item->get_permalink(); ?>#respond" title="Comment on <?php echo $item->get_title(); ?>">Continued on Google Groups &#187;</a>
</div>
</div>
<?php endforeach; ?>

<h3><a href="http://groups.google.com/group/firebug">Read more on Firebug Google Groups &raquo;</a></h3>

</div> <!-- /END article-->

</div> <!-- /END content -->

<div id="links">
<h2 class="heading">Links and Elsewhere</h2>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/whatisfirebug-nav.txt"); ?>

<!-- Delicious -->
<div id="delicious-posts-firebug" class="delicious-posts">
<h2 class="delicious-banner sidebar-title">Firebug around the web</h2>
<script type="text/javascript" src="http://feeds.delicious.com/v2/js/firebugnews?count=10&amp;title=&amp;sort=date&amp;extended"></script></div>
</div> <!-- /END links -->

</div> <!-- /END contentarea -->

</div> <!-- /END secondary -->

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/footer.txt"); ?>