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
    <script language="javascript" type="text/javascript"> 
 function openWin()
 {
	window.open("http://physics.com.pk/sites/default/files/main_files/wave.html", "windowname" , 'width=640,height=480,scrollbars=yes');
 }
 function openAir()
 {
 	window.open("http://www.upscale.utoronto.ca/PVB/Harrison/Flash/ClassMechanics/AirTrack/AirTrack.html", "windowname" , 'width=570,height=420,scrollbars=yes');
 }
</script>
</head>
<body>


<table width="940" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="28" align="right">
    <!-- Upper Menu -->
			<?php print $top_login  ?>
	<!-- End Menu-->
    </td>
  </tr>
  <tr>
    <td align="center"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200" valign="top"><img src="<?php print path_to_theme() ?>/images/logo4.jpg" width="143" height="58" alt="" /></td>
        <td height="86" align="right" valign="bottom">
        <!-- Main Menu Comes Here -->
        	<?php print $main_menu ?>
        <!-- Ends Main Menu --> 
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    <!-- Top Banner Place Here -->
     	<?php print $top_banner ?>
    <!--  Ends Main Banner   --> 
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
            <td align="left" valign="top">
            <!-- Left Text -->
             <?php print $left_txt ?>
            <!-- Ends Left Text --> 
            
            </td>
            <td width="40">&nbsp;</td>
            <td width="255" valign="top">
            <!-- middle Text -->
             <?php print $middle_txt ?>
            <!-- Ends middle Text -->
            
            </td>
            <td width="40">&nbsp;</td>
            <td width="253" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="<?php print path_to_theme() ?>/images/result.gif" width="255" height="23" alt="" /></td>
                  </tr>
                  <tr>
                    <td height="10"><img src="<?php print path_to_theme() ?>/images/spacer.gif" width="1" height="1" /></td>
                  </tr>
                  <tr>
                    <td>
                    <!-- Search Bar -->
                 		<?php print $search_bar ?>
                	<!-- Ends Search Bar --> 
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                    <!-- List Box -->
                 				<?php print $list_box ?>
                		  <!-- Ends List Box -->  
                    </td>
                  </tr>

                  
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
               <!-- Right Text-->
             	<?php print $right_txt ?>
              <!-- Ends Right Text -->
            </table>
              <div align="center"></div></td>
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
    	<!-- Site Footer -->
    <?php print $site_footer ?>
    <!-- Ends Site Footer -->
    </td>
  </tr>
</table>


</body>
</html>
