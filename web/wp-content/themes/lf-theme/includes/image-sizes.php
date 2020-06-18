<?php
/**
 * Image sizes
 *
 * Used to create new image sizes used in the site. TRUE uses hard crop to size.
 *
 * @category Components
 * @package  WordPress
 * @author   James Hunt <domains@thetwopercent.co.uk>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://lfph.io
 * @since    1.0.0
 */

// add_image_size('icon', 50, 50, true); // phpcs:ignore.
// add_image_size('new-size', 215, 215, true); // phpcs:ignore.

// Press images, no hard crop.
add_image_size( 'newsroom-media-coverage', 260, 160, false );

// Newsroom, mobile, featured, retina.
add_image_size( 'newsroom-image-small', 260, 160, true );
add_image_size( 'newsroom-image', 600, 320, true );
add_image_size( 'newsroom-image-large', 1200, 640, true );

// additional sections.
add_image_size( 'spotlight', 320, 170, false );
add_image_size( 'case-study', 320, 260, true );

// Hero image.
add_image_size( 'hero-extra-large', 1920, 260, true );
add_image_size( 'hero-large', 1400, 260, true );
add_image_size( 'hero-medium', 1000, 220, true );
add_image_size( 'hero-small', 414, 220, true );
