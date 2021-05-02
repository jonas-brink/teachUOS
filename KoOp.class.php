<?php

/**
 * Doktorandenverwaltung.class.php
 *
 * ...
 *
 * @author  Annelene Sudau <asudau@uos.de>
 * @version 0.1a
 */


class KoOp extends StudipPlugin implements StandardPlugin, SystemPlugin
{
    
    const KOOP_ROLE = 'KoOp';
    
    public function __construct()
    {
        parent::__construct();
        // Add icon to main navigation with link to /index
        $navigation = new Navigation('teachUOS');
        $navigation->setImage(Icon::create('doctoral_cap', 'navigation'));
        //$navigation->setImage($GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->getPluginPath() . '/assets/images/koop.png');
        $navigation->setURL(PluginEngine::getURL($this, array(), 'index'));
        Navigation::addItem('/koop', $navigation);

        //PageLayout::addStylesheet($this->getPluginURL().'/assets/koop_sem.css');
        PageLayout::addScript($this->getPluginURL().'/assets/koop.js');
    }

    public function getPluginName()
    {
    	return 'Ko.OP';
    }

    public function getKoopCourse()
    {
        $db = DBManager::get();
        $koopCourseID = $db->fetchOne('SELECT `range_id` FROM `plugins_activated` WHERE `pluginid` = ? AND `state` = 1', [$this->getPluginId()]);
        return $koopCourseID['range_id'];
    }
    
    /**
     * STANDARDPLUGIN
     * Liefert ein Template, das auf der Kurzinfoseite der Veranstaltung bzw. Einrichtung angezeigt wird.
     */
    public function getInfoTemplate($course_id)
    {
        return null;
    }

    /**
     * STANDARDPLUGIN
     * Liefert ein Navigationsobjekt für das Icon des Plugins auf der Seite "Meine Veranstaltungen".
     * Wenn das Plugin dort nicht angezeigt werden soll, sollte die Methode NULL liefertn.
     */
    public function getIconNavigation($course_id, $last_visit, $user_id = null)
    {
        return null;
    }

    /**
     * Returns a navigation for the tab displayed in the course.
     * @param string $course_id of the course
     * @return \Navigation
     */
    public function getTabNavigation($course_id)
    {
        //Link to overview page in the course
        $tab = new Navigation($this->getPluginName(), PluginEngine::getURL($this, [], 'llll'));
        //$tab->setImage(Icon::create('blubber', Icon::ROLE_INFO_ALT));
        return [$this->getPluginName() => $tab];
    }

    /**
     * Make plugin only activatable inside of courses for users with root permissions
     */
    public function isActivatableForContext(Range $context)
    {
        return $GLOBALS['perm']->have_perm('root');
    }



    /**
     * -------------------------------------------------------------------------------------------------------------------------
     * TODO: the following functions are unclear (check relevance)
     */
        
    /*public function perform($unconsumed_path)
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
    }*/
}