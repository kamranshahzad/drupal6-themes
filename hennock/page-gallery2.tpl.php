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
 <?php if (isset($favicon)) : ?><link rel="shortcut icon" href="<?php print $favicon ?>" type="image/x-icon" /><?php endif ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $head_title ?></title>
<style type="text/css" >
.galleryLeftBar
{
	height:600px;
	float:left;
	width:180px;

}
.galleryRightBar
{
	height:auto;
	width:900px;
	float:right;
}
</style>
 	<?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
</head>

<body>
<!--/ main container start /-->
<div class="maincontainer02">
<div class="header01">
<div class="rss-feed">
<?php if($rss):?>
<a href="#"><img src="<?php print $rss ?>" alt="RSS Feed" width="146" height="42" /></a>
<?php endif ?>
</div>
</div>


<!--/ Top Navigation start /-->
<div class="header02-navigation">
<ul>
<li class="btn-logout"><a href="?q=logout"><span class="opaque">Logout</span></a></li>


</ul>
<!--/ Top Navigation End /-->
</div>



<!--/ Banner Start /-->





<div class="subpage-content-container4">
<div class="fullwidth">
<?php print l('Home','admin'); ?>
<?php if($slidebar):?>
<div class="galleryLeftBar">
<?php print $slidebar ?>
</div>
<?php endif ?>


<div class="galleryRightBar">
 <?php print $content ?>
</div>

</div>

<div class="clear"></div>
</div>


<!--/ Footer Start /-->
<div class="footer">
<div class="footer-container01">
  <div class="footer-copyrights01">
<div class="footer-copyrights02">
Copyrights © 2009. Hennock Community Primary School
All Rights Reserved. // <a href="#">Privacy  Policy</a> // <a href="#">Terms of Use</a>.<br />
<br />
<?php if($s4logo): ?>
<img src="<?php print $s4logo ?>" alt="Site Credits: Support4Less" width="143" height="24" />
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
