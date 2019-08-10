<?php include('perch/runtime.php'); ?>

<?php // set page type 
    $pagetype = "article";
?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/header.php"); ?>

<div id="articleheader">
<?php perch_content("article_img"); ?>
</div>

<div id="secondary" class="group">

<div id="contentarea" class="group">

<div id="content" class="group" style="width:100%">
<h2 class="heading"><?php perch_content("article_headline");?></h2>

<div class="article">
<?php include("$_SERVER[DOCUMENT_ROOT]/tests/result-viewer/perch.php"); ?>
</div> <!-- /END article-->

</div> <!-- /END content -->

</div> <!-- /END contentarea -->

</div> <!-- /END secondary -->

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/footer.txt"); ?>