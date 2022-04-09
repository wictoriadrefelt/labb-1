<?php
/*
Template Name: Nav-bar-left

*/
?>

<?php 
get_header(); 
?> 


<main>
<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
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
                                    
                                	</div>
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
							<ul class="side-menu">
                          <li>    
                            <?php wp_nav_menu(array(
                            'theme_location' => 
                            'side-menu-left'
                        ));
                        ?>
                        </li>
                        </ul> 
                    </aside>
                              
                        </div>
                    </div>
                    
                </section>
            <?php 
        } ?> 

		</main>
        <?php get_footer(); ?>