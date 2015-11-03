<?php

	
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
							<li id="ctl00_nav_home" class="selected selected"><?=l('Home','admin')?></li>
							<li id="ctl00_nav_outdoor"><?=l('Logout','logout')?></li>
							
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
 
 <?php print $content?> 
 
 
  <div id="adminWrapper" class="FLC">
  		
        <!-- #Admin Options -->
		
       <div class="ad-content">
    	<!-- #content -->
    	<div class="ad-leftbox">
        	<!-- %Box1-->
        	<div class="option-box">
            		<div class="top"> </div>
                    <div class="middle">
                    		<span class="heading">User Managments</span>
							<div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/user-icon.png" width="32" height="32"/>
                                </div>
                                <div class="option-text">
                            	<?php print l('Users','admin/user/user');?><br />
                                	List , Create , Edit Users
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/user-settings.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Users Settings','admin/user/settings');?><br />
                                Set User related options
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/roles-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Roles','admin/user/roles');?><br />
                                 Manage User Roles
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/permissions-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Permissions','admin/user/user');?><br />
                                Set User Permissions
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/access-rules-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Access rules','admin/user/rules');?><br />
                                Set User Access Rules
                                </div>
                                <div class="clear"></div>
                            </div>
                    </div>
                    <div class="bottom"></div>
            </div>
            
            <!-- %Box2-->
        	<div class="option-box">
            		<div class="top"></div>
                    <div class="middle">
                    		<span class="heading">Scolling AD's</span>
							<div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/create-scrolling-icon.png" width="32" height="32"/>
                                </div>
                                <div class="option-text">
                            	<?php print l('Create Scolling Ad','admin/build/scrollingads/add');?><br />
                                Create scrolling AD's
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/manage-scrolling-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Manage Scolling Ads','admin/build/scrollingads');?><br />
                                Edit , Delete , Enable and Disable Scrolling AD's
                                </div>
                                <div class="clear"></div>
                            </div>
                    </div>
                    <div class="bottom"></div>
            </div>
            
             <!-- %Box3-->
        	<div class="option-box">
            		<div class="top"></div>
                    <div class="middle">
                    		<span class="heading">Site Settings</span>
							<div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/performance-icon.png" width="32" height="32"/>
                                </div>
                                <div class="option-text">
                            	<?php print l('Performance','admin/settings/performance');?><br />
                                Clear Site cache
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/error-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Error Reporting','admin/reports/dblog');?><br />
                                View Error Reports of site
                                </div>
                                <div class="clear"></div>
                            </div>
                    </div>
                    <div class="bottom"></div>
            </div>
            
			<!-- $boxes-left side-->
        </div>
        <div class="ad-rightbox">
        	<!-- %Box1-->
        	<div class="option-box">
            		<div class="top"></div>
                    <div class="middle">
                    		<span class="heading">User Managments</span>
							<div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/create-content-icon.png" width="32" height="32"/>
                                </div>
                                <div class="option-text">
                            	<?php print l('Create Content Page','node/add/page');?><br />
                                Create content type pages
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/create-article-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Create Article Page','node/add/article');?><br />
                                Create article type pages
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/manage-content-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Manage Content Pages','admin/content/node');?><br />
                                Edit , Delete content pages
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/manage-article-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Manage Articles','admin/content/node');?><br />
                                Edit , Delete article pages
                                </div>
                                <div class="clear"></div>
                            </div>
                    </div>
                    <div class="bottom"></div>
            </div>
            <!-- %Box2-->
        	<div class="option-box">
            		<div class="top"></div>
                    <div class="middle">
                    		<span class="heading">Page AD's Management</span>
							<div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/create-page-icon.png" width="32" height="32"/>
                                </div>
                                <div class="option-text">
                            	<?php print l('Create New AD','node/add/ads');?><br />
                                This will manage some staff 
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/manage-page-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<?php print l('Manage ADs','admin/content/node');?><br />
                                This will manage some staff
                                </div>
                                <div class="clear"></div>
                            </div>
                    </div>
                    <div class="bottom"></div>
            </div>
            <!-- %Box3-->
        	<div class="option-box">
            		<div class="top"></div>
                    <div class="middle">
                    		<span class="heading">User Rating & Comments Management</span>
							<div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/comments-icon.png" width="32" height="32"/>
                                </div>
                                <div class="option-text">
                            	<strong>Comments Management</strong><br />
                                View ,Delete and Allow Comments
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option-link">
                            	<div class="option-icons">
                                	<img src="<?=$thPath?>images/rating-manage-icon.png" width="32" height="32" />
                                </div>
                                <div class="option-text">
                            	<strong>User Rating Settings</strong><br />
                                User Rating Settings
                                </div>
                                <div class="clear"></div>
                            </div>
                    </div>
                    <div class="bottom"></div>
            </div>
            <!-- $Boxes- right side -->
        </div>
    	<!-- $content -->
    </div>
        
        <!-- $Admin Options -->
        
	   </div>
</div>
			</div>
		<div class="Footer" id="Footer">
			<div class="TAC">
				Copyright © 2009. EyeDoctors.com, All rights reserved.
			</div>
		</div>				

	</div>

<?php print $closure ?>
</body>
</html>

