<?php
require_once dirname(__file__) . '/../models/koop_page.php';

class IndexController extends StudipController
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

        $sidebar = Sidebar::Get();
        $sidebar->setImage('../../' . $this->plugin->getPluginPath() . '/assets/images/teach_os.png');
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/koop.css');
    }

    public function index_action()
    {
        Navigation::activateItem('koop/');
    }

    /**
     * return a json array of all unique kacheln to use in custom kacheln
     */
    public function get_unique_kacheln_action()
    {
        $koop_pages = KoopPage::findBySQL("parent_id != ?", array(-1));
        $unique_kacheln = array();
        foreach ($koop_pages as $kpage) {
            $content = json_decode($kpage['content'], true);
            if (isset($content['kacheln'])) {
                $kacheln = $content['kacheln'];
                foreach ($kacheln as $id => $kachel) {
                    $unique_kacheln[$kachel['link']] = $kachel;
                }
            }
        }
        echo json_encode($unique_kacheln);
        die();
    }

    public function set_customizable_kachel_action()
    {
        UserConfig::get($GLOBALS['user']->id)->store('koop_custom_' . $_POST['k_id'] . '_img', $_POST['k_img']);
        UserConfig::get($GLOBALS['user']->id)->store('koop_custom_' . $_POST['k_id'] . '_img_hover', $_POST['k_img_hover']);
        UserConfig::get($GLOBALS['user']->id)->store('koop_custom_' . $_POST['k_id'] . '_link', $_POST['k_link']);

        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function reset_customizable_kachel_action()
    {
        UserConfig::get($GLOBALS['user']->id)->delete('koop_custom_' . $_POST['k_id'] . '_img');
        UserConfig::get($GLOBALS['user']->id)->delete('koop_custom_' . $_POST['k_id'] . '_img_hover');
        UserConfig::get($GLOBALS['user']->id)->delete('koop_custom_' . $_POST['k_id'] . '_link');

        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function set_layout_action()
    {
        UserConfig::get($GLOBALS['user']->id)->store('koop_layout', $_POST['koop_layout']);

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
