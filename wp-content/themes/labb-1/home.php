<?php 
get_header(); 
?> 

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_title(); ?> </h1>
							<article>
                            
							
                                <?php 
                                if(have_posts()){
                                    while(have_posts()){
                                        the_post();
                                        
                                        the_post_thumbnail();

                                        the_title();
                                        ?>
                                      

                                        
                                         <ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_date(); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author(); ?>
									</li> 
									<li>
										<i class="fa fa-tag"></i> 
                                       <?php the_tags(''); ?>
									</li>
								</ul> 
                                         <p> <?php  the_content(); ?> </p> 
                                         </article>
                                            <?php
                        
                                    }
                                }
                                ?>
          

		</main>
        <?php get_footer(); ?>