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
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/teachUOS.css');
        // Activate icon in main navigation + subnavigation
        Navigation::activateItem('teachUOS/teachUOS');
    }

    public function favourites_action()
    {
        // Add stylesheet for my teachUOS page
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/favourites.css');
        // Add js file for my teachUOS page
        PageLayout::addScript($this->plugin->getPluginURL() . '/assets/favourites.js');

        $db = DBManager::get();

        //get user_id
        $user_id = $GLOBALS['user']->id;
        //get course_id
        $this->course_id = $this->plugin->getTeachUOSCourse();
        // Get favourites and order them alphabetically by title
        $favourites = $db->fetchAll("SELECT * 
                                    FROM teachUOS_favourites  
                                    WHERE user_id=? AND course_id=? 
                                    ORDER BY title", 
                                    [$user_id, $this->course_id]);

        $this->favourites_titles = array();
        for ($i = 0; $i < count($favourites); $i++) {
            $block_id = intval($favourites[$i]['block_id']);
            $block = \Mooc\DB\Block::find($block_id);
            $parent_block_id = intval($favourites[$i]['parent_id']);
            $parent_block = \Mooc\DB\Block::find($parent_block_id);
            $parent_block_title = "(" . $parent_block->title . ")";
            // Check if title of block and parents block title are the same
            // Hide parents block title if the test was positive
            if (strcmp($parent_block->title, $block->title) == 0) {
                $parent_block_title = "";
            }
            array_push($this->favourites_titles, [$block_id, $block->title, $parent_block_title]);
        }
    }

    private function isFavourite($block_id)
    {
        $db = DBManager::get();

        //get user_id
        $user_id = $GLOBALS['user']->id;
        //get course_id
        $course_id = Request::option('cid');
        //check if type of selected block is 'Section'
        $block = \Mooc\DB\Block::find($block_id);
        while ($block->type !== 'Section')
        {
            $block = \Mooc\DB\Block::findOneBySQL('parent_id=? AND position=?', [$block_id, 0]);
            $block_id = $block->id;
        }
        
        $queryResult = $db->fetchOne("SELECT COUNT(*) AS isFavourite FROM `teachUOS_favourites` WHERE user_id=? AND course_id=? AND block_id=?", [$user_id, $course_id, $block_id]);
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
        //get block_id
        $block_id = Request::int('selected');

        //check if block_id is marked as favourite
        if($this->isFavourite($block_id))
        {
            //delete favourite from db
            $db->execute('DELETE FROM `teachUOS_favourites` WHERE user_id=? AND course_id=? AND block_id=?', [$user_id, $course_id, $block_id]);
        }

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
                //TODO: is this neccessary???
                $block_id = $block->id;
            }

            //add favourite to db
            $db->execute('INSERT INTO `teachUOS_favourites` (user_id, course_id, block_id, parent_id, title) VALUES (?, ?, ?, ?, ?)', [$user_id, $course_id, $block_id, $block->parent_id, $block->title]);
        }

        //TODO: redirect or open favourites?
        $this->redirect(PluginEngine::getURL($this->plugin, ['cid' => $course_id, 'selected' => $block_id], 'pages/cw'));

    }

    public function cw_action()
    {
        // Deactivate Veranstaltungen / Courseware in main menu (navigation) 
        //TODO: Deactivate Veranstaltungen / Courseware in main menu (navigation)
        //Navigation::getItem('course/mooc_courseware')->setActive(false);

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

        // Add new courseware style
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/pages.css');

        // Add teachUOS menu
        // Build sidebar around courseware with teachUOS_page template
        PageLayout::addBodyElements($this->get_teachUOS_content());
        // Enable new courseware style
        PageLayout::addScript($this->plugin->getPluginURL() . '/assets/pages.js');

        // TODO: check use case / relevance
        require_once 'vendor/trails/trails.php';
        require_once 'app/controllers/studip_controller.php';
        require_once 'app/controllers/authenticated_controller.php';

        // get information from the courseware plugin
        /*$Courseware_Plugin = \PluginManager::getInstance()->getPlugin('Courseware');

        $dispatcher = new Trails_Dispatcher(
            $Courseware_Plugin->getPluginPath(),
            rtrim(PluginEngine::getLink($Courseware_Plugin, array(), null), '/'),
            'courseware'
        );
        $dispatcher->plugin = $Courseware_Plugin;

        // load courseware
        $uri = 'courseware?' . explode('?', $_SERVER['REQUEST_URI'])[1];
        echo $dispatcher->map_uri_to_response($dispatcher->clean_request_uri((string) $uri))->output();*/


        URLHelper::setBaseUrl($GLOBALS['ABSOLUTE_URI_STUDIP']);

        //$request_uri = 'courseware?' . explode('?', $_SERVER['REQUEST_URI'])[1];
        $uri = 'courseware?' . explode('?', $_SERVER['REQUEST_URI'])[1];
        
        $dispatcher = new StudipDispatcher();
        echo $dispatcher->map_uri_to_response($dispatcher->clean_request_uri((string) $uri))->output();
        //$dispatcher->dispatch($request_uri);


        exit();
    }

    public function get_teachUOS_content()
    {
        $db = DBManager::get();

        // select teachUOS_page as template
        $path_to_the_templates = dirname(__FILE__) . '/../templates';
        $factory = new Flexi_TemplateFactory($path_to_the_templates);
        $teachUOS_page_template = $factory->open('teachUOS_page');

        //set $plugin variable for teachUOS_page template
        $teachUOS_page_template->set_attribute('plugin', $this->plugin);

        // set URI and path variables for teachUOS_page template
        $teachUOS_page_template->set_attribute('ABSOLUTE_URI_STUDIP', $GLOBALS['ABSOLUTE_URI_STUDIP']);
        $teachUOS_page_template->set_attribute('getPluginPath', $this->plugin->getPluginPath());
        $teachUOS_page_template->set_attribute('id_arr', $this->plugin->getTeachUOSBlockIDs());
        $selected_id = Request::option('selected');
        $teachUOS_page_template->set_attribute('selected_id', $selected_id);
        // get parent of selected courseware block
        //$selected_parent_id = \Mooc\DB\Block::find($selected_id)->parent_id;
        $selected_parent_id =  $db->fetchOne('SELECT parent_id FROM cw_structural_elements WHERE id = ?', [$selected_id]);
        $teachUOS_page_template->set_attribute('selected_parent_id', $selected_parent_id);
        // get grandparent of selected courseware block
        //$selected_grandparent_id = \Mooc\DB\Block::find($selected_parent_id)->parent_id;
        $selected_grandparent_id = $db->fetchOne('SELECT parent_id FROM cw_structural_elements WHERE id = ?', [$selected_parent_id]);
        $teachUOS_page_template->set_attribute('selected_grandparent_id', $selected_grandparent_id);
        
        //check if selected block_id is marked as favourite
        //TODO: uncomment...
        //$teachUOS_page_template->set_attribute('isFavourite', $this->isFavourite($selected_id));
        $teachUOS_page_template->set_attribute('isFavourite', false);

        // render template
        $menu_content = $teachUOS_page_template->render();
        return $menu_content;
    }
}
