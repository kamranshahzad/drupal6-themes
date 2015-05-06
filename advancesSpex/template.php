<?php
// $Id: template.php,v 1.16.2.1 2009/02/25 11:47:37 goba Exp $

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function phptemplate_body_class($left, $right) {
  if ($left != '' && $right != '') {
    $class = 'sidebars';
  }
  else {
    if ($left != '') {
      $class = 'sidebar-left';
    }
    if ($right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .'</div>';
  }
}


/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars ,$hook) {
  global $user;
  global $base_url;
  
  $vars['tabs2'] = menu_secondary_local_tasks();

  	
	if(!$vars['is_front'])
	{
		$vars['template_files'][] = 'page-content';
	}
	if(arg(0) == 'user')
	{
		$vars['template_files'][] = 'page-login';
	}
	if($user->uid == 1)
	{
		$vars['template_files'][] = 'page-admin-content';
	}
	if($user->uid && $_REQUEST['q'] == 'admin')
	{
		$vars['template_files'][] = 'page-admin';
	}
	if($user->uid && arg(0) == 'user')
	{
		$vars['template_files'][] = 'page-content-user';
	}
	
	$vars['thPath'] = $base_url.'/sites/all/themes/advancesSpex/';
	
	
/*	if($_GET['q'] == 'admin')
	{
		$vars['template_files'][] = 'page-admin';
	}*/
	/*if($_GET['q'] == 'content/calender/display')
	{
		$vars['template_files'][] = 'page-calender';
	}
	if($_GET['q'] == 'content/pre_school/display')
	{
		$vars['template_files'][] = 'page-preschool';
	}
	if(arg(0) == 'podcast' && arg(1) == 'vedio')
	{
		$vars['template_files'][] = 'page-podcast';
	}
	if(arg(0) == 'podcast' && arg(1) == 'audio')
	{
		$vars['template_files'][] = 'page-podcast1';
	}
	if(arg(0) == 'gallery' && !$user->uid)
	{
		$vars['template_files'][] = 'page-gallery';
	}
	if(arg(0) == 'gallery' &&  $user->uid)
	{
		$vars['template_files'][] = 'page-gallery2';
	}
	if(arg(0) == 'node' &&  arg(1) == 2 || arg(1) == 3 || arg(1) == 4 || arg(1) == 6)
	{
		$vars['template_files'][] = 'page-contents-kidz';
	}*/
	// Variables for Tpl Pages
	$get_path = base_path() . path_to_theme();
  	$vars['rss'] =  $get_path. '/images/1x1.gif';
    $vars['bt_about'] =  $get_path. '/images/more-aboutus.jpg';
	$vars['bt_event'] =  $get_path. '/images/move-events.jpg';
	$vars['s4logo'] = $get_path. '/images/logo-support4less.gif';
	$vars['pre_school_title'] = $get_path. '/images/welcome-pre-school.jpg';
	
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function phptemplate_menu_local_tasks() {
  return menu_primary_local_tasks();
}

function phptemplate_comment_submitted($comment) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

function phptemplate_node_submitted($node) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    ));
}

