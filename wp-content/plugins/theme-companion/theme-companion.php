<?php
 /**
  * Plugin Name: Theme Companion
  * Plugin URI:  https://example.com/plugins/the-basics/
  * Description: Companion plugion the theme.
  * Version:     1.0
  * Author:      Sabbir Mia
  * Author URI:  https://sabbirmia.com/
  * License:     GPL v2 or later
  * Text Domain: companion
  * Domain Path: /languages
  */
 function companion_loaded_textdomain() {
  load_plugin_textdomain( 'companion', false, plugin_dir_url( __FILE__ ) . 'languages' );
 }
 add_action( 'plugins_loaded', 'companion_loaded_textdomain' );

 function companion_add_metafield() {
  add_meta_box( 'checkbox_metafield', __( 'Featured Post', 'companion' ), 'display_checkbox_metafield', 'post','side' );
 }
 add_action( 'add_meta_boxes', 'companion_add_metafield' );

 function display_checkbox_metafield( $post ) {
  $value = get_post_meta( $post->ID, 'meta_data', true );
  $checked = '';
  if($value == 1){
    $checked = 'checked';
  }
 ?>
	<label for="meta_field">Featured</label>
	<input type="checkbox" id='meta_field' name="meta_field" value="1" <?php echo $checked; ?> />
	<?php
 }

 function companion_save_post($post_id){
	$save_meta_value = isset($_POST['meta_field'])?$_POST['meta_field']:0;
	update_post_meta($post_id,'meta_data',$save_meta_value);
 }
 add_action('save_post','companion_save_post');