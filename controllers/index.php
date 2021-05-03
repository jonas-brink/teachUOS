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
    }

    public function index_action()
    {
        // Activate icon in main navigation
        Navigation::activateItem('koop/');
        
        // get course_id of koop course for view
        $this->koop_course_id = $this->plugin->getKoopCourse();
        // find block_ids by title
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $this->koop_course_id, 'DURCH\'S STUDIUM']);
        $this->study_block_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $this->koop_course_id, 'IN DIE PRAXIS']);
        $this->praxis_block_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $this->koop_course_id, 'DIGITALE MEDIEN']);
        $this->media_block_id = $block->id;
        $block = \Mooc\DB\Block::findOneBySQL('type = ? AND seminar_id = ? AND title = ?', ['Chapter', $this->koop_course_id, 'BLICK IN DIE FÄCHER']);
        $this->subjects_block_id = $block->id;
    }

    // customized #url_for for plugins
    public function url_for($to = '')
    {
        $args = func_get_args();

        # find params
        $params = array();
        if (is_array(end($args))) {
            $params = array_pop($args);
        }

        # urlencode all but the first argument
        $args = array_map('urlencode', $args);
        $args[0] = $to;

        return PluginEngine::getURL($this->dispatcher->plugin, $params, join('/', $args));
    }
}
