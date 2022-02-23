<!-- teachUOS index page -->
<div class="teachuos-content-centered2 ">
    <div class="teachuos-content2">
        <!-- myTeachUOS button (in style of forum) -->
        <a id="myteachuos" href="<?= PluginEngine::getURL('teachUOS/pages/favourites') ?>">
            <img class="myteachuos_img" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/myteachuos.svg' ?>" />
            <p class="myteachuos_txt">My teachUOS</p>
        </a>

        <!-- teachUOS logo -->
        <div class="teachuos_logo">
            <img id='teachuos-logo2' src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_teachUOS.svg' ?>' />
        </div>

        <!-- Container of the 4 main sections -->
        <div class="flex-container-1000-200-l100">
            <!-- Section "Durch's Studium" -->
            <div class="index_comic">
                <a class='teachuos-index-navigation hover_image index_comic2' href="<?= PluginEngine::getURL('teachUOS/pages/cw', ['cid' => $teachUOS_course_id, 'selected' => $study_block_id]) ?>">
                    <img class="bottom" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_studium_hover.svg' ?>" />
                    <img class="top study_link" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_studium.svg' ?>" />
                    <p id="study_txt" class="index_comic_txt study_link">DURCHS <b id="study_b">STUDIUM</b></p>
                </a>
            </div>
            <!-- Section "Blick in die Fächer" -->
            <div class="index_comic">
                <a class='teachuos-index-navigation hover_image index_comic1' href="<?= PluginEngine::getURL('teachUOS/pages/cw', ['cid' => $teachUOS_course_id, 'selected' => $subjects_block_id]) ?>">
                    <img class="bottom" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_faecher_hover.svg' ?>" />
                    <img class="top subjects_link" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_faecher.svg' ?>" />
                    <p id="subjects_txt" class="index_comic_txt subjects_link">BLICK IN DIE <b id="subjects_b">FÄCHER</b></p>
                </a>
            </div>
            <!-- Section "Digitale Medien" -->
            <div class="index_comic">
                <a class='teachuos-index-navigation hover_image index_comic3' href="<?= PluginEngine::getURL('teachUOS/pages/cw', ['cid' => $teachUOS_course_id, 'selected' => $media_block_id]) ?>">
                    <img class="bottom" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_digital_hover.svg' ?>" />
                    <img class="top media_link" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_digital.svg' ?>" />
                    <p id="media_txt" class="index_comic_txt media_link">DIGITALE <b id="media_b">MEDIEN</b></p>
                </a>
            </div>
            <!-- Section "In die Praxis" -->
            <div class="index_comic">
                <a class='teachuos-index-navigation hover_image index_comic4' href="<?= PluginEngine::getURL('teachUOS/pages/cw', ['cid' => $teachUOS_course_id, 'selected' => $practice_block_id]) ?>">
                    <img class="bottom" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_praxis_hover.svg' ?>" />
                    <img class="top practice_link" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_praxis.svg' ?>" />
                    <p id="practice_txt" class="index_comic_txt practice_link">IN DIE <b id="practice_b">PRAXIS</b></p>
                </a>
            </div>
        </div>
    </div>

    <!-- teachUOS infobox for first visits -->
    <div class="teachuos-infobox">
        <div class="teachuos-footer-line"></div>
        <div class="teachuos-footer-content">
            <h3>Herzlich Willkommen auf teachUOS!</h3>
            <p class="light">
                Du suchst nach Orientierung in deinem Lehramtsstudium und einen zentralen Ort mit allen wichtigen Informationen rund ums Studium? Dann bist du bei <font color="#7F9CE3">teachUOS</font> richtig!
            </p>
            <p class="light">
                Beispielsweise findest du hier Anregungen, Tipps und Ansprechpartner:innen zu deinen Fächern, Möglichkeiten des digitalen Unterrichts, Hinweise zu Auslandsaufenthalten sowie Fort- und Weiterbildungsangebote.
            </p>
            <p class="light">
                <font color="#7F9CE3">teachUOS</font> ist fächerübergreifend angelegt und richtet sich an alle Lehramtsstudierenden. Mitarbeitende der Universität Osnabrück sowie Studierende haben an der Entwicklung mitgewirkt. <font color="#7F9CE3">teachUOS</font> lädt ein zum Stöbern und bietet dir die Möglichkeit, deine Infos personalisiert abzuspeichern.
            </p>
            <p class="light">
                Probiere es aus und profitiere von den Vorteilen einer zentralen Informationsplattform für dein Lehramtsstudium.
            </p>
        </div>
    </div>
</div>