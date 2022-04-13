<?php 
get_header(); 
?> 

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                            <h1>Arkiv:
							<?php wp_title(''); ?> 
</h1>
                            
							
                                <?php 
                                if(have_posts()){
                                    while(have_posts()){
                                        the_post();
                                        ?> <article> 
                                            <?php
                                        the_post_thumbnail();
                                        ?>

                                    <h2 class="title">
									<a href="<?php the_permalink();?>">
                                      

                                         
                                          <?php the_title();   ?> 
                                    </a></h2>
 
                                         <ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php echo get_the_date('j F, Y'); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
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
                                <nav class="navigation pagination">
                                <h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
							<?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
                            <a class="next page-numbers" href="">Nästa</a>
							
							</nav>

						</div>

						

						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">

								<ul role="navigation">
									<li class="pagenav">

										<?php 
										dynamic_sidebar('mySideBar');
										?>
									</li>
								</ul>

							</div>
						</aside>

					</div>

		</div>
    </section>   
</main>                
                       
        <?php get_footer(); ?>