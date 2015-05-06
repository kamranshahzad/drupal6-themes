<?php
// $Id: page.tpl.php,v 1.1.2.7 2009/02/22 08:46:52 fgm Exp $


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <?php if (isset($favicon)) : ?><link rel="shortcut icon" href="<?php print $favicon ?>" type="image/x-icon" /><?php endif ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $head_title ?></title>
 	<?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <script type='text/javascript'>
  			$(function() {
    				$('#nav').droppy();
  			});
	</script>
  
<script type="text/javascript">
Shadowbox.init({
    // let's skip the automatic setup because we don't have any
    // properly configured link elements on the page
    skipSetup: true,
    // include the html player because we want to display some html content
    players: ["html"]
});
function  displayDocuments(filename)
{
//<![CDATA[

	var file = "sites/default/files/" + filename;
	var contains = '<div id="welcome-msg"><iframe src='+file+' width="800" height="500" frameborder="0" scrolling="no"></iframe></div>'
    // open a welcome message as soon as the window loads
    Shadowbox.open({
        content:    contains,
        player:     "html",
        title:      "Welcome",
        height:     500,
        width:      800
    });
//]]>

}
</script>
</head>
<body>
<!--/ main container start /-->
<div class="maincontainer01">
<div class="header01">
<div class="rss-feed">
<?php if($rss):?>
<a href="http://hennock-primary.devon.sch.uk/rss.php"><img src="<?php print $rss ?>" alt="RSS Feed" width="146" height="42" /></a>
<?php endif ?>
</div>
</div>


<!--/ Top Navigation start /-->
<?php if ($main_menu): ?>
<div class="header02-navigation">
<?php print $main_menu ?>
<!--/ Top Navigation End /-->
</div>
<?php endif ?>


<!--/ Banner Start /-->
<div class="body-homepage-banner">

<?php if ($left_logo): ?>
<div class=" left-logo-homepage-banner">
<?php print $left_logo ?>
</div>
<?php endif ?>


<?php if($flash_banner):?>
<div class="mid-flash-homepage-banner">
<?php print $flash_banner ?>
</div>
<?php endif ?>



<?php if($right_logo):?>
<div class=" right-logo-homepage-banner">
<?php print $right_logo ?>
</div>
<?php endif?>
<!--/ Banner End /-->
</div>


<!--/ Middle Starts /-->
<div class="body-content-container">

<?php if($left_base):?>
<div class="homepage-welcome">
<?php print $left_base ?>
<div class="clear"></div>
</div>
<?php endif ?>


<?php if($right_base): ?>
<div class="homepage-events">
<?php print $right_base ?>
      <div class="clear"></div>
</div>
<?php endif?>


<div class="clear"></div>
<!--/ Middle End /-->
</div>




<div class="body-content-container">
<div class="homepage-welcome-readmore">
<?php if($bt_about):?>
	<a href="?q=node/5"><img src="<?php print $bt_about ?>" width="248" height="39"  border="0" alt="about"/></a>
<?php endif ?>
</div>
<div  class="homepage-events-readmore">
<?php if($bt_event):?>
	<a href="?q=content/event_dairy/display"><img src="<?php print $bt_event?>" width="248" height="39" border="0" alt="about"/></a>
<?php endif?>
</div>
<div class="clear"></div>
</div>

<!-- Temp Links-->

<!-- Ends Temp Links-->

<!--/ Bottom links start /-->
<div class="bottomlinks">
<div class="bottomlinks-innercontainer">



<?php if($links):?>
<div class="bottomlinks-innercontainer-01-links">
<div class="bottomlinks-innercontainer-01-linksheading"></div>
<?php print $links?>
</div>
<?php endif ?>



<?php if($gallery_base):?>
<div class="bottomlinks-innercontainer-02-imagegallery">
<div class="bottomlinks-innercontainer-02-imagegalleryheading"></div>
<?php print $gallery_base?>
</div>
<?php endif ?>


<?php if($documents):?>
<div class="bottomlinks-innercontainer-02-documents">
<div class="bottomlinks-innercontainer-02-documents-heading"></div>
<?php print $documents?>
</div>
<?php endif ?>


<?php if($activites):?>
<div class="bottomlinks-innercontainer-04-activities">
<div class="bottomlinks-innercontainer-04-activities-heading"></div>
<?php print $activites?>
</div>
<?php endif ?>


<?php if($podcast):?>
<div class="bottomlinks-innercontainer-05-podcast">
<div class="bottomlinks-innercontainer-05-podcast-heading"></div>
<?php print $podcast?>
</div>
<?php endif ?>


<div class="clear"></div>
</div>
<!--/ Bottom links End /-->
</div>



<!--/ Footer Start /-->
<div class="footer">
<div class="footer-container01">

<?php if($navi):?>
<div class="footer-navigation">
<div class="footer-navigation-heading"></div>
<?php print $navi?>
<div class="clear;"></div>
</div>
<?php endif ?>


<div class="footer-contact">
<div class="footer-contact-heading"></div>
<div class="footer-contact-info">
<ul>
<li class="icon01">Hennock Community Primary School, <br />
  Hennock, Newton Abbot, TQ13 9QB</li>
<li class="icon02"><strong>01626 833233</strong></li>
<li class="icon03"><a href="mailto:admin@hennock-primary.devon.sch.uk">admin@hennock-primary.devon.sch.uk</a></li>
</ul>
</div>
</div>
<div class="footer-copyrights01">
<div class="footer-copyrights02">
Copyrights © 2009. Hennock Community Primary School
All Rights Reserved.<br />
<br />
<?php if($s4logo): ?>
<a href="http://www.support4less.net"><img src="<?php print $s4logo ?>" alt="Site Credits: Support4Less" width="143" height="24" border="0"/></a>
<?php endif?>
<br/><br/>
<a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Transitional" width="88" height="31" border="0" />
</a>
</div>
</div>
<div class="clear"></div>
</div>
<!--/ Footer End /-->
</div>

<script type="text/javascript">
$('#s2').cycle({ 
    fx:    'scrollUp' 
});
</script>
<!--/ main container end /-->
<?php print $closure ?>
</div>
</body>
</html>
