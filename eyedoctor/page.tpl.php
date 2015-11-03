<?php
	global $base_url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php if (isset($favicon)) : ?>
<link rel="shortcut icon" href="<?php print $favicon ?>" type="image/x-icon" />
<?php endif ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $head_title ?></title>
<?php print $head ?><?php print $styles ?><?php print $scripts ?>
<link rel="stylesheet" type="text/css" href="<?php print $adminCSS ?>">
<link rel="stylesheet" type="text/css" href="<?php print $commonCSS ?>">
<link rel="stylesheet" type="text/css" href="<?php print $common02CSS ?>">
<script type="text/javascript" src="<?=$globalJS?>"></script>
<script language="javascript" type="text/javascript">
		function clearText(field)
		{
			if (field.defaultValue == field.value) field.value = '';
			else if (field.value == '') field.value = field.defaultValue;
		}
	</script>
</head>
<body>
<body id="ctl00__body">
<div class="GlobalWrapper">
  <div id="ctl00_HeaderWrapper" class="HeaderWrapper">
    <div class="Header"> <a id="SiteLogo" href="#"><img style="position: absolute;" src="<?=$logo?>" alt="DC eye doctors" title="DC eye doctors" width="108" height="113"></a>
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
            <p class="message">
              <!-- #Text Ads -->
              <?php print $textAds?>
              <!-- $Text Ads -->
            </p>
          </div>
          <div class="Module006Corner bottomLeft"></div>
          <div class="Module006Corner bottomRight"></div>
        </div>
      </div>
    </div>
    <div class="bottomGrad"></div>
  </div>
  <form name="aspnetForm" method="post" action="#" id="aspnetForm">
    <div id="ctl00_uxWrapper" class="Wrapper FLC">
      <div class="FullPage">
        <div id="FinderSearch">
          <div id="FinderSearchBoxWrapper">
            <div id="FinderSearchBox">
              <!-- #Main Seach -->
              <?php print $mainSearch?>
              <!-- $Main Seach -->
            </div>
          </div>
          <ul id="FinderSearchBackground">
            <li style="background-image: url(&quot;http://demo.kashyapinfotech.com/eyedoctors/ui/images/bg_image1.jpg&quot;);"></li>
            <li style="background-image: url(&quot;http://demo.kashyapinfotech.com/eyedoctors/ui/images/bg_image6.jpg&quot;); display: list-item;"></li>
            <li style="background-image: url(&quot;http://demo.kashyapinfotech.com/eyedoctors/ui/images/bg_image5.jpg&quot;); display: list-item;"></li>
            <li style="background-image: url(&quot;http://demo.kashyapinfotech.com/eyedoctors/ui/images/bg_image3.jpg&quot;); display: list-item;"></li>
            <li style="background-image: url(&quot;http://demo.kashyapinfotech.com/eyedoctors/ui/images/bg_image2.jpg&quot;); display: none;"></li>
          </ul>
        </div>
        <div id="SiteFeatures" class="FLC">
          <!-- #Little Boxes -->
          <!-- BOX-1 -->
          <?php print $box1?>
          <!-- BOX-2 -->
          <?php print $box2?>
          <!-- BOX-3 -->
          <?php print $box3?>
          <!-- BOX-4  -->
          <?php print $box4?> </div>
      </div>
      <script type="text/javascript">
	
		jQuery(function($){
			var $container = $('#ActivityCarouselContent ul');
			var $leftButton = $('#ActivityCarousel .CarouselButtonPrevious');
			var $rightButton = $('#ActivityCarousel .CarouselButtonNext');
			var $backgroundImages = $('#FinderSearchBackground li');
			
			TRAILS.objects.ActivityCarousel = new TRAILS.utils.HorizontalSlider($leftButton, $rightButton, $container);
			TRAILS.objects.backgroundManager = new TRAILS.utils.BackgroundManager($backgroundImages);
		});
	
	</script>
      <script type="text/javascript">
//<![CDATA[

    TRAILS.objects.SearchBox = new (function($){
		var self = this;
		var $button = $('#FinderSearchBoxButton');
        var $input = $('#FinderSearchBoxInput');
        var defaultText = 'Neighborhood or Zip code';
        var style  = {
			focus: { color: $input.css('color'), fontSize: $input.css('fontSize') },
			blur: { color: '#bbb', fontSize: '15px' }
        };
        
        function getInputValue(){
			return $input.val().trim();
        }
        function onsubmit(){
			if(event.keyCode === 13)
				return self.submit();
        }
        
        this.style = style;
        
        this.submit = function(){
			if(getInputValue() != defaultText)
				document.location = '/finder/?q=' + escape($input.val());
            
            return false;
        };
        this.focus = function(){
			if(getInputValue() == defaultText)
				$input.css(style.focus).val(String.empty);
        };
        this.blur = function(){
			var value = getInputValue();
			
			if(value.length === 0 || value == defaultText)
				$input.css(style.blur).val(defaultText);
        };
        this.dispose = function(){
			$button.unbind('.SearchBox');
			$input.unbind('.SearchBox');
			
			for(var property in this)
				delete property;
        };

		$button.bind('click.SearchBox', this.submit);
        $input
			.bind('focus.SearchBox', this.focus)
			.bind('blur.SearchBox', this.blur)
			.bind('keydown.SearchBox', onsubmit)
			.trigger('blur');
    })(jQuery);
    
//]]>
</script>
    </div>
  </form>
  <div class="Footer" id="Footer">
    <div class="TAC">
      <!-- #Footer Block -->
      <?php print $footer?>
      <!-- $Footer Block-->
    </div>
  </div>
  <script type="text/javascript">
		//<![CDATA[
			jQuery('a[rel*=http]').each(function(){ this.href = this.rel; });			
		//]]>
		</script>
  <script type="text/javascript" src="js/doctors_003.js"></script>
  <script type="text/javascript" src="js/doctors.js"></script>
  <script type="text/javascript" src="js/doctors_002.js"></script>
</div>
<?php print $closure ?>
</body>
</html>
