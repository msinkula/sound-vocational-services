<?php

/*  
Theme Name: Sound Vocational Services
Description: Built from Mike's 960 Grid Wireframe Prototype Theme.
Version: 1
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/


// Link to admin styles
add_editor_style( 'admin.css' );

// Register Sidebar
register_sidebars(1, array(
	'before_widget' => '<div id="%1$s" class="widget-items %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>'
	));
	
// Register Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Disable Post Categories
function wpse120418_unregister_categories() {
    register_taxonomy( 'category', array() );
}
add_action( 'init', 'wpse120418_unregister_categories' );

// Enable Page Excerpts
add_post_type_support( 'page', 'excerpt' );

// Enable Featured Image
add_theme_support( 'post-thumbnails' );

// add the meta box for Staff Members
function admin_init(){
	add_meta_box("staff_member_parent_id", "Staff Member Parent ID", "set_staff_member_parent_id", "staff-member", "normal", "low");
}
	add_action("admin_init", "admin_init");
	function set_staff_member_parent_id() { // set the parent ID for Staff Member profiles
		global $post;
		$custom = get_post_custom($post->ID);
		$parent_id = $custom['parent_id'][0];
		echo '<p>The number 70 below specifies that all Staff Members will be in the About Us > Team section of the website. DO NOT CHANGE IT!</p>'; // message to user to not change this fucking thing
		echo '<input type="text" id="parent_id" name="parent_id" value="70" />'; // creates the value for the about us section
		echo '<input type="hidden" name="parent_id_noncename" value="' . wp_create_nonce(__FILE__) . '" />'; // create a custom nonce for submit verification later
		
	}
	function save_staff_member_parent_id($post_id) { // save the meta data
	global $post;
		if (!wp_verify_nonce($_POST['parent_id_noncename'],__FILE__)) return $post_id;
		if (isset($_POST['parent_id']) && ($_POST['post_type'] == "staff-member")) {
			$data = $_POST['parent_id'];
			update_post_meta($post_id, 'parent_id', $data);
		}
	}
	add_action("save_post", "save_staff_member_parent_id");
// end add the meta box for Staff Members

?>