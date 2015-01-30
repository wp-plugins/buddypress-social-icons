<?php
add_action('admin_menu', 'bp_sl_plugin_menu');
add_action( 'network_admin_menu', 'bp_sl_plugin_menu' );

function bp_sl_plugin_menu() 
{
	add_menu_page( 'bp-general-settings', 'Bp Social','manage_options',  'bp-social', 'bpsl_plugin_options');

	//call register settings function

	add_action( 'admin_init', 'bpsl_register_settings' );

}

function bpsl_register_settings() {

//register our settings

register_setting( 'bpsl_plugin_options', 'hidden-members' );
register_setting( 'bpsl_plugin_options', 'fbcj-members' );
register_setting( 'bpsl_plugin_options', 'fbcj-groups' );
register_setting( 'bpsl_plugin_options', 'fbcj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'fbcj-count' );
register_setting( 'bpsl_plugin_options', 'fb_icon' );

//  register_setting( 'bpsl_plugin_options', 'fbcj-button-size' );
//name to cerrelate to the members profile field label

register_setting( 'bpsl_plugin_options', 'fbcj_member_label' );

//name to cerrelate to the gropus field label
register_setting( 'bpsl_plugin_options', 'fbcj_group_label' );

// Option setting for twitter
register_setting( 'bpsl_plugin_options', 'twcj-members' );
register_setting( 'bpsl_plugin_options', 'twcj-groups' );
register_setting( 'bpsl_plugin_options', 'twcj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'twcj-count' );
register_setting( 'bpsl_plugin_options', 'twcj_member_label' );
register_setting( 'bpsl_plugin_options', 'twcj_group_label' );
register_setting( 'bpsl_plugin_options', 'tw_icon' );

// Option setting for google plus
register_setting( 'bpsl_plugin_options', 'gpcj-members' );
register_setting( 'bpsl_plugin_options', 'gpcj-groups' );
register_setting( 'bpsl_plugin_options', 'gpcj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'gpcj-count' );
register_setting( 'bpsl_plugin_options', 'gpcj_member_label' );
register_setting( 'bpsl_plugin_options', 'gpcj_group_label' );
register_setting( 'bpsl_plugin_options', 'gp_icon' );

// Option setting for pinterest
register_setting( 'bpsl_plugin_options', 'ptcj-members' );
register_setting( 'bpsl_plugin_options', 'ptcj-groups' );
register_setting( 'bpsl_plugin_options', 'ptcj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'ptcj-count' );
register_setting( 'bpsl_plugin_options', 'ptcj_member_label' );
register_setting( 'bpsl_plugin_options', 'ptcj_group_label' );
register_setting( 'bpsl_plugin_options', 'pt_icon' );

// Option setting for LinkedIn
register_setting( 'bpsl_plugin_options', 'licj-members' );
register_setting( 'bpsl_plugin_options', 'licj-groups' );
register_setting( 'bpsl_plugin_options', 'licj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'licj-count' );
register_setting( 'bpsl_plugin_options', 'licj_member_label' );
register_setting( 'bpsl_plugin_options', 'licj_group_label' );
register_setting( 'bpsl_plugin_options', 'li_icon' );

// Option setting for Tumblr
register_setting( 'bpsl_plugin_options', 'tmcj-members' );
register_setting( 'bpsl_plugin_options', 'tmcj-groups' );
register_setting( 'bpsl_plugin_options', 'tmcj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'tmcj-count' );
register_setting( 'bpsl_plugin_options', 'tmcj_member_label' );
register_setting( 'bpsl_plugin_options', 'tmcj_group_label' );
register_setting( 'bpsl_plugin_options', 'tm_icon' );

// Option setting for Instagram
register_setting( 'bpsl_plugin_options', 'incj-members' );
register_setting( 'bpsl_plugin_options', 'incj-groups' );
register_setting( 'bpsl_plugin_options', 'incj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'incj-count' );
register_setting( 'bpsl_plugin_options', 'incj_member_label' );
register_setting( 'bpsl_plugin_options', 'incj_group_label' );
register_setting( 'bpsl_plugin_options', 'in_icon' );

// Option setting for Flickr
register_setting( 'bpsl_plugin_options', 'flcj-members' );
register_setting( 'bpsl_plugin_options', 'flcj-groups' );
register_setting( 'bpsl_plugin_options', 'flcj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'flcj-count' );
register_setting( 'bpsl_plugin_options', 'flcj_member_label' );
register_setting( 'bpsl_plugin_options', 'flcj_group_label' );
register_setting( 'bpsl_plugin_options', 'fl_icon' );

// Option setting for Youtube
register_setting( 'bpsl_plugin_options', 'ytcj-members' );
register_setting( 'bpsl_plugin_options', 'ytcj-groups' );
register_setting( 'bpsl_plugin_options', 'ytcj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'ytcj-count' );
register_setting( 'bpsl_plugin_options', 'ytcj_member_label' );
register_setting( 'bpsl_plugin_options', 'ytcj_group_label' );
register_setting( 'bpsl_plugin_options', 'yt_icon' );

// Option setting for Myspace
register_setting( 'bpsl_plugin_options', 'mscj-members' );
register_setting( 'bpsl_plugin_options', 'mscj-groups' );
register_setting( 'bpsl_plugin_options', 'mscj-groups-placement' );
register_setting( 'bpsl_plugin_options', 'mscj-count' );
register_setting( 'bpsl_plugin_options', 'mscj_member_label' );
register_setting( 'bpsl_plugin_options', 'mscj_group_label' );
register_setting( 'bpsl_plugin_options', 'ms_icon' );
}

function bpsl_plugin_options() {
	
		if (!current_user_can('manage_options'))  {
 wp_die( __('You do not have sufficient permissions to access this page.') );

}

 if ( !empty( $_GET['settings-updated'] ) ) : ?>

        <div id="message" class="updated">

          <p><strong><?php _e('Buddypress Social Settings have been saved.' ); ?></strong></p>

        </div>

      <?php endif; ?>

<?php 
add_action('bp_init', 'field_xprofile_twitter');

function field_xprofile_twitter()
{

   global $bp;
   $xfield_args =  array (
           field_group_id  => 1,
           name            => 'Twitterss',
           can_delete      => false,
           field_order     => 1,
           is_required     => false,
           type            => 'textbox'
    );

   xprofile_insert_field( $xfield_args );
}
?>

<div class="wrap">

<h2><?php _e('BuddyPress Social link Settings', 'bpfbcj') ?></h2>

<h3><?php _e('Member', 'bpfbcj') ?></h3>

<p><strong>NOTE :</strong><?php _e(' The plugin uses Buddypress XProfile Fields and requires you to fill the name of "Mirror Profile Field Title" below the same as your custom Profile Field Title. Both titles must be same for working accordingly this functionality  - Please read the <a href="http://wordpress.org/extend/plugins/buddypress-social-icons/installation/" target="_blank" title="Opens in a new tab">plugin installation instructions</a> if you are not sure what to do.', 'bpfbcj') ?></p>



<form method="post" action="<?php echo admin_url('options.php');?>">
<?php  admin_url(); ?>
<?php wp_nonce_field('update-options'); ?>

<hr></hr>

<table class="form-table">

	<tr valign="top">
		<th scope="row"><b>Facebook Users</b></th>
		<td>
		
        <input type="checkbox" name="fbcj-members" class="fb_check" value="1" <?php if (get_option('fbcj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their Facebook button on their profile page.

      	</td>
	</tr>

<tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="fb_text" id="fb_tt" name="fbcj_member_label" value="<?php echo get_option('fbcj_member_label') ?>"/><?php if ( get_option('fbcj-members') == '' ) {?><?php }?>
	
                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
    <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="fb_icon" value="fb_icon1" <?php if(get_option('fb_icon')=='fb_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/fb1.png" alt="" >
		 <input type="radio" name="fb_icon" value="fb_icon2" <?php if(get_option('fb_icon')=='fb_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ );?>/img/fb2.jpg" alt="" >
		 <input type="radio" name="fb_icon" value="fb_icon3" <?php if(get_option('fb_icon')=='fb_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/fb3.png" alt="" >
		 <input type="radio" name="fb_icon" value="fb_icon4" <?php if(get_option('fb_icon')=='fb_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/fb4.gif" alt="" >
		     
       </td>
    
    </tr>

</table>

<hr>

<!--
=================================== Twitter user ===================================
-->



<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Twitter users</b></th>
		<td>

        <input type="checkbox" class="tw_check" name="twcj-members" value="1" <?php if (get_option('twcj-members')==1) echo 'checked="checked"'; ?>/>
			
        Let your members display their Twitter button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="tw_text" name="twcj_member_label" value="<?php echo get_option('twcj_member_label') ?>"/><?php if ( get_option('twcj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="tw_icon" value="tw_icon1" <?php if(get_option('tw_icon')=='tw_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ );?>img/twitter1.png" alt="" >
		 <input type="radio" name="tw_icon" value="tw_icon2" <?php if(get_option('tw_icon')=='tw_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/twitter2.png" alt="" >
		 <input type="radio" name="tw_icon" value="tw_icon3" <?php if(get_option('tw_icon')=='tw_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/twitter3.png" alt="" >
		 <input type="radio" name="tw_icon" value="tw_icon4" <?php if(get_option('tw_icon')=='tw_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/twitter4.png" alt="" >
		     
       </td>
    
    </tr>

</table>
<hr>

<!-- 
=========================================================
========================================================
Google User 
========================================================
========================================================
-->
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Google Plus Users</b></th>
		<td>

        <input type="checkbox" class="gp_check" name="gpcj-members" value="1" <?php if (get_option('gpcj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their Google Plus button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="gp_text" <?php if ( get_option('gpcj-members') == '' ) {?>disabled="disabled"<?php }?> name="gpcj_member_label" value="<?php echo get_option('gpcj_member_label') ?>"/><?php if ( get_option('gpcj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url();?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="gp_icon" value="gp_icon1" <?php if(get_option('gp_icon')=='gp_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/google-plus1.png" alt="" >
		 <input type="radio" name="gp_icon" value="gp_icon2" <?php if(get_option('gp_icon')=='gp_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/google-plus2.png" alt="" >
		 <input type="radio" name="gp_icon" value="gp_icon3" <?php if(get_option('gp_icon')=='gp_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/google-plus3.png" alt="" >
		 <input type="radio" name="gp_icon" value="gp_icon4" <?php if(get_option('gp_icon')=='gp_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/google-plus4.png" alt="" >
		     
       </td>
    
    </tr>

</table>
<hr>

<?php // groups admin options ?>

<!-- 
=========================================================
========================================================
Pinterest plus User 
========================================================
========================================================
-->

<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Pinterest Members</b></th>
		<td>

        <input type="checkbox" class="pt_check" name="ptcj-members" value="1" <?php if (get_option('ptcj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their Pinterest button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="pt_text" name="ptcj_member_label" value="<?php echo get_option('ptcj_member_label') ?>"/><?php if ( get_option('ptcj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="pt_icon" value="pt_icon1" <?php if(get_option('pt_icon')=='pt_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/pinterest1.png" alt="" >
		 <input type="radio" name="pt_icon" value="pt_icon2" <?php if(get_option('pt_icon')=='pt_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/pinterest2.png" alt="" >
		 <input type="radio" name="pt_icon" value="pt_icon3" <?php if(get_option('pt_icon')=='pt_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/pinterest3.png" alt="" >
		 <input type="radio" name="pt_icon" value="pt_icon4" <?php if(get_option('pt_icon')=='pt_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/pinterest4.png" alt="" >
		     
       </td>
    
    </tr>

</table>
<hr>
<!-- 
=========================================================
========================================================
Linked In Users 
========================================================
========================================================
-->
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>LinkedIn Members</b></th>
		<td>

        <input type="checkbox" class="li_check" name="licj-members" value="1" <?php if (get_option('licj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their LinkedIn button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="li_text" name="licj_member_label" value="<?php echo get_option('licj_member_label') ?>"/><?php if ( get_option('licj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="li_icon" value="li_icon1" <?php if(get_option('li_icon')=='li_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/linkedin1.png" alt="" >
		 <input type="radio" name="li_icon" value="li_icon2" <?php if(get_option('li_icon')=='li_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/linkedin2.png" alt="" >
		 <input type="radio" name="li_icon" value="li_icon3" <?php if(get_option('li_icon')=='li_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/linkedin3.png" alt="" >
		 <input type="radio" name="li_icon" value="li_icon4" <?php if(get_option('li_icon')=='li_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/linkedin4.png" alt="" >
		     
       </td>
    
    </tr>

</table>

<hr>
<!-- 
=========================================================
========================================================
Tumblr In Users 
========================================================
========================================================
-->
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Tumblr Members</b></th>
		<td>

        <input type="checkbox" class="tm_check" name="tmcj-members" value="1" <?php if (get_option('tmcj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their Tumblr button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="tm_text" name="tmcj_member_label" value="<?php echo get_option('tmcj_member_label') ?>"/><?php if ( get_option('tmcj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
    
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="tm_icon" value="tm_icon1" <?php if(get_option('tm_icon')=='tm_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/tumblr1.png" alt="" >
		 <input type="radio" name="tm_icon" value="tm_icon2" <?php if(get_option('tm_icon')=='tm_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/tumblr2.png" alt="" >
		 <input type="radio" name="tm_icon" value="tm_icon3" <?php if(get_option('tm_icon')=='tm_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/tumblr3.png" alt="" >
		 <input type="radio" name="tm_icon" value="tm_icon4" <?php if(get_option('tm_icon')=='tm_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/tumblr4.png" alt="" >
		     
       </td>
    
    </tr>

</table>


<hr>
<!-- 
=========================================================
========================================================
Instagram In Users 
========================================================
========================================================
-->
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Instagram Members</b></th>
		<td>

        <input type="checkbox" class="in_check" name="incj-members" value="1" <?php if (get_option('incj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their Instagram button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="in_text" name="incj_member_label" value="<?php echo get_option('incj_member_label') ?>"/><?php if ( get_option('incj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
    
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="in_icon" value="in_icon1" <?php if(get_option('in_icon')=='in_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/instagram1.png" alt="" >
		 <input type="radio" name="in_icon" value="in_icon2" <?php if(get_option('in_icon')=='in_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/instagram2.png" alt="" >
		 <input type="radio" name="in_icon" value="in_icon3" <?php if(get_option('in_icon')=='in_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/instagram3.png" alt="" >
		 <input type="radio" name="in_icon" value="in_icon4" <?php if(get_option('in_icon')=='in_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/instagram4.png" alt="" >
		     
       </td>
    
    </tr>

</table>

<hr>
<!-- 
=========================================================
========================================================
Flickr In Users 
========================================================
========================================================
-->
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Flickr Members</b></th>
		<td>

        <input type="checkbox" class="fl_check" name="flcj-members" value="1" <?php if (get_option('flcj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their Flickr button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

      <td>

        <input type="text" class="fl_text" name="flcj_member_label" value="<?php echo get_option('flcj_member_label') ?>"/><?php if ( get_option('flcj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
    
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="fl_icon" value="fl_icon1" <?php if(get_option('fl_icon')=='fl_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/flickr1.png" alt="" >
		 <input type="radio" name="fl_icon" value="fl_icon2" <?php if(get_option('fl_icon')=='fl_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/flickr2.png" alt="" >
		 <input type="radio" name="fl_icon" value="fl_icon3" <?php if(get_option('fl_icon')=='fl_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/flickr3.png" alt="" >
		 <input type="radio" name="fl_icon" value="fl_icon4" <?php if(get_option('fl_icon')=='fl_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/flickr4.png" alt="" >
		     
       </td>
    
    </tr>

</table>

<hr>
<!-- 
=========================================================
========================================================
Youtube In Users 
========================================================
========================================================
-->
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Youtube Members</b></th>
		<td>

        <input type="checkbox" class="yt_check" name="ytcj-members" value="1" <?php if (get_option('ytcj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their Youtube button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="yt_text" name="ytcj_member_label" value="<?php echo get_option('ytcj_member_label') ?>"/><?php if ( get_option('ytcj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
    
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="yt_icon" value="yt_icon1" <?php if(get_option('yt_icon')=='yt_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/youtube1.png" alt="" >
		 <input type="radio" name="yt_icon" value="yt_icon2" <?php if(get_option('yt_icon')=='yt_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/youtube2.png" alt="" >
		 <input type="radio" name="yt_icon" value="yt_icon3" <?php if(get_option('yt_icon')=='yt_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/youtube3.png" alt="" >
		 <input type="radio" name="yt_icon" value="yt_icon4" <?php if(get_option('yt_icon')=='yt_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/youtube4.png" alt="" >
		     
       </td>
    
    </tr>

</table>

<hr>
<!-- 
=========================================================
========================================================
Myspace In Users 
========================================================
========================================================
-->
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Myspace Members</b></th>
		<td>

        <input type="checkbox" class="ms_check" name="mscj-members" value="1" <?php if (get_option('mscj-members')==1) echo 'checked="checked"'; ?>/>

        Let your members display their Myspace button on their profile page.

      	</td>
	</tr>



  <tr valign="top">

    <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>

                <td>

        <input type="text" class="ms_text" name="mscj_member_label" value="<?php echo get_option('mscj_member_label') ?>"/><?php if ( get_option('mscj-members') == '' ) {?><?php }?>

                <p><colored-text style="color: green;"></colored-text> Visit <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo admin_url(); ?>admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>

      </td>

    </tr>
     <tr valign="top">
       <th scope="row">Select Icon</th>
       <td>
        <input type="radio" name="ms_icon" value="ms_icon1" <?php if(get_option('ms_icon')=='ms_icon1') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/myspace1.png" alt="" >
		 <input type="radio" name="ms_icon" value="ms_icon2" <?php if(get_option('ms_icon')=='ms_icon2') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/myspace2.png" alt="" >
		 <input type="radio" name="ms_icon" value="ms_icon3" <?php if(get_option('ms_icon')=='ms_icon3') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/myspace3.png" alt="" >
		 <input type="radio" name="ms_icon" value="ms_icon4" <?php if(get_option('ms_icon')=='ms_icon4') {echo "checked=checked";} ?>><img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/myspace4.png" alt="" >
		     
       </td>
    
    </tr>

</table>

<input type="hidden" name="action" value="update" />

<input type="hidden" name="page_options" value="hidden-members,fb_icon,tw_icon,gp_icon,pt_icon,li_icon,tm_icon,in_icon,fl_icon,yt_icon,ms_icon,fbcj-members,twcj-members,gpcj-members,ptcj-members,licj-members,tmcj-members,incj-members,flcj-members,ytcj-members,mscj-members,fbcj-groups,twcj-groups,gpcj-groups,ptcj-groups,licj-groups,tmcj-groups,incj-groups,flcj-groups,ytcj-groups,mscj-groups,fbcj_member_label,twcj_member_label,gpcj_member_label,ptcj_member_label,licj_member_label,tmcj_member_label,incj_member_label,flcj_member_label,ytcj_member_label,mscj_member_label,fbcj_group_label,twcj_group_label,gpcj_group_label,ptcj_group_label,licj_group_label,tmcj_group_label,incj_group_label,flcj_group_label,ytcj_group_label,mscj_group_label" />

<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Settings') ?>" /></p>

</form>
<p>If you enjoy the plugin and would like to keep up to speed on future features and updates check out <a href="http://vivacityinfotech.net/" target="_blank">Vivacity Infotech</a></p>
</div>
<?php

}

?>