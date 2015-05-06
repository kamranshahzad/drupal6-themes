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
<div class="maincontainer02">
<div class="header01">
<div class="rss-feeds"></div>
</div>
<!--/ Top Navigation start /-->
<div class="header02-navigation">
<ul>
<li class="btn-logout"><a href="?q=logout"><span class="opaque">Logout</span></a></li>


</ul>
<!--/ Top Navigation End /-->
</div>
<!--/ Banner Start /-->
<div class="subpage-content-container">
<!-- Bread Cram DIV Comes here-->
<div class="adminContainer">
<div class="leftContianer">
<ul>


<!--  Left Box # 1 (Activities) -->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Activities</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Create New Activity','admin/build/activites/add');?></b></div>
<div class="discp">Configure School Calender Options</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Activites','admin/build/activites');?></b></div>
<div class="discp">Edit and Update Contact Us page</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>


<!--  Left Box # 1-b (Pre-Set Content Management) -->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Pre-Set Content Management</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('School Calender','admin/build/1/configure');?></b></div>
<div class="discp">Configure School Calender Options</div>
</li>
<li>
<div class="heading"><b><?php print l('Kids Images','admin/build/kids_images');?></b></div>
<div class="discp">You can configure kids images on specific Pages</div>
</li>
<li>
<div class="heading"><b><?php print l('Contact Us Page','admin/build/contact');?></b></div>
<div class="discp">Edit and Update Contact Us page</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>



<!--  Left Box # 1-c (Content Management) -->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Content Management</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Create New Content Page','node/add/page');?></b></div>
<div class="discp">Configure School Calender Options</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Content Pages','admin/content/node');?></b></div>
<div class="discp">Edit and Update Contact Us page</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!--  Left Box # 1-c (Event Dairy) -->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Event Dairy</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Add Event in Dairy','admin/build/right_base/add');?></b></div>
<div class="discp">Add New Event date and Event Information in Event Dairy</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Event Dairy Pages','admin/build/right_base');?></b></div>
<div class="discp">Edit and Update Event Dairy Option</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!--  Left Box # 2  (Menus & Navigation Management)-->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Menus & Navigation Management</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Navigations','admin/build/navigation');?></b></div>
<div class="discp">Manage Bottom Navigational Links.</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Links','admin/build/links');?></b></div>
<div class="discp">Manage Bottom Links.</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!--  Left Box # 3 (Audio Podcasting) -->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Audio Podcasting</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Upload Audio Files','admin/build/audioplay/add');?></b></div>
<div class="discp">You can configure Audio Podcasting Files</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Audio Files','admin/build/audioplay');?></b></div>
<div class="discp">You can configure Audio Podcasting Files.</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>


<!--  Left Box # 3-b (Video Podcasting) -->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Video Podcasting</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Upload Video Files','admin/build/vedioplay/add');?></b></div>
<div class="discp">Using this you can Video Files</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Video Files','admin/build/vedioplay');?></b></div>
<div class="discp">You can configure Video Podcasting Files.</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>

<!--  Left Box # 3-b (Help About Hannock CMS) -->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Hennock CMS Help</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('W3 Validation Rules','admin/build/vedioplay/add');?></b></div>
<div class="discp">This will helpfull in HTML Validation</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!-- Ends of Left Boxes -->



</ul>
</div>
<div class="rightContainer">
<ul>


<!-- Right Box # 1 (Staff & Governous)-->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Staff & Governors</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Create New Staff / Governor Profile','admin/build/staff/add');?></b></div>
<div class="discp">Using this you can create new staff and Governors data (staff name , images etc).</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Staff /Governor Profile','admin/build/staff');?></b></div>
<div class="discp">Using you can manage staff and Governors</div>
</li></ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!-- Right Box # 1 (Document Management)-->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Document Management</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Upload Document File','admin/build/documents');?></b></div>
<div class="discp">Using this you can upload files on server.</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Document Files','admin/build/documents');?></b></div>
<div class="discp">Using this you can change your Document File location at server</div>
</li></ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!-- Right Box # 1-b (NewsLetter Management)-->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">NewsLetter Management</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Upload Newsletter','admin/build/newsletter/add');?></b></div>
<div class="discp">Using this you can upload files on server.</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Newsletter Files','admin/build/newsletter');?></b></div>
<div class="discp">Using this you can change your Document File location at server</div>
</li></ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!-- Right Box # 2 (Image Gallery)-->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Image Gallery</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Image Gallery Admin','gallery');?></b></div>
<div class="discp">Using this you can manage all image gallery Options</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Small Gallery','admin/build/smallgallery');?></b></div>
<div class="discp">This will Appear on hennock Front Page</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!-- Right Box # 3 (Newsletters)-->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">Settings & Configurations</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Image Settings','imagedisplay/school');?></b></div>
<div class="discp">For Best Performance of Website.</div>
</li>
<li>
<div class="heading"><b><?php print l('Clear Cache','admin/settings/performance');?></b></div>
<div class="discp">For Best Performance of Website.</div>
</li>
<li>
<div class="heading"><b><?php print l('Path Settings','admin/build/file_paths');?></b></div>
<div class="discp">you can set dynamic Path here.</div>
</li>
<li>
<div class="heading"><b><?php print l('RSS Feed Settings','admin/content/aggregator');?></b></div>
<div class="discp">Using this you can manage Duration of RSS feed</div>
</li>
<li>
<div class="heading"><b><?php print l('View Error Log','admin/reports/dblog');?></b></div>
<div class="discp">Click her to view all kind of error in error log.</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!-- Right Box # 4 (User Account)-->
<li>
<div class="box">
<div class="top"></div>
<div class="mid">
<div class="boxtitle">User Management</div>
<div class="container">
<ul>
<li>
<div class="heading"><b><?php print l('Change User Information','user');?></b></div>
<div class="discp">Click Here to Change User Related Tasks.</div>
</li>
<li>
<div class="heading"><b><?php print l('Roles','admin/user/roles');?></b></div>
<div class="discp">using this you can manage Users</div>
</li>
<li>
<div class="heading"><b><?php print l('Permissions','admin/user/permissions');?></b></div>
<div class="discp">using this you can manage Users</div>
</li>
<li>
<div class="heading"><b><?php print l('Manage Users','admin/user/user');?></b></div>
<div class="discp">using this you can manage Users</div>
</li>
<li>
<div class="heading"><b><?php print l('Logout','logout');?></b></div>
<div class="discp">Logout from your admin Account</div>
</li>
</ul>
</div>
</div>
<div class="bottom"></div>
</div>
</li>
<!-- Right Boxed Ends Here-->

</ul>
</div>
<div class="clear"></div>
</div>
</div>
<!--/ Bottom links start /-->


<!--/ Footer Start /-->
<div class="footer">
<div class="footer-container01">
  <div class="footer-copyrights01">
<div class="footer-copyrights02">
Copyrights © 2009. Hennock Community Primary School
All Rights Reserved. // <a href="#">Privacy  Policy</a> // <a href="#">Terms of Use</a>.<br />
<br />
<?php if($s4logo): ?>
<img src="<?php print $s4logo ?>" alt="Site Credits: Support4Less" width="143" height="24" />
<?php endif?>
</div>
</div>
<div class="clear"></div>
</div>
<!--/ Footer End /-->
</div>

<!--/ main container end /-->
<?php print $closure ?>
</div>
</body>
</html>

