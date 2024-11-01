<?php
/**
* Plugin Name: W2O Football Fans Admin Color Schemes
* Plugin URI: https://wordpress.org/plugins/w2o-football-fans-admin-color-schemes/
* Description: Admin Color Schemes for Football Fans. If you like this plugin then why don't you buy me a beer at-least. <strong><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=raju.rachana%40gmail.com" target="_blank">DONATE SOMETHING, YOU WILL SURELY FEEL GREAT.</a></strong>
* Version: 1.2
* Author: Shishir Raj Adhikari
* Author URI: https://profiles.wordpress.org/shishiradhikari/
* License: GPLv2 or later
*/
 
/*
Copyright 2016 - 2017 Shishir Raj Adhikari

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

define( 'W2O_FBFN_ACS_VER', '1.2' );
require_once(dirname(__FILE__).'/core/class-acs.php');

/* Hook of the plugin through class class-acs.php */
global $w2o_fbfn_acs;
$w2o_fbfn_acs = new W2O_FBFN_ACS;

/* Making sure it is WP 4.0+ only */
function wp_w2o_fbfn_acs_versioncheck(){
	global $wp_version;
	if ( version_compare($wp_version, '4.0', '<') ) {
		deactivate_plugins( basename(__FILE__) );
		wp_die("Sorry, this plugin requires WordPress 4.0 at least");
	}
}
register_activation_hook(__FILE__, 'wp_w2o_fbfn_acs_versioncheck');
?>