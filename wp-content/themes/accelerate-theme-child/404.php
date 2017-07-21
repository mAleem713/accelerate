<?php
/**
 * The template for displaying 404 Error Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" class="contact-page">
			<div class="error">
				<h2 class="error">Oopsies!</h2>
				<h4 class="error">Looks like someone made a boo boo.</h4>
				<img class="error-img" src="https://s-media-cache-ak0.pinimg.com/236x/e8/ff/ba/e8ffba5fe162030291bc5adeae43b929--purple-unicorn-little-unicorn.jpg" alt="Oh Poo, its an error page."/>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
