<?php


include_once('Thetwoaccessibility_LifeCycle.php');

class Thetwoaccessibility_Plugin extends Thetwoaccessibility_LifeCycle
{

    /**
     * See: http://plugin.michael-simpson.com/?page_id=31
     * @return array of option meta data.
     */
    public function getOptionMetaData()
    {
        $menus = $this->getAllMenusName();
        //  http://plugin.michael-simpson.com/?page_id=31
        return array(
            //'_version' => array('Installed Version'), // Leave this one commented-out. Uncomment to test upgrades.
            // 'display_accessibility_button' => array(__('Accessibility Button Should Display', 'my-awesome-plugin'), 'false', 'true'),
            'remove_accessibility_style' => array(__('Remove Accessibility CSS', 'thetwoaccessibility'), 'false', 'true'),
            'absolute_top_position' => array(__('What Should Be The Absolute Top Position Of The Accessibility Panel', 'thetwoaccessibility'), "10px", "calc(100% + 15px)"),
            'accessibility_on_menu_end' => array_merge(array(
                __('on Which Menu Should Accessibility Button Appear?', 'thetwoaccessibility'), 'none'
            ), $menus)
        );
    }

    public function getAllMenusName()
    {
        return get_registered_nav_menus();
    }

    //    protected function getOptionValueI18nString($optionValue) {
    //        $i18nValue = parent::getOptionValueI18nString($optionValue);
    //        return $i18nValue;
    //    }

    protected function initOptions()
    {
        $options = $this->getOptionMetaData();
        if (!empty($options)) {
            foreach ($options as $key => $arr) {
                if (is_array($arr) && count($arr > 1)) {
                    $this->addOption($key, $arr[1]);
                }
            }
        }
    }

    public function getPluginDisplayName()
    {
        return 'The Two Accessibility';
    }

    protected function getMainPluginFileName()
    {
        return 'thetwoaccessibility.php';
    }

    /**
     * See: http://plugin.michael-simpson.com/?page_id=101
     * Called by install() to create any database tables if needed.
     * Best Practice:
     * (1) Prefix all table names with $wpdb->prefix
     * (2) make table names lower case only
     * @return void
     */
    protected function installDatabaseTables()
    {
        //        global $wpdb;
        //        $tableName = $this->prefixTableName('mytable');
        //        $wpdb->query("CREATE TABLE IF NOT EXISTS `$tableName` (
        //            `id` INTEGER NOT NULL");
    }

    /**
     * See: http://plugin.michael-simpson.com/?page_id=101
     * Drop plugin-created tables on uninstall.
     * @return void
     */
    protected function unInstallDatabaseTables()
    {
        //        global $wpdb;
        //        $tableName = $this->prefixTableName('mytable');
        //        $wpdb->query("DROP TABLE IF EXISTS `$tableName`");
    }


    /**
     * Perform actions when upgrading from version X to version Y
     * See: http://plugin.michael-simpson.com/?page_id=35
     * @return void
     */
    public function upgrade()
    { }

    public function addActionsAndFilters()
    {
        parent::addActionsAndFilters();
        // Add options administration page
        // http://plugin.michael-simpson.com/?page_id=47
        add_action('admin_menu', array(&$this, 'addSettingsSubMenuPage'));


        // Example adding a script & style just for the options administration page
        // http://plugin.michael-simpson.com/?page_id=47
        //        if (strpos($_SERVER['REQUEST_URI'], $this->getSettingsSlug()) !== false) {
        //            wp_enqueue_script('my-script', plugins_url('/js/my-script.js', __FILE__));
        //            wp_enqueue_style('my-style', plugins_url('/css/my-style.css', __FILE__));
        //        }


        // Add Actions & Filters
        // http://plugin.michael-simpson.com/?page_id=37


        // Adding scripts & styles to all pages
        function thetwoaccessibility_enqueue_style()
        {
            wp_enqueue_style('thetwoaccessibility-style', plugins_url('/css/style.css', __FILE__));
        }
        function thetwoaccessibility_enqueue_fontawesome()
        {
            wp_enqueue_script('prefix-font-awesome', '//kit.fontawesome.com/ec155ed69e.js', array(), '5.10.1'); // load font awesome
        }

        function thetwoaccessibility_enqueue_script()
        {
            wp_enqueue_script('jquery');
            wp_enqueue_script('thetwoaccessibility-script', plugins_url('/js/thetwoaccessibility.js', __FILE__), array('jquery'), false, true);
        }
        if ($this->getOption('remove_accessibility_style') != "true") {

            add_action('wp_enqueue_scripts', 'thetwoaccessibility_enqueue_style');
        }
        add_action('wp_enqueue_scripts', 'thetwoaccessibility_enqueue_fontawesome');
        add_action('wp_enqueue_scripts', 'thetwoaccessibility_enqueue_script');


        // Register short codes
        // http://plugin.michael-simpson.com/?page_id=39


        // Register AJAX hooks
        // http://plugin.michael-simpson.com/?page_id=41

    }
}
