<?php

/**

Plugin Name: BuddyPress Social Icons

Plugin URI: http://wordpress.org/extend/plugins/buddypress-social-icons/

Description: Let your members show their Social Link Button on their profile page .

Version: 1.0.0

Author: http://vivacityinfotech.net/

Author URI: http://vivacityinfotech.net/

License:GPL2 or Later

**/


function bp_sl_init() 
	{
		require( dirname( __FILE__ ) . '/buddypress-social-icons.php' );
	}

add_action( 'bp_include', 'bp_sl_init' );

?>