<?php

/**
 * Add custom shortcode [eventform eventid=1]
 * @param $atts,
 * @param $content
 * @param $tag
 * @return String
 */
function wpt_event_shortcode($atts = [], $content = null, $tag = '') {
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    $wpt_event_atts = shortcode_atts([
        'eventid' => 1
    ], $atts, $tag);

    $wpt_event = get_post($wpt_event_atts['eventid']);

    $output = '';

    if (!is_null($content)) {
        $output .= apply_filters('the_content', $content);
        $output .= do_shortcode($content);
    }

    if (!is_null($wpt_event) and !is_null($wpt_event->post_content)) {
        $output .= apply_filters('the_content', $wpt_event->post_content);
    }

    return $output;
}