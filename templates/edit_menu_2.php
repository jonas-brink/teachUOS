<div id='koop_edit_menu_dialog' title='Menu bearbeiten'  style='display: none;'>
	<div class='flex-wrapper'>
		<form action="edit_koop_page" method="post" >
			<input type="hidden" name="cid" value="<?= $cid ?>" >
			<input type="hidden" name="selected" value="<?= $selected ?>" >
			<input type="hidden" name="new_page" value="<?= $new_page ?>" >
			<input type="hidden" name="layout" value="2" >
			<input type="hidden" name="parent" value="0" >
			<table id="edit_kacheln_table" style="float: left">
			
			<? foreach ($kacheln as $id => $kachel) : ?>
                         
              <tr class="edit_kachel"><td><div id="edit_link_<?= $id ?>">
        				<?= $id ?>. Link: 
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
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k<?= $id ?>_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/<?= $kachel['img'] ?>'/></a>
               </td>
            </tr>
            <? endforeach ?>

        	</table>
        	
              

              
            <div style="float: right; width: 200px;margin-top:10px">
            			text side menu: <input type="checkbox" name="text_sidemenu" <? if($text_sidemenu): ?>checked<? endif ?> >
                		<div class="alignleft margin10">
                        	<button  >Speichern</button>
                     </form>
                        	
                    	</div>      
             </div>
		
		   
	</div>
</div>
 
<script>

// by edit menu
function set_selected_images() {
	<? foreach ($kacheln as $id => $kachel) : ?>
		$('#k<?= $id ?>_img option[value="<?= $kachel['img'] ?>"]').attr('selected','selected');
	<? endforeach ?>
	$('#header_img option[value="<?= $header['image'] ?>"]').attr('selected','selected');
	$('#header_comic option[value="<?= $header['comic'] ?>"]').attr('selected','selected');
	

}
function getImagesFolder() {
	return '<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/';
}

// add a new row in edit window for each chapter without a block 
$( document ).ready(function() {
	var add_count = $(".subchapter").length -1 - $(".edit_kachel").length;
	var max_id = $(".subchapter").length -1 ;
	
	// add a new edit box for each subchapter without a block 
    $(".subchapter").each(function( index ) {
    	 if(index>$(".edit_kachel").length){
    		 current_add_id = index;
    		 $('#edit_kacheln_table').append('<tr class="edit_kachel"><td><div> *neu*: '+$( this ).find("a").text()+'</div><br><div>'+current_add_id+'. Image:<select id="k'+current_add_id+'_img" name="kacheln['+current_add_id+'][img]" onchange="$(\'#k'+current_add_id+'_preview\').attr(\'src\',getImagesFolder()+$(this).val())"><? foreach ($kacheln_images as $kacheln_image) : ?><option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option><? endforeach ?></select></div></td><td><a href="#" class="koop-index-navigation sub_kacheln"><img id="k'+current_add_id+'_preview" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/C1_deutsch.svg"/></a></td></tr>');
    	 }
    });

    // set parent id
    var parent_id = $(".chapter.selected").find('a').attr('href').split("selected=")[1];
    $('input[name="parent"]').val(parent_id);

    var urlParams = new URLSearchParams(window.location.search);
    // disable box edit if on child page
    if(parent_id != urlParams.get('selected')){
    	$("#edit_kacheln_table").hide();
    }

 });
</script>