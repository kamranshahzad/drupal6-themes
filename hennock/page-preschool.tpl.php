<?php
// $Id: page.tpl.php,v 1.1.2.7 2009/02/22 08:46:52 fgm Exp $

/**
 * @file
 *   The page template
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
<head>
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
<LINK REL="SHORTCUT ICON" HREF="http://hennock-primary.devon.sch.uk/site2/sites/default/files/icon/favicon.ico" />
</head>

<body>

<!--/ main container start /-->
<div class="maincontainer03">

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
<div class="subpage-content-container2">


<div class="preschoolContainer">
<div class="head"><img src="<?php print path_to_theme() ?>/images/welcome-pre-school.jpg" width="555" height="45" alt="" /></div>
<div class="txt">
  <p>Our Pre School offers an exciting and vibrant learning environment with a positive ethos and a warm family atmosphere which welcomes both children and their parents. We encourage the children to explore new situations, discuss and develop their interests and celebrate the diversity of their ideas.</p>
  <p>We have well qualified, experienced, caring staff, who enable us to provide the very best in pre-school nursery education. </p>
  <p>    We are very lucky to operate from a large new school dining hall on the school site with an enclosed Pre School play space with further access to the school playgrounds, which include a garden, play/ climbing structure, willow domes, sandpit and fenced wildlife pond. All the children, including the Pre School children, have been involved in building an Outdoor Classroom using sustainable materials including cob and thatch; this will be an amazing facility when it is fully operational in the summer term 2009.</p>
  <p>Hennock Community Pre- school re-opened in June 2007, it is now an integral part of the community at Hennock and in particular the primary school; this means that we have established very close links between the settings; working together, sharing expertise and resources as clearly illustrated by the exciting events shown on this web site!</p>
  <p>    The Pre School is open on Monday, Tuesday, Wednesday mornings from 9.30 am to 12.00 noon and Friday morning 9.15am- 11.45pm, with a further afternoon session from 12.45pm – 3.15pm. A lunch club operates on Friday<br />
  </p>
</div>
</div>
</div>


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
All Rights Reserved. // <a href="#">Privacy  Policy</a> // <a href="#">Terms of Use</a>.<br />
<br />
<?php if($s4logo): ?>
<a href="http://www.support4less.net"><img src="<?php print $s4logo ?>" alt="Site Credits: Support4Less" width="143" height="24"  border="0"/></a>
<?php endif?>
</div>
</div>
<div class="clear"></div>
</div>
<!--/ Footer End /-->
</div>

<!--/ main container end /-->
<?php print $closure ?>
</div>
</body>
</html>
