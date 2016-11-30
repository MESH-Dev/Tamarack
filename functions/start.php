<?php

//enqueue scripts and styles *use production assets. Dev assets are located in  /css and /js
function loadup_scripts() {
	//wp_enqueue_script( 'wfi-js', get_template_directory_uri().'/js/waitforimages.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri().'/js/mesh.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'height-js', get_template_directory_uri().'/js/jquery.matchHeight-min.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'loadup_scripts' );

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('background-fullscreen', 1800, 1200, true);
add_image_size('directorylisting', 600, 600, true);
add_image_size('bloglisting', 800, 600, true);
// add_image_size('short-banner', 1800, 800, true);

// add_image_size('large', 700, '', true); // Large Thumbnail
// add_image_size('medium', 250, '', true); // Medium Thumbnail
// add_image_size('small', 120, '', true); // Small Thumbnail
// add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

//Name the post

function create_post_name( $post_id ){
	if ( ! wp_is_post_revision( $post_id ) ){
		if ( get_post_type( get_the_ID() ) == 'classes' ) {

			// unhook this function so it doesn't loop infinitely
			remove_action('save_post', 'create_post_name');

			// If this is just a revision, don't send the email.

			$semester = get_the_terms( $post_id , 'semester' );
			$year = get_the_terms( $post_id, 'theyear' );
			$school = get_the_terms( $post_id, 'school' );

		  	$my_post = array(
		      'ID'           => $post_id,
		      'post_title'   => $school[0]->name . " - " . $semester[0]->name . " - " . $year[0]->name,
		  	);

			// Update the post into the database
			wp_update_post( $my_post );

			// re-hook this function
			add_action('save_post', 'create_post_name');

		}
	}
}
add_action('save_post', 'create_post_name');

/*
 * WordPress Breadcrumbs
 * author: Dimox
 * version: 2015.09.14
 * license: MIT
*/
function dimox_breadcrumbs() {
	/* === OPTIONS === */
	$text['home']     = 'Home'; // text for the 'Home' link
	$text['category'] = 'Archive by Category "%s"'; // text for a category page
	$text['search']   = 'Search Results for "%s"'; // text for a search results page
	$text['tag']      = 'Posts Tagged "%s"'; // text for a tag page
	$text['author']   = 'Articles Posted by %s'; // text for an author page
	$text['404']      = 'Error 404'; // text for the 404 page
	$text['page']     = 'Page %s'; // text 'Page N'
	$text['cpage']    = 'Comment Page %s'; // text 'Comment Page N'
	$wrap_before    = '<div class="breadcrumbs">'; // the opening wrapper tag
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // the closing wrapper tag
	$sep            = '<i class="fa fa-angle-double-right"></i>'; // separator between crumbs
	$sep_before     = '<span class="sep">'; // tag before separator
	$sep_after      = '</span>'; // tag after separator
	$show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
	$show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$show_current   = 1; // 1 - show current page title, 0 - don't show
	$before         = '<span class="current">'; // tag before the current crumb
	$after          = '</span>'; // tag after the current crumb
	/* === END OF OPTIONS === */
	global $post;
	$home_link      = home_url('/');
	$link_before    = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
	$link_after     = '</span>';
	$link_attr      = ' itemprop="url"';
	$link_in_before = '<span itemprop="title">';
	$link_in_after  = '</span>';
	$link           = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
	$frontpage_id   = get_option('page_on_front');
	$parent_id      = $post->post_parent;
	$sep            = ' ' . $sep_before . $sep . $sep_after . ' ';
	if (is_front_page()) {
		if ($show_on_home) echo $wrap_before . '<a href="' . $home_link . '">' . $text['home'] . '</a>' . $wrap_after;
	} else {
		echo $wrap_before;
		if ($show_home_link) echo sprintf($link, $home_link, $text['home']);
		if ( is_category() ) {
			$cat = get_category(get_query_var('cat'), false);
			if ($cat->parent != 0) {
				$cats = get_category_parents($cat->parent, TRUE, $sep);
				$cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				if ($show_home_link) echo $sep;
				echo $cats;
			}
			if ( get_query_var('paged') ) {
				$cat = $cat->cat_ID;
				echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
			}
		} elseif ( is_search() ) {
			if (have_posts()) {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
			} else {
				if ($show_home_link) echo $sep;
				echo $before . sprintf($text['search'], get_search_query()) . $after;
			}
		} elseif ( is_day() ) {
			if ($show_home_link) echo $sep;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
			echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
			if ($show_current) echo $sep . $before . get_the_time('d') . $after;
		} elseif ( is_month() ) {
			if ($show_home_link) echo $sep;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
			if ($show_current) echo $sep . $before . get_the_time('F') . $after;
		} elseif ( is_year() ) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . get_the_time('Y') . $after;
		} elseif ( is_single() && !is_attachment() ) {
			if ($show_home_link) echo $sep;
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				if ($slug['slug'] == 'marketplace-listing') {
					$link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . 'Made in West Virginia' . $link_in_after . '</a>' . $link_after;
					$s = 'made-in-west-virginia';
				}
				elseif ($slug['slug'] == 'directory-listing') {
					$link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . 'Creative Network' . $link_in_after . '</a>' . $link_after;
					$s = 'creative-network';
				}
				elseif ($slug['slug'] == 'trail') {
					$link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . 'Visit Art Spaces' . $link_in_after . '</a>' . $link_after;
					$s = 'visit-art-spaces';
				}
				else {

				}
				printf($link, $home_link . $s, $post_type->labels->singular_name);
				if ($show_current) echo $sep . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, $sep);
				if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				echo $cats;
				if ( get_query_var('cpage') ) {
					echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
				} else {
					if ($show_current) echo $before . get_the_title() . $after;
				}
			}
		// custom post type
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());

			if ( get_query_var('paged') ) {
				echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . $post_type->label . $after;
			}
		} elseif ( is_attachment() ) {
			if ($show_home_link) echo $sep;
			$parent = get_post($parent_id);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			if ($cat) {
				$cats = get_category_parents($cat, TRUE, $sep);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				echo $cats;
			}
			printf($link, get_permalink($parent), $parent->post_title);
			if ($show_current) echo $sep . $before . get_the_title() . $after;
		} elseif ( is_page() && !$parent_id ) {
			if ($show_current) echo $sep . $before . get_the_title() . $after;
		} elseif ( is_page() && $parent_id ) {
			if ($show_home_link) echo $sep;
			if ($parent_id != $frontpage_id) {
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					if ($parent_id != $frontpage_id) {
						$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
					}
					$parent_id = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				for ($i = 0; $i < count($breadcrumbs); $i++) {
					echo $breadcrumbs[$i];
					if ($i != count($breadcrumbs)-1) echo $sep;
				}
			}
			if ($show_current) echo $sep . $before . get_the_title() . $after;
		} elseif ( is_tag() ) {
			if ( get_query_var('paged') ) {
				$tag_id = get_queried_object_id();
				$tag = get_tag($tag_id);
				echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
			}
		} elseif ( is_author() ) {
			global $author;
			$author = get_userdata($author);
			if ( get_query_var('paged') ) {
				if ($show_home_link) echo $sep;
				echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
			}
		} elseif ( is_404() ) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . $text['404'] . $after;
		} elseif ( has_post_format() && !is_singular() ) {
			if ($show_home_link) echo $sep;
			echo get_post_format_string( get_post_format() );
		}
		elseif ( is_home() ) {
			if ($show_home_link) echo $sep . "News & Updates";
		}
		echo $wrap_after;
	}
} // end of dimox_breadcrumbs()

