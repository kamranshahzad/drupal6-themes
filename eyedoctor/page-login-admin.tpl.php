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
    <link rel="stylesheet" type="text/css" href="<?php print $commonCSS ?>">
    <link rel="stylesheet" type="text/css" href="<?php print $common02CSS ?>">
    
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
						<ul class="Nav hl fl">
							<li id="ctl00_nav_home" class="selected selected"></li>
							
						</ul>					
</div>                    
				</div>
			  <div class="GlobalSubNavigation CONTAINER">
<div class="Module006 Module006Alternate2 PromotionalContentBar EcoProgramContentBar"></div>
					
				</div>
			</div>
			<div class="bottomGrad"></div>
		</div>
		
			<div id="ctl00_uxWrapper" class="Wrapper FLC">
				
            <div class="FullPage">
               <?php if ($show_messages && $messages): print $messages; endif; ?>
              <div id="adminWrapper" class="FLC">
                <div id="SiteFeatures_content" class="adminloginbox m0auto">
                		<br />
                        <?=$content?> 
                </div>
                </div>
            </div>

			</div>
		<div class="Footer" id="Footer">
			<div class="TAC">
				
				
				Copyright © 2009. EyeDoctors.com, All rights reserved.
			</div>
		</div>			

	</div>
    
    
<!-- Ends Main-->
<?php print $closure ?>
</body>
</html>
