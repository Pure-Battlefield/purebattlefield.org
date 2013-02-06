<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package     WordPress
 * @subpackage  Starkers
 * @since       Starkers 4.0
 */

/*
Template Name: Contact_Us
*/

?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="row">
    <div class="twelve columns">
        <div class="top">
            <h1>Contact Us</h1>
        </div>
        <div class="seven columns">
            <p>
                <h5>General community suggestions or feedback:</h5>
                <a href="http://www.reddit.com/r/purebattlefield/submit?title=%5BFeedback%5D;text=%5BSuggestion-Here%5D">Write a post on the subreddit</a>
            </p>
            <p>
                <h5>Rule violations or suspected cheaters:</h5>
                <a href="mailto://admins@purebattlefield.org">admins@purebattlefield.org</a>
            </p>
            <p>
                <h5>Technical problems with out servers:</h5>
                <a href="mailto://pageoperations@purebattlefield.org">pageoperations@purebattlefield.com</a>
            </p>
            <p>
                <h5>Ban appeals or other private inquiries:</h5>
                <a href="mailto://leads@purebattlefield.org">leads@purebattlefield.org</a>
            </p>
            <p>
                <h5>Subreddit related issues:</h5>
                <a href="http://www.reddit.com/message/compose?to=%2Fr%2Fpurebattlefield">subbreddit mod mail</a>
            </p>
            <p>
                <h5>Website issues:</h5>
                <a href="mailto://webdevelopers@purebattlefield.com">webdevelopers@purebattlefield.com</a>
            </p>
        </div>
    </div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>