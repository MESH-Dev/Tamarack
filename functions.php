<?php

include('functions/start.php');

include('functions/clean.php');

include('functions/widgets.php');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '...<br/><br/><a class="moretag" href="'. get_permalink($post->ID) . '"> Read more <i class="fa fa-angle-double-right"></i></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function wpdocs_custom_excerpt_length( $length ) {
    if (is_page('Resource Library')) {
        return 20;
    } else {
        return 50;
    }

}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}


//Custon wp-admin logo
function my_custom_login_logo() {
  echo '<style type="text/css">
		        h1 a {
		          margin-bottom: 20px !important;
		          background-image:url('.get_bloginfo('template_directory').'/img/tam_white-2.png) !important; }
		    </style>';
}

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/style-login.css' );
    wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/style-login.js', array('jquery') );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function dr_email_login_authenticate( $user, $username, $password ) {
	if ( is_a( $user, 'WP_User' ) )
		return $user;

	if ( !empty( $username ) ) {
		$username = str_replace( '&', '&amp;', stripslashes( $username ) );
		$user = get_user_by( 'email', $username );
		if ( isset( $user, $user->user_login, $user->user_status ) && 0 == (int) $user->user_status )
			$username = $user->user_login;
	}

	return wp_authenticate_username_password( null, $username, $password );
}
remove_filter( 'authenticate', 'wp_authenticate_username_password', 20, 3 );
add_filter( 'authenticate', 'dr_email_login_authenticate', 20, 3 );

/**
 * Add compatibility for WPMU 2.9.1 and WPMU 2.9.2, props r-a-y
 */
if ( !function_exists( 'is_super_admin' ) ) :
	function get_super_admins() {
		global $super_admins;

		if ( isset( $super_admins ) )
			return $super_admins;
		else
			return get_site_option( 'site_admins', array( 'admin' ) );
	}

	function is_super_admin( $user_id = false ) {
		if ( ! $user_id ) {
			$current_user = wp_get_current_user();
			$user_id = ! empty( $current_user ) ? $current_user->id : 0;
		}

		if ( ! $user_id )
			return false;

		$user = new WP_User( $user_id );

		if ( is_multisite() ) {
			$super_admins = get_super_admins();
			if ( is_array( $super_admins ) && in_array( $user->user_login, $super_admins ) )
				return true;
		} else {
			if ( $user->has_cap( 'delete_users' ) )
				return true;
		}

		return false;
	}
endif;

/**
 * Modify the string on the login page to prompt for username or email address
 */
function username_or_email_login() {
	if ( 'wp-login.php' != basename( $_SERVER['SCRIPT_NAME'] ) )
		return;

	?><script type="text/javascript">
	// Form Label
	if ( document.getElementById('loginform') )
		document.getElementById('loginform').childNodes[1].childNodes[1].childNodes[0].nodeValue = '<?php echo esc_js( __( 'Username or Email', 'email-login' ) ); ?>';

	// Error Messages
	if ( document.getElementById('login_error') )
		document.getElementById('login_error').innerHTML = document.getElementById('login_error').innerHTML.replace( '<?php echo esc_js( __( 'username' ) ); ?>', '<?php echo esc_js( __( 'Username or Email' , 'email-login' ) ); ?>' );
	</script><?php
}
add_action( 'login_form', 'username_or_email_login' );

/**
 * Redirect non-admins to the homepage after logging into the site.
 *
 * @since 	1.0
 */

function acme_login_redirect( $redirect_to, $request, $user  ) {
	return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? admin_url() : site_url("/creative-network-profile");
}
add_filter( 'login_redirect', 'acme_login_redirect', 10, 3 );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M' );
@ini_set( 'max_execution_time', '300' );

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

add_action( 'init', 'blockusers_init' );
function blockusers_init() {
if ( is_admin() && ! current_user_can( 'administrator' ) &&
! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
wp_redirect( home_url() );
exit;
}
}

?>
