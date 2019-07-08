<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area page-template">
	<main id="main" class="site-main" role="main">
		<div class="container">

			<?php while ( have_posts() ) : the_post();  //WP Loop Start	?>

			<h1 class="text-center"><?php echo the_title(); ?></h1>

			<?php echo the_content(); ?>


			<?php endwhile; // End of the loop.	?>

		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
