<!--
    Template für jeweils die 2. Ebene (Keine Kacheln)
-->

<div class='koop-sub-content koop-content-centered' style='width:100%;  display: none;'>
    JEWEILS 2. EBENE - KEINE KACHELN
    <div class='koop-kacheln-behalter'>
        KOOP KACHELN BEHALTER
         <a class='koop-back hover_image'  href='..\'>
         <img width="30" style="margin-left: -20px;"  class="bottom" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/arrow-back.svg" />
         <img width="30" style="margin-left: -20px;" class="top" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/arrow-back-outline.svg" /> <br>
         
         </a>    
        
        <div class="koop-footer22 light">
            
         	<img width="90"  src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/B0_teachUOS1.svg" /><br>
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