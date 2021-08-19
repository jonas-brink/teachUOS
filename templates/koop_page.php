<!--
    Template for second layer
-->
<div class='koop-sub-content koop-content-centered' style='width:100%;  display: none;'>

    <div class='koop-kacheln-behalter'>
        <!-- Selection of image to represent active main section -->
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

        <!-- Button with icon to return to the index pages -->
        <a class='koop-back'  href='..\'>
            <img width="30" class="top" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/home.svg" />
            <img width="30" class="bottom" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/home_hover.svg" />
        </a>    
        
        <!-- teachUOS logo at the bottom of the sidebar -->
        <div id="logo_wrapper">
            <div class="koop-footer light">
                <img width="90"  src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/B0_teachUOS1.svg" />
                <br>
                VOM ZENTRUM FÜR LEHRERBILDUNG DER
                <br>
                <p class="black fontsize13">UNVERSITÄT OSNABRÜCK</p>
            </div>
        </div>
    </div>

    <!-- COURSEWARE CONTENT -->
    <div class='koop-text-behalter'>
        <div id='header-read-mode'>
            <!-- Show star which indicates whether the page has been marked as a favourite or not -->
            <? if(!$isFavourite) : ?>
                <a href="<?= PluginEngine::getURL('koop/pages/addToFavourites', ['selected' => Request::int('selected')]) ?>">
                    <img id='favourite-star' src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/non_favourite.svg" />
                </a>
            <? else : ?>
                <a href="<?= PluginEngine::getURL('koop/pages/removeFromFavourites', ['selected' => Request::int('selected')]) ?>">
                  <img id='favourite-star' src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/favourite.svg" />
                </a>
            <? endif ?>
        </div>
    </div>

</div>