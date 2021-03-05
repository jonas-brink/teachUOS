
<div class="koop-sub-content koop-content-centered" style="width:100%;">


<!--    <div class="flex-wrapper">
        
         Kachelen 
        <div class="flex-container-half">
            
-->    
	<div class="koop-kacheln-behalter"> 
    	<div class='flex-wrapper kacheln_header'>        
        	<img  style='width:185px;margin-bottom: 1em;' src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D0_praxis.svg' ?>'/>
    		<img  style='width:42px;margin-left: 65px;margin-bottom: 10px;' src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/C0_comic.svg' ?>'/>
    	</div>
    	
        <div class='flex-wrapper'>
    
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/C1_faq_hover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/C1_faq.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D2_ref_hover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D2_ref.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D3_methoden_hover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D3_methoden.svg' ?>" />
                    </a>
        </div>
        
        <div class='flex-wrapper'>
      
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/C4_erfahrungen_hover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/C4_erfahrungen.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D5_yuosi_hover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D5_yuosi.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='../'>
                        <img class="bottom"  src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/B_teachuos_hover.svg' ?>" />
                        <img class="top"  src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/B_teachuos.svg' ?>" />
                    </a>
     
        </div>
        
        <div class='flex-wrapper'>
            
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D7_prof_hover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D7_prof.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D8_planung_hover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D8_planung.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D9_job_hover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/D9_job.svg' ?>" />
                    </a>
        </div>
    
        
        <div class="flex-wrapper">
        </div>
    
            
        <div class="sub_schwebend_blick"><img src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_schweben.svg' ?>">
            </div>
        
   </div> 
   <div class="koop-text-behalter">

            <h3>Vom Studium in die Praxis</h3>

           Du suchst nach Anregungen und Tipps für die Unterrichtspraxis? Du bist an Eindrücken und Berichten von Referendar*innen und Lehrkräften interessiert? Angebote zur individuellen Weiterbildung interssieren dich? Dann bist du hier richtg.
Auch wenn ganz konkret der Schritt ins Referendariat ansteht, findest du hier erste Informationen zum Bewerbungsprozess und zu möglichen Ansprechpartner*innen.
</div>
</div>

<style>

 /**Subkacheln**/
    
    a.sub_kacheln {
        width: 100px;
        height: 90px;
        /*margin-left: 1.9em;
        margin-top: 2.1em;*/
        position: relative;
    }
    a.sub_kacheln img {
        position:absolute;
        left:0;
        -webkit-transition: opacity 0.3s ease-in-out;
        -moz-transition: opacity 0.3s ease-in-out;
        -o-transition: opacity 0.3s ease-in-out;
        transition: opacity 0.3s ease-in-out;
    }
    a.sub_kacheln img.top:hover {
        opacity:0;
    }

    .kacheln_header{
    	z-index: 3;
    	position: relative;
    }
    
    .koop-kacheln-behalter{
        margin-left: 14%;
        width:450px;
        float:left;
    }
    
    .koop-text-behalter{
        width:52%;
        float:left;
        
    }
    .koop-text-behalter h3 {
        font-size: 2.2em;
        margin-bottom: 1em;
        /*font-weight:normal;
        text-transform: uppercase;
        /*color: #28497c;*/
    }
    
    .koop-sub-content{
        margin-top: 8em;
    }
    
    
    
    .sub_schwebend_blick img {
        width: 370px;
        height: 52px;
        margin-left: -35px;
       /* 
        margin-bottom: 4.5em;
        margin-top: -8em;*/
        position: relative;
    }
    
    
    
    #tabs{
        display: none;
    }
    
    #layout-sidebar {
        display: none;
    }
    #page_title_container{
        display: none;
    }
    
    .koop-content {
        margin: 30px;
    }
    
    .koop-content-centered {
        margin-left: auto;
        margin-right: auto;
        width: 750px;
    }
    
    .koop-content h1 {
        text-transform: uppercase;
        margin-bottom: 1em;
        color: #28497c;
    }
    
    .koop-content h2 {
        text-transform: uppercase;
        margin-bottom: 1em;
        color: #28497c;
    }
    
    .flex-wrapper{
        display: flex;
    }
    
    .flex-wrapper-td {
        flex-direction: column;
        display: flex;
    }
     
    .flex-container-smallbox {
        width: 230px;
        border: solid 2px #28497c;
        border-radius: 15px;
        margin: 15px;
        padding: 20px;
    }
    .flex-container-smallbox ul {
        list-style: none;
        padding-left: 0px;
    }
    
    .flex-container-smallbox ul li {
        background-size: 20px;
        background-position: 0% 50%;
        background-repeat: no-repeat;
        padding: 0.5em 0 0 2em; 
        margin: 5px;
    }
    
    .flex-container-half {
        width: 460px;
        margin: 1em;
    }
    
    .flex-container-half-index {
        width: 660px;
        margin: 1em;
        padding-top: 100px;
        padding-left: 1em;
    }
    
    .flex-container-half-linklist {
        width: 460px;
        border: solid 2px #28497c;
        border-radius: 15px;
        margin: 1em;
        padding: 20px;
    }
    
    .flex-container-half-linklist ul {
        padding: 0 40px 0 10px;
    }
    
    .koop-container-full {
        margin: 1em;
    }
    
    .flex-container-200-200 {
        width: 200px;
        height: 200px;
        margin: 3px
    }
    
    .flex-container-200-100 {
        width: 200px;
        height: 97px;
        margin-bottom: 3px;
        overflow: hidden;
    }

    .flex-container-200-100:last-child {
        width: 200px;
        height: 100px;
        margin-bottom: 0;
    }
    
    .flex-container-100-100 {
        width: 98px;
        height: 100px;
        margin-right: 2px;
    }
    .flex-container-100-100:last-child{
        width: 100px;
        margin-right: 0;
    }
    
    .flex-container-100-50 {
        width: 98px;
        height: 45px;
        margin-bottom: 2px
    }

    .flex-container-100-50:last-child {
        height: 50px;
        margin-bottom: 0;
    }
   
     .fill-blue 
        {
        background-color: #28497c;
    }
</style>
