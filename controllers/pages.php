<?php

class PagesController extends StudipController
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

    public function favourites_action()
    {
        $db = DBManager::get();

        //get user_id
        $user_id = $GLOBALS['user']->id;
        //get course_id
        $this->course_id = $this->plugin->getKoopCourse();
        //get favourites
        $favourites = $db->fetchAll("SELECT * FROM `koop_favourites` WHERE user_id=? AND course_id=?", [$user_id, $this->course_id]);

        $this->favourites_titles = array();
        for ($i = 0; $i < count($favourites); $i++) {
            $block_id = intval($favourites[$i]['block_id']);
            $block = \Mooc\DB\Block::find($block_id);
            array_push($this->favourites_titles, [$block_id, $block->title]);
        }
    }

    private function isFavourite($block_id)
    {
        $db = DBManager::get();

        //get user_id
        $user_id = $GLOBALS['user']->id;
        //get course_id
        $course_id = Request::option('cid');
        //get position of new element
        $numFavourites = $db->fetchOne("SELECT COUNT(*) AS listLength FROM `koop_favourites` WHERE user_id=? AND course_id=?", [$user_id, $course_id]);
        $position = intval($numFavourites['listLength']);
        //get block_id
        //$block_id = Request::int('selected');

        //check if type of selected block is 'Section'
        $block = \Mooc\DB\Block::find($block_id);
        while ($block->type !== 'Section')
        {
            $block = \Mooc\DB\Block::findOneBySQL('parent_id=? AND position=?', [$block_id, 0]);
            $block_id = $block->id;
        }
        
        $queryResult = $db->fetchOne("SELECT COUNT(*) AS isFavourite FROM `koop_favourites` WHERE user_id=? AND course_id=? AND block_id=?", [$user_id, $course_id, $block_id]);
        $isFavourite = intval($queryResult['isFavourite']);
        
        if($isFavourite)
        {
            return true;
        }
        return false;
    }

    public function removeFromFavourites_action()
    {
        $db = DBManager::get();

        //get user_id
        $user_id = $GLOBALS['user']->id;
        //get course_id
        $course_id = Request::option('cid');
        //get position of new element
        $numFavourites = $db->fetchOne("SELECT COUNT(*) AS listLength FROM `koop_favourites` WHERE user_id=? AND course_id=?", [$user_id, $course_id]);
        $position = intval($numFavourites['listLength']);
        //get block_id
        $block_id = Request::int('selected');

        //check if block_id is marked as favourite
        if($this->isFavourite($block_id))
        {
            //delete favourite from db
            $db->execute('DELETE FROM `koop_favourites` WHERE user_id=? AND course_id=? AND block_id=?', [$user_id, $course_id, $block_id]);
        }

        //TODO: Update positions after removing

        //TODO: redirect or open favourites?
        $this->redirect(PluginEngine::getURL($this->plugin, ['cid' => $course_id, 'selected' => $block_id], 'pages/cw'));
    }

    public function addToFavourites_action()
    {
        $db = DBManager::get();

        //get user_id
        $user_id = $GLOBALS['user']->id;
        //get course_id
        $course_id = Request::option('cid');
        //get position of new element
        $numFavourites = $db->fetchOne("SELECT COUNT(*) AS listLength FROM `koop_favourites` WHERE user_id=? AND course_id=?", [$user_id, $course_id]);
        $position = intval($numFavourites['listLength']);
        //get block_id
        $block_id = Request::int('selected');

        //check if block_id is not already marked as favourite
        if(!$this->isFavourite($block_id))
        {
            //check if type of selected block is 'Section'
            $block = \Mooc\DB\Block::find($block_id);
            while ($block->type !== 'Section')
            {
                $block = \Mooc\DB\Block::findOneBySQL('parent_id=? AND position=?', [$block_id, 0]);
                $block_id = $block->id;
            }

            //add favourite to db
            $db->execute('INSERT INTO `koop_favourites` (user_id, course_id, block_id, position) VALUES (?, ?, ?, ?)', [$user_id, $course_id, $block_id, $position]);
        }

        //TODO: redirect or open favourites?
        $this->redirect(PluginEngine::getURL($this->plugin, ['cid' => $course_id, 'selected' => $block_id], 'pages/cw'));

    }

    public function cw_action()
    {
        //deactivate Veranstaltungen / Courseware in main menu (navigation) 
        Navigation::getItem('course/mooc_courseware')->setActive(false);

        // Hide standard courseware
        PageLayout::addStyle('.cw-sidebar { display: none; }');
        PageLayout::addStyle('.breadcrumb { display: none; }');
        PageLayout::addStyle('.mode-switch { display: none; }');
        PageLayout::addStyle('#courseware { display: none; }');
        PageLayout::addStyle('.prev { display: none !important; }');
        PageLayout::addStyle('.next { display: none !important; }');

        // Hide rest of courseware
        PageLayout::addStyle('ol.subchapters{ list-style:none !important; }');
        PageLayout::addStyle('.controls { display: none; }');
        PageLayout::addStyle('.handle { display: none; }');
        PageLayout::addStyle('.no-content { display: none; }');

        // add new courseware style
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/pages.css');




        // add koop menu
        // build sidebar around courseware with koop_page template
        PageLayout::addBodyElements($this->get_koop_content());
        // enable new courseware style
        PageLayout::addScript($this->plugin->getPluginURL() . '/assets/menu.js');

        // TODO: check use case / relevance
        require_once 'vendor/trails/trails.php';
        require_once 'app/controllers/studip_controller.php';
        require_once 'app/controllers/authenticated_controller.php';


        // get information from the courseware plugin
        $Courseware_Plugin = \PluginManager::getInstance()->getPlugin('Courseware');

        // Check if Courseware is enabled
        // if($Courseware_Plugin['enabled']) {
        // **Courseware ist angeschaltet...**
        // }

        $dispatcher = new Trails_Dispatcher(
            $Courseware_Plugin->getPluginPath(),
            rtrim(PluginEngine::getLink($Courseware_Plugin, array(), null), '/'),
            'courseware'
        );
        $dispatcher->plugin = $Courseware_Plugin;

        // load courseware
        $uri = 'courseware?' . explode('?', $_SERVER['REQUEST_URI'])[1];
        echo $dispatcher->map_uri_to_response($dispatcher->clean_request_uri((string) $uri))->output();

        exit();
    }

    public function get_koop_content()
    {
        // select koop_page as template
        $path_to_the_templates = dirname(__FILE__) . '/../templates';
        $factory = new Flexi_TemplateFactory($path_to_the_templates);
        $koop_page_template = $factory->open('koop_page');

        // set URI and path variables for koop_page template
        $koop_page_template->set_attribute('ABSOLUTE_URI_STUDIP', $GLOBALS['ABSOLUTE_URI_STUDIP']);
        $koop_page_template->set_attribute('getPluginPath', $this->plugin->getPluginPath());
        $koop_page_template->set_attribute('id_arr', $this->plugin->getKoopBlockIDs());
        $selected_id = Request::option('selected');
        $koop_page_template->set_attribute('selected_id', $selected_id);
        // get parent of selected courseware block
        $selected_parent_id = \Mooc\DB\Block::find($selected_id)->parent_id;
        $koop_page_template->set_attribute('selected_parent_id', $selected_parent_id);
        // get grandparent of selected courseware block
        $selected_grandparent_id = \Mooc\DB\Block::find($selected_parent_id)->parent_id;
        $koop_page_template->set_attribute('selected_grandparent_id', $selected_grandparent_id);
        
        //check if selected block_id is marked as favourite
        $koop_page_template->set_attribute('isFavourite', $this->isFavourite($selected_id));


        // render template
        $menu_content = $koop_page_template->render();

        return $menu_content;
    }
}
