<!--
    Template für jeweils die 2. Ebene (Keine Kacheln)
-->

<div class='koop-sub-content koop-content-centered' style='width:100%;  display: none;'>
    JEWEILS 2. EBENE - KEINE KACHELN
    <div class='koop-kacheln-behalter'>
        KOOP KACHELN BEHALTER
        <? if ($text_sidemenu == true) : ?>   
         <a class='koop-back hover_image'  href='..\'>
         <img width="30" style="margin-left: -20px;"  class="bottom" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/arrow-back.svg" />
         <img width="30" style="margin-left: -20px;" class="top" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/arrow-back-outline.svg" /> <br>
         
         </a>    

        <? else: ?>
         <div  style="width: 100%;">
        	<? foreach ($kacheln as $id => $kachel) : ?>
        	<div class='flex-wrapper <?  if($id % 2 != 0): ?>width50floatleft<? else: ?>width50floatright<? endif ?>'>
    			 
                <a id="kachel_<?= $id ?>" class='koop-index-navigation sub_kacheln margin_center'  href='#'>
                    <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/<?= $kachel['img_hover'] ?>'/>
                    <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/<?= $kachel['img'] ?>'/>
                </a>
            </div>
        	<? endforeach ?>
        	<div class='flex-wrapper' style="width: 100%;">
            	<a  class='koop-index-navigation sub_kacheln margin_center'  style="width: 90px;" href='..\'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/B9_back_hover.svg'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images3/B9_back.svg'/>
                </a>
            </div>
         </div>   
        <? endif ?>
        <? if ($edit_mode == true) : ?>  
    	<div class='flex-wrapper' style="width: 100%;">
        	
           <button class="margin_center" style="margin-top:10px;background-color: #28497c;color: #FFFFFF;border: 2px solid #FFFFFF;" id='open_edit_menu_dialog' onClick='$( "#koop_edit_menu_dialog" ).dialog({
                resizable: true,
                modal: true,
              width: 900,});set_selected_images();'>
              <img width="20" src='<?=$ABSOLUTE_URI_STUDIP ?>assets/images/icons/white/edit.svg'>
              Bearbeiten</button>   
        </div>
        <? endif ?>
        
        <div class="koop-footer22 light">
            
         	<img width="90"  src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images2/B0_teachUOS1.svg" /><br>
         	VOM ZENTRUM FÜR LEHRERBILDUNG DER<br>
         	<p class="black fontsize13">
         		UNVERSITÄT OSNABRÜCK
         	</p>
           
        </div> 
        
   </div> 
   <div class='koop-text-behalter'>

      GOODBYE
   </div>
</div>

<script>
	 <? if ($text_sidemenu == true) : ?>var text_sidemenu= true;<? endif ?>
$( document ).ready(function() {
	 $(".subchapter").each(function( index ) {
		 if(index>0){
			 $("#kachel_"+index).attr("href", $( this ).find("a").attr("href"));
			 $("#edit_link_"+index).text($( this ).find("a").text());
		 }
	});

	// hide all boxes without link
	$("a.sub_kacheln.koop-index-navigation.margin_center").each(function( index ) {
		if($( this ).attr("href") == "#"){
			$( this ).hide();
		}
	});
});
</script>