<?php 
/* Template Name: Fibers Page */
get_header(); ?>
        <div class="clearfix"></div>
	<main role="main">
		<!-- section -->
                <section class="burlap">
                    
                    

			<h1><?php the_title(); ?></h1>
                        <div class="defaultContent">
                        <div class="clearfix"></div>
                        
                            <?php $post_id = 23; // assign post id
           $queried_post = get_page($post_id);
           {  ?>

            <h2>German wool Shoes</h2>                    

            <div class="clearfix"></div>

            <div class="greenline-1"><span></span></div>
            <div class="sheep"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sheep-img-trans.png" alt="olivs" ></div>
            <div class="greenline-2"><span></span></div>

            <div class="clearfix"></div>

        <div class="woolContainer">    
            <div class='woolContent'>
               <p><?php echo $queried_post->post_content;  ?></p>
            </div>

            
           <?php  } ?>

            
            
        </div><!-- woolContainer -->  
                        
        <div class="shoeWrapper">        
                         <?php
                
                $args = array( 'post_type' => 'shoes', 'orderby' => 'ASC', 'posts_per_page' => '6' );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();?>

                                <div class="shoeImages">

                                       
                                    <?php the_content(); ?>

                                </div>
                                         
                <?php endwhile; ?>
            
        </div><!-- shoeWrapper -->

        <span class="moreLink"><a href="<?php echo get_post_type_archive_link( 'shoes' ); ?>">
                <p>Show More</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png" alt="down-arrow" ></a>
        </span>
                        
        <div class="clearfix"></div>
          
        
        <h2 id="anchor" >Knitted Clothes and Jewelry</h2>
                            
                   
                 <div class="greenline-1"><span></span></div>
             <div class="yarn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/yarn-img-trans.png" alt="olivs" ></div>
             <div class="greenline-2"><span></span></div>  
             <div class="clearfix"></div>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('knittedContent'); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<?php endif; ?>
                        
                
                        
        <div class="clothesWrapper">             
                        
                        <?php
                
                $args = array( 'post_type' => 'clothes', 'orderby' => 'ASC', 'posts_per_page' => '6' );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();?>

                                <div class="clothesImages">


                                    <?php the_content(); ?>

                                </div>

                <?php endwhile; ?>
            
            
         </div><!-- clothesWrapper -->    
                        
                <span class="moreLink"><a href="<?php echo get_post_type_archive_link( 'clothes' ); ?>">
                    <p>Show More</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png" alt="down-arrow" ></a>
                </span>        
                        
                    </div><!-- defaultContent -->       
                       

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
