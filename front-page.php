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
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div class="row">
    <div class="top panel twelve columns">
        <div class="six columns">
            <div class="slider">
                <img src="http://modeconkey.com/ext/pictures/pic1.jpg" alt="">
                <img src="http://modeconkey.com/ext/pictures/pic2.jpg" alt="">
                <img src="http://modeconkey.com/ext/pictures/pic3.jpg" alt="">
                <img src="http://modeconkey.com/ext/pictures/pic4.jpg" alt="">
            </div>
        </div>
        <div class="news six columns">
            <h1>Recent News</h1>
            <ul>
                <li><em>1/13</em> New Map Rotation</li>
                <li><em>1/15</em> Team [5th] Scrimmage</li>
                <li><em>1/19</em> Mario Quads!</li>
                <li><em>1/23</em> Cinematic Intro</li>
                <li><em>1/24</em> New Map Rotation</li>
            </ul>
        </div>
    </div>
    <div class="twelve columns">
        <div class="panel four columns">
            <h3>New to PURE?</h3>
            <p>PURE Battlefield is a gaming community which delivers the pure Battlefield experience as it was meant to be played, with a distinct focus on creating a great gaming atmosphere.</p>
        </div>
        <div class="panel four columns">
            <h3>Unofficial Projects</h3>

        </div>
        <div class="servers panel four columns">
            <h3>Server Links</h3>
            <div>
                <h5>Conquest Server</h5>
                <a href="http://battlelog.battlefield.com/bf3/servers/show/689d1b2f-8462-4c92-b836-c3655604c452" class="medium button">Connect</a>
                <h5>Events Server</h5>
                <a href="http://battlelog.battlefield.com/bf3/servers/show/da2f4cd9-6630-4e26-9d3d-a7a263b167ed" class="medium button">Connect</a>
            </div>
        </div>
    </div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>