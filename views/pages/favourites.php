<!-- Favourites page with links to marked sections -->
<div id="myteachuos_wrapper">
    <div id="myteachuos_container">
        <img id="myteachuos_logo" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $plugin->getPluginPath() . '/assets/images/myteachuos_white.svg' ?>">
        <p id="myteachuos_title">My teachUOS+</p>
        <div id="link_wrapper">
            <? for ($i = 0; $i < count($favourites_titles); $i++) : ?>
                <a class="favourites_link" href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $course_id, 'selected' => $favourites_titles[$i][0]]) ?>" >
                    <img class="top link_img" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $plugin->getPluginPath() . '/assets/images/favourite.svg' ?>" />
                    <img class="bottom link_img" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $plugin->getPluginPath() . '/assets/images/favourite_white.svg' ?>" />
                    <p class="link_txt"><?= $favourites_titles[$i][1] ?> <?= $favourites_titles[$i][2] ?></p>
                </a>
            <? endfor ?>
        </div>
        <!-- Button with icon to return to the index pages -->
        <a class='koop-back'  href='..\'>
            <img width="30" class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $plugin->getPluginPath() . '/assets/images/home.svg' ?>" />
            <img width="30" class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $plugin->getPluginPath() . '/assets/images/home_hover.svg' ?>" />
        </a>
    </div>
</div>
