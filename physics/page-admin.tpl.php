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
</head>
<body>


<!-- Middle Area -->


<table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="940" height="28">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200" valign="top"><img src="<?php print path_to_theme() ?>/images/logo4.jpg" width="143" height="58" alt="" /></td>
        <td height="86" align="right" valign="bottom">
        
        
        <!-- Admin Menus-->
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="right">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" valign="bottom">
              <table width="656" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="44" valign="bottom" class="navting" align="right">
                    
                     <ul style="width:200px;">
				<li class="seperator"><img src="<?php print path_to_theme() ?>/images/seperator.jpg" width="2" height="41" alt="" /></li>
                    <li><?php print l('Home','admin') ?></li>
                  <li class="seperator"><img src="<?php print path_to_theme() ?>/images/seperator.jpg" width="2" height="41" alt="" /></li>
                  <li ><?php print l('Logout','logout') ?></li>
                </ul>
                    </td>
                  </tr>
              </table></td>
            </tr>
        </table>
        
        <!-- Ends Admin Menus-->

        
        
        
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    <!-- Top Banner -->
    	<?php print $top_banner ?>
    <!-- Ends Top Banner-->
    </td>
  </tr>
  <tr>
    <td height="7"><img src="<?php print path_to_theme() ?>/images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td><img src="images/top.jpg" width="940" height="10" alt="" /></td>
  </tr>
  <tr>
    <td height="16" bgcolor="#FFFFFF"><img src="<?php print path_to_theme() ?>/images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td height="300" align="center" bgcolor="#FFFFFF">
    <table width="500" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>
        
        <!-- Admin Icons -->
        
        <?php print $admin_box ?>
        
        <!-- Ends Admin Icons  -->
        
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><img src="<?php print path_to_theme() ?>/images/footer-top.jpg" width="940" height="34" alt="" /></td>
  </tr>
  <tr>
    <td height="130" align="center" bgcolor="#FFFFFF">
    
    <!-- Footer-->
    <?php print $site_footer2 ?>
    <!-- Ends Footer -->
    
    </td>
  </tr>
</table>

<!-- Ends Middle Area -->

</body>
</html>
