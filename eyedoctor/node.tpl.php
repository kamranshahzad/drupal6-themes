<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>


  <?php if ($submitted): ?>
    <div><?php print $submitted; ?></div>
  <?php endif; ?>
	
  <div class="CLEAR mb"></div>
  
  
  <div class="content clear-block" id="content-inner">
    <?php print $content ?>
  	<br/>
  </div>
  
  <div class="clear-block">
    <div class="meta">
    <?php if ($taxonomy): ?>
      <div class="terms"><?php print $terms ?></div>
    <?php endif;?>
    </div>
	
    <br/>
   	<?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
    
  </div>

