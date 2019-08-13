<?php
/*
   Plugin Name: TheTwoAccessibility
   Plugin URI: http://wordpress.org/extend/plugins/thetwoaccessibility/
   Version: 0.1
   Author: Avsha Agasi & Amit Rahav
   Author URI: http://the-two.co
   Description: Accessibility By TheTwo
   Text Domain: thetwoaccessibility
   License: GPLv3
  */

/*
    "WordPress Plugin Template" Copyright (C) 2019 Michael Simpson  (email : michael.d.simpson@gmail.com)

    This following part of this file is part of WordPress Plugin Template for WordPress.

    WordPress Plugin Template is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    WordPress Plugin Template is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Contact Form to Database Extension.
    If not, see http://www.gnu.org/licenses/gpl-3.0.html
*/

$Thetwoaccessibility_minimalRequiredPhpVersion = '7.3';

/**
 * Check the PHP version and give a useful error message if the user's version is less than the required version
 * @return boolean true if version check passed. If false, triggers an error which WP will handle, by displaying
 * an error message on the Admin page
 */
function Thetwoaccessibility_noticePhpVersionWrong()
{
    global $Thetwoaccessibility_minimalRequiredPhpVersion;
    echo '<div class="updated fade">' .
        __('Error: plugin "TheTwoAccessibility" requires a newer version of PHP to be running.',  'thetwoaccessibility') .
        '<br/>' . __('Minimal version of PHP required: ', 'thetwoaccessibility') . '<strong>' . $Thetwoaccessibility_minimalRequiredPhpVersion . '</strong>' .
        '<br/>' . __('Your server\'s PHP version: ', 'thetwoaccessibility') . '<strong>' . phpversion() . '</strong>' .
        '</div>';
}


function Thetwoaccessibility_PhpVersionCheck()
{
    global $Thetwoaccessibility_minimalRequiredPhpVersion;
    if (version_compare(phpversion(), $Thetwoaccessibility_minimalRequiredPhpVersion) < 0) {
        add_action('admin_notices', 'Thetwoaccessibility_noticePhpVersionWrong');
        return false;
    }
    return true;
}


/**
 * Initialize internationalization (i18n) for this plugin.
 * References:
 *      http://codex.wordpress.org/I18n_for_WordPress_Developers
 *      http://www.wdmac.com/how-to-create-a-po-language-translation#more-631
 * @return void
 */
function Thetwoaccessibility_i18n_init()
{
    $pluginDir = dirname(plugin_basename(__FILE__));
    load_plugin_textdomain('thetwoaccessibility', false, $pluginDir . '/languages/');
}


//////////////////////////////////
// Run initialization
/////////////////////////////////

// Initialize i18n
add_action('plugins_loaded', 'Thetwoaccessibility_i18n_init');

function Thetwoaccessibility_add_setting_link($links)
{
    $pluginDir = dirname(plugin_basename(__FILE__));
    $links[] = '<a href="' .
        admin_url('?page=' . ucfirst($pluginDir) . '_PluginSettings') .
        '">' . __('Settings') . '</a>';
    return $links;
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'Thetwoaccessibility_add_setting_link');

// Run the version check.
// If it is successful, continue with initialization for this plugin
if (Thetwoaccessibility_PhpVersionCheck()) {
    // Only load and run the init function if we know PHP version can parse it
    include_once('thetwoaccessibility_init.php');

    Thetwoaccessibility_init(__FILE__);
}
