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
Template Name: vision
*/

?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="row">
    <div class="twelve columns">
        <div class="main">
            <h1>Vision & Strategy</h1>
            <h5><strong>Community Purpose:</strong> To provide great social Battlefield experiences that foster connections and friendships between our members.</h5>
            <h5><strong>Community Vision:</strong> A global Battlefield community, extending online and offline, that allows gamers to find local, friendly, open groups with which to have great social Battlefield experiences.</h5>

            <h3>The Inspiration Behind Pure Battlefield</h3>
            <p><strong>By Adama42, Founder & Community Lead</strong></p>
            <p>I have been gaming for over 30 years.  I think that video games are awesome and that people are awesome, and there's nothing like sharing an
                awesome game with awesome friends.  Some of my best gaming memories include college LAN parties playing Doom, and making friends around the
                world playing MUDs (text-based precursors to MMORPGs) and early MMOs like Asheron's Call.
            </p>
            <p>Unfortunately, great social gaming experiences like these can be hard to come by, especially in FPS games like Battlefield.  Most games' social
                features have huge gaps (e.g. the lack of VOIP in Battlefield 3), and are generally not well-integrated into the gameplay.  When there are good
                social features, many players don't participate, and a few always choose to participate in a socially obnoxious or inconsiderate way.  Outside
                of the game, most servers are run by an exclusive group -- for example, a clan or a gaming website -- which limits the degree to which newcomers
                can get involved.  Clearly the Battlefield community is not immune to these issues; they are as present here as in any other gaming community.
            </p>

    </div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>