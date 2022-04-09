<?php get_header(); ?> 

<main>
    <section>
        <div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>
                                <?php wp_title(' '); ?>
                            </h1>
                            <?php while(have_posts()) {
                                the_post(); ?> 
                            
							<article>
								<?php 

                                    the_post_thumbnail();
                                ?> 

								<h2 class="title">
									<a href="<?php the_permalink();?>">
                                    <?php the_title(); ?> 
                                    </a>

								</h2>

								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 
                                        <?php echo get_the_date('l F j, Y' ); ?> 
									</li>
									<li>
										<i class="fa fa-user"></i> 
                                        <?php the_author_posts_link(); ?>
									</li>
									<li>
										<i class="fa fa-tag"></i> 
                                        <?php the_category(', '); ?> 
									</li>
								</ul>
								<p>
                                    <?php the_content(); ?> 
                                </p>
							</article>

                            <?php } ?>
                            
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