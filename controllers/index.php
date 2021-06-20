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
        PageLayout::setTitle(_("teachUOS"));
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/koop.css');
        // Activate icon in main navigation + subnavigation
        Navigation::activateItem('koop/teachUOS');
    }

    public function index_action()
    {
        // get course_id of koop course for view
        $this->koop_course_id = $this->plugin->getKoopCourse();
        
        // find block_ids by title
        $id_arr = $this->plugin->getKoopBlockIDs();
        $this->study_block_id = $id_arr["study"];
        $this->practice_block_id = $id_arr["practice"];
        $this->media_block_id = $id_arr["media"];
        $this->subjects_block_id = $id_arr["subjects"];
    }
}
