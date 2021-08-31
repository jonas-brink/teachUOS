<?php

class IndexController extends StudipController
{

    public function __construct($dispatcher)
    {
        parent::__construct($dispatcher);
        $this->plugin = $GLOBALS['plugin'];
    }

    public function before_filter(&$action, &$args)
    {
        parent::before_filter($action, $args);
        // Set title of browser tab
        PageLayout::setTitle(_("teachUOS"));
        // Add stylesheets for index page
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/index.css');
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/teachUOS.css');
        // Activate icon in main navigation + subnavigation
        Navigation::activateItem('teachUOS/teachUOS');
    }

    public function index_action()
    {
        //define js file for layout
        PageLayout::addScript($this->plugin->getPluginURL() . '/assets/index.js');

        // get course_id of teachUOS course for view
        $this->teachUOS_course_id = $this->plugin->getTeachUOSCourse();
        
        // find block_ids by title
        $id_arr = $this->plugin->getTeachUOSBlockIDs();
        $this->study_block_id = $id_arr["study"];
        $this->practice_block_id = $id_arr["practice"];
        $this->media_block_id = $id_arr["media"];
        $this->subjects_block_id = $id_arr["subjects"];
    }
}
