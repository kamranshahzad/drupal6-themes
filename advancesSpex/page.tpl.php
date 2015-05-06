<?php
// $Id: page.tpl.php,v 1.1.2.7 2009/02/22 08:46:52 fgm Exp $

global $base_url;



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
<!-- Main Navigations   -->





<!--hotdeals slideshow-->
	<link rel="stylesheet" type="text/css" href="<?php print $thPath ?>css/style-hotdeals.css" />
	<script type="text/javascript" src="<?php print $thPath ?>js/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php print $thPath ?>js/jquery-ui.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
		});
	</script>
<!--ends-->


<script type="text/javascript" src="<?php print $thPath ?>js/jquery.droppy.js" ></script>
<link rel="stylesheet" href="<?php print $thPath ?>css/droppy.css" type="text/css" />
    <script type='text/javascript'>
  			$(function() {
    				$('#nav').droppy();
  			});
	</script>

<!--[if lte IE 6]>
<link href="<?php print $thPath ?>css/style-advanced-2.css" rel="stylesheet"  media="screen,projection" type="text/css" />
<![endif]-->




<script src="<?php print $thPath ?>js/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
			
			<!-- Header -->
			<div class="header">
				<div class="top">
                <div class="logo"><a href="<?php print $base_url?>"><img src="<?php print $thPath ?>images/advancepex-logo.jpg" alt="Advancespex" width="258" height="292" border="0"/></a></div>
                <div class="flash">
                  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','636','height','292','align','top','src','<?php print $thPath ?>top3','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','<?php print $thPath ?>top3' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="636" height="292" align="top">
                    <param name="movie" value="<?php print $thPath ?>top3.swf" />
                    <param name="quality" value="high" />
                    <embed src="<?php print $thPath ?>top3.swf" width="636" height="292" align="top" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
                  </object></noscript>
                </div>
                <div class="rside"><img src="<?php print $thPath ?>images/advancepex-logo-riteside.jpg" alt="" width="69" height="292" /></div>
                <div class="clear"></div>
              </div>
			</div>
			
			
			<!-- Middle01 -->
			<div class="middle01" >
					<div class="newsTicker" >   		
								<div class="newsText">
								  <?php print $newTicker ?>
								</div>
					</div>
					<div class="mainMenu" >
					 	<!-- Main Menus -->
						<?php print $mainMenu ?>
                        <!-- Ends Main Menus-->
					</div>
					<div class="topBanner">
								<div class="tabBox">
									   <!-- Extrenal Code -->
                                       		<div id="featured" >
                                            <ul class="ui-tabs-nav">
                                                <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="index.php#fragment-1"><img src="<?php print $thPath ?>images/btn-hotdeals.jpg" alt="" width="147" height="58" border="0" /></a></li>
                                                <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="index.php#fragment-2"><img src="<?php print $thPath ?>images/btn-latest.jpg" alt="" width="147" height="58" border="0" /></a></li>
                                                <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="index.php#fragment-3"><img src="<?php print $thPath ?>images/btn-designer-deals.jpg" alt="" width="147" height="58" border="0" /></a></li>	     
                                            </ul>
                                            <div id="fragment-1" class="ui-tabs-panel" style="">
                                              <img src="<?php print $thPath ?>images/double-the-deal1.jpg" alt="" width="577" height="215" /></div>
                                            <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
                                                <img src="<?php print $thPath ?>images/double-the-deal2.jpg" alt="" />			 
                                            </div>
                                            <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
                                                <img src="<?php print $thPath ?>images/double-the-deal3.jpg" alt="" />		 
                                            </div>
											</div>
                                       <!-- Ends External Code -->
								</div>
								<div class="searchBox">
                                     <?php print $searchBox ?>
								</div>
					</div>
			</div>
			
				<!-- Middle02 -->
			<div class="middle02" >
					<div class="leftBox">
							<div class="categoryMenus">
										 <?php print $categories ?>
							</div>
							<div class="innerBox">
									<div class="welcomeText" >
										 <?php print $welcomeTxt ?>
									</div>
									<div class="smallBoxes">
										 <?php print $smallBox ?>	 
									</div>
                                    <!-- External Code -->
                                    <div class="latestDeals">
										  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','530','height','256','align','top','src','<?php print $thPath ?>TabSilder/showreel','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','<?php print $thPath ?>TabSilder/showreel' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="530" height="256" align="top">
                                            <param name="movie" value="<?php print $thPath ?>TabSilder/showreel.swf" />
                                            <param name="quality" value="high" />
                                            <embed src="<?php print $thPath ?>TabSilder/showreel.swf" width="530" height="256" align="top" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
                                          </object></noscript> 
                                    </div>
                             		<!-- Ends External Code -->
							</div>
						    

                           
						   <div class="clear"></div>
						   
                                   
                            
							<div class="lowBox">
                            		<table cellpadding="2">
                                    <tr>
                                    	<td>
                                        	<?php print $paymentBox ?>
                                        </td>
                                        <td>
                                       
                                        		<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td width="6%" align="right"><img src="<?php print $thPath ?>images/tella-friend-left.jpg" width="22" height="75" alt="" /></td>
                                                    <td align="left" valign="top" class="bg-orange"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                          <td width="18%"><a href="?q=content/tellfriend"><img src="<?php print $thPath ?>images/btn-tell-friend.jpg" width="117" height="74" border="0" /></a></td>
                                                          <td width="82%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                              <tr>
                                                                <td width="12%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-1.jpg" alt="" width="25" height="29" border="0" /></a></td>
                                                                <td width="12%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-2.jpg" alt="" width="25" height="29" border="0" /></a></td>
                                                                <td width="11%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-3.jpg" alt="" width="22" height="29" border="0" /></a></td>
                                                                <td width="11%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-4.jpg" alt="" width="23" height="29" border="0" /></a></td>
                                                                <td width="12%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-5.jpg" alt="" width="25" height="29" border="0" /></a></td>
                                                                <td width="11%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-6.jpg" alt="" width="22" height="29" border="0" /></a></td>
                                                                <td width="12%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-7.jpg" alt="" width="25" height="29" border="0" /></a></td>
                                                                <td width="6%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-8.jpg" alt="" width="21" height="29" border="0" /></a></td>
                                                                <td width="13%" align="left" valign="top"><a href="#"><img src="<?php print $thPath ?>images/icon-9.jpg" alt="" width="24" height="29" border="0" /></a></td>
                                                              </tr>
                                                          </table></td>
                                                        </tr>
                                                    </table></td>
                                                    <td width="2%"><img src="<?php print $thPath ?>images/tella-friend-left-145.jpg" width="15" height="75" alt="" /></td>
                                                  </tr>
                                              </table>
                                        </td>
                                    </tr>
                                    </table>
							</div>
							
					</div>
					
					<div class="rightBox">
						  <div class="siteAdds">
								<?php print $siteAdd ?>		
						  </div>
                          <div style="margin-top:10px;">
                          	<img src="<?php print $base_url ?>/sites/all/themes/advancesSpex/images/googleads.jpg" height="106" width="190" alt="google ads">
                          </div>
						  <div class="googleAds">
                                
						  		<?php print $googleAdd ?>	
						  </div>
					</div>
			
			</div>
			
			 <div class="clear"></div>
			
			<!-- Footer -->
			<div class="footer" >
					<div class="topLinks">
							<?php print $upperSitemap ?>
					</div>
					
					
					<div class="bottomLinks">
							<?php print $lowerSitemap ?>
					</div>
					<div class="lastfooterDiv">
							<?php print $credits ?>
					</div>
			</div><!-- End of Footer  -->
			


</div> <!-- End DIV-->

<?php print $closure ?>
</body>
</html>
