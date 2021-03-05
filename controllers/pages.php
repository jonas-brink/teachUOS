<?php
require_once dirname(__file__) . '/../models/koop_page.php';

class PagesController extends StudipController
{

    public function __construct($dispatcher)
    {
        parent::__construct($dispatcher);
        $this->plugin = $dispatcher->plugin;
    }

    public function before_filter(&$action, &$args)
    {
        parent::before_filter($action, $args);
        PageLayout::setTitle(_("teachUOS"));
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/koop.css');

        $sidebar = Sidebar::Get();
        $sidebar->setImage('../../' . $this->plugin->getPluginPath() . '/assets/images/teach_os.png');
    }

    public function index_action()
    {
        Navigation::activateItem('koop/');
    }

    public function subjects_action()
    {
        Navigation::activateItem('koop/subjects');
        //$this->redirect(URLHelper::getURL('/studip/qplus-koop/seminar_main.php', ['auswahl' => 'a4204c684df5c46ec74a6f6420f1d81d']));
    }

    public function studyplan_action()
    {
        Navigation::activateItem('koop/study_to_practice/studyplan');
    }

    public function consulting_action()
    {
        Navigation::activateItem('koop/my_way/consulting');
    }


    public function study_to_practice_action()
    {
        Navigation::activateItem('koop/study_to_practice');
    }

    public function study_to_practice2_action()
    {
        Navigation::activateItem('koop/study_to_practice2');
    }

    public function digital_teaching_action()
    {
        Navigation::activateItem('koop/digital_teaching');
    }

    public function digital_teaching2_action()
    {
        Navigation::activateItem('koop/digital_teaching2');
    }

    public function my_way_action()
    {
        Navigation::activateItem('koop/my_way/council');
        PageLayout::setTitle(_("Mein Weg durchs Studium"));
    }

    public function my_way2_action()
    {
        Navigation::activateItem('koop/my_way2');
        PageLayout::setTitle(_("Mein Weg durchs Studium"));
    }

