<?php
// $Id: page.tpl.php,v 1.1.2.7 2009/02/22 08:46:52 fgm Exp $


global $base_url;
$tPaths = $base_url.'/sites/all/themes/advancesSpex/';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
<head>
 <?php if (isset($favicon)) : ?><link rel="shortcut icon" href="<?php print $favicon ?>" type="image/x-icon" /><?php endif ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $head_title ?></title>
 	<?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
</head>

<body>


<!--/ main container start /-->

<div class="admin-main">

<div class="headerConadmin">

<div class="toplinks"><a href="#">Logout</a> | <a href="#">Back to home</a> </div>
<!--links-->

</div>
<!--headerCon ends-->


<!--loginCon starts-->
<div class="loginCon">
	<div class="top">Welcome to Admin Login</div>
	<div class="mid">
	
	<!--txt container starts-->
	<div class="txtContainer">
		
		
	<div class="txtConmirror">
  		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="955" height="655">
    	<param name="movie" value="<?php print $tPaths?>f3virtual_mirror[1].swf" />
    	<param name="quality" value="high" />
    	<embed src="<?php print $tPaths?>f3virtual_mirror[1].swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="955" height="655"></embed>
  		</object> 
	</div>
		
	</div>
	<!--txt container ends-->
	
	</div>
	<!--mid ends-->
	
	<div class="bottom"></div>
	
	<div class="clear"></div>

</div>
<!--loginCon ends-->


<!--footerContainer Starts -->
<div class="footerCon">

<div class="copyrighttxt">Copyrights &copy; 2009. Advancespex. All Rights Reserved. // <a href="../privacypolicy.html">Privacy Policy</a> // <a href="../termsofuse.html">Terms of Use</a></div>
<!--copyrightends-->

<div class="sitecredits">Site Credits: <a href="http://www.medialinkers.pk"><strong>Medialinkers</strong> </a></div>
<!--sitecredits-->

</div><!-- footerConends -->
</div><!--mainDiv-->

<!-- Ends Main-->
<?php print $closure ?>
</body>
</html>
