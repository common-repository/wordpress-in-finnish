<?php
/*
Plugin Name: WordPress in Finnish
Plugin URI: http://arkimedia.fi
Description: Translates WordPress into Finnish
Version: 0.3
Author: Mikko Virenius
Author URI: http://arkimedia.fi

Copyright 2009  MIKKO VIRENIUS  (email : info@arkimedia.fi)

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
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	
*/

function wif_get_localization_code() {
	return fi_FI;
}
add_filter('locale', 'wif_get_localization_code');

function wif_load_default_textdomain() {
	$locale = get_locale();
	$plugin_base = dirname(__FILE__);
	$mofile = $plugin_base . "/$locale.mo";
	return load_textdomain('default', $mofile);
}
add_action('plugins_loaded','wif_load_default_textdomain');
?>