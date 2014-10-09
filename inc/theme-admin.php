<?php

add_action("admin_menu", "setup_algoon_admin_menus");
function setup_algoon_admin_menus() {

	add_menu_page('Algoon', 'Algoon Themes', 'manage_options', 
        'algoon_admin_menu', 'algoon_theme_settings');

}


/**
 * ..............
 */
add_action('admin_head', 'algoon_admin_style');
function algoon_admin_style() {
	echo "<link rel='stylesheet' href='".get_template_directory_uri()."/styles/admin.css' type='text/css' media='all' />";
}

add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('jquery');
}
 
function my_admin_styles() {
	wp_enqueue_style('thickbox');
}

/**
 * ....
 * AJAX Call save logo to metadata
 */
add_action('wp_ajax_algoon_save_settings','algoon_save_settings');
function algoon_save_settings() {
	$logo_url = $_POST['logourl'];
	$sosmed_1 = $_POST['sosmedurl1'];
	$sosmed_2 = $_POST['sosmedurl2'];
	$sosmed_3 = $_POST['sosmedurl3'];
	
	$logo = add_option( 'algoon_logo', $logo_url );
	$sm1 = add_option( 'algoon_sosmed_1', $sosmed_1 );
	$sm2 = add_option( 'algoon_sosmed_2', $sosmed_2 );
	$sm3 = add_option( 'algoon_sosmed_3', $sosmed_3 );

	if ($logo && $sm1 && $sm2 && $sm3) {
		echo 'success';
	} else {
		echo "fail";
	}
	die();
}
 
/**
 * 
 */
function algoon_theme_settings() {
?>

<div class="wrap container">
	<div class="row">		
		<div class="col-md-12">
			<?php screen_icon('themes'); ?> <h2>Algoon Settings</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h3>Logo</h3>
			<input id="upload_logo" type="text" size="36" class="upload" name="upload_logo" value="<?php echo get_option('algoon_logo'); ?>" />
			<input id="upload_logo_button" type="button" class="upload-button" value="Select Image" />
			<br/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h3>Sosial Media</h3>
		</div>
		<div class="col-md-12">
			<input id="upload_sosmed_1" type="text" class="upload" name="upload_sosmed_1" value="<?php echo get_option('algoon_sosmed_1'); ?>" />
			<input id="upload_sosmed_1_button" type="button" class="upload-button" value="Select Image" />
			<br/>
		</div>
		<div class="col-md-12">
			<input id="upload_sosmed_2" type="text" class="upload" name="upload_sosmed_2" value="<?php echo get_option('algoon_sosmed_2'); ?>" />
			<input id="upload_sosmed_2_button" type="button" class="upload-button" value="Select Image" />
			<br/>
		</div>
		<div class="col-md-12">
			<input id="upload_sosmed_3" type="text" class="upload" name="upload_sosmed_3" value="<?php echo get_option('algoon_sosmed_3'); ?>" />
			<input id="upload_sosmed_3_button" type="button" class="upload-button" value="Select Image" />
			<br/>
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-12">
			<input type="button" class="save-settings" value="Save">
		</div>
	</div>

</div>

<script>
jQuery(function(){

	var uploadID = '';

	jQuery('.upload-button').click(function() {
		uploadID	= jQuery(this).prev('input');
		formfield	= jQuery('.upload').attr('name');
		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		return false;
	});

	window.send_to_editor = function(html) {
		imgurl = jQuery('img',html).attr('src');
		uploadID.val(imgurl);
		tb_remove();
	}

	jQuery('.save-settings').click(function(event) {
		var url = jQuery('#upload_logo').val(),
			sosmed1 = jQuery('#upload_sosmed_1').val(),
			sosmed2 = jQuery('#upload_sosmed_2').val(),
			sosmed3 = jQuery('#upload_sosmed_3').val();
		
		jQuery.post(ajaxurl, {
			'action': 'algoon_save_settings',
			'logourl': url,
			'sosmedurl1': sosmed1,
			'sosmedurl2': sosmed2,
			'sosmedurl3': sosmed3
		}, function(data, textStatus, xhr) {
			console.log(data);
		});
		
	});
});

</script>

<?php 
} // /End algoon_theme_settings()