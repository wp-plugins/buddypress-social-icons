<?php

/**

Plugin Name: BuddyPress Social Icons

Plugin URI: http://wordpress.org/extend/plugins/buddypress-social-icons/

Description: Let your members show their Social Link Button on their profile page .

Version: 1.0.1

Author: http://vivacityinfotech.net/

Author URI: http://vivacityinfotech.net/

Author Email : support@vivacityinfotech.net

License:GPL2 or Later

Copyright 2014  Vivacity InfoTech Pvt. Ltd.  (email : support@vivacityinfotech.net)
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



**/


function bp_sl_init() 
	{
		require( dirname( __FILE__ ) . '/buddypress-social-icons.php' );
	}

add_action( 'bp_include', 'bp_sl_init' );

?>