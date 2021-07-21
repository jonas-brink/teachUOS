<!--
    Template für jeweils die 2. Ebene (Keine Kacheln)
-->

<div class='koop-sub-content koop-content-centered' style='width:100%;  display: none;'>
    <div class='koop-kacheln-behalter'>
        <div id="chapterImg_container">
            <? if ((array_search($selected_id, $id_arr) == "study") || (array_search($selected_parent_id, $id_arr) == "study") || (array_search($selected_grandparent_id, $id_arr) == "study")) : ?>
                <img class="chapterImg" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/B_studium.svg"/>
            <? elseif ((array_search($selected_id, $id_arr) == "practice") || (array_search($selected_parent_id, $id_arr) == "practice") || (array_search($selected_grandparent_id, $id_arr) == "practice")) : ?>
                <img class="chapterImg" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/B_praxis.svg"/>
            <? elseif ((array_search($selected_id, $id_arr) == "media") || (array_search($selected_parent_id, $id_arr) == "media") || (array_search($selected_grandparent_id, $id_arr) == "media")) : ?>
                <img class="chapterImg" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/B_digital.svg"/>
            <? elseif ((array_search($selected_id, $id_arr) == "subjects") || (array_search($selected_parent_id, $id_arr) == "subjects") || (array_search($selected_grandparent_id, $id_arr) == "subjects")) : ?>        
                <img class="chapterImg" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/B_faecher.svg"/>
            <? endif ?>
        </div>

        <!-- COURSEWARE SIDEBAR -->

        <a class='koop-back hover_image'  href='..\'>
            <img width="30" style="margin-left: -20px;"  class="bottom" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/arrow-back.svg" />
            <img width="30" style="margin-left: -20px;" class="top" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/arrow-back-outline.svg" /> <br>
        </a>    
        
        <div id="logo_wrapper">
            <div class="koop-footer22 light">
                <img width="90"  src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/B0_teachUOS1.svg" />
                <br>
                VOM ZENTRUM FÜR LEHRERBILDUNG DER
                <br>
                <p class="black fontsize13">UNVERSITÄT OSNABRÜCK</p>
            </div>
        </div> 
        
    </div> 
    <div class='koop-text-behalter'>
        <div id='header-read-mode'>
            <a href="<?= PluginEngine::getURL('koop/index', []) ?>" >
                <? if ((array_search($selected_id, $id_arr) == "study") || (array_search($selected_parent_id, $id_arr) == "study") || (array_search($selected_grandparent_id, $id_arr) == "study")) : ?>
                    <img id='favorite-star' src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/non_favorites.png" />
                <? else : ?>
                    <img id='favorite-star' src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/favorit.png" />
                <? endif ?>
            </a>
        </div>
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