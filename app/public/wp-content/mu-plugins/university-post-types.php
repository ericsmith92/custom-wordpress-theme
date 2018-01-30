<?php
//lets register a custom post type, we need to use add_action()
//we need to tack onto the 'init' hook

function university_post_types() {
    //use wordpress function register_post_type() & pass two arguments
    //first: name of custom post type
    //second: array of arguments for post type
    register_post_type('event', array(
        //visible to viewers and editors of site
        'public' => true,
        //we don't want it to be called 'Posts' in admin, lets change label
        'labels' => array(
            'name' => 'Events',
			//we want admin screen to say add new event, not post
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'university_post_types');

?>