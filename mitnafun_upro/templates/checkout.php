<?php

/*

Template Name: Checkout

*/



get_header();

while (have_posts()) {
    the_post();
    the_content();
}

get_footer();
