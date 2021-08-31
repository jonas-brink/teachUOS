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
        $this->teachUOS_course_id = $this->plugin->getTeachUOSCourse();
        $this->teachUOS_course_name = Course::find($this->teachUOS_course_id)->name;
    }

}