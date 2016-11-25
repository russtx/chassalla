<?php
/* Template Name: Contact page */
get_header('2'); ?>

	<main role="main">
		<!-- section -->
                <section class="burlap">

			<h1>Contact Me</h1>
                        <div class="clearfix"></div>

                        <div class="defaultContent">
                            <h2>Email</h2>
                            <div class="clearfix"></div>
                            <div class="greenline-1"><span></span></div>
                            <div class="email"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/emailIcon-trans.png" alt="email" ></div>
                            <div class="greenline-2"><span></span></div>
                            
                            
                            <div class="contactForm"><?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?></div>
                            
                            <div class="clearfix"></div>
                            
                             
                            <h2>Phone</h2>
                            <div class="clearfix"></div>
                            
                            <div class="greenline-1"><span></span></div>
                            <div class="phone"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phoneIcon-trans.png" alt="phone" ></div>
                            <div class="greenline-2"><span></span></div>

                            <div class="clearfix"></div>
                            
                            <div class="phoneLink"><a href="tel: 888 888 8888"><p>888-888-8888</p></a></div>
                            
                            <h2>Find Us</h2>
                            <div class="clearfix"></div>
                            
                            <div class="greenline-1"><span></span></div>
                            <div class="tablet"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tabletIcon-trans.png" alt="tablet" ></div>
                            <div class="greenline-2"><span></span></div>

                            <div class="clearfix"></div>
                            
                            <div class="findUs">
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-green-trans.png" alt="facebook" ></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-green-trans.png" alt="instagram" ></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest-green-trans.png" alt="pinterest" ></a>
                            </div>
                            
                            
                        </div><!-- defaultContent -->
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
