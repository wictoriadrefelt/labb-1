<?php 
get_header(); 

wp_head();
?> 



        <main>
 
            <?php 
            if(have_posts()){
            while(have_posts()) {
                the_post(); 
            }?>
			    <section>

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="hero">
                                    
                                    <?php the_post_thumbnail(); ?> 
                                    
                                    <div class="text">

                                    
                                        <p><?php the_content(); 
                                        ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
            <?php 
        } ?> 

		</main>
        <?php get_footer(); ?>