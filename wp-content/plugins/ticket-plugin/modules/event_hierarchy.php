<?php

function wpt_event_hierarchy()
{
    $labels = [
        'name' => _x('Events', 'taxonomy general name'),
        'singular_name' => _x('Event', 'taxonomy singular name'),
        'search_items' => __('Search events'),
        'all_items' => __('All events'),
        'parent_item' => __('Parent event'),
        'parent_item_colon' => __('Parent event:'),
        'edit_item' => __('Edit event'),
        'update_item' => __('Update event'),
        'add_new_item' => __('Add new event'),
        'new_item_name' => __('New event name'),
        'menu_name' => __('Event'),
    ];
    $args = [
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'event']
    ];

    register_taxonomy('events', 'wpt_event', $args);
}