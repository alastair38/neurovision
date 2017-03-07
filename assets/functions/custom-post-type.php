<?php
/* custom post-type for storing reported publications

*/


function neurovision_video() {
  // creating (registering) the custom type
  register_post_type( 'videos', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array('labels' => array(
      'name' => __('Videos', 'neurovisiontheme'), /* This is the Title of the Group */
      'singular_name' => __('Video', 'neurovisiontheme'), /* This is the individual type */
      'all_items' => __('All Videos', 'neurovisiontheme'), /* the all items menu item */
      'add_new' => __('Add New Video', 'neurovisiontheme'), /* The add new menu item */
      'add_new_item' => __('Add New Video', 'neurovisiontheme'), /* Add New Display Title */
      'edit' => __( 'Edit', 'neurovisiontheme' ), /* Edit Dialog */
      'edit_item' => __('Edit Video', 'neurovisiontheme'), /* Edit Display Title */
      'new_item' => __('New Video', 'neurovisiontheme'), /* New Display Title */
      'view_item' => __('View Video', 'neurovisiontheme'), /* View Display Title */
      'search_items' => __('Search Videos', 'neurovisiontheme'), /* Search Custom Type Title */
      'not_found' =>  __('Nothing found in the Database.', 'neurovisiontheme'), /* This displays if there are no entries yet */
      'not_found_in_trash' => __('Nothing found in Trash', 'neurovisiontheme'), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of arrays */
      'description' => __( 'neurovision Videos', 'neurovisiontheme' ), /* Custom Type Description */

      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => 'dashicons-video-alt2', /* the icon for the custom post type menu */
      'rewrite'	=> array( 'slug' => 'videos', 'with_front' => false ), /* you can specify its url slug */
      'has_archive' => true, /* you can rename the slug here */
      'capability_type' => 'page',
      'hierarchical' => true,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail')
    ) /* end of options */
  ); /* end of register post type */

}

add_action( 'init', 'neurovision_video');

register_taxonomy( 'video_date',
  array('videos'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
  array('hierarchical' => true,    /* if this is false, it acts like tags */
    'labels' => array(
      'name' => __( 'Video Date', 'neurovisiontheme' ), /* name of the custom taxonomy */
      'singular_name' => __( 'Video Date', 'neurovisiontheme' ), /* single taxonomy name */
      'search_items' =>  __( 'Search Video Dates', 'neurovisiontheme' ), /* search title for taxomony */
      'all_items' => __( 'All Video Dates', 'neurovisiontheme' ), /* all title for taxonomies */
      'parent_item' => __( 'Parent Video Date', 'neurovisiontheme' ), /* parent title for taxonomy */
      'parent_item_colon' => __( 'Parent Video Date:', 'neurovisiontheme' ), /* parent taxonomy title */
      'edit_item' => __( 'Edit Video Date', 'neurovisiontheme' ), /* edit custom taxonomy title */
      'update_item' => __( 'Update Video Date', 'neurovisiontheme' ), /* update title for taxonomy */
      'add_new_item' => __( 'Add New Video Date', 'neurovisiontheme' ), /* add new title for taxonomy */
      'new_item_name' => __( 'New Video Date Name', 'neurovisiontheme' ) /* name title for taxonomy */
    ),
    'show_admin_column' => true,
    'show_ui' => true,
    'query_var' => true,
  )
);

register_taxonomy( 'featured_video',
  array('videos'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
  array('hierarchical' => true,    /* if this is false, it acts like tags */
    'labels' => array(
      'name' => __( 'Featured Video', 'neurovisiontheme' ), /* name of the custom taxonomy */
      'singular_name' => __( 'Featured Video option', 'neurovisiontheme' ), /* single taxonomy name */
      'search_items' =>  __( 'Featured Video options', 'neurovisiontheme' ), /* search title for taxomony */
      'all_items' => __( 'All Featured Video options', 'neurovisiontheme' ), /* all title for taxonomies */
      'parent_item' => __( 'Parent Featured Video option', 'neurovisiontheme' ), /* parent title for taxonomy */
      'parent_item_colon' => __( 'Parent Featured Video option:', 'neurovisiontheme' ), /* parent taxonomy title */
      'edit_item' => __( 'Edit Featured Video option', 'neurovisiontheme' ), /* edit custom taxonomy title */
      'update_item' => __( 'Update Featured Video option', 'neurovisiontheme' ), /* update title for taxonomy */
      'add_new_item' => __( 'Add New Featured Video option', 'neurovisiontheme' ), /* add new title for taxonomy */
      'new_item_name' => __( 'New Featured Video option', 'neurovisiontheme' ) /* name title for taxonomy */
    ),
    'show_admin_column' => true,
    'show_ui' => true,
    'query_var' => true,
  )
);

function neurovision_publications() {
	// creating (registering) the custom type
	register_post_type( 'publications', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Publications', 'neurovisiontheme'), /* This is the Title of the Group */
			'singular_name' => __('Publication', 'neurovisiontheme'), /* This is the individual type */
			'all_items' => __('All Publications', 'neurovisiontheme'), /* the all items menu item */
			'add_new' => __('Add New Publication', 'neurovisiontheme'), /* The add new menu item */
			'add_new_item' => __('Add New Publication', 'neurovisiontheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'neurovisiontheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Publication', 'neurovisiontheme'), /* Edit Display Title */
			'new_item' => __('New Publication', 'neurovisiontheme'), /* New Display Title */
			'view_item' => __('View Publication', 'neurovisiontheme'), /* View Display Title */
			'search_items' => __('Search Publications', 'neurovisiontheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'neurovisiontheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'neurovisiontheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'neurovision Publications', 'neurovisiontheme' ), /* Custom Type Description */

			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-media-document', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'publications', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor')
	 	) /* end of options */
	); /* end of register post type */

}
	// adding the function to the Wordpress init
	add_action( 'init', 'neurovision_publications');

	// now let's add custom tags (these act like categories)
    register_taxonomy( 'publication_type',
    	array('publications'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,    /* if this is false, it acts like tags */
    		'labels' => array(
    			'name' => __( 'Publication Types', 'neurovisiontheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Publication Type', 'neurovisiontheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Publication Types', 'neurovisiontheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Publication Types', 'neurovisiontheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Publication Type', 'neurovisiontheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Publication Type:', 'neurovisiontheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Publication Type', 'neurovisiontheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Publication Type', 'neurovisiontheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Publication Type', 'neurovisiontheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Publication Type Name', 'neurovisiontheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );


    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */


?>
