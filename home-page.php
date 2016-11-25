<?php
/*Template Name: Home Page */
get_header(); ?>

    <main role="main">
            <!-- section -->

            <div class="pageTitle">    
                <h1>Handmade<br />
                Soaps and Fibers</h1>
            </div>


            <section class="burlap">
                <div class="mainContent">
                    <div class="soapsFibersContainer">
                        <div class="tint">
                            <div class="border">
                                <div class="left">
                                    <a href="<?php echo home_url(); ?>/soap"><button class="soaps"><p>Soaps</p></button></a>
                                </div>
                                <div class="right">
                                    <a href="<?php echo home_url(); ?>/fiber"><button class="fibers"><p>Fibers</p></button></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- soapsFibersContainer -->
                    
                                            
            
                <?php $post_id = 43; // assign post id
           $queried_post = get_page($post_id);
           {  ?>

            <h2>All Natural Soaps</h2>                    

            <div class="clearfix"></div>

            <div class="greenline-1"><span></span></div>
            <div class="olive"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/olives-trans.png" alt="olivs" ></div>
            <div class="greenline-2"><span></span></div>

            <div class="clearfix"></div>

        <div class="soapsContainer">    
            <div class='soapsContent'>
               
                <p><?php
                $page_id = 43;
                $page_data = get_page( $page_id );
                
                $content = $page_data->post_content;
                
                $trimmed_content = wp_trim_words( $content, 35, '<a href="'. get_permalink() .'"> ...Read More</a>' );
                echo $trimmed_content;
                ?></p>

                <div class="linkButton">
                    <a href="<?php echo home_url(); ?>/soap"><button><p>Soaps</p></button></a>
                </div> 

            </div>

            <div class='soapsImage'><?php echo get_the_post_thumbnail( $post_id); ?></div>

           <?php  } ?>

        </div><!-- soapsContainer -->           
                        
                                                
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
               <p><?php
                $page_id = 23;
                $page_data = get_page( $page_id );
                
                $content = $page_data->post_content;
                
                $trimmed_content = wp_trim_words( $content, 35, '<a href="'. get_permalink() .'"> ...Read More</a>' );
                echo $trimmed_content;
                ?></p>

                <div class="linkButton">
                    <a href="<?php echo home_url(); ?>/fiber"><button><p>Shoes</p></button></a>
                </div> 

            </div>

            <div class='woolImage'><?php echo get_the_post_thumbnail( $post_id); ?></div>

           <?php  } ?>

        </div><!-- woolContainer -->  
        
        
         <?php $post_id = 30; // assign post id
            $queried_post = get_page($post_id);
            {  ?>

             <h2>Knitted Clothes and Jewelry</h2>                    

             <div class="clearfix"></div>

             <div class="greenline-1"><span></span></div>
             <div class="yarn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/yarn-img-trans.png" alt="olivs" ></div>
             <div class="greenline-2"><span></span></div>

             <div class="clearfix"></div>

         <div class="knittedContainer">    
             <div class='knittedContent'>
                <p><?php
                $page_id = 43;
                $page_data = get_page( $page_id );
                
                $content = $page_data->post_content;
                
                $trimmed_content = wp_trim_words( $content, 35, '<a href="'. get_permalink() .'"> ...Read More</a>' );
                echo $trimmed_content;
                ?></p>

                 <div class="linkButton">
                     <a href="<?php echo home_url(); ?>/fiber#anchor"><button><p>Clothes And Jewelry</p></button></a>
                 </div> 

             </div>

             <div class='knittedImage'><?php echo get_the_post_thumbnail( $post_id); ?></div>

            <?php  } ?>

         </div><!-- knittedContainer -->
                        
                                
                        
                         
                </div><!-- mainContent --> 
            </section><!-- burlap -->
            <!-- /section -->
    </main>



<?php get_footer(); ?>
