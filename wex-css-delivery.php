<?php
/*
Template Name: Blank (no header/footer/outer or containing HTML.  COMPLETELY blank.)
*/
/**
 *
 * This page does not output any material outside of
 * the content stored in the database.  There are no
 * HTML tags, headers, scripts, etc.
 *
 *
 * @package IDG-Marketing
 */

// get_header(); 


while (have_posts()) : the_post();


endwhile; // end of the loop. 
