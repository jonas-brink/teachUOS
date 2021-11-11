<?php

/**
 * [Description TeachUOS]
 */
class TeachUOS extends StudipPlugin implements StandardPlugin, SystemPlugin, PortalPlugin
{

    /**
     * Search for course id where teachUOS plugin is active
     * 
     * @return [type]
     */
    public function getTeachUOSCourse()
    {
        $db = DBManager::get();
        $teachUOSCourseID = $db->fetchOne('SELECT `range_id` FROM `plugins_activated` WHERE `pluginid` = ? AND `state` = 1', [$this->getPluginId()]);
        return $teachUOSCourseID['range_id'];
    }

    

    /**
     */
    public function __construct()
    {
        parent::__construct();

        //Check if student is member of teachUOS-course 
        if ($this->isTeachUOSMember()) {
            // Add icon to main navigation with link to /index
            $navigation = new Navigation('teachUOS');
            $navigation->setImage(Icon::create('doctoral_cap', 'navigation'));
            $navigation->setURL(PluginEngine::getURL($this, array(), 'index'));
            Navigation::addItem('/teachUOS', $navigation);
            
            // Add one subnavigation for consistency reasons
            $teachUOS = new Navigation('teachUOS', PluginEngine::getURL($this, array(), 'index'));
            $navigation->addSubNavigation('teachUOS', $teachUOS);
        }
    }

    /**
     * 
     */
    public function isTeachUOSMember()
    {
        $teachUOS_course_id = $this->getTeachUOSCourse();
        $member_ids = Course::find($teachUOS_course_id)->members->pluck('user_id');
        $user_id = $GLOBALS['user']->id;
        return in_array($user_id, $member_ids);
    }

    /**
     * @return [type]
     */
    public function getPluginName()
    {
    	return 'teachUOS';
    }

    /**
     * Returns the portal widget template.
     */
    function getPortalTemplate()
    {
        $template_path = $this->getPluginPath() . '/templates';
        $template_factory = new Flexi_TemplateFactory($template_path);
        $template = $template_factory->open('widget');
        //set $teachUOS_course_id variable for widget template
        $template->set_attribute('teachUOS_course_id', $this->getTeachUOSCourse());
        //TODO: set title of widget
        $template->title = _('teachUOS');

        return $template;
    }

    





    /**
     * Search for courseware ids of teachUOS blocks
     * 
     * @return [type]
     */
    public function getTeachUOSBlockIDs()
    {
        // Get course_id of teachUOS course
        $teachUOS_course_id = $this->getTeachUOSCourse();

        // Find block_ids by title
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $teachUOS_course_id, 'DURCHS STUDIUM']);
        $block_study_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $teachUOS_course_id, 'IN DIE PRAXIS']);
        $block_practice_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $teachUOS_course_id, 'DIGITALE MEDIEN']);
        $block_media_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $teachUOS_course_id, 'BLICK IN DIE FÄCHER']);
        $block_subjects_id = $block->id;
        return array("study" => $block_study_id, "practice" => $block_practice_id, "media" => $block_media_id, "subjects" => $block_subjects_id);
    }
    
    /**
     * STANDARDPLUGIN
     * Liefert ein Template, das auf der Kurzinfoseite der Veranstaltung bzw. Einrichtung angezeigt wird.
     * 
     * @param mixed $course_id
     * 
     * @return [type]
     */
    public function getInfoTemplate($course_id)
    {
        return null;
    }

    /**
     * STANDARDPLUGIN
     * Liefert ein Navigationsobjekt für das Icon des Plugins auf der Seite "Meine Veranstaltungen".
     * Wenn das Plugin dort nicht angezeigt werden soll, sollte die Methode NULL liefertn.
     * 
     * @param mixed $course_id
     * @param mixed $last_visit
     * @param null $user_id
     * 
     * @return [type]
     */
    public function getIconNavigation($course_id, $last_visit, $user_id = null)
    {
        return null;
    }

    /**
     * 
     * @param string $course_id of the course
     * @return \Navigation
     */
    /**
     * Returns a navigation for the tab displayed in the course.
     * 
     * @param mixed $course_id
     * 
     * @return [type]
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
     * 
     * @param Range $context
     * 
     * @return [type]
     */
    public function isActivatableForContext(Range $context)
    {
        return $GLOBALS['perm']->have_perm('root');
    }
    
}