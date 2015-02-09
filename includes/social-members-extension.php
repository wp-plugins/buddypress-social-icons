<?php
// $show_fbcj_in_header - Display the facebook widget using our xprofile data and return it in the members header

function show_fbcj_in_header()
{
	// Get all the options
 $fbcj_members = get_option('fbcj-members');
 $fb_img = get_option('fb_icon');
 $tw_img = get_option('tw_icon');
 $gp_img = get_option('gp_icon');
 $pt_img = get_option('pt_icon');
 $li_img = get_option('li_icon');
 $tm_img = get_option('tm_icon');
 $fl_img = get_option('fl_icon');
 $in_img = get_option('in_icon');
 $yt_img = get_option('yt_icon');
 $ms_img = get_option('ms_icon');
  
 $fbcj_username= xprofile_get_field_data(get_option('fbcj_member_label')); 
 $twcj_username= xprofile_get_field_data(get_option('twcj_member_label'));
 $gpcj_username= xprofile_get_field_data(get_option('gpcj_member_label'));
 $ptcj_username= xprofile_get_field_data(get_option('ptcj_member_label'));
 $licj_username= xprofile_get_field_data(get_option('licj_member_label')); 
 $tmcj_username= xprofile_get_field_data(get_option('tmcj_member_label'));
 $incj_username= xprofile_get_field_data(get_option('incj_member_label'));
 $flcj_username= xprofile_get_field_data(get_option('flcj_member_label'));
 $ytcj_username= xprofile_get_field_data(get_option('ytcj_member_label')); 
 $mscj_username= xprofile_get_field_data(get_option('mscj_member_label'));


 if($fb_img=='fb_icon1') { $img_url= plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/fb1.png';}
 if($fb_img=='fb_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/fb2.jpg';}
 if($fb_img=='fb_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/fb3.png';}
 if($fb_img=='fb_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/fb4.gif';}

 if ( $fbcj_username != ""  ) 
 { 
  // check to see the facebook field has data

 ?>

 <a class="bp-fb-profile" href="https://www.facebook.com/<?php echo $fbcj_username; ?>"> <img src="<?php echo $img_url; ?>"/></a>
 
 <?php
 }
 	if($tw_img=='tw_icon1') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/twitter1.png';}
	if($tw_img=='tw_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/twitter1.png';}
	if($tw_img=='tw_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/twitter1.png';}
	if($tw_img=='tw_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/twitter1.png';}

	if ( $twcj_username != "" ) 

	{ 
	// check to see the twitter field has data
?>
	<a class="bp-fb-profile" href="https://twitter.com/<?php echo $twcj_username; ?>" class="twitter-follow-button" data-show-count="<?php bp_twitter_member_count(); ?>" <?php if (get_option('twittercj-button-size')==1) echo 'data-size="large""'; ?>><img src="<?php echo $img_url; ?>"/></a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php
	}
	if($gp_img=='gp_icon1') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/google-plus1.png';}
	if($gp_img=='gp_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/google-plus2.png';}
	if($gp_img=='gp_icon3') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/google-plus3.png';}
	if($gp_img=='gp_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/google-plus4.png';}

	if($gpcj_username != "" )
	{
?>
	<a class="bp-fb-profile" href="https://plus.google.com/<?php echo $gpcj_username; ?>" ><img src="<?php echo $img_url; ?>"/></a>
	<?
		}
		if($pt_img=='pt_icon1') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/pinterest1.png';}
		if($pt_img=='pt_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/pinterest2.png';}
		if($pt_img=='pt_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/pinterest3.png';}
		if($pt_img=='pt_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/pinterest4.png';}

		if($ptcj_username != "" )
		{
	?>
	<a class="bp-fb-profile" href="https://in.pinterest.com/<?php echo $ptcj_username; ?>" ><img src="<?php echo $img_url; ?>" /></a>
	<?
	}
	if($li_img=='li_icon1') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/linkedin1.png';}
	if($li_img=='li_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/linkedin2.png';}
	if($li_img=='li_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/linkedin3.png';}
	if($li_img=='li_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/linkedin4.png';}

	if($licj_username != "" )
	{
	?>
	<a class="bp-fb-profile" href="https://in.linkedin.com/<?php echo $licj_username; ?>" ><img src="<?php echo $img_url; ?>"/></a>
	<?
	}
	if($tm_img=='tm_icon1') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/tumblr1.png';}
	if($tm_img=='tm_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/tumblr2.png';}
	if($tm_img=='tm_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/tumblr3.png';}
	if($tm_img=='tm_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/tumblr4.png';}

	if($tmcj_username != "" )
	{
	?>
	<a class="bp-fb-profile" href="https://www.tumblr.com/<?php echo $tmcj_username; ?>"><img src="<?php echo $img_url; ?>"/></a>
	<?
	}
	if($in_img=='in_icon1') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/instagram1.png';}
	if($in_img=='in_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/instagram2.png';}
	if($in_img=='in_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/instagram3.png';}
	if($in_img=='in_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/instagram4.png';}

	if($incj_username != "" )
	{
	?>
	<a class="bp-fb-profile" href="http://instagram.com/<?php echo $incj_username; ?>"><img src="<?php echo $img_url; ?>"/></a>
	<?
	}
	if($fl_img=='fl_icon1') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/flickr1.png';}
	if($fl_img=='fl_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/flickr2.png';}
	if($fl_img=='fl_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/flickr3.png';}
	if($fl_img=='fl_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/flickr4.png';}

	if($flcj_username != "" )
	{
	?>
	<a class="bp-fb-profile" href="https://www.flickr.com/<?php echo $flcj_username; ?>" ><img src="<?php echo $img_url; ?>"/></a>
	<?
	}
	if($yt_img=='yt_icon1') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/youtube1.png';}
	if($yt_img=='yt_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/youtube2.png';}
	if($yt_img=='yt_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/youtube3.png';}
	if($yt_img=='yt_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/youtube4.png';}

	if($ytcj_username != "" )
	{
	?>
	<a class="bp-fb-profile" href="http://www.youtube.com/<?php echo $ytcj_username; ?>" ><img src="<?php echo $img_url; ?>"/></a>
	<?
	}
	if($ms_img=='ms_icon1') {  $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/myspace1.png';}
	if($ms_img=='ms_icon2') { $img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/myspace2.png';}
	if($ms_img=='ms_icon3') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/myspace3.png';}
	if($ms_img=='ms_icon4') {$img_url=plugin_dir_url( 'buddypress-social-icons').'buddypress-social-icons/img/myspace4.png';}

	if($mscj_username != "" )
	{
	?>
	<a class="bp-fb-profile" href="https://myspace.com/<?php echo $mscj_username; ?>"><img src="<?php echo $img_url; ?>"/></a>
	<?
	}

}
	add_filter( 'bp_before_member_header_meta', 'show_fbcj_in_header' );


	function bp_fb_member_count() 
		{

  		if (get_option('fbcj-count')==1) 
  		{
	    	echo 'true';
		}
		else 
		{
			echo 'false';
		}

		}
	function bp_twitter_member_count() 
	{
		if (get_option('twittercj-count')==1) 
		{
			echo 'true';
		}
		else 
		{
			echo 'false';
		}
	}