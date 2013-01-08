<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================

	Required external files

	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================

	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme

	======================================================================================================================== */

	add_theme_support('post-thumbnails');

	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================

	Actions and Filters

	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================

	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

	======================================================================================================================== */

	add_action('init', 'portfolio_register');

	function project_register() {

		$labels = array(
			'name' =&gt; _x('Community Projects', 'post type general name'),
			'singular_name' =&gt; _x('Community Project', 'post type singular name'),
			'add_new' =&gt; _x('Add New', 'community project'),
			'add_new_item' =&gt; __('Add New Community Event'),
			'edit_item' =&gt; __('Edit Community Event'),
			'new_item' =&gt; __('New Community Event'),
			'view_item' =&gt; __('View Community Event'),
			'search_item' =&gt; __('Search Community Events'),
			'not_found' =&gt; __('Nothing Found'),
			'not_found_in_trash' =&gt; __('Nothing found in Trash'),
			'parent_item_colon' =&gt; ''
		);

		$args = array(
			'labels' =&gt; $labels,
			'public' =&gt; true,
			'publicly_queryable' =&gt; true,
			'show_ui' =&gt; true,
			'query_var' =&gt; true,
			'menu_icon' =&gt; get_stylesheet_directory_uri() . '/article16.png',
			'rewrite' =&gt; true,
			'capability_type' =&gt; 'post',
			'hierarchical' =&gt; false,
			'menu_position' =&gt; null,
			'supports' =&gt; array('title', 'editor', 'thumbnail')
		);

		register_post_type( 'project' , $args );
	}

	/* ========================================================================================================================

	Scripts

	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'javascripts/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}

	/* ========================================================================================================================

	Comments

	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}