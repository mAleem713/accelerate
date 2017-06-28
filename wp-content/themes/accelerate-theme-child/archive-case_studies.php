<?php
/**
 * The template for displaying Case Study Archive Pages
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

        <h1 class="case-study-archives">Case Studies</h1>
        <?php while ( have_posts() ) : the_post();
          $services = get_field('services');
          $client = get_field('client');
          $link = get_field('site_link');
          $image_1 = get_field('image_1');
          $size = "full"; ?>

          <article class="case-study">
            <aside class="case-study-sidebar">
              <h2><?php the_title(); ?></h2>
              <h5><?php echo $services; ?></h5>
              <?php the_content(); ?>

              <p><strong><a href="<?php echo $link; ?>">View Project <span>&gt;<span> </a></strong></p>
            </aside>

            <div class="case-study-images">
              <?php if($image_1){
                echo wp_get_attachment_image( $image_1, $size ); ?>
              <?php } ?>

            </div>
          </article>

            <?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
