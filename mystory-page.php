<?php
/* Template Name: My Story Template */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="burlap">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('defaultContent about'); ?>>
                            
                            <span><h2>How I came to start Chassalla Organics</h2></span>

                            <div class="aboutText"><?php the_content(); ?></div>
                            
                            <div class="aboutImage"><?php echo get_the_post_thumbnail( $post_id); ?></div>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
