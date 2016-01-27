<?php

include('functions/start.php');

include('functions/clean.php');

include('functions/widgets.php');

//Custon wp-admin logo
function my_custom_login_logo() {
  echo '<style type="text/css">
		        h1 a {
		          background-size: 227px 85px !important;
		          margin-bottom: 20px !important;
		          background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important; }
		    </style>
        <script src="https://use.typekit.net/ofd3xas.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>';
}

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/style-login.css' );
    wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/style-login.js', array('jquery') );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

?>
