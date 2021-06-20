<?php

class AdminController extends StudipController
{
    // TODO: delete if unneccessary
    public function __construct($dispatcher)
    {
        parent::__construct($dispatcher);
        $this->plugin = $GLOBALS['plugin'];
    }

    //TODO: delete if unneccessary
    public function before_filter(&$action, &$args)
    {
        parent::before_filter($action, $args);
        Navigation::activateItem('/course/' . $this->plugin->getPluginName());
    }

    public function index_action()
    {
        $this->course_id = Context::getId();
        $this->koop_course_id = $this->plugin->getKoopCourse();
        $this->koop_course_name = Course::find($this->koop_course_id)->name;
    }

}