<?php
/*
Template Name: contact

*/
?>


<?php 
get_header(); 
?> 



<main>
<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                                    <?php
                                    if(have_posts()){
                                        while(have_posts()){
                                        the_post();
                                        the_post_thumbnail();
                                        ?>
                                        <h1> <?php the_title(); ?> </h1> 
                                        <?php
                                        the_content();
                                        the_tags();
                                    }
                                   ?>
                                    
                                    <div class="text">

                                    
                                        
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