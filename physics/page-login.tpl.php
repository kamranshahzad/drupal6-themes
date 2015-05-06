<?php
// $Id: page.tpl.php,v 1.1.2.7 2009/02/22 08:46:52 fgm Exp $

$filepath = "http://physics.com.pk/sites/default/files/";
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
        	<?php print $main_menu ?>
        <!-- Ends Main Menus -->
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
    <td align="center" bgcolor="#FFFFFF"><table width="874" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="325"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
            
            <!-- Big Table -->
            <table width="874" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="325"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="378" border="0" align="center" cellpadding="0" cellspacing="0" height="280">
                <tr>
                  <td height="222" align="center" valign="top"  background="<?php print path_to_theme() ?>/images/login-bg.jpg">
                  
                  <table>
                   <tr>
                        <td>&nbsp;</td>
                      </tr>
                   <tr>
                        <td align="left"><img src="<?php print path_to_theme() ?>/images/adminlogin.gif" width="135" height="24" /></td>
                   </tr>
                   <tr>
                        <td height="8" align="left"><img src="<?php print path_to_theme() ?>/images/spacer.gif" width="1" height="1" /></td>
                   </tr>
                   <tr>
                	<td>
                    <?php if ($show_messages && $messages): print $messages; endif; ?> 
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <!-- Login Table -->
                        <?php print $content ?>
                        <!-- Ends Login Table-->
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                        <!-- Login Container Comes Here -->
                        <a href="?q=user/register">create new account?</a>
                        <!-- Ends Login Container  Here -->
                        </td>
                      </tr>
                  </table>
                  
                  </td>
                </tr>
            </table></td>
            <td width="378" align="left" valign="top"><table width="378" height="280" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="222" align="center" valign="top" <?php if($_SESSION['check'] != ''){?> background="<?php print path_to_theme() ?>/images/login-bg.jpg" <?php }?>>
                  
                  
                    <? if($_SESSION['check'] == "alevel")
				  {
				  ?>
                    <table width="90%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top"><img src="<?php print path_to_theme() ?>/images/freenotes.gif" alt="" width="196" height="23" /></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="75" align="left" valign="top"><img src="<?php print path_to_theme() ?>/images/notes.gif" alt="" width="49" height="43" /></td>
                        <td width="242" align="left"><span class="txtred12">Base Units</span></td>
                      </tr>
                      <tr>
                        <td width="76" align="right" colspan="2" height="30"><a href="<?php print($filepath.'Base_Units.pdf');?>" >Click here to download</a></td>
                      </tr>
                      <tr>
                        <td width="75" align="left" valign="top"><img src="<?php print path_to_theme() ?>/images/notes.gif" alt="" width="49" height="43" /></td>
                        <td width="242" align="left"><span class="txtred12">Capacitors</span></td>
                      </tr>
                      <tr>
                        <td width="76" align="right" colspan="2" height="30"><a href="<?php print($filepath.'Capacitors.pdf');?>" >Click here to download</a></td>
                      </tr>
                    </table>
                    <?php
				  }
				  if($_SESSION['check'] == "olevel")
				  {
				  
				  ?>
                    <table width="90%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                        </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                        </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top"><img src="<?php print path_to_theme() ?>/images/freenotes.gif" alt="" width="196" height="23" /></td>
                        </tr>
                      <tr>
                        <td colspan="2" align="center" valign="top">&nbsp;</td>
                        </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                        </tr>
                      <tr>
                        <td width="75" align="left" valign="top"><img src="<?php print path_to_theme() ?>/images/notes.gif" alt="" width="49" height="43" /></td>
                        <td width="242" align="left"><span class="txtred12">Measurements and Units</span></td>
                        </tr>
                      <tr>
                        <td width="76" align="right" colspan="2" height="30"><a href="<?php print($filepath.'MEASUREMENTS AND UNITS.pdf');?>" >Click here to download</a></td>
                        </tr>
                      <tr>
                        <td width="75" align="left" valign="top"><img src="<?php print path_to_theme() ?>/images/notes.gif" alt="" width="49" height="43" /></td>
                        <td width="242" align="left"><span class="txtred12">Melting and Boiling</span></td>
                        </tr>
                      <tr>
                        <td width="76" align="right" colspan="2" height="30"><a href="<?php print($filepath.'Thermal Properties of Matter.pdf');?>" >Click here to download</a></td>
                        </tr>
                    </table>
                  <?php
				  }
				  else
				  {
				  ?>
                  
                  <?php
				  }
				 
				  ?>
                  
                  </td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table>
            <!-- Ends Big Table -->
            
            
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
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
    <?php print $site_footer ?>
    <!-- Ends Site Footer  -->
    </td>
  </tr>
</table>
<!-- Ends Middle Area -->

</body>
</html>
