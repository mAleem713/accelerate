<?php
/**
 * The template for displaying the About Page
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<section class="home-page about-page">
		<div class="site-content">
			<!-- // start of the loop. -->

				<div class="homepage-hero aboutpage-hero">
					<h3><span class="accelerate-teal">Accelerate</span> is a strategy and marketing agency located in the heart of NYV.  OUr goal is to build businesses by making our clients visible and making their customers smile.</h3>
				</div>

		</div><!-- .container -->
	</section><!-- .about-page -->

	<div id="primary" class="site-content">
		<div id="content" role="main" class="services">
			<?php while ( have_posts() ) : the_post();

				$service_image_1 = get_field('service_image_1');
				$service_image_2 = get_field('service_image_2');
				$service_image_3 = get_field('service_image_3');
				$service_image_4 = get_field('service_image_4');
				$size = "full";
			?>
				<?php the_content(); ?>

				<!-- service layout sections -->
				<ul class="service-list">
					<li class="service-list">
						<div class="service-row">
							<div class="service-img">
								<figure class="service-img img-circle">
									<?php echo wp_get_attachment_image($service_image_1, $size); ?>
								</figure>
								<!-- <img class="service-img img-circle"src="<?php the_field('service_image_1'); ?>" alt="<?php echo get_the_title(get_field('service_image_1')) ?>" title="<?php echo get_the_title(get_field('service_image_1')) ?>"/> -->
							</div>
							<div class="service-info">
								<h2 class="service-name"><?php the_field('service_1'); ?></h2>
								<p class="service-desc"><?php the_field('service_description_1'); ?></p>
							</div>
						</div>
					</li>

					<li class="service-list">
						<div class="service-row post-list-even">
							<div class="service-img">
								<figure class="service-img img-circle">
									<?php echo wp_get_attachment_image($service_image_2, $size); ?>
								</figure>
							</div>
							<div class="service-info">
								<h2 class="service-name"><?php the_field('service_2'); ?></h2>
								<p class="service-desc"><?php the_field('service_description_2'); ?></p>
							</div>
						</div>
					</li>

					<li class="service-list">
						<div class="service-row">
							<div class="service-img">
								<figure class="service-img img-circle">
									<?php echo wp_get_attachment_image($service_image_3, $size); ?>
								</figure>
							</div>
							<div class="service-info">
								<h2 class="service-name"><?php the_field('service_3'); ?></h2>
								<p class="service-desc"><?php the_field('service_description_3'); ?></p>
							</div>
						</div>
					</li>

					<li class="service-list">
						<div class="service-row post-list-even">
							<div class="service-img">
								<figure class="service-img img-circle">
									<?php echo wp_get_attachment_image($service_image_4, $size); ?>
								</figure>
							</div>
							<div class="service-info">
								<h2 class="service-name"><?php the_field('service_4'); ?></h2>
								<p class="service-desc"><?php the_field('service_description_4'); ?></p>
							</div>
						</div>
					</li>

					<!-- the other way i coded the list -->
					<!-- <li class="service-list">
						<div class="service-row">
							<h2 class="service-name"><?php the_field('service_4'); ?></h2>
							<p class="service-desc"><?php the_field('service_description_4'); ?></p>
							<?php $image = wp_get_attachment_image_src(get_field('service_image_4'), 'thumbnail'); ?>
								<img class="service-img img-circle"src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('service_image_4')) ?>" />
						</div>
					</li> -->
				</ul>

				<aside class="about-aside">
					<h3 class="about-aside">Interested in working with us?</h3>
					<a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
				</aside>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
