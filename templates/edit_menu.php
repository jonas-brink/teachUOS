<div id='koop_edit_menu_dialog' title='Menu bearbeiten'  style='display: none;'>
	<div class='flex-wrapper'>
		<form action="edit_koop_page" method="post" >
			<input type="hidden" name="cid" value="<?= $cid ?>" >
			<input type="hidden" name="selected" value="<?= $selected ?>" >
			<input type="hidden" name="new_page" value="<?= $new_page ?>" >
			<table  style="float: left">
			
			<? foreach ($kacheln as $id => $kachel) : ?>
                         
              <tr><td><div>
        				<?= $id ?>. Link: <input align="right" type="text" name="kacheln[<?= $id ?>][link]" value="<?= $kachel['link'] ?>" >
        			</div>
        			<br>
        	        <div>
            	        <?= $id ?>. Image:
                	    <select id="k<?= $id ?>_img" name="kacheln[<?= $id ?>][img]" onchange="$('#k<?= $id ?>_preview').attr('src',getImagesFolder()+$(this).val())">
                	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                             <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                          <? endforeach ?>
                        </select>
                    </div>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k<?= $id ?>_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kachel['img'] ?>'/></a>
               </td>
            </tr>
            <? endforeach ?>

        	</table>
        	
        	<div style="float: left;margin-top:10px">
            	         Title: <input type="text" name="title" value="<?= $title ?>" >
                   
              </div>
              
        	  <div style="float: right;margin-top:10px">
            	         Header:
                	    <select id="header_img" name="header[image]" onchange="$('#header_img_preview').attr('src',getImagesFolder()+$(this).val())">
                	      <? foreach ($all_images as $img) : ?>
                             <option value="<?= $img ?>"><?= $img ?></option>
                          <? endforeach ?>
                        </select>
                        <br>
                        Größe: <input type="text" name="header[image_width]" value="<?= $header['image_width'] ?>" >
                        <br>
                    <img id='header_img_preview' style="margin-top:10px" width="200" src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $header['image'] ?>'/>
                    
              </div>
              
              <div style="float: right;margin-top:10px">
            	         Comic:
                	    <select id="header_comic" name="header[comic]" onchange="$('#comic_img_preview').attr('src',getImagesFolder()+$(this).val())">
                	      <? foreach ($all_images as $img) : ?>
                             <option value="<?= $img ?>"><?= $img ?></option>
                          <? endforeach ?>
                        </select>
                        <br>
                        <img id='comic_img_preview' width="100" src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $header['comic'] ?>'/>
              
              
                        <br>
                        X-Pos: <input type="text" name="header[comic_x_pos]" value="<?= $header['comic_x_pos'] ?>" >
                        Y-Pos: <input type="text" name="header[comic_y_pos]" value="<?= $header['comic_y_pos'] ?>" >
                        <br>
                        Größe: <input type="text" name="header[comic_width]" value="<?= $header['comic_width'] ?>" >
                    </div>
              
            <div style="float: right; width: 200px;margin-top:10px">
            			
                		<div class="alignleft margin10">
                        	<button  >Speichern</button>
                     </form>
                        	
                    	</div>      
             </div>
		
		   
	</div>
</div>
 
<script>

//by edit menu
function set_selected_images() {
	<? foreach ($kacheln as $id => $kachel) : ?>
		$('#k<?= $id ?>_img option[value="<?= $kachel['img'] ?>"]').attr('selected','selected');
	<? endforeach ?>
	$('#header_img option[value="<?= $header['image'] ?>"]').attr('selected','selected');
	$('#header_comic option[value="<?= $header['comic'] ?>"]').attr('selected','selected');
	

}
function getImagesFolder() {
	return '<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/';
}
</script>