    public function Pruefungsordnungen_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=151');
    }
    public function Praktikum_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=152');
    }
    public function Fachschaften_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=153');
    }
    public function Professionalisierung_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=154');
    }
    public function Auslandsaufenthalte_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=155');
    }
    public function Beratungsangebote_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=150');
    }

    public function cw_action()
    {

        // hide courseware navigation
        PageLayout::addStyle('.cw-sidebar { display: none; }');
        PageLayout::addStyle('.breadcrumb { display: none; }');
        PageLayout::addStyle('.mode-switch { display: none; }');
        PageLayout::addStyle('#tabs { display: none; }');
        PageLayout::addStyle('#courseware { display: none; }');
        PageLayout::addStyle('.prev { display: none !important; }');
        PageLayout::addStyle('.next { display: none !important; }');

        if (UserConfig::get($GLOBALS['user']->id)->koop_layout == 1 || !isset(UserConfig::get($GLOBALS['user']->id)->koop_layout)) {
            PageLayout::addStyle('.active-subchapter { display: none; }');
            PageLayout::addStyle('.subchapters { display: none; }');
            PageLayout::addStyle('.chapter { display: none; }');

            // add koop css
            PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/koop.css');
            PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/menu.css');
        } elseif (UserConfig::get($GLOBALS['user']->id)->koop_layout == 2) {

            PageLayout::addStyle('ol.subchapters{ list-style:none !important; }');
            PageLayout::addStyle('.controls { display: none; }');
            PageLayout::addStyle('.handle { display: none; }');
            PageLayout::addStyle('.no-content { display: none; }');

            // add koop css
            PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/koop.css');
            PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/menu_2.css');
        }




        // add koop menu
        PageLayout::addBodyElements($this->get_koop_content());
        PageLayout::addScript($this->plugin->getPluginURL() . '/assets/menu.js');

        require_once 'vendor/trails/trails.php';
        require_once 'app/controllers/studip_controller.php';
        require_once 'app/controllers/authenticated_controller.php';

        $Courseware_Plugin = \PluginManager::getInstance()->getPlugin('Courseware');

        $dispatcher = new Trails_Dispatcher(
            $Courseware_Plugin->getPluginPath(),
            rtrim(PluginEngine::getLink($Courseware_Plugin, array(), null), '/'),
            'courseware'
        );
        $dispatcher->plugin = $Courseware_Plugin;


        $uri = 'courseware?' . explode('?', $_SERVER['REQUEST_URI'])[1];
        echo $dispatcher->map_uri_to_response($dispatcher->clean_request_uri((string) $uri))->output();
        exit();
    }

    public function get_koop_content()
    {
        $koop_menu = KoopPage::findOneBySQL("seminar_id = ?  and selected = ? ", [$_GET['cid'], $_GET['selected']]);

        if (!$koop_menu) {
            // get id of parent chapter from courseware table
            $db = DBManager::get();
            $stmt = $db->prepare("
                SELECT
                    *
                FROM
                    mooc_blocks
                WHERE
                    seminar_id = :cid
            ");
            $stmt->bindParam(":cid", $_GET['cid']);
            $stmt->execute();
            $all_blocks = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $current_parent = 0;
            for ($i = 0; $i < 5; $i++) {
                foreach ($all_blocks as $block) {
                    if ($current_parent == 0 && $block['id'] == $_GET['selected']) {
                        if ($block['type'] == 'Chapter') {
                            $current_parent = $block['id'];
                            break;
                            break;
                        } else {
                            $current_parent = $block['parent_id'];
                        }
                    }
                    if ($current_parent != 0 && $block['id'] == $current_parent) {
                        if ($block['type'] == 'Chapter') {
                            $current_parent = $block['id'];
                            break;
                            break;
                        } else {
                            $current_parent = $block['parent_id'];
                        }
                    }
                }
            }
            $koop_menu['parent_id'] = $current_parent;
            $koop_menu['type'] = "kacheln";

            // add a new KoopPage and save parent
            $k1 = new KoopPage();
            $content['text_sidemenu'] = false;
            $k1['type'] = 'kacheln';
            $k1['parent_id'] = $koop_menu['parent_id'];
            $k1['seminar_id'] = $_GET['cid'];
            $k1['selected'] = $_GET['selected'];
            $k1->store();
        }

        // get the menu from parent if type not text
        if ($koop_menu['parent_id'] != 0 && $koop_menu['parent_id'] != $_GET['selected'] && $koop_menu['type'] != "text") {

            $koop_menu_parent = KoopPage::findOneBySQL("seminar_id = ?  and selected = ?", [$_GET['cid'], $koop_menu['parent_id']]);
            $koop_menu = $koop_menu_parent;
        }



        # load flexi templates
        $path_to_the_templates = dirname(__FILE__) . '/../templates';
        $factory = new Flexi_TemplateFactory($path_to_the_templates);
        $koop_page_template = '';
        // only for koop_layout =2, allows texts or blocks in sidemenu
        $text_sidemenu = false;
        if (UserConfig::get($GLOBALS['user']->id)->koop_layout == 2) {
            $koop_page_template = $factory->open('koop_page_2');
        } else {
            $koop_page_template = $factory->open('koop_page');
        }


        $koop_page_template->set_attribute('ABSOLUTE_URI_STUDIP', $GLOBALS['ABSOLUTE_URI_STUDIP']);
        $koop_page_template->set_attribute('getPluginPath', $this->plugin->getPluginPath());

        $images_folder = 'images';
        if (UserConfig::get($GLOBALS['user']->id)->koop_layout == 2) {
            $images_folder = 'images3';
        }

        $images_files = scandir($this->plugin->getPluginPath() . '/assets/' . $images_folder . '/');
        $kacheln_images = array();
        foreach ($images_files as $key => $img) {
            if (file_exists($this->plugin->getPluginPath() . '/assets/' . $images_folder . '/' . str_replace('.', '_hover.', $img)) && strlen($img) > 4) {
                $kacheln_images[] = $img;
            }
            if (strlen($img) < 3) unset($images_files[$key]);
        }




        $new_page = false;



        $kacheln = array();

        // default header images
        $header = array(
            'image' => 'C0_studium.svg',
            'image_width' => 181,
            'comic' => 'C0_comic.svg',
            'comic_x_pos' => 75,
            'comic_y_pos' => 10,
            'comic_width' => 42
        );
        $title = '';
        if ($koop_menu) {
            $content = json_decode($koop_menu['content'], true);
            if (UserConfig::get($GLOBALS['user']->id)->koop_layout == 2) {
                if (isset($content['text_sidemenu'])) if ($content['text_sidemenu']) {
                    $text_sidemenu = true;
                }
                if (isset($content['kacheln_2'])) {
                    $kacheln = $content['kacheln_2'];
                } else {
                    // for layout 2 just disply text links for chapters
                    $text_sidemenu = true;
                }
            } else {
                if (isset($content['kacheln'])) {
                    $kacheln = $content['kacheln'];
                    $title = $koop_menu['title'];
                    foreach ($kacheln as $id => $kachel) {
                        $kacheln[$id]['link'] = str_replace('{ABSOLUTE_URI_STUDIP}', $GLOBALS['ABSOLUTE_URI_STUDIP'], $kachel['link']);
                    }
                } else {
                    // empty menu
                    for ($i = 1; $i <= 9; $i++) {
                        $kacheln[$i] = array('link' => '../', 'img_hover' => 'B_teachuos_hover.svg', 'img' => 'B_teachuos.svg');
                    }
                }
            }

            if (isset($content['header'])) $header = $content['header'];
        } else {

            // empty menu
            if (UserConfig::get($GLOBALS['user']->id)->koop_layout == 1 || !isset(UserConfig::get($GLOBALS['user']->id)->koop_layout)) {
                for ($i = 1; $i <= 9; $i++) {
                    $kacheln[$i] = array('link' => '../', 'img_hover' => 'B_teachuos_hover.svg', 'img' => 'B_teachuos.svg');
                }
            } elseif (UserConfig::get($GLOBALS['user']->id)->koop_layout == 2) {
                // for layout 2 just disply text links for chapters
                $text_sidemenu = true;
            }
            $new_page = true;
        }





        $koop_page_template->set_attribute('title', $title);
        $koop_page_template->set_attribute('kacheln', $kacheln);
        $koop_page_template->set_attribute('header', $header);

        $koop_page_template->set_attribute('text_sidemenu', $text_sidemenu);



        // activate edit mode when there is an '&e' in URL
        if (isset($_GET['e'])) {
            $koop_page_template->set_attribute('edit_mode', true);


            // edit
            if (UserConfig::get($GLOBALS['user']->id)->koop_layout == 1) {
                $edit_menu_template = $factory->open('edit_menu');
            } else {
                $edit_menu_template = $factory->open('edit_menu_2');
            }

            $edit_menu_template->set_attribute('cid', $_GET['cid']);
            $edit_menu_template->set_attribute('selected', $_GET['selected']);
            $edit_menu_template->set_attribute('ABSOLUTE_URI_STUDIP', $GLOBALS['ABSOLUTE_URI_STUDIP']);
            $edit_menu_template->set_attribute('getPluginPath', $this->plugin->getPluginPath());


            $edit_menu_template->set_attribute('kacheln_images', $kacheln_images);
            $edit_menu_template->set_attribute('all_images', $images_files);

            $edit_menu_template->set_attribute('new_page', $new_page);
            $edit_menu_template->set_attribute('kacheln', $kacheln);
            $edit_menu_template->set_attribute('header', $header);
            $edit_menu_template->set_attribute('title', $title);

            $edit_menu_template->set_attribute('text_sidemenu', $text_sidemenu);

            $menu_content .= $koop_page_template->render() . $edit_menu_template->render();
        } else {
            $menu_content = $koop_page_template->render();
        }

        return $menu_content;
    }

    /**
     * export database table as json file
     */
    public function export_db_Action()
    {
        // get all koop pages
        $koop_pages = KoopPage::findBySQL("id > -1");
        $json_data = array();

        header('Content-disposition: attachment; filename=koop_export.json');
        header('Content-type: application/json');
        foreach ($koop_pages as $page) 
        {
            $json_data[] = array($page['type'], $page['parent_id'], $page['seminar_id'], $page['selected'], $page['title'], $page['content'], $page['chdate'], $page['mkdate']);
        }
        echo json_encode($json_data);
        exit();
    }

    /**
     * import json file to database table
     */
    public function import_db_Action()
    {
        if (isset($_POST["submit"])) {
            $db = DBManager::get();
            $db->exec("CREATE TABLE IF NOT EXISTS `koop_pages` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `type` varchar(64) NOT NULL,
            `parent_id` int(11) DEFAULT NULL,
            `seminar_id` varchar(32) DEFAULT NULL,
            `selected` int(11) DEFAULT NULL,
            `title` varchar(255) DEFAULT NULL,
            `content` text NOT NULL,
            `chdate` int(11) DEFAULT NULL,
            `mkdate` int(11) DEFAULT NULL,
            PRIMARY KEY (`id`)
            )");

            // get all koop pages
            $input_json = json_decode(file_get_contents($_FILES["koop_file"]["tmp_name"]));
            foreach ($input_json as $page) {

                /*
                echo 'type: '.$page[0].'<br>';
                echo 'parent_id: '.$page[1].'<br>';
                echo 'seminar_id: '.$page[2].'<br>';
                echo 'selected: '.$page[3].'<br>';
                echo 'title: '.$page[4].'<br>';
                echo 'content: '.$page[5].'<br>';
                echo 'chdate: '.$page[6].'<br>';
                echo 'mkdate: '.$page[7].'<br>';
                echo '<hr>';
                */
                $k1 = new KoopPage();
                $k1['type'] = $page[0];
                $k1['parent_id'] = $page[1];
                $k1['seminar_id'] = $page[2];
                $k1['selected'] = $page[3];
                $k1['title'] = $page[4];
                $k1['content'] = $page[5];
                $k1['chdate'] = $page[6];
                $k1['mkdate'] = $page[7];
                $k1->store();
            }
            //echo json_encode($json_data);
            exit(count(input_json) . ' pages has been imported.');
        }
    }

    public function empty_db_Action()
    {
        $db = DBManager::get();
        $db->exec("truncate TABLE `koop_pages`");
        exit('koop database table has been deleted');
    }


    public function edit_koop_page_Action()
    {
        $kacheln = $_POST['kacheln'];
        foreach ($kacheln as $id => $kachel) {
            $kacheln[$id]['img_hover'] = str_replace('.svg', '_hover.svg', $kacheln[$id]['img']);
            $kacheln[$id]['link'] = str_replace($GLOBALS['ABSOLUTE_URI_STUDIP'], '{ABSOLUTE_URI_STUDIP}', $kachel['link']);
        }
        $content = array();
        //$content['kacheln'] = $kacheln;


        if (isset($_POST['header'])) $content['header'] = $_POST['header'];

        if (isset($_POST['layout'])) {
            if ($_POST['layout'] == 2) {

                if ($_POST['new_page'] == "1") {
                    $content['kacheln_2'] = $kacheln;
                    $k1 = new KoopPage();
                    $content['text_sidemenu'] = false;
                    $k1['type'] = 'kacheln';
                    if (isset($_POST['text_sidemenu'])) {
                        $content['text_sidemenu'] = true;
                        $k1['type'] = 'text';
                    }
                    $k1['parent_id'] = $_POST['parent'];
                    $k1['seminar_id'] = $_POST['cid'];
                    $k1['selected'] = $_POST['selected'];
                    $k1['title'] = $_POST['title'];
                    $k1['content'] = json_encode($content);
                    //$k1['user_id'] = $GLOBALS['user']->id;
                    $k1->store();
                } else {
                    $koop_page = KoopPage::findOneBySQL("seminar_id = ?  and selected = ?", [$_POST['cid'], $_POST['selected']]);
                    $content = json_decode($koop_page['content'], true);
                    $content['text_sidemenu'] = false;
                    $koop_page['type'] = 'kacheln';
                    if (isset($_POST['text_sidemenu'])) {
                        $content['text_sidemenu'] = true;
                        $koop_page['type'] = 'text';
                    }
                    $content['kacheln_2'] = $kacheln;

                    $koop_page['parent_id'] = $_POST['parent'];
                    $koop_page['seminar_id'] = $_POST['cid'];
                    $koop_page['selected'] = $_POST['selected'];
                    $koop_page['title'] = $_POST['title'];
                    $koop_page['content'] = json_encode($content);
                    $koop_page->store();
                }
            }
        } else {
            if ($_POST['new_page'] == "1") {
                $content['kacheln'] = $kacheln;
                $k1 = new KoopPage();
                $k1['type'] = '9kacheln';
                $k1['parent_id'] = 0;
                $k1['seminar_id'] = $_POST['cid'];
                $k1['selected'] = $_POST['selected'];
                $k1['title'] = $_POST['title'];
                $k1['content'] = json_encode($content);
                //$k1['user_id'] = $GLOBALS['user']->id;
                $k1->store();
            } else {
                $koop_page = KoopPage::findOneBySQL("seminar_id = ?  and selected = ?", [$_POST['cid'], $_POST['selected']]);
                $content = json_decode($koop_page['content'], true);
                $content['kacheln'] = $kacheln;
                $koop_page['type'] = '9kacheln';
                $koop_page['parent_id'] = 0;
                $koop_page['seminar_id'] = $_POST['cid'];
                $koop_page['selected'] = $_POST['selected'];
                $koop_page['title'] = $_POST['title'];
                $koop_page['content'] = json_encode($content);
                $koop_page->store();
            }
        }
        $this->redirect($_SERVER['HTTP_REFERER']);
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
