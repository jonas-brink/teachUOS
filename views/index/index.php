<!-- teachUOS index page -->
<div class="koop-content-centered2 ">
    <div class="koop-content2">
        <!-- myTeachUOS button (in style of forum) -->
        <a href="<?= PluginEngine::getURL('koop/pages/favourites') ?>" >
            <img align="right" style="cursor: pointer;margin: 34px;" width="72" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A0_forum.svg' ?>" />
        </a>
        
        <!-- teachUOS logo -->
        <div class="teachuos_logo">
            <img id='teachuos-logo2' style='width:290px' src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_teachUOS.svg' ?>'/>
        </div>

        <!-- Container of the 4 main sections -->
        <div class="flex-container-1000-200-l100">	
            <!-- Section "Durch's Studium" -->
            <div class="index_comic">
                <a class='koop-index-navigation hover_image index_comic2' href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $koop_course_id, 'selected' => $study_block_id]) ?>" >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_studium_hover.svg' ?>" />
                    <img class="top study_link" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_studium.svg' ?>" />
                    <p id="study_txt" class="index_comic_txt study_link">DURCH'S <b id="study_b">STUDIUM</b></p>
                </a>
            </div>
            <!-- Section "Blick in die Fächer" -->
            <div class="index_comic">
                <a class='koop-index-navigation hover_image index_comic1' href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $koop_course_id, 'selected' => $subjects_block_id]) ?>" >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_faecher_hover.svg' ?>" />
                    <img class="top subjects_link" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_faecher.svg' ?>" />
                    <p id="subjects_txt" class="index_comic_txt subjects_link">BLICK IN DIE <b id="subjects_b">FÄCHER</b></p>
                </a>
            </div>
            <!-- Section "Digitale Medien" -->
            <div class="index_comic">
                <a class='koop-index-navigation hover_image index_comic3' href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $koop_course_id, 'selected' => $media_block_id]) ?>" >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_digital_hover.svg' ?>" />
                    <img class="top media_link" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_digital.svg' ?>" />
                    <p id="media_txt" class="index_comic_txt media_link">DIGITALE <b id="media_b">MEDIEN</b></p>
                </a>
            </div>
            <!-- Section "In die Praxis" -->
            <div class="index_comic">
                <a class='koop-index-navigation hover_image index_comic4' href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $koop_course_id, 'selected' => $practice_block_id]) ?>" >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_praxis_hover.svg' ?>" />
                    <img class="top practice_link" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_praxis.svg' ?>" />
                    <p id="practice_txt" class="index_comic_txt practice_link">IN DIE <b id="practice_b">PRAXIS</b></p>
                </a> 
            </div>
        </div>
    </div>
    
    <!-- teachUOS infobox for first visits -->
    <div class="koop-infobox">
        <div class="koop-footer-line"></div>
        <div class="koop-footer-content">
            <h3>Herzlich Willkommen auf teachUOS!</h3>
            <p class="light">
                Du suchst nach Orientierung in deinem Lehramtsstudium? Wer kann dir helfen und wo findest du die richtigen Informationen? Du möchtest deinen eigenen Lernprozess durch Lerntools oder -videos unterstützen? Du interessierst dich über das Studienangebot hinaus für Möglichkeiten des digitalen Unterrichts? Vielleicht hast du auch Lust, einen Blick in andere Fächer zu werfen oder denkst über einen Auslandsaufenthalt nach? Viele Anregungen, Hinweise und Tipps findest du hier auf <font color="#7F9CE3" >teachUOS</font>!
            </p>
            <p class="light">
                <font color="#7F9CE3" >teachUOS</font> ist fächerübergreifend angelegt und richtet sich an alle Lehramtsstudierende. Unimitarbeitende aus dem wissenschaftlichen und organisatorischen Bereich sowie Studierende haben an der Entwicklung dieses Portals mitgewirkt. <font color="#7F9CE3" >teachUOS</font> lädt zum Stöbern und Mitgestalten ein. Melde dich gerne hier, falls du Infos vermisst oder Tipps für Verbesserungen hast! 
            </p>
        </div>
    </div>  
</div>