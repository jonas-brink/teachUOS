<!--
    Template for second layer
-->
<div class='teachuos-sub-content teachuos-content-centered' style='width:100%;  display: none;'>

    <div class='teachuos-kacheln-behalter'>
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
        <a class='teachuos-back'  href='..\'>
            <img width="30" class="top" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/home.svg" />
            <img width="30" class="bottom" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/home_hover.svg" />
        </a>    
        
        <!-- teachUOS logo at the bottom of the sidebar -->
        <div id="logo_wrapper">
            <div class="teachuos-footer light">
                <img width="90"  src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/B0_teachUOS1.svg" />
                <br>
                VOM ZENTRUM FÜR LEHRERBILDUNG DER
                <br>
                <p class="black fontsize13">UNVERSITÄT OSNABRÜCK</p>
            </div>
        </div>
    </div>

    <!-- COURSEWARE CONTENT -->
    <div class='teachuos-text-behalter'>
        <div id='header-read-mode'>
            <!-- Show star which indicates whether the page has been marked as a favourite or not -->
            <? if(!$isFavourite) : ?>
                <a class="favourite-star" href="<?= PluginEngine::getURL('teachUOS/pages/addToFavourites', ['selected' => Request::int('selected')]) ?>">
                    <img class="top" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/non_favourite.svg" />
                    <img class="bottom" src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/favourite.svg" />
                </a>
            <? else : ?>
                <a class="favourite-star marked" href="<?= PluginEngine::getURL('teachUOS/pages/removeFromFavourites', ['selected' => Request::int('selected')]) ?>">
                    <img src="<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/favourite.svg" />
                </a>
            <? endif ?>
            <!-- Button/Link to MyTeachUOS page -->
            <a id="myteachuos" href="<?= PluginEngine::getURL('teachUOS/pages/favourites') ?>">
                 <img class="myteachuos_img" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $plugin->getPluginPath() . '/assets/images/myteachuos.svg' ?>">
                <p class="myteachuos_txt">My teachUOS</p>
            </a>

        </div>
    </div>

</div>