<?php

/**
 * Doktorandenverwaltung.class.php
 *
 * ...
 *
 * @author  Annelene Sudau <asudau@uos.de>
 * @version 0.1a
 */


class KoOp extends StudipPlugin implements SystemPlugin
{
    
    const KOOP_ROLE = 'KoOp';
    
    public function __construct()
    {
        parent::__construct();
        global $perm;
        
        //error_log(RolePersistence::getAllRoles()[0]);
        //if(RolePersistence::isAssignedRole($GLOBALS['user']->user_id, 'root')){
        $navigation = new Navigation('teachUOS');
        $navigation->setImage(Icon::create('doctoral_cap', 'navigation'));
        //$navigation->setImage($GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->getPluginPath() . '/assets/images/koop.png');
        $navigation->setURL(PluginEngine::getURL($this, array(), 'index'));
        
        //            $item = new Navigation(_('Blick in die Fächer'), PluginEngine::getURL($this, array(), 'index'));
        //            $navigation->addSubNavigation('index', $item);
        
        //page 1
        $item = new Navigation(_('Blick in die Fächer'), PluginEngine::getURL($this, array(), 'pages/subjects'));
        
        $sub_nav = new Navigation(_('Zurück'), PluginEngine::getURL($this, array(), 'index'));
        $sub_nav->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('index', $sub_nav);
        
        $navigation->addSubNavigation('subjects', $item);
        
        //page 2
        $item = new Navigation(_('Digitaler Unterricht'), PluginEngine::getURL($this, array(), 'pages/digital_teaching'));
        
        $sub_nav = new Navigation(_('Zurück'), PluginEngine::getURL($this, array(), 'index'));
        $sub_nav->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('index', $sub_nav);
        
        $navigation->addSubNavigation('digital_teaching', $item);
        
        //page 3
        $item = new Navigation(_('Vom Studium in die Praxis'), PluginEngine::getURL($this, array(), 'pages/study_to_practice'));
        
        $sub_nav_6 = new Navigation(_('Zurück'), PluginEngine::getURL($this, array(), 'index'));
        $sub_nav_6->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('index', $sub_nav_6);
        
        
        $sub_nav = new Navigation(_('Studienverlaufspläne'), PluginEngine::getURL($this, array(), 'pages/studyplan'));
        $sub_nav->setImage(Icon::create('assessment', 'navigation'));
        $item->addSubNavigation('studyplan', $sub_nav);
        
        $sub_nav_2 = new Navigation(_('Professionalisierung'), PluginEngine::getURL($this, array(), 'pages/professional'));
        $sub_nav_2->setImage(Icon::create('consultation', 'navigation'));
        $item->addSubNavigation('professional', $sub_nav_2);
        
        $sub_nav_3 = new Navigation(_('Rund ums Lehramtsstudium'), PluginEngine::getURL($this, array(), 'pages/about_teaching'));
        $sub_nav_3->setImage(Icon::create('group2', 'navigation'));
        $item->addSubNavigation('about_teaching', $sub_nav_3);
        
        $sub_nav_4 = new Navigation(_('Lehrformate und Methoden'), PluginEngine::getURL($this, array(), 'pages/forms_and_methods'));
        $sub_nav_4->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('forms_and_methods', $sub_nav_4);
        
        $sub_nav_5 = new Navigation(_('Unterrichtsplanung'), PluginEngine::getURL($this, array(), 'pages/planner'));
        $sub_nav_5->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('planner', $sub_nav_5);
        
        $navigation->addSubNavigation('study_to_practice', $item);
        
        //page 4
        $item = new Navigation(_('Mein Weg durchs Studium'), PluginEngine::getURL($this, array(), 'pages/my_way'));
        
        $sub_nav_8 = new Navigation(_('Zurück'), PluginEngine::getURL($this, array(), 'index'));
        $sub_nav_8->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('index', $sub_nav_8);
        
        $sub_nav = new Navigation(_('Studienverlaufspläne'), PluginEngine::getURL($this, array(), 'pages/studyplan'));
        $sub_nav->setImage(Icon::create('assessment', 'navigation'));
        $item->addSubNavigation('studyplan', $sub_nav);
        
        $sub_nav_2 = new Navigation(_('Beratungsangebote'), PluginEngine::getURL($this, array(), 'pages/consulting'));
        $sub_nav_2->setImage(Icon::create('consultation', 'navigation'));
        $item->addSubNavigation('consulting', $sub_nav_2);
        
        $sub_nav_3 = new Navigation(_('Praktika'), PluginEngine::getURL($this, array(), 'pages/practical training'));
        $sub_nav_3->setImage(Icon::create('group2', 'navigation'));
        $item->addSubNavigation('practical training', $sub_nav_3);
        
        $sub_nav_4 = new Navigation(_('Auslandsaufenthalt'), PluginEngine::getURL($this, array(), 'pages/abroad'));
        $sub_nav_4->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('abroad', $sub_nav_4);
        
        $sub_nav_5 = new Navigation(_('Fachschaften'), PluginEngine::getURL($this, array(), 'pages/council'));
        $sub_nav_5->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('council', $sub_nav_5);
        
        $sub_nav_6 = new Navigation(_('Fachstudienberater'), PluginEngine::getURL($this, array(), 'pages/subject_consultant'));
        $sub_nav_6->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('subject_consultant', $sub_nav_6);
        
        $sub_nav_7 = new Navigation(_('Zertifikate'), PluginEngine::getURL($this, array(), 'pages/cert'));
        $sub_nav_7->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('cert', $sub_nav_7);
        
        $navigation->addSubNavigation('my_way', $item);
        
        
        //my_way2 page
        $item = new Navigation(_('my_way2'), PluginEngine::getURL($this, array(), 'pages/my_way2'));
        $sub_nav = new Navigation(_('Zur�ck'), PluginEngine::getURL($this, array(), 'index'));
        $sub_nav->setImage(Icon::create('globe', 'navigation'));
        $item->addSubNavigation('index', $sub_nav);
        $navigation->addSubNavigation('my_way2', $item);
        
        
        //study_to_practice2 page
        $item = new Navigation(_('Vom Studium in die Praxis'), PluginEngine::getURL($this, array(), 'pages/study_to_practice2'));
        $navigation->addSubNavigation('study_to_practice2', $item);
        
        //Unterricht2 page
        $item = new Navigation(_('Digitaler Unterricht'), PluginEngine::getURL($this, array(), 'pages/digital_teaching2'));
        $navigation->addSubNavigation('digital_teaching2', $item);
        
        
        Navigation::addItem('/koop', $navigation);
        //}
        if (Course::findCurrent()->id == 'a4204c684df5c46ec74a6f6420f1d81d'){
            Navigation::activateItem('koop/subjects');
            //PageLayout::addStylesheet($this->getPluginURL().'/assets/koop_sem.css');
            PageLayout::addScript($this->getPluginURL().'/assets/koop.js');
        }
    }
    
    public function initialize ()
    {
    }
    
    public function perform($unconsumed_path)
    {
        $this->setupAutoload();
        $dispatcher = new Trails_Dispatcher(
            $this->getPluginPath(),
            rtrim(PluginEngine::getLink($this, array(), null), '/'),
            'index'
            );
        $dispatcher->plugin = $this;
        $dispatcher->dispatch($unconsumed_path);
        
    }
    
    private function setupAutoload()
    {
        if (class_exists('StudipAutoloader')) {
            StudipAutoloader::addAutoloadPath(__DIR__ . '/models');
        } else {
            spl_autoload_register(function ($class) {
                include_once __DIR__ . $class . '.php';
            });
        }
    }
}
