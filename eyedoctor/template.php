<?php



/*
	_startup data
*/

	$contentTypeArr = array('page','articles'); 
	$templatesArr = array('page' ,'page-content' , 'page-login-admin' , 'page-admin', 'page-form');
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
  
   if($breadcrumb[0] == '<a href="/doc/">Home</a>'){
			$breadcrumb[0] = l(t('Administer'), 'admin');
   }

  	if (count($breadcrumb) > 1) {
	
	
        //$breadcrumb[0] = l(t($home), '');
		array_shift($breadcrumb);
		

		if($breadcrumb[0] == '<a href="/doc/node/add">Create content</a>'){
			$breadcrumb[0] = l(t('Administer'), 'admin');
		}
		
		if(arg(0) == 'node'){
			$breadcrumb[0] = l(t('Administer'), 'admin');
		}
		
		
	}
    return '<div class="breadcrumb" >'. implode(' › ', $breadcrumb) .'</div>';
  }
}


function handleAdminUrls($url){
	global $user;
	switch($url[0]){
		case 'admin' && count($url) == 1:	
				return 'page-admin';
		default:
				return 'page-form';
	}
}

function handleUserUrls($url){
	global $user;
	switch($url[0]){
		case 'user':
		case 'articles':
		case 'content':
		case 'comment':
		case 'commentsmanger':	
				return 'page-article';
		case 'doctor':
			return 'page-search';
		case 'doctorprofile':
			return 'page-doctor-profile';
		case 'myprofile':
			return 'page-my';
		default:
				return '2: no url found';
	}
}

function notLoginUrls($url){
	global $user;
	switch($url[0]){
		case 'user':
		case 'articles':
		case 'content':
			return 'page-article';
	    case 'doctor':
			return 'page-search';
		case 'doctorprofile':
			return 'page-doctor-profile';
		default:
				print('3: not found url');
	}
}


/**
 * Override or insert PHPTemplate variables into the templates.
 */


