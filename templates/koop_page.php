<div class='koop-sub-content koop-content-centered' style='width:100%;  display: none;'>
      <div class='koop-kacheln-behalter'>
        <div class='flex-wrapper kacheln_header'>        
        	<img  style='width:<?= $header['image_width'] ?>px;margin-bottom: 1em;' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?=$header['image'] ?>' />
    		<img  style='width:<?= $header['comic_width'] ?>px;margin-left: <?= $header['comic_x_pos'] ?>px;margin-bottom: <?= $header['comic_y_pos'] ?>px;' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?=$header['comic'] ?>' />
    	</div>
    	
        <div class='flex-wrapper'>
    
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[1]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[1]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[1]['img'] ?>'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[2]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[2]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[2]['img'] ?>'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[3]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[3]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[3]['img'] ?>'/>
                    </a>
        </div>
        
        <div class='flex-wrapper'>
      
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[4]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[4]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[4]['img'] ?>'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[5]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[5]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[5]['img'] ?>'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[6]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[6]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[6]['img'] ?>'/>
                    </a>
     
        </div>
        
        <div class='flex-wrapper'>
            
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[7]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[7]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[7]['img'] ?>'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[8]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[8]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[8]['img'] ?>'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='<?= $kacheln[9]['link'] ?>'>
                        <img class='bottom' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[9]['img_hover'] ?>'/>
                        <img class='top' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[9]['img'] ?>'/>
                    </a>
        </div>
                            
                            
                            
                            
        <div class='flex-wrapper'>
        </div>
                            
                            
        <div class='sub_schwebend_blick'><img src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/A_schweben.svg'>
            </div>
        <? if ($edit_mode == true) : ?>
       <div class='flex-wrapper'>
           <button id='open_edit_menu_dialog' onClick='$( "#koop_edit_menu_dialog" ).dialog({
                resizable: true,
                modal: true,
              width: 900,});set_selected_images();'>Bearbeiten</button>   
        </div>
        <? endif ?> 
   </div>
   <div class='koop-text-behalter'>
            
   </div>
</div>