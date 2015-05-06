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
    <td height="28">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200" valign="top"><img src="<?php print path_to_theme() ?>/images/logo4.jpg" width="143" height="58" alt="" /></td>
        <td height="86" align="right" valign="bottom">
        <!-- Main Menu -->
        
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
        
        <!-- Ends Main Menu -->
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
    <td><img src="<?php print path_to_theme() ?>/images/top.jpg" width="940" height="10" alt="" /></td>
  </tr>
  <tr>
    <td height="16" bgcolor="#FFFFFF"><img src="<?php print path_to_theme() ?>/images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><table width="874" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="874" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="40">
            <!-- Title of Page  -->
            <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
            <!-- Ends Title of Page -->
            </td>
          </tr>
          <tr>
            <td align="left" class="txtgray12">
            <!-- Content of Page Comes Here -->

			
              <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
              <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
              <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
              <?php if ($show_messages && $messages): print $messages; endif; ?>
          
			<?php print $content ?>
			<!-- End Content Here -->            
            </td>
            </tr>
          <tr>
            <td class="txtgray12">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="txtgray12">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><img src="<?php print path_to_theme() ?>/images/footer-top.jpg" width="940" height="34" alt="" /></td>
  </tr>
  <tr>
    <td height="130" align="center" bgcolor="#FFFFFF">
    <!-- Site Footer  -->
     <?php print $site_footer2 ?>
    <!-- Ends Site Footer  -->
    </td>
  </tr>
</table>

<!-- Ends Middle Area -->

</body>
</html>
