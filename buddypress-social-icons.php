<?php

/* include the buddypress social admin extension */

require ( dirname( __FILE__ ) . '/admin.php' );

/* Only include the working extensions dependant on admin options ( 'members' and 'groups' ) */

/* only include the member extension if enabled */

	if ( !$fbcj_members_extension_check ) 
		{

    		if ( !$fbcj_members_extension_check = get_option('fbcj-members') )

      	$fbcj_members_extension_check = '1'; // the default

  		}

  	if ( $fbcj_members_extension_check == '1' ) 
  		{

			require( dirname( __FILE__ ) . '/includes/social-members-extension.php' );
		}

/* only include the group extension if enabled */

	if ( !$fbcj_group_extension_check ) 
		{

    if ( !$fbcj_group_extension_check = get_option('fbcj-groups') )

      $fbcj_group_extension_check = ''; // the default

   	}

  if ( $fbcj_group_extension_check == '1' ) 
  		{

			require( dirname( __FILE__ ) . '/includes/social-groups-extension.php' );

  		}


/* Include the css to fix the button alignment. */

	function bp_sl_insert_head() 
	{
		wp_enqueue_style('style', plugin_dir_url( __FILE__ ).'includes/style.css');
	
	}

	add_action('wp_enqueue_scripts', 'bp_sl_insert_head');
	
	
	function bp_sl_scripts() 
	{
		wp_enqueue_script( 'bp_sl', plugin_dir_url( __FILE__ ). '/js/bp_sl.js');	
	}
	add_action( 'admin_enqueue_scripts', 'bp_sl_scripts' ); 
	?>