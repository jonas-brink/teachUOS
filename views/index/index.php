<? if (UserConfig::get($GLOBALS['user']->id)->koop_layout == 1) : ?>
	<img align="right" style="cursor: pointer;margin: 32px;" onclick="$( '#set_layout_form' ).submit();" width="72"  src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A0_switch1.svg' ?>" />
        
    <div class="koop-content-centered koop-content">
    
    
    <!--    <div class="flex-wrapper">
            
             Kacheln 
            <div class="flex-container-half">
                
    -->            
    		
        <img id='teachuos-logo' style='width:350px' src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/0_teachUOS.svg' ?>'/>
    <!--
                 Zeile1 
                <div class="flex-wrapper">
                     <div class='flex-container-200-200'>
                        <div class="flex-wrapper-td">
                            <div class='flex-container-200-100 fill-blue'>text</div>
                            <div class='flex-container-200-100 fill-blue'>text</div>
                         </div>
                     </div>
                    <div class='flex-container-200-200 fill-blue'>text</div>
                </div>
                
                 Zeile2 
                 Spalte1 
                <div class="flex-wrapper">
                    <div class='flex-container-200-200'>
                    <div class="flex-wrapper-td">
                        <div class='flex-container-200-100'>
                            <div class="flex-wrapper">
                                <div class='flex-container-100-100'>
                                    <div class="flex-wrapper-td">
                                        <div class='flex-container-100-50 fill-blue'>text</div>
                                        <div class='flex-container-100-50 fill-blue'>text</div>
                                    </div>
                                </div>
                                <div class='flex-container-100-100 fill-blue'>text</div>
                            </div>
                        </div>
                        <div class='flex-container-200-100 fill-blue'>text</div>
                    </div>
                    </div>
                    
                    <div class='flex-container-200-200'>
                        <div class="flex-wrapper-td">
                            <div class='flex-container-200-100 fill-blue'>text</div>
                
                            <div class="flex-wrapper">
                                <div class='flex-container-200-100'>
                                <div class="flex-wrapper">
                                     <div class='flex-container-100-100 fill-blue'>text</div>
                                     <div class='flex-container-100-100 fill-blue'>text</div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            
            <div class="flex-container-half-index">
    
                <h1>Herzlich willkommen</h1>
                    Du hast gerade dein Studium begonnen und fragst dich, wann du dein erstes Praktikum machen solltest oder welche Prügungsordnung für dich gilt?
                    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                </div>
        </div>-->
    
        <div class='flex-wrapper'>
            <div class="flex-container-800-115-l100">
                <div class="flex-wrapper">
                	<? if (isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_1_img) && 
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_1_img_hover) &&
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_1_link)) : ?>                	
                    <a class='koop-index-navigation eins_add' href='<?= str_replace(array('{ABSOLUTE_URI_STUDIP}','plugins.php/courseware/courseware'),array($GLOBALS['ABSOLUTE_URI_STUDIP'],'plugins.php/koop/pages/cw'),UserConfig::get($GLOBALS['user']->id)->koop_custom_1_link); ?>' >
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_1_img_hover ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_1_img ?>" />
                    </a>
            		<? else: ?>
            		<a class='koop-index-navigation eins_add' href='#' onClick='openCustomizable(1);' >
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A1_add_test_mouseover.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A1_add_test.svg' ?>" />
                    </a>
                    <? endif ?>
                    
                    <a class='koop-index-navigation faecher' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=27'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A2_faecher_mouseover_dunkel.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A2_faecher.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation studium' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=21'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A3_studium_mouseover_dunkel.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A3_studium.svg' ?>" />
                    </a>
                    <? if (isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_2_img) && 
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_2_img_hover) &&
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_2_link)) : ?>                	
                    <a class='koop-index-navigation fuenf_add' href='<?= str_replace(array('{ABSOLUTE_URI_STUDIP}','plugins.php/courseware/courseware'),array($GLOBALS['ABSOLUTE_URI_STUDIP'],'plugins.php/koop/pages/cw'),UserConfig::get($GLOBALS['user']->id)->koop_custom_2_link); ?>' >
                        <img class="bottom" width="75" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_2_img_hover ?>" />
                        <img class="top"  width="75" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_2_img ?>" />
                    </a>
                    <a class='koop-index-navigation comic' href=''>
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_teachUOS_Comic.svg' ?>" />
                    </a>
                    <a  style="margin-left: 15px;" class='koop-index-navigation sechs' href=''>
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A6_box.svg' ?>" />
                    </a>
            		<? else: ?>
                    <a class='koop-index-navigation fuenf_add' href='#' onClick='openCustomizable(2);'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A5_add_klick.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A5_add.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation comic' href=''>
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_teachUOS_Comic.svg' ?>" />
                    </a>
                    <a  class='koop-index-navigation sechs' href=''>
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A6_box.svg' ?>" />
                    </a>
                    <? endif ?>
                    
                </div>
            </div>
        </div>
        
        <div class="flex-wrapper">
             <div class="flex-container-800-125">
                 <div class="flex-wrapper">
                    <a class='koop-index-navigation mystudip' href=''>
                         <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A7_mystudip_mouseover.svg' ?>" />
                         <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A7_mystudip.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation digital' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=30'>
                         <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A8_digital_mouseover_dunkel.svg' ?>" />
                         <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A8_digital.svg' ?>" />
                    </a>
                    <? if (isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_3_img) && 
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_3_img_hover) &&
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_3_link)) : ?>                	
                    <a  class='koop-index-navigation custom_kachel' href='<?= str_replace(array('{ABSOLUTE_URI_STUDIP}','plugins.php/courseware/courseware'),array($GLOBALS['ABSOLUTE_URI_STUDIP'],'plugins.php/koop/pages/cw'),UserConfig::get($GLOBALS['user']->id)->koop_custom_3_link); ?>' >
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_3_img_hover ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_3_img ?>" />
                    </a>
            		<? else: ?>
                    <a class='koop-index-navigation neun_add' href='#' onClick='openCustomizable(3);'>
                         <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A9_add_a_dunkel.svg' ?>" />
                         <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A9_add_a.svg' ?>" />
                    </a>
                    <? endif ?>
                    
                    <? if (isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_4_img) && 
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_4_img_hover) &&
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_4_link)) : ?>                	
                    <a  style="margin-left: 3px;" class='koop-index-navigation custom_kachel' href='<?= str_replace(array('{ABSOLUTE_URI_STUDIP}','plugins.php/courseware/courseware'),array($GLOBALS['ABSOLUTE_URI_STUDIP'],'plugins.php/koop/pages/cw'),UserConfig::get($GLOBALS['user']->id)->koop_custom_4_link); ?>' >
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_4_img_hover ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_4_img ?>" />
                    </a>
            		<? else: ?>
                    <a class='koop-index-navigation zehn_add' href='#' onClick='openCustomizable(4);'>
                          <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A10_add_new_mouseover.svg' ?>" />
                          <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A10_add_new.svg' ?>" />
                    </a>
                    <? endif ?>
                 </div>
            </div>
        </div>
        
        <div class="flex-wrapper">
            <div class="flex-container-310-200">
                <div class="flex-wrapper-td">
                    <a class='koop-index-navigation tutorial' href=''>
                         <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A11_veranstaltungen_mouseover_dunkel.svg' ?>" />
                         <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A11_veranstaltungen.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation fachschaften' href=''>
                         <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A12_fachschaft_mouseover.svg' ?>" />
                         <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A12_fachschaft.svg' ?>" />
                    </a>
                </div>   
            </div>
            <div class="flex-container-500-200">
                <div class="flex-wrapper">
                    <a class='koop-index-navigation praxis' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=33'>
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A13_praxis_test_dunkel.svg' ?>" />
                    <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A13_praxis_test.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation fuenfzehn_add' href=''>
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A15_info_dunkel.svg' ?>" />
                    <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A15_info.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation sechzehn_add' href=''>
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A16_kontakt_dunkel_a.svg' ?>" />
                    <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A16_kontakt_hell.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation vierzehn_mini' href=''>
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A14_mini_a.svg' ?>" />
                    </a>
                    <a class='koop-index-navigation verwalten' href='#' onClick='$( "#koop_personal_settings" ).dialog({
                                                                                                                resizable: true,
                                                                                                                modal: true,
                                                                                                              width: 900,});' >
                    <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A17_verwalten_dunkel.svg' ?>" />
                    <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A17_verwalten.svg' ?>" />
                    </a>
                    <? if (isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_5_img) && 
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_5_img_hover) &&
                        isset(UserConfig::get($GLOBALS['user']->id)->koop_custom_5_link)) : ?>                	
                    <a  style="margin-top: 17px;"  class='koop-index-navigation custom_kachel' href='<?= str_replace(array('{ABSOLUTE_URI_STUDIP}','plugins.php/courseware/courseware'),array($GLOBALS['ABSOLUTE_URI_STUDIP'],'plugins.php/koop/pages/cw'),UserConfig::get($GLOBALS['user']->id)->koop_custom_5_link); ?>' >
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_5_img_hover ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'.UserConfig::get($GLOBALS['user']->id)->koop_custom_5_img ?>" />
                    </a>
            		<? else: ?>
                    <a class='koop-index-navigation achtzehn_add' href='#' onClick='openCustomizable(5);'>
                        <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A18_add_dunkel.svg' ?>" />
                        <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A18_add_hell.svg' ?>" />
                    </a>
                    <? endif ?>
                    
                     
                </div>
            </div>
        </div>
        
        <div class="schwebend"><img src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/A_schweben.svg' ?>">
            </div>
            
        
        <div id='koop_edit_kachel_dialog' title='Auswähbare Kachel'  style='display: none;'>
    		<div class='flex-wrapper'>
    			<form id='customizable_kachel_form'  method="post" action="index/set_customizable_kachel">
    				<input type="hidden" name="k_id" value="">
    				<input type="hidden" name="k_img" value="">
    				<input type="hidden" name="k_img_hover" value="">
    				<input type="hidden" name="k_link" value="">
    			</form>
    		</div>
    	</div>
    	
    	<div id='koop_personal_settings' title='Verwaltung'  style='display: none;'>
    		<div class='flex-wrapper'>
    			<form id='reset_customizable_kachel'  method="post" action="index/reset_customizable_kachel">
    				<input type="hidden" name="k_id" value="1">
    				<button>1. Kachel zurücksetzen</button>
    			</form>
    		</div>
    		<div class='flex-wrapper'>
    			<form id='reset_customizable_kachel'  method="post" action="index/reset_customizable_kachel">
    				<input type="hidden" name="k_id" value="2">
    				<button>2. Kachel zurücksetzen</button>
    			</form>
    		</div>
    		<div class='flex-wrapper'>
    			<form id='reset_customizable_kachel'  method="post" action="index/reset_customizable_kachel">
    				<input type="hidden" name="k_id" value="3">
    				<button>3. Kachel zurücksetzen</button>
    			</form>
    		</div>
    		<div class='flex-wrapper'>
    			<form id='reset_customizable_kachel'  method="post" action="index/reset_customizable_kachel">
    				<input type="hidden" name="k_id" value="4">
    				<button>4. Kachel zurücksetzen</button>
    			</form>
    		</div>
    		<div class='flex-wrapper'>
    			<form id='reset_customizable_kachel'  method="post" action="index/reset_customizable_kachel">
    				<input type="hidden" name="k_id" value="5">
    				<button>5. Kachel zurücksetzen</button>
    			</form>
    		</div>
    		<form id='reset_customizable_kachel'  method="post" action="index/set_layout">
    				<input type="hidden" name="koop_layout" value="2">
    				<button>Layout 2</button>
    		</form>
    	</div>
    	
    </div>
    <form id='set_layout_form'  method="post" action="index/set_layout">
    				<input type="hidden" name="koop_layout" value="2">
    </form>
   	<style>

    
    a.custom_kachel {
        width: 85px;
        height: 79px;
        margin-top: -5px;
        
        /*margin-left: 1.9em;
        margin-top: 2.1em;*/
        position: relative;
    }
    a.custom_kachel img {
        position:absolute;
        left:0;
        -webkit-transition: opacity 0.3s ease-in-out;
        -moz-transition: opacity 0.3s ease-in-out;
        -o-transition: opacity 0.3s ease-in-out;
        transition: opacity 0.3s ease-in-out;
    }
    a.custom_kachel img.top:hover {
        opacity:0;
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
<? else: ?>
	<div class="koop-content-centered2 ">
		<div class="koop-content2 verlauf">
			<img align="right" style="cursor: pointer;margin: 34px;" onclick="switchFullscreen()" width="72"  src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A0_forum.svg' ?>" />
        	<img align="right" style="cursor: pointer;margin-top: 32px;" onclick="$( '#set_layout_form' ).submit();" width="72"  src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A0_switch.svg' ?>" />
        	
		    <div class="teachuos_logo">
        		<img id='teachuos-logo2' style='width:290px' src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_teachUOS.svg' ?>'/>
        	</div>
        	<div class="flex-container-1000-200-l100">	
        	<!--  
        			<div class="index_comic">
                        <a class='koop-index-navigation index_comic1' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=33' >
                            <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images2/A1_praxis.svg' ?>" />
                        	IN DIE <b>PRAXIS</b>
                        </a>
                    </div>
                    <div class="index_comic">
                        <a class='koop-index-navigation index_comic2' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=21' >
                            <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images2/A2_studium.svg' ?>" />
                            <div style="margin-top: -10px;">DURCH'S <b>STUDIUM</b></div>
                        </a>
                    </div>
                    <div class="index_comic">
                        <a class='koop-index-navigation index_comic3' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=30' >
                            <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images2/A3_digital.svg' ?>" />
                        	<b>DIGITALE</b> MEDIEN
                        </a>
                    </div>
                    <div class="index_comic">
                        <a class='koop-index-navigation index_comic4' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=27' >
                            <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images2/A4_faecher.svg' ?>" />
                        	BLICK IN DIE <b>FÄCHER</b>
                        </a>
                    </div>
             -->
             		<div class="index_comic">
                        <a class='koop-index-navigation hover_image index_comic2' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=21' >
                            <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_studium_hover.svg' ?>" />
                            <img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_studium.svg' ?>" />
                            <p class="index_comic_txt">DURCH'S <b>STUDIUM</b></p>
                        </a>
                    </div>
                    
                    
             		<div class="index_comic">
             			<a class='koop-index-navigation hover_image index_comic1' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=33' >
                            <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_praxis_hover.svg' ?>" />
         					<img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_praxis.svg' ?>" />
                    		<p class="index_comic_txt">IN DIE <b>PRAXIS</b></p>
                    	</a> 
                    	
                        
                    </div>
                    
                    <div class="index_comic">
                        <a class='koop-index-navigation hover_image index_comic3' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=30' >
                            <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_digital_hover.svg' ?>" />
                        	<img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_digital.svg' ?>" />
                        	<p class="index_comic_txt">DIGITALE <b>MEDIEN</b></p>
                        </a>
                    </div>
                    <div class="index_comic">
                        <a class='koop-index-navigation hover_image index_comic4' href='pages/cw?cid=99965fd1039274ecc637698846c52f2b&selected=27' >
                            <img class="bottom" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_faecher_hover.svg' ?>" />
                        	<img class="top" src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_faecher.svg' ?>" />
                        	<p class="index_comic_txt">BLICK IN DIE <b>FÄCHER</b></p>
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
         <!-- 
         <div class="koop-footer22 light">
            <img width="110"  src="<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images2/A0_quali.svg' ?>" />
         
         	VOM ZENTRUM FÜR LEHRERBILDUNG DER
         	<p class="black fontsize13">
         		UNVERSITÄT OSNABRÜCK
         	</p>
           
         </div>  
      -->
    </div>
    <form id='set_layout_form'  method="post" action="index/set_layout">
    				<input type="hidden" name="koop_layout" value="1">
    </form>
   
    <style>
    
    .verlauf {
        overflow: hidden;
        background-size: cover;
        background-position: center;
        background-image: url('<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images3/A_blue.svg' ?>');
    }
    
    #tabs{
        display: none;
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
        /*margin-left: 4.5%;*/
        margin-top: 133px;
        /*margin-top: 250px;*/
        /*color: #28497C; */
        color: #97ACE0;
        font-size: 13px;
    }
    
    .index_comic_txt b{
        color: #28497C;
        
    }
    
    .index_comic1 p{
        margin-left: 148px;
        width: max-content;
    }
    .index_comic2 p{
        margin-left: 148px;
        width: max-content;
    }
    .index_comic3 p{
        margin-left: 122px;
        width: max-content;
    }
    .index_comic4 p{
        margin-left: 72px;
        width: max-content;
    }

    
    .index_comic1 img{
        width:210px;
        margin-top: 6.44px;
        margin-left: 87px;
        /* margin-left: 3.3%;*/
        margin-right: auto;
        /*margin-left: 30%;
        */
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
        /*margin-top: 62px;
        margin-left: 2.9%;*/
       margin-right: auto;
       
        /*
        margin-left: 15%;
        
        float:left;*/
        color: #ffffff;
    }
    
    .index_comic3 img{
        width:206px;
        margin-top: 24.5px;
        margin-left: 54px;
        /*margin-top: 91px;
         margin-left: 3.4%;*/
        margin-right: auto;
        /*
        margin-left: 10%;
        
        float:left;
        */
        color: #ffffff;
    }
    
    .index_comic4 img{
        width:214px;
        margin-top: 19.5px;
        margin-left: 35px;
        /*margin-top: 83px;
        /* margin-left: 3.8%;*/
        margin-right: auto;
        /*
        margin-left: 10%;
        
        float:left;
        */
        
        color: #ffffff;
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
    
    .koop-footer22{
        font-size: 10px;
        float: right;
        color: #ffffff;
        
        
        /*
        text-align: center;
        margin-right: 4%;
        margin-top: 5%;
        */
        text-align: right;
        position: absolute; 
        bottom: 40px; 
        width: 96.5%;
    }

    #layout_content{
        padding:0px;
    }
    
    
    
    </style>
<? endif ?>


<script>
var unique_kacheln;
var current_customizable_id = -1;

/**
 * Opens customize-window in tile-view
 */
function openCustomizable(k_id){
	current_customizable_id = k_id;
	if(!unique_kacheln){
    	$.get( "index/get_unique_kacheln", function( data ) {
    		  unique_kacheln = JSON.parse(data);
    		  $.each(unique_kacheln, function(key, item) {
    			   $( "#koop_edit_kachel_dialog" ).append("<img onClick='submitCustomizable(\""+item.img+"\",\""+item.img_hover+"\",\""+item.link+"\");' width=100 src='<?=$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/'?>"+item.img+"'>");
    		  });
    		  
    	});
	}

	$( "#koop_edit_kachel_dialog" ).dialog({
        resizable: true,
        modal: true,
      width: 900,});
}

function submitCustomizable(img,hover,link){
	$('input[name="k_id"]').val(current_customizable_id);
	$('input[name="k_img"]').val(img);
	$('input[name="k_img_hover"]').val(hover);
	$('input[name="k_link"]').val(link);
	$( "#customizable_kachel_form" ).submit();
}



</script>
