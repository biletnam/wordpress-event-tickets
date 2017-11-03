<?php
require_once(dirname(__FILE__).'/event_hierarchy.php');

function wpt_setup_post_types()
{
    register_post_type(
        'wpt_event',
        [
            'public' => true,
            'labels' => [
                'name' => 'Evenement'
            ],
            'supports' => ['title'],
            'taxonomies' => ['events'],
            'hierarchical' => true
        ]
    );
    register_post_type(
        'wpt_date',
        [
            'public' => false,
            'labels' => [
                'name' => 'wpt_date'
            ],
            'supports' => [
                'title',
                'author',
                'custom-fields'
            ]
        ]
    );
    register_post_type(
        'wpt_submission',
        [
            'public' => false,
            'labels' => [
                'name' => 'wpt_submission'
            ],
            'supports' => [
                'title',
                'author',
                'custom-fields'
            ]
        ]
    );
}

function wpt_install()
{
    wpt_setup_post_types();
    wpt_event_hierarchy();
}