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
add_action('wp_ajax_algoon_save_logo','algoon_save_logo');
function algoon_save_logo() {
	$logo_url = $_POST['logourl'];
	$results = add_option( 'algoon_logo', $logo_url );
	if ($results) {
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
			<input id="upload_logo" type="text" size="36" name="upload_logo" value="<?php echo get_option('algoon_logo'); ?>" />
			<input id="upload_logo_button" type="button" class="btn" value="Select Image" />
			<br/>
			<input id="save_logo" type="button" value="Set Logo" />
		</div>
		<script>
		jQuery(function(){
			jQuery('#upload_logo_button').click(function() {
				formfield = jQuery('#uploadlogoe').attr('name');
				tb_show('', 'media-upload.php?type=image&TB_iframe=true');
				return false;
			});

			window.send_to_editor = function(html) {
				imgurl = jQuery('img',html).attr('src');
				jQuery('#upload_logo').val(imgurl);
				tb_remove();
			}

			jQuery('#save_logo').click(function(event) {
				var url = jQuery('#upload_logo').val();
				
				jQuery.post(ajaxurl, {
					'action': 'algoon_save_logo',
					'logourl': url
				}, function(data, textStatus, xhr) {
					console.log(data);
				});
				
			});
		});

		</script>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h3>Sosial Media</h3>
		</div>
	</div>

</div>

<?php 
} // /End algoon_theme_settings()