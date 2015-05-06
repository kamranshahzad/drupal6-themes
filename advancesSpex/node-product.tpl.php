<?php

	global $base_url;
	$tPath = $base_url.'/sites/all/themes/advancesSpex/';
?>
<?php // Grabs the firsts image path and sets $imagePath.


$result = db_query("SELECT tid from term_node WHERE nid='$node->nid'");
$row = db_fetch_object($result);

$imagePath = $node->field_image_cache['0']['filepath'];

//$parents = taxonomy_get_parents_all(3);
$category = taxonomy_get_term($row->tid);


?>

<?php

		// $node = node_load($node->nid);

		// Make the thickbox thing work
		// print $output in the section where you want the images to appear
		  $images = $node->field_image_cache;
		  $output = '';
 	  //print_r($images);
		  foreach ($images as $thumbnail) {
		    $output .= theme('imagecache', 'uc_thumbnail', $thumbnail['filepath'], $thumbnail['alt'], $thumbnail['title']);
		  }
		  //$output .= theme('imagecache', 'uc_thumbnail', $thumbnail['filepath'], $thumbnail['alt'], $thumbnail['title']);
		?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="631" align="left" valign="middle" class="txt-georgia"><span class="tahoma-17Copy"><strong>Start Shopping </strong></span><span class="tahoma-17"><strong>for Your Glasses</strong><strong></strong></span></td>
          <td width="40" align="center" valign="middle"><img src="<?php print $tPath?>images/arrow-gra-white.jpg" width="23" height="24" /></td>
        </tr>
        <tr>
          <td colspan="2" align="left" valign="middle" background="<?php print $tPath?>images/separator-dash.jpg" class="txt-georgia">&nbsp;</td>
        </tr>
        <tr>
          <td height="10" colspan="2" align="left" valign="middle" class="txt-georgia"><img src="<?php print $tPath?>images/spacer.gif" alt="" width="1" height="1" /></td>
        </tr>
        
        <tr>
          <td colspan="2" align="left" valign="middle" class="text-tahoma-22">Glass Category:<?php print $category->name; ?> </td>
        </tr>
        
        <tr>
          <td colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="36%" align="left" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                      <tr>
                        <td><span class="tahoma-17">Price</span><span class="txt-comic-16">:</span> <span class="tahoma-18">&pound;</span><span class="tahoma-30"><?php print $node->sell_price ?></span> <span class="arial-12-666666">including lenses </span></td>
                      </tr>
                      <tr>
                        <td><span class="tahoma-17">Available Color:</span> <span class="tahoma-17">Purple</span></td>
                      </tr>
                      <tr>
                        <td><span class="tahoma-17">Frame type:</span> <span class="tahoma-17Copy"></span></td>
                      </tr>
                      <tr>
                        <td><span class="tahoma-17">Sku: </span><span class="tahoma-17Copy"><?php print $node->model ?></span></td>
                      </tr>
                      
                  </table></td>
                  <td width="37%" align="center" valign="middle" bordercolor="#000000">
                  <span class="glass">
                  <div class="prod_content">
                  <?php // default image display 
			      if (file_exists($imagePath)){
			      print $output;
			      }
			      else {
			      print "<p id='image_error'>Sorry, we don't have a photo for this product at the moment.</p>";   
			      }
			      ?>
                  </span>
                  </td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="5" cellpadding="0">
                
                <tr>
                  <td width="60%" align="left" valign="top"><p><span class="tahoma-17">Description:</span></p>
                    <p align="justify"><span class="arial-12-666666">
					 <?php print $node->content['body']['#value'];  ?>
                    </span></p>
                    </td>
                  <td width="34%" align="right" valign="top"><table width="90%" border="0" cellspacing="10" cellpadding="0">
                    <tr>
                      <td align="left" valign="top" width="252"><?php print $node->content['add_to_cart']["#value"]; ?></td>
                    </tr>
                  </table>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>

          </table>
		  <!--glassContainer starts-->
		  <div class="clear"></div>
		  <!--productContainer ends-->
		  
		  
		  <div class="clear"></div>
		  <!--productContainer ends-->		  		  </td>
        </tr>
        <tr>
          <td height="10" colspan="2" align="left" valign="middle"><img src="<?php print $tPath?>images/spacer.gif" alt="" width="1" height="1" /></td>
        </tr>
        <tr>
          <td colspan="2" align="left" valign="middle" background="<?php print $tPath?>images/gray-line.jpg"><img src="<?php print $tPath?>images/spacer.gif" alt="" width="1" height="1" /></td>
        </tr>
</table>