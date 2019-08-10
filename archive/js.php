<?php include('perch/runtime.php'); ?>

<?php // set page type 
    $pagetype = "article";
?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/header.php"); ?>

<div id="articleimg">
<?php perch_content("article_img"); ?>
</div>

<div id="secondary" class="group">

<div id="contentarea" class="group">

<div id="content" class="group">
<h2 class="heading"><?php perch_content("article_headline");?></h2>

<div class="article">

<?php perch_content("article_body"); ?>

</div> <!-- /END article-->

</div> <!-- /END content -->

<div id="links">
<h2 class="heading">Links and Elsewhere</h2>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/whatisfirebug-nav.txt"); ?>

<!-- Delicious -->
<div id="delicious-posts-firebug" class="delicious-posts">
<h2 class="delicious-banner sidebar-title">Firebug around the web</h2>
<ul>
<li class="delicious-post delicious-odd"><a class="delicious-link" href="#" title="">Firebug delicious link</a>
<p class="delicious-extended">Here's a delicious link that has been tagged as Firebug</p></li>
<li class="delicious-post delicious-odd"><a class="delicious-link" href="#" title="">Firebug delicious link</a>
<p class="delicious-extended">Here's a delicious link that has been tagged as Firebug</p></li>
<li class="delicious-post delicious-odd"><a class="delicious-link" href="#" title="">Firebug delicious link</a>
<p class="delicious-extended">Here's a delicious link that has been tagged as Firebug</p></li>
<li class="delicious-post delicious-odd"><a class="delicious-link" href="#" title="">Firebug delicious link</a>
<p class="delicious-extended">Here's a delicious link that has been tagged as Firebug</p></li>
<li class="delicious-post delicious-odd"><a class="delicious-link" href="#" title="">Firebug delicious link</a>
<p class="delicious-extended">Here's a delicious link that has been tagged as Firebug</p></li>
<li class="delicious-post delicious-odd"><a class="delicious-link" href="#" title="">Firebug delicious link</a>
<p class="delicious-extended">Here's a delicious link that has been tagged as Firebug</p></li>
<li class="delicious-post delicious-odd"><a class="delicious-link" href="#" title="">Firebug delicious link</a>
<p class="delicious-extended">Here's a delicious link that has been tagged as Firebug</p></li>
</ul>
</div> <!-- /END links -->

</div> <!-- /END contentarea -->

</div> <!-- /END secondary -->

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/footer.txt"); ?>