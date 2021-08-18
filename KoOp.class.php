<?php

class KoOp extends StudipPlugin implements StandardPlugin, SystemPlugin
{
        
    public function __construct()
    {
        parent::__construct();
        // Add icon to main navigation with link to /index
        $navigation = new Navigation('teachUOS');
        $navigation->setImage(Icon::create('doctoral_cap', 'navigation'));
        //$navigation->setImage($GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->getPluginPath() . '/assets/images/koop.png');
        $navigation->setURL(PluginEngine::getURL($this, array(), 'index'));
        Navigation::addItem('/koop', $navigation);
        
        // Add one subnavigation for consistency reasons
        $teachUOS = new Navigation('teachUOS', PluginEngine::getURL($this, array(), 'index'));
        $navigation->addSubNavigation('teachUOS', $teachUOS);
    }

    public function before_filter(&$action, &$args)
    {
        parent::before_filter($action, $args);
    }

    public function getPluginName()
    {
    	return 'Ko.OP';
    }

    // Search for course id where koop plugin is active
    public function getKoopCourse()
    {
        $db = DBManager::get();
        $koopCourseID = $db->fetchOne('SELECT `range_id` FROM `plugins_activated` WHERE `pluginid` = ? AND `state` = 1', [$this->getPluginId()]);
        return $koopCourseID['range_id'];
    }

    // Search for courseware ids of koop blocks
    public function getKoopBlockIDs()
    {
        // Get course_id of koop course
        $koop_course_id = $this->getKoopCourse();

        // Find block_ids by title
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $koop_course_id, 'DURCH\'S STUDIUM']);
        $block_study_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $koop_course_id, 'IN DIE PRAXIS']);
        $block_practice_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $koop_course_id, 'DIGITALE MEDIEN']);
        $block_media_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $koop_course_id, 'BLICK IN DIE FÄCHER']);
        $block_subjects_id = $block->id;
        return array("study" => $block_study_id, "practice" => $block_practice_id, "media" => $block_media_id, "subjects" => $block_subjects_id);
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
        $tab = new Navigation($this->getPluginName(), PluginEngine::getURL($this, array(), 'admin'));
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
    
}