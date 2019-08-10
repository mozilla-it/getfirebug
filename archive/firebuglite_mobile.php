<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<title>Firebug Lite : Firebug</title>

<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
<link rel="stylesheet" type="text/css" media="screen,projection" href="/styles/screen.css">

<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel-3.0.2.js"></script>
<script type="text/javascript" src="/js/fancybox.js"></script>



</head>

<body id="home">
<div id="wrap" class="group">

<div id="header" class="group">

<ul id="nav">
<li><a href="/whatisfirebug">What is Firebug?</a>
<span>Introduction and Features</span></li>
<li><a href="http://getfirebug.com/wiki/">Resources</a>
<span>Documentation wiki, FAQ, and other Firebug lore</span></li>
<li><a href="/community">Community</a><span>Discussion forums and lists</span></li>
<li><a href="/getinvolved">Get Involved</a><span>Hack the code, create plugins</span></li>
</ul>

<div id="logo-install" class="group">

<div id="logo">
<a href="/"></a>
<h1>Firebug</h1>
<h2>Web Development Evolved.</h2>
</div>

<div id="install" class="group">
<p>
  <a href="/firebuglight">Install Firebug Lite</a>
  <span>100% free and open source</span>
</p>
<ul>
  <li><a href="/releases/lite/chrome/">Google Chrome Extension</a></li>
  <li><a href="/releases/lite/">Other Versions</a></li>
</ul>
</div>

</div> <!-- /END logo-install -->


<!-- ========================================================================================== -->
<div class="post">
    <h2><a name="Overview" rel="bookmark">Installing the Bookmarklet on a Mobile Device</a></h2>
    <div class="postDate"></div>
    <div class="entry">
        <p>
          Firebug lite works on mobile devices!
        </p>
        <p>
            These instructions work for Mobile Safari on an iPhone or iPad, but they should apply equally
            well for other mobile devices and browsers.
        </p>
        <ol>
          <li>Bookmark this page. (Yes, THIS page. Thats the only way to create a new bookmark. Don't worry we're going to change it in the next step)</li>
          <li>
            Copy the bookmarklet javascript code in the text area below:
<textarea style='width: 665px; height: 43px; display: block;'>
javascript:(function(){ var fb = document.createElement('script');
fb.type = 'text/javascript'; fb.src = 'https://getfirebug.com/firebug-lite.js#startOpened';
document.getElementsByTagName('body')[0].appendChild(fb); })();
</textarea>
          </li>
          <li>
            Go back to your bookmarks, tap the “Edit" button, and select the bookmark
            you created in Step 2. Tap the url field for that bookmark to edit it. Tap
            and hold and select all of the old url. Delete. Tap and hold and
            paste in the javascript.
          </li>
        </ol>
        <p>
          <img src='/lite/firebug_lite_ipad.png'>
        </p>
        <p>
          This works on an smaller devices too, but a tad less usable:
        </p>
        <p style='text-align:center'>
          <img src='/lite/firebug_lite_iphone.png'>
        </p>

    </div>
</div>

</div> <!-- /END links -->

</div> <!-- /END contentarea -->

</div> <!-- /END secondary -->

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/footer.txt"); ?>

<script type="text/javascript" charset="utf-8">
  $(function(){
      $('a').click(function(e){
        _gaq.push(['_trackEvent', 'FirebugLite', 'Click', $(e.target).attr('href')]);
      });
  });
</script>
