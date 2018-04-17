<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<title><?php if ($pagetype == "article" || ($pagetype == "downloads")) { perch_content("article_headline"); print " : "; } ?>Firebug</title>

<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
<link rel="stylesheet" type="text/css" media="screen,projection" href="/styles/screen.css?v2">
<link rel="stylesheet" type="text/css" media="screen,projection" href="/styles/jquery.fancybox.css">

<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.fancybox.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
    $('a.view').fancybox({
     'transitionIn' : 'elastic',
     'transitionOut' : 'elastic',
     'autoScale' : false,
     'centerOnScroll' : true
    });
    $('a.lightbox').fancybox({
     'transitionIn' : 'elastic',
     'transitionOut' : 'elastic',
     'hideOnContentClick' : true
    });
    $('a#whatsnew-show').click(function() {
        $('#whatsnew15').toggle('slow');
        return false;
    });
});
</script>

</head>

<body id="<?php echo "$pagetype"; ?>">
<div id="wrap" class="group">

<div id="header" class="group">

<ul id="nav">
<li><a href="/whatisfirebug">What is Firebug?</a>
<span>Introduction and Features</span></li>
<li><a href="http://getfirebug.com/faq/">Documentation</a>
<span>FAQ and Wiki</span></li>
<li><a href="/community">Community</a><span>Discussion forums and lists</span></li>
<li><a href="/getinvolved">Get Involved</a><span>Hack the code, create extensions</span></li>
</ul>

<div id="logo-install" class="group">

<div id="logo">
<a href="/"></a>
<h1>Firebug</h1>
<h2>Web Development Evolved.</h2>
</div>

<!-- Do not display the install button on downloads page. -->
<?php if ($pagetype != "downloads") { ?>

<div id="install" class="group">

<?php if (($pagetype == "firstrun") || ($pagetype == "knownissues")) : ?>
<ul>
<li><a href="/wiki/index.php/Firebug_Extensions">All Firebug Extensions</a></li>
</ul>
<?php else : ?>
    <p><?php include("$_SERVER[DOCUMENT_ROOT]/includes/version.txt"); ?>
        <span>for Firefox, 100% free and open source</span>
    </p>
<ul>
<li><a href="https://github.com/firebug/firebug">Source</a></li>
<li><a href="/firebuglite">Firebug Lite</a></li>
<li><a href="http://getfirebug.com/wiki/index.php/Firebug_Extensions">Extensions</a></li>
</ul>
<?php endif; ?>
</div>

<?php } ?>

</div> <!-- /END logo-install -->

<div style="padding:0 130px 60px 150px;font-size: x-large;color: rgb(176, 54, 49);">
The Firebug extension isn't being developed or maintained any longer.
We invite you to use the <a href="https://developer.mozilla.org/en-US/docs/Tools" style="font-weight:bold">
Firefox DevTools</a> instead, which
<a href="https://blog.getfirebug.com/2016/02/08/merging-firebug-into-the-built-in-firefox-developer-tools/">ship</a>
with Firebug.next
<br/><br/>
See also <a href="https://developer.mozilla.org/en-US/docs/Tools/Migrating_from_Firebug">Migration from Firebug</a>
guide.
</div>

<?php
// Pull in promo area if we're on the home page

    if ($pagetype == "home") { ?>

    <div id="promo" class="group">

    <div id="boasting">
    <h2><?php perch_content("promo_headline"); ?></h2>
    <?php perch_content("promo_text"); ?>
    <p class="moreinfo"><a href="<?php perch_content("promo_link_url"); ?>"><?php perch_content("promo_link_text"); ?> &raquo;</a></p>
    </div>

    <div id="screencast">
    <a href="<?php perch_content("screencast_url"); ?>" class="view"><?php perch_content("screencast_thumb"); ?></a><h3><?php perch_content("screencast_name"); ?></h3>
    <p><?php perch_content("screencast_description"); ?><br><a href="<?php perch_content("screencast_url"); ?>" class="view">Watch now&nbsp;&raquo;</a></p>
    <br/>
    <p class="moreinfo"><a href="/screencasts">More Screencasts »</a></p>
    </div>

    <div style="display:none;">
    <div id="screencast-view"><?php perch_content("screencast_video"); ?></div>
    </div>

    </div> <!-- END promo -->

    <div class="bigfirebug"></div>

<?php } ?>

</div> <!-- /END header -->
