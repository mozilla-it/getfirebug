<?php include('perch/runtime.php'); ?>

<?php
    // Set page type 
    $pagetype = "firstrun";
?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/header.php"); ?>

<div id="articleheader">
<?php perch_content("article_img"); ?>
</div>

<div id="secondary" class="group">

<div id="contentarea" class="group">

<div id="content" class="group">
<h2 class="heading"><?php perch_content("article_headline");?></h2>

<div class="article">

<?php perch_content("article_body"); ?>

<!-- Display all 'release' posts published on Firebug blog -->
<div id="blog">

<?php
require_once("$_SERVER[DOCUMENT_ROOT]/includes/simplepie.inc");

// Initialize feed for Firebug releases blog posts.
$feed = new SimplePie();
$feed->set_feed_url('https://blog.getfirebug.com/feed');
$feed->init();
$feed->handle_content_type();
$first_items = array();
$items_per_feed = 50;

// Get last 50 feeds
for ($x = 0; $x < $feed->get_item_quantity($items_per_feed); $x++)
    $first_items[] = $feed->get_item($x);

foreach ($first_items as $item):
    $feed = $item->get_feed();

$author = $item->get_author();
?>

<!-- name="<?php echo $item->get_title(); ?>" -->
<div class="post">
<h2><a href="<?php echo $item->get_permalink(); ?>" rel="bookmark"><?php echo $item->get_title(); ?></a></h2>
<div class="postDate"><?php echo $item->get_date('j F Y | g:i a'); ?> by <?php echo $author->get_name();?> </div>

<div class="entry">
<?php echo $item->get_description(); ?>
</div>

</div>
<?php endforeach; ?>

</div> <!-- /END blog -->

</div> <!-- /END article-->

</div> <!-- /END content -->

<div id="links">
<h2 class="heading">Firebug Sponsors</h2>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/sponsors-nav.txt"); ?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/whatisfirebug-nav.txt"); ?>

<!-- How to avoid 'you have requested an encrypted page which contains some
unencrypted information' warning?
<?php include("$_SERVER[DOCUMENT_ROOT]/includes/delicious-nav.txt"); ?> -->

</div> <!-- /END links -->

</div> <!-- /END contentarea -->

</div> <!-- /END secondary -->

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/footer.txt"); ?>
