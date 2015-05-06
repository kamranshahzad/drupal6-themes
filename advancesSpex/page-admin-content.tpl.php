<?php
// $Id: page.tpl.php,v 1.1.2.7 2009/02/22 08:46:52 fgm Exp $
/*if($user->uid)
{*/

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
<div class="toplinks"><a href="?q=logout">Logout</a> | <a href="?q=admin">Back to home</a> </div>
<!--links-->

</div><!--headerCon-->

<div class="txtConadmin2">

<div class="top"></div><!--top-->

<div class="mid-bg">
    <div  style="padding:5px;">
    
		  <?php print l('Home','admin'); ?>
		  <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
		  <?php print $content ?>
    </div>
</div><!--md-->

<div class="bottom"></div><!--bottom-->

</div><!--txtCon-->


<!--footerContainer Starts -->
<div class="footerCon">

<div class="copyrighttxt">Copyrights &copy; 2009. Advancespex. All Rights Reserved. // <a href="../privacypolicy.html">Privacy Policy</a> // <a href="../termsofuse.html">Terms of Use</a></div>
<!--copyrightends-->

<div class="sitecredits">Site Credits: <a href="http://www.medialinkers.com"><strong>Medialinkers</strong> </a></div>
<!--sitecredits-->

</div><!-- footerConends -->
</div><!--mainDiv-->


<!-- End of Main-->

<?php print $closure ?>
</body>
</html>

