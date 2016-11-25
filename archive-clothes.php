<?php get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="burlap">
                    
                    <div class="defaultContent">

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop-clothes'); ?>

			<?php get_template_part('pagination'); ?>
                        
                    </div>    

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>


