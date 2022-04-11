<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labb-1</title>
    <?php
    wp_head();
    ?>

</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
      
						
                        <?php 
                        //change here 
                        $site_url = network_site_url( '/' );
                        $blog_title = get_bloginfo();
                        ?>
                        <a class='logo' href="<?php echo home_url(); ?>">
                      
                        <?php echo $blog_title; ?>
                     

                        
					</div>
					<div class="col-sm-6 hidden-xs">
						<?php 
                            
                            get_search_form(); 
                        ?> 

					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
                    
					<!-- <label class="screen-reader-text">Sök efter:</label>
					<input type="text" /> -->
                    <?php
                    //retrieves a search form 
                    get_search_form(); ?>

					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

                        <?php 
                        //retrieves our main menu in header
                        wp_nav_menu(array(
                            'theme_location' => 
                            'mainMenu'
                        ));
                        ?>
						
					</div>
				</div>
			</div>
		</nav>
    </div>