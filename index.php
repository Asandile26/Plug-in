<?php
/*
Plugin Name:  Socials
Description:  links of our socials.
Version:      1.0
Author:       Nator26
Author URI:   https://https://github.com/Asandile26
License:      GPL2
Text Domain:  index.php
Domain Path:  /languages
*/


function nator26_follow_us($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) {
 
// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles
 
$content .= '<p class="follow-us">Follow to find more songs <a href="https://twitter.com/LA_Nator21" title="Nator26 on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://m.facebook.com/100090013194612/" title="nator26 on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';
 
}
// Return the content
return $content;
 
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'nator26_follow_us');

https://https://dev-songz.pantheonsite.io/
