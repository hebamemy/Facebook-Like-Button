<?php

/*
Plugin Name: Facebook Like
Plugin URI: http://www.ahmedgeek.com/facebook-like-button-v5-0-major-update
Description: Add the new Facebook Like button and Facebook Recommendations widget to your wordpress blog.
Version: 6.0
Author: AhmedGeek
Author URI: http://www.ahmedgeek.com
License: GPL2

Translation and Fonts for the like button developed and added by Anty (mail@anty.at) http://anty.at

Copyright 2010  Facebook Like Button  (email : me@ahmedgeek.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

//require_once();
require_once(plugin_dir_path( __FILE__ ) . "inc/class/pressGraphLike.core.php");

//Init PressGraph Core
$PressGraph = new PressGraphCore();

?>