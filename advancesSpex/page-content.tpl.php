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
<script src="<?php print $thPath ?>Scripts/AC_RunActiveContent.js" type="text/javascript"></script> 
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



</head>
<body>

<div class="container">
			
			<!-- Header -->
			<div class="header">
				<div class="top">
                <div class="logo"><a href="<?php print $base_url?>"><img src="<?php print $thPath ?>images/advancepex-logo.jpg" alt="Advancespex" width="258" height="292" border="0"/></a></div>
                <div class="flash">
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="636" height="292" align="top">
                    <param name="movie" value="<?php print $thPath ?>top3.swf" />
                    <param name="quality" value="high" />
                    <embed src="<?php print $thPath ?>top3.swf" width="636" height="292" align="top" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
                  </object>
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
					 	<?php print $mainMenu ?>
					</div>
			</div>
			
			
            
            <!-- Middle02 -->
			<div class="middle02" >
					<div class="contentLeftSide">
                    	  <?php print $categories ?>
					</div>
					<div class="contentRightSide">
                    		<!-- Text Area -->		
							<div><img src="<?php print $thPath ?>images/glasses-for-men-top.jpg" alt="" /></div><!--topimg-->
							<div class="bgtxtDiv">
                            	 <?php if ($show_messages && $messages): print $messages; endif; ?>
                            	 <?php print $content?> 
							</div>
							<div><img src="<?php print $thPath ?>images/glasses-for-men-bottom.jpg" alt="" /></div><!--bottomimg-->
							<!-- Ends Text Area -->
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
