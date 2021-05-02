<?php
class MenuController extends StudipController {

    public function __construct($dispatcher)
    {
        parent::__construct($dispatcher);
        $this->plugin = $GLOBALS['plugin'];
    }

    public function before_filter(&$action, &$args)
    {
        parent::before_filter($action, $args);
        PageLayout::setTitle(_("Das digitale Lehrerzimmer"));

        //$sidebar = Sidebar::Get();
        //$sidebar->setImage('../../' .$this->plugin->getPluginPath() . '/assets/images/teach_os.png');
        PageLayout::addStylesheet($this->plugin->getPluginURL().'/assets/koop.css');

    }

    public function faecher_action()
    {
        //Navigation::activateItem('koop/');
        
        
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