add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url() );
  exit();
}

//Register WP Menus
register_nav_menus(
    array(
        'main_nav' => 'Header and breadcrumb trail heirarchy',
        'social_nav' => 'Social menu used throughout',
				'utilities_nav' => 'Utilities nav',
    )
);

// Register Widget Area for the Sidebar
register_sidebar( array(
    'name' => __( 'Primary Widget Area', 'Sidebar' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __( 'Left Footer', 'Sidebar' ),
    'id' => 'left-footer',
    'description' => __( 'The left footer area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __( 'Middle Footer', 'Sidebar' ),
    'id' => 'middle-footer',
    'description' => __( 'The middle area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __( 'Right Footer', 'Sidebar' ),
    'id' => 'right-footer',
    'description' => __( 'The right footer area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );

function one_half( $atts, $content = null ) {
   return '<div class="one_half">';
}

add_shortcode('first_column', 'one_half');

function end_first_column( $atts, $content = null ) {
   return '</div>';
}

add_shortcode('end_first_column', 'end_first_column');
add_shortcode('end_second_column', 'end_second_column');

function end_second_column( $atts, $content = null ) {
   return '</div><div class="clearboth"></div>';
}


function  one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">';
}
add_shortcode('second_column', 'one_half_last');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// registration code for directorylisting post type
	function register_directorylisting_posttype() {
		$labels = array(
			'name' 				=> _x( 'Directory Listings', 'post type general name' ),
			'singular_name'		=> _x( 'Directory Listing', 'post type singular name' ),
			'add_new' 			=> __( 'Add New' ),
			'add_new_item' 		=> __( 'Directory Listing' ),
			'edit_item' 		=> __( 'Directory Listing' ),
			'new_item' 			=> __( 'Directory Listing' ),
			'view_item' 		=> __( 'Directory Listing' ),
			'search_items' 		=> __( 'Directory Listing' ),
			'not_found' 		=> __( 'Directory Listing' ),
			'not_found_in_trash'=> __( 'Directory Listing' ),
			'parent_item_colon' => __( 'Directory Listing' ),
			'menu_name'			=> __( 'Directory Listings' )
		);
		
		$taxonomies = array();

		$supports = array('title','editor','author','thumbnail','excerpt','custom-fields','comments','revisions');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Directory Listing'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'directory-listing', 'with_front' => false ),
			'supports' 			=> $supports,
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'dashicons-groups',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('directorylisting',$post_type_args);
	}
	add_action('init', 'register_directorylisting_posttype');// registration code for marketplacelisting post type
	function register_marketplacelisting_posttype() {
		$labels = array(
			'name' 				=> _x( 'Marketplace Listings', 'post type general name' ),
			'singular_name'		=> _x( 'Marketplace Listing', 'post type singular name' ),
			'add_new' 			=> __( 'Add New' ),
			'add_new_item' 		=> __( 'Marketplace Listing' ),
			'edit_item' 		=> __( 'Marketplace Listing' ),
			'new_item' 			=> __( 'Marketplace Listing' ),
			'view_item' 		=> __( 'Marketplace Listing' ),
			'search_items' 		=> __( 'Marketplace Listing' ),
			'not_found' 		=> __( 'Marketplace Listing' ),
			'not_found_in_trash'=> __( 'Marketplace Listing' ),
			'parent_item_colon' => __( 'Marketplace Listing' ),
			'menu_name'			=> __( 'Marketplace Listings' )
		);
		
		$taxonomies = array();

		$supports = array('title','editor','author','thumbnail','excerpt','custom-fields','comments','revisions');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Marketplace Listing'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'marketplace-listing', 'with_front' => false ),
			'supports' 			=> $supports,
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'dashicons-admin-post',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('marketplacelisting',$post_type_args);
	}
	add_action('init', 'register_marketplacelisting_posttype');// registration code for traillisting post type
	function register_traillisting_posttype() {
		$labels = array(
			'name' 				=> _x( 'Trail Listings', 'post type general name' ),
			'singular_name'		=> _x( 'Trail Listing', 'post type singular name' ),
			'add_new' 			=> __( 'Add New' ),
			'add_new_item' 		=> __( 'Trail Listing' ),
			'edit_item' 		=> __( 'Trail Listing' ),
			'new_item' 			=> __( 'Trail Listing' ),
			'view_item' 		=> __( 'Trail Listing' ),
			'search_items' 		=> __( 'Trail Listing' ),
			'not_found' 		=> __( 'Trail Listing' ),
			'not_found_in_trash'=> __( 'Trail Listing' ),
			'parent_item_colon' => __( 'Trail Listing' ),
			'menu_name'			=> __( 'Trail Listings' )
		);
		
		$taxonomies = array();

		$supports = array('title','editor','author','thumbnail','excerpt','custom-fields','comments','revisions');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Trail Listing'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'trail-listing', 'with_front' => false ),
			'supports' 			=> $supports,
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'dashicons-admin-post',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('traillisting',$post_type_args);
	}
	add_action('init', 'register_traillisting_posttype');// registration code for collection post type
	function register_collection_posttype() {
		$labels = array(
			'name' 				=> _x( 'Collections', 'post type general name' ),
			'singular_name'		=> _x( 'Collection', 'post type singular name' ),
			'add_new' 			=> __( 'Add New' ),
			'add_new_item' 		=> __( 'Collection' ),
			'edit_item' 		=> __( 'Collection' ),
			'new_item' 			=> __( 'Collection' ),
			'view_item' 		=> __( 'Collection' ),
			'search_items' 		=> __( 'Collection' ),
			'not_found' 		=> __( 'Collection' ),
			'not_found_in_trash'=> __( 'Collection' ),
			'parent_item_colon' => __( 'Collection' ),
			'menu_name'			=> __( 'Collections' )
		);
		
		$taxonomies = array();

		$supports = array('title','editor','author','thumbnail','excerpt','custom-fields','comments','revisions');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Collection'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'collection', 'with_front' => false ),
			'supports' 			=> $supports,
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'dashicons-admin-post',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('collection',$post_type_args);
	}
	add_action('init', 'register_collection_posttype');// registration code for trail post type
	function register_trail_posttype() {
		$labels = array(
			'name' 				=> _x( 'Trails', 'post type general name' ),
			'singular_name'		=> _x( 'Trail', 'post type singular name' ),
			'add_new' 			=> __( 'Add New' ),
			'add_new_item' 		=> __( 'Trail' ),
			'edit_item' 		=> __( 'Trail' ),
			'new_item' 			=> __( 'Trail' ),
			'view_item' 		=> __( 'Trail' ),
			'search_items' 		=> __( 'Trail' ),
			'not_found' 		=> __( 'Trail' ),
			'not_found_in_trash'=> __( 'Trail' ),
			'parent_item_colon' => __( 'Trail' ),
			'menu_name'			=> __( 'Trails' )
		);
		
		$taxonomies = array();

		$supports = array('title','editor','author','thumbnail','excerpt','custom-fields','comments','revisions');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Trail'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'trail', 'with_front' => false ),
			'supports' 			=> $supports,
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'dashicons-admin-post',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('trail',$post_type_args);
	}
	add_action('init', 'register_trail_posttype');

	// registration code for resource-library post type
	function register_resource_library_posttype() {
		$labels = array(
			'name' 				=> _x( 'Resource Library Items', 'post type general name' ),
			'singular_name'		=> _x( 'Resource Library Item', 'post type singular name' ),
			'add_new' 			=> __( 'Add New Resource Library Item' ),
			'add_new_item' 		=> __( 'Resource Library Item' ),
			'edit_item' 		=> __( 'Resource Library Item' ),
			'new_item' 			=> __( 'Resource Library Item' ),
			'view_item' 		=> __( 'Resource Library Item' ),
			'search_items' 		=> __( 'Search' ),
			'not_found' 		=> __( 'Resource Library Item' ),
			'not_found_in_trash'=> __( 'Resource Library Item' ),
			'parent_item_colon' => __( 'Resource Library Item' ),
			'menu_name'			=> __( 'Resource Library Items' )
		);
		
		$taxonomies = array();

		$supports = array('title','revisions','page-attributes');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Resource Library Item'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> true,
			'rewrite' 			=> array('slug' => 'resource-library', 'with_front' => false ),
			'supports' 			=> $supports,
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'dashicons-book-alt',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('resource-library',$post_type_args);
	}
	add_action('init', 'register_resource_library_posttype');


	// Register Custom Taxonomy
// function resource_type() {

// 	$labels = array(
// 		'name'                       => _x( 'Resource Types', 'Taxonomy General Name', 'text_domain' ),
// 		'singular_name'              => _x( 'Resource Type', 'Taxonomy Singular Name', 'text_domain' ),
// 		'menu_name'                  => __( 'Resource Type', 'text_domain' ),
// 		'all_items'                  => __( 'All Resource Types', 'text_domain' ),
// 		'parent_item'                => __( 'Parent Resource Type', 'text_domain' ),
// 		'parent_item_colon'          => __( 'Parent Resource Type:', 'text_domain' ),
// 		'new_item_name'              => __( 'New Resource Type', 'text_domain' ),
// 		'add_new_item'               => __( 'Add New Resource Type', 'text_domain' ),
// 		'edit_item'                  => __( 'Edit Resource Type', 'text_domain' ),
// 		'update_item'                => __( 'Update Resource Type', 'text_domain' ),
// 		'view_item'                  => __( 'View Resource Type', 'text_domain' ),
// 		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
// 		'add_or_remove_items'        => __( 'Add or remove Resource Type', 'text_domain' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
// 		'popular_items'              => __( 'Popular Resource Types', 'text_domain' ),
// 		'search_items'               => __( 'Search Resource Types', 'text_domain' ),
// 		'not_found'                  => __( 'Not Found', 'text_domain' ),
// 		'no_terms'                   => __( 'No items', 'text_domain' ),
// 		'items_list'                 => __( 'Items list', 'text_domain' ),
// 		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
// 	);
// 	register_taxonomy( 'resource_type', array( 'resource-library' ), $args );

// }
// add_action( 'init', 'resource_type', 0 );

// Register Custom Taxonomy
// function resource_sub_type() {

// 	$labels = array(
// 		'name'                       => _x( 'Resource Sub Types', 'Taxonomy General Name', 'text_domain' ),
// 		'singular_name'              => _x( 'Resource Sub Type', 'Taxonomy Singular Name', 'text_domain' ),
// 		'menu_name'                  => __( 'Resource Sub Type', 'text_domain' ),
// 		'all_items'                  => __( 'All Resource Sub Type', 'text_domain' ),
// 		'parent_item'                => __( 'Parent Resource Sub Type', 'text_domain' ),
// 		'parent_item_colon'          => __( 'Parent Resource Sub Type:', 'text_domain' ),
// 		'new_item_name'              => __( 'New Resource Sub Type', 'text_domain' ),
// 		'add_new_item'               => __( 'Add New Resource Sub Type', 'text_domain' ),
// 		'edit_item'                  => __( 'Edit Resource Sub Type', 'text_domain' ),
// 		'update_item'                => __( 'Update Resource Sub Type', 'text_domain' ),
// 		'view_item'                  => __( 'View Resource Sub Type', 'text_domain' ),
// 		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
// 		'add_or_remove_items'        => __( 'Add or remove Resource Type', 'text_domain' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
// 		'popular_items'              => __( 'Popular Resource Sub Types', 'text_domain' ),
// 		'search_items'               => __( 'Search Resource Sub Types', 'text_domain' ),
// 		'not_found'                  => __( 'Not Found', 'text_domain' ),
// 		'no_terms'                   => __( 'No items', 'text_domain' ),
// 		'items_list'                 => __( 'Items list', 'text_domain' ),
// 		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
// 	);
// 	register_taxonomy( 'resource_sub_type', array( 'resource-library' ), $args );

// }
// add_action( 'init', 'resource_sub_type', 0 );

?>
