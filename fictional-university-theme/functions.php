<?php

function university_files() {
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
} //called wordpress function (wp_enqueue_style) and pointed towards css file we wanted to load 

add_action('wp_enqueue_scripts', 'university_files');