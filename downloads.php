<?php include('perch/runtime.php'); ?>

<?php // set page type
    $pagetype = "downloads";
?>
<?php include("$_SERVER[DOCUMENT_ROOT]/includes/header.php"); ?>

<div id="secondary" class="group">

<div id="contentarea" class="group">

<div id="content" class="group">
  <h2 class="heading"><?php perch_content("article_headline"); ?></h2>
  <?php perch_content("article_body"); ?>
</div> <!-- /END content -->

</div> <!-- /END contentarea -->

</div> <!-- /END secondary -->

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/footer.txt"); ?>