function phptemplate_preprocess_page(&$vars ,$hook) {
  	global $user;
  	global $base_url;
  
  	$vars['tabs2'] = menu_secondary_local_tasks();

	$path = drupal_get_path_alias($_GET['q']); 
	$path = explode('/', $path);
	
	
	//print_r($path);
	
	if($user->uid){
		if($user->uid == 1){
			//admin
			$vars['template_files'][]  = handleAdminUrls($path);
		}else{
			//user
			$vars['template_files'][]  = handleUserUrls($path);
		}
	}else{
		//not logined
		if(!$vars['is_front'])
		{
			$vars['template_files'][]  = notLoginUrls($path);
		}
	}
	

	

	// Variables for Tpl Pages
	
	$vars['thPath'] = $base_url.'/sites/all/themes/eyedoctor/';
	$get_path = base_path() . path_to_theme();
	$vars['logo'] = $get_path. '/images/logo-eyedoctors.png';
	$vars['logoText'] = $get_path. '/images/logo-text.png';
	
	
	// CSS files
	$vars['stylesCSS'] = $get_path.'/css/styles.css'; 
	$vars['adminCSS'] = $get_path.'/css/admin.css';
	$vars['commonCSS'] = $get_path.'/css/common.css';
	$vars['common02CSS'] = $get_path.'/css/common_002.css';
	//$vars['lightBox'] = $get_path.'/css/common.css';
	
	// JS Files 	
	$vars['globalJS'] = $get_path.'/js/global.js';
	$vars['iepngfix_tilebg'] = $get_path.'/js/iepngfix_tilebg.js';
	//$vars['globalJS'] = $get_path.'/js/global.js';
	
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
  return t('!username — !datetime',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

function phptemplate_node_submitted($node) {
  return t('By !username — !datetime',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    ));
}


/*
__________________________________________________________________________________
	THEME CODE SNIPED # 1
__________________________________________________________________________________

<?php
function THEMENAME_preprocess_page(&$vars) {
 
// Classes for body element. Allows advanced theming based on context
// (home page, node of certain type, etc.)
  $body_classes = array($vars['body_classes']);
  if (!$vars['is_front']) {
    // Add unique classes for each page and website section
    $path = drupal_get_path_alias($_GET['q']);
    list($section, ) = explode('/', $path, 2);
    $body_classes[] = THEMENAME_id_safe('page-' . $path);
    $body_classes[] = THEMENAME_id_safe('section-' . $section);
    if (arg(0) == 'node') {
      if (arg(1) == 'add') {
        if ($section == 'node') {
          array_pop($body_classes); // Remove 'section-node'
        }
        $body_classes[] = 'section-node-add'; // Add 'section-node-add'
      }
      elseif (is_numeric(arg(1)) && (arg(2) == 'edit' || arg(2) == 'delete')) {
        if ($section == 'node') {
          array_pop($body_classes); // Remove 'section-node'
        }
        $body_classes[] = 'section-node-' . arg(2); // Add 'section-node-edit' or 'section-node-delete'
      }
    }
  }
  $vars['body_classes'] = implode(' ', $body_classes); // Concatenate with spaces
 
 
 
if (module_exists('path')) {
  $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $suggestions = array();
      $template_filename = 'page';
        foreach (explode('/', $alias) as $path_part) {
          $template_filename = $template_filename . '-' . $path_part;
          $suggestions[] = $template_filename;
        }
      $vars['template_files'] = $suggestions;
    }
  }
}

function THEMENAME_id_safe($string) {
  if (is_numeric($string{0})) {
    // If the first character is numeric, add 'n' in front
    $string = 'n'. $string;
  }
  return strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
}


*/






/*
	THEMES SNIPED # 2
	
	<?php
function template_preprocess_page(&$variables) {
  // Add favicon
  if (theme_get_setting('toggle_favicon')) {
    drupal_set_html_head('<link rel="shortcut icon" href="'. check_url(theme_get_setting('favicon')) .'" type="image/x-icon" />');
  }

  global $theme;
  // Populate all block regions.
  $regions = system_region_list($theme);
  // Load all region content assigned via blocks.
  foreach (array_keys($regions) as $region) {
    // Prevent left and right regions from rendering blocks when 'show_blocks' == FALSE.
    if (!(!$variables['show_blocks'] && ($region == 'left' || $region == 'right'))) {
      $blocks = theme('blocks', $region);
    }
    else {
      $blocks = '';
    }
    // Assign region to a region variable.
    isset($variables[$region]) ? $variables[$region] .= $blocks : $variables[$region] = $blocks;
  }

  // Set up layout variable.
  $variables['layout'] = 'none';
  if (!empty($variables['left'])) {
    $variables['layout'] = 'left';
  }
  if (!empty($variables['right'])) {
    $variables['layout'] = ($variables['layout'] == 'left') ? 'both' : 'right';
  }

  // Set mission when viewing the frontpage.
  if (drupal_is_front_page()) {
    $mission = filter_xss_admin(theme_get_setting('mission'));
  }

  // Construct page title
  if (drupal_get_title()) {
    $head_title = array(strip_tags(drupal_get_title()), variable_get('site_name', 'Drupal'));
  }
  else {
    $head_title = array(variable_get('site_name', 'Drupal'));
    if (variable_get('site_slogan', '')) {
      $head_title[] = variable_get('site_slogan', '');
    }
  }
  $variables['head_title']        = implode(' | ', $head_title);
  $variables['base_path']         = base_path();
  $variables['front_page']        = url();
  $variables['breadcrumb']        = theme('breadcrumb', drupal_get_breadcrumb());
  $variables['feed_icons']        = drupal_get_feeds();
  $variables['footer_message']    = filter_xss_admin(variable_get('site_footer', FALSE));
  $variables['head']              = drupal_get_html_head();
  $variables['help']              = theme('help');
  $variables['language']          = $GLOBALS['language'];
  $variables['language']->dir     = $GLOBALS['language']->direction ? 'rtl' : 'ltr';
  $variables['logo']              = theme_get_setting('logo');
  $variables['messages']          = $variables['show_messages'] ? theme('status_messages') : '';
  $variables['mission']           = isset($mission) ? $mission : '';
  $variables['primary_links']     = theme_get_setting('toggle_primary_links') ? menu_primary_links() : array();
  $variables['secondary_links']   = theme_get_setting('toggle_secondary_links') ? menu_secondary_links() : array();
  $variables['search_box']        = (theme_get_setting('toggle_search') ? drupal_get_form('search_theme_form') : '');
  $variables['site_name']         = (theme_get_setting('toggle_name') ? filter_xss_admin(variable_get('site_name', 'Drupal')) : '');
  $variables['site_slogan']       = (theme_get_setting('toggle_slogan') ? filter_xss_admin(variable_get('site_slogan', '')) : '');
  $variables['css']               = drupal_add_css();
  $variables['styles']            = drupal_get_css();
  $variables['scripts']           = drupal_get_js();
  $variables['tabs']              = theme('menu_local_tasks');
  $variables['title']             = drupal_get_title();
  // Closure should be filled last.
  $variables['closure']           = theme('closure');

  if ($node = menu_get_object()) {
    $variables['node'] = $node;
  }

  // Compile a list of classes that are going to be applied to the body element.
  // This allows advanced theming based on context (home page, node of certain type, etc.).
  $body_classes = array();
  // Add a class that tells us whether we're on the front page or not.
  $body_classes[] = $variables['is_front'] ? 'front' : 'not-front';
  // Add a class that tells us whether the page is viewed by an authenticated user or not.
  $body_classes[] = $variables['logged_in'] ? 'logged-in' : 'not-logged-in';
  // Add arg(0) to make it possible to theme the page depending on the current page
  // type (e.g. node, admin, user, etc.). To avoid illegal characters in the class,
  // we're removing everything disallowed. We are not using 'a-z' as that might leave
  // in certain international characters (e.g. German umlauts).
  $body_classes[] = preg_replace('![^abcdefghijklmnopqrstuvwxyz0-9-_]+!s', '', 'page-'. form_clean_id(drupal_strtolower(arg(0))));
  // If on an individual node page, add the node type.
  if (isset($variables['node']) && $variables['node']->type) {
    $body_classes[] = 'node-type-'. form_clean_id($variables['node']->type);
  }
  // Add information about the number of sidebars.
  if ($variables['layout'] == 'both') {
    $body_classes[] = 'two-sidebars';
  }
  elseif ($variables['layout'] == 'none') {
    $body_classes[] = 'no-sidebars';
  }
  else {
    $body_classes[] = 'one-sidebar sidebar-'. $variables['layout'];
  }
  // Implode with spaces.
  $variables['body_classes'] = implode(' ', $body_classes);

  // Build a list of suggested template files in order of specificity. One
  // suggestion is made for every element of the current path, though
  // numeric elements are not carried to subsequent suggestions. For example,
  // <a href="http://www.example.com/node/1/edit" title="http://www.example.com/node/1/edit">http://www.example.com/node/1/edit</a> would result in the following
  // suggestions:
  //
  // page-node-edit.tpl.php
  // page-node-1.tpl.php
  // page-node.tpl.php
  // page.tpl.php
  $i = 0;
  $suggestion = 'page';
  $suggestions = array();
  while ($arg = arg($i++)) {
    $arg = str_replace(array("/", "\\", "\0"), '', $arg);
    $suggestions[] = $suggestion .'-'. $arg;
    if (!is_numeric($arg)) {
      $suggestion .= '-'. $arg;
    }
  }
  if (drupal_is_front_page()) {
    $suggestions[] = 'page-front';
  }

  if ($suggestions) {
    $variables['template_files'] = $suggestions;
  }
}
?>
*/
