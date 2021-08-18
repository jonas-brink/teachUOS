<div class="koop-content-centered2 ">
    <div class="koop-content2 verlauf">
        <a href="<?= PluginEngine::getURL('koop/pages/favourites') ?>" >
            <img align="right" style="cursor: pointer;margin: 34px;" width="72" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A0_forum.svg' ?>" />
        </a>
        
        <div class="teachuos_logo">
            <img id='teachuos-logo2' style='width:290px' src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_teachUOS.svg' ?>'/>
        </div>
        <div class="flex-container-1000-200-l100">	
            <div class="index_comic">
                <a class='koop-index-navigation hover_image index_comic2' href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $koop_course_id, 'selected' => $study_block_id]) ?>" >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_studium_hover.svg' ?>" />
                    <img class="top study_link" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_studium.svg' ?>" />
                    <p id="study_txt" class="index_comic_txt study_link">DURCH'S <b id="study_b">STUDIUM</b></p>
                </a>
            </div>
            <div class="index_comic">
                <a class='koop-index-navigation hover_image index_comic1' href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $koop_course_id, 'selected' => $subjects_block_id]) ?>" >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_faecher_hover.svg' ?>" />
                    <img class="top subjects_link" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_faecher.svg' ?>" />
                    <p id="subjects_txt" class="index_comic_txt subjects_link">BLICK IN DIE <b id="subjects_b">FÄCHER</b></p>
                </a>
            </div>
            <div class="index_comic">
                <a class='koop-index-navigation hover_image index_comic3' href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $koop_course_id, 'selected' => $media_block_id]) ?>" >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_digital_hover.svg' ?>" />
                    <img class="top media_link" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_digital.svg' ?>" />
                    <p id="media_txt" class="index_comic_txt media_link">DIGITALE <b id="media_b">MEDIEN</b></p>
                </a>
            </div>
            <div class="index_comic">
                <a class='koop-index-navigation hover_image index_comic4' href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $koop_course_id, 'selected' => $practice_block_id]) ?>" >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_praxis_hover.svg' ?>" />
                    <img class="top practice_link" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_praxis.svg' ?>" />
                    <p id="practice_txt" class="index_comic_txt practice_link">IN DIE <b id="practice_b">PRAXIS</b></p>
                </a> 
            </div>
        </div>
        </div>   
        <div class="koop-footer2">
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
<form id='set_layout_form'  method="post" action="index/set_layout">
                <input type="hidden" name="koop_layout" value="1">
</form>

<style>

.verlauf {
    overflow: hidden;
    background-size: cover;
    background-position: center;
    background-image: url('<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_blue.svg' ?>');
}

#layout-sidebar {
    display: none;
}
#page_title_container{
    padding-top: 0px;
}

#layout_container{
    padding:0px !important;
}
#layout_content{
    min-width: 1300px !important;
}


.teachuos_logo {
    font-size: 10px;
    width: 1190px;
    margin-left: auto;
    margin-right: auto;
}

#teachuos-logo2{
    width: 260px !important;
    margin-top: 94px;
    margin-left: 170px;
    margin-bottom: 18px;
}


.flex-container-1000-200-l100 {
    /*width: 70%;*/
    height: 120px;
    /*margin-left: 15%;*/
    font-size: 13px;
    width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.index_comic{
    float:left;
    /*text-align: center;*/
    color: #ffffff;
    /*width: 25%;*/
    width: 300px;
    height: 100px;
}
/*
.index_comic img{
    margin-left: 2.5%;
}
*/
.index_comic_txt{
    position: absolute;
    margin-top: 128px !important;
    color: #97ACE0;
    font-size: 13px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 10px;
}

.index_comic_txt:hover{
    background-color: #28497c;
}

.index_comic_txt b{
    color: #28497C;
    
}

.index_comic1 p{
    margin-left: 127px;
    width: max-content;
}
.index_comic2 p{
    margin-left: 148px;
    width: max-content;
}
.index_comic3 p{
    margin-left: 110px;
    width: max-content;
}
.index_comic4 p{
    margin-left: 97px;
    width: max-content;
}


.index_comic1 img{
    width:210px;
    margin-top: 20px;
    margin-left: 87px;
    margin-right: auto;
    padding-bottom: 10px;
}

.light {
    font-weight: 300;
}
.regular {
    font-weight: 400;
}
.bold {
    font-weight: 700;
}
.black {
    font-weight: 900;
}
.fontsize13 {
    font-size: 13px;
}


.index_comic2 img{
    width:212px;
    margin-top: -11px;
    margin-left: 105px;
    margin-right: auto;
    color: #ffffff;
    padding-bottom: 10px;
}

.index_comic3 img{
    width:206px;
    margin-top: 24.5px;
    margin-left: 54px;
    margin-right: auto;
    color: #ffffff;
    padding-bottom: 10px;
}

.index_comic4 img{
    width:214px;
    margin-top: 7px;
    margin-left: 35px;
    margin-right: auto;    
    color: #ffffff;
    padding-bottom: 10px;
}



a.koop-index-navigation{
    color: #ffffff;
}



.koop-content-centered2 {
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    min-width: 1300px;
}

.koop-content2{
    width: 100%;
    font-size: 13px;
    background-color: #28497c;
    min-width: 1300px;
}
.koop-footer2{
    font-size: 13px;
    /*width: 56.5%;*/
    width: 1090px;
    margin-top: 95px;
    /*margin-left: 24%;*/
    margin-left: auto;
    margin-right: auto;
    color: black;
    /*border-left: 1.5px solid #28497c;
    /*padding-left: 2%;*/
    padding-bottom: 80px;
}
.koop-footer2 h3{
    font-size: 16px;
    color: #4F6EB9;
    font-weight: normal;
    padding-top: 15px;
    margin-left: 40px;
}
.koop-footer2 p{
    margin-left: 40px;
}

.koop-footer-line{
    border-left: 0.75px solid #28497c;
    height: 180px;
    float: left;
    width: 40px;
    margin-left: 77px;
}

#layout_content{
    padding:0px;
}

/* CSS background transitions */
#study_txt {
    transition: background-color 0.5s ease;
}
#subjects_txt {
    transition: background-color 0.5s ease;
}
#media_txt {
    transition: background-color 0.5s ease;
}
#practice_txt {
    transition: background-color 0.5s ease;
}

#study_b {
    transition: color 0.5s ease;
}
#subjects_b {
    transition: color 0.5s ease;
}
#media_b {
    transition: color 0.5s ease;
}
#practice_b {
    transition: color 0.5s ease;
}

</style>