<?php
/* Template Name: Soaps Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="burlap">

			<h1><?php the_title(); ?></h1>
                        
                        <div class="defaultContent">         

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                            <h2>Olive Oil Infused Soaps</h2>                    

            <div class="clearfix"></div>

            <div class="greenline-1"><span></span></div>
            <div class="olive"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/olives-trans.png" alt="olivs" ></div>
            <div class="greenline-2"><span></span></div>

            <div class="clearfix"></div>
            
                            <div class="soapText">

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>
                            
                            </div><!-- soapText -->  
            

			</article>
			<!-- /article -->

		<?php endwhile; ?>
                        
                        

		<?php else: ?>
                        
                        

			

		<?php endif; ?>
                        
                        <div class="soapsWrapper">
                    
                                <?php

                            $args = array( 'post_type' => 'soaps', 'orderby' => 'ASC', 'posts_per_page' => '6' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                                            <div class="soapsImages">


                                                <?php the_content(); ?>

                                            </div>

                            <?php endwhile; ?>   
                            
                        </div><!-- soapsWrapper -->
                        
                        <span class="moreLink"><a href="<?php echo get_post_type_archive_link( 'soaps' ); ?>">
                    <p>Show More</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png" alt="down-arrow" ></a>
                </span>
                         
                        </div><!-- defaultContent -->
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
