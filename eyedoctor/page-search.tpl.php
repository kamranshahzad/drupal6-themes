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
 	<?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    
    <link rel="stylesheet" type="text/css" href="<?php print $adminCSS ?>">
    <link rel="stylesheet" type="text/css" href="<?php print $stylesCSS ?>">
    <link rel="stylesheet" type="text/css" href="<?php print $commonCSS ?>">
    <link rel="stylesheet" type="text/css" href="<?php print $common02CSS ?>">
    
    <script language="javascript" type="text/javascript">
		function clearText(field)
		{
			if (field.defaultValue == field.value) field.value = '';
			else if (field.value == '') field.value = field.defaultValue;
		}
	</script>
    
    <style type="text/css">
		tbody {	border:none;}
		.style3 {
			font-family: "Trebuchet MS";
			font-size: 18px;
			color: #0000FF;
		}
		.style4 {
			font-family: "Trebuchet MS";
			font-size: 12px;
			color: #009900;
		}
		.style7 {color: #666666}
		.style8 {
			color: #0066CC;
			font-weight: bold;
		}
		.style9 {color: #3366CC}
		.style10 {font-family: "Trebuchet MS"; font-size: 18px; color: #0066CC; }
		.style11 {color: #0066CC}
	</style>

</head>
<body id="ctl00__body">

<div class="GlobalWrapper">
		<div id="ctl00_HeaderWrapper" class="HeaderWrapper">
			<div class="Header">
				<a id="SiteLogo" href="#"><img style="position: absolute;" src="<?=$logo?>" alt="DC eye doctors" title="DC eye doctors" width="108" height="113"></a>
				<div class="cnt">					
        <div class="fl logopad"> 
          <div class="name"><a href="#"><img src="<?=$logoText?>"  alt="DC Eye Doctors" title="DC Eye Doctors" width="271" height="36"></a></div>
          <div class="pl tagline" style="letter-spacing:3.5px;">Your guide to DC eye doctors</div>
        </div>
				<div id="ctl00_standardNav" class="cl">	
					<!-- #Main Menus -->
                        	<?php print $mainMenu?>
                    <!-- $Main Menus -->							
				</div>                    
				</div>
				<div class="GlobalSubNavigation CONTAINER">
<div class="Module006 Module006Alternate2 PromotionalContentBar EcoProgramContentBar">
	<div class="Module006Corner topLeft"></div>
	<div class="Module006Corner topRight"></div>
	<div class="Module006Body">
    <span class="message">
     	<!-- #Text Ads -->
            <?php print $textAds?>
        <!-- $Text Ads -->
    </span>
	</div>
	<div class="Module006Corner bottomLeft"></div>
	<div class="Module006Corner bottomRight"></div>
</div>				
				</div>
			</div>
			<div class="bottomGrad"></div>
		</div>
	<div id="ctl00_uxWrapper" class="Wrapper FLC">	
      
      
      
      
      
      
      <div class="Column1">
	
 	  <div style="width:425px;">
      	  <?php print $topSearch;?>
      </div>
      
	  <div class="fr">
      </div>
  	<div class="CLEAR mb">&nbsp;</div>
    <!-- #suggested block print $suggestedBlock;-->
    <div><strong>DC Eye Doctors > Adoms Morgan</strong></div>
    <div class="CLEAR mb"></div>	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
			  <td height="150" valign="top" bgcolor="#f1f8fb"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="3">
				 <tr>
				  <td width="61%">&nbsp;</td>
				  <td width="34%" align="right" class="hilight6">&nbsp;</td>
				</tr>
				<tr>
				  <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
					  <td width="5%" align="center" valign="top" style="padding-top:3px;"><img src="<?php print $thPath;?>icon-grey.gif" width="18" height="21" /></td>
					  <td width="95%" valign="top"><a href="#" class="style10">Find a Doctors Near You</a></td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td><a href="#" class="style4">turntohelpnow.com</a> - Help for Naltrexone dependence in the privacy of a doctors office.</td>
					</tr>
				  </table></td>
				  </tr>
				  <tr>
				  <td height="5" colspan="2"></td>
				  </tr>
				<tr>
				  <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
					  <td width="5%" align="center" valign="top" style="padding-top:3px;"><img src="<?php print $thPath;?>icon-grey.gif" width="18" height="21" /></td>
					  <td width="95%" valign="top"><a href="#" class="style10">Yeloow Pages &reg;</a></td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td><a href="#" class="style4">www.yellowpages.com</a> - Find local yellow pages businesses Phone Numbers, Addresses and Maps.</td>
					</tr>
				  </table></td>
				</tr>
				<tr>
				  <td height="5" colspan="2"></td>
				  </tr>
				<tr>
				  <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
					  <td width="5%" align="center" valign="top" style="padding-top:3px;"><img src="<?php print $thPath;?>icon-grey.gif" width="18" height="21" /></td>
					  <td width="95%" valign="top"><a href="#" class="style10">$20 Eye Exams at Cohens</a></td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td><a href="#" class="style4">www.CohensFashionOptical.com</a> - Professional Eye Exams by Dr. of Optometry. Make an appt. now.</td>
					</tr>
				  </table></td>
				</tr>
				<tr>
				  <td colspan="2">&nbsp;</td>
				  </tr>
			  </table></td>
			</tr>
		  </table>
    <!-- $suggested block -->
    
    <br/>
    <!-- #Nested Search -->
	<?php print $nestedSearch;?>
    <!-- $Nested Search -->
    <br />
    
    <div><?php if ($show_messages && $messages): print $messages; endif; ?></div>
    <?php 
	      if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif;
          if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif;
          if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; 
          print $content;
	?> 
    
    <br/>
</div>





<div class="Column2">
    <!-- #bigAds -->
    	<?php print $bigAds ?>
    <!-- $bigAds -->       
</div>



</div>
	
	</div>		
		<div class="Footer" id="Footer">
			<div class="TAC">
				<!-- #Footer Block -->
                <?php print $footer?>
                <!-- $Footer Block-->
			</div>
		</div>		
			
	

	</div>

<?php print $closure ?>
</body>
</html>
