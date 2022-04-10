<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
					
							<?php 
								dynamic_sidebar('myFooterWidget');
							?>

						
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
							<?php 
								dynamic_sidebar('myFooterWidget2');
							?>
					</div>
					
                    <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                    <h4>Social media</h4>
					<ul class="social">
						<li>
                      
                        <?php 
								dynamic_sidebar('myFooterWidget3');
							?>

						</li>
					</ul>

                        </div>
                            
                        
					
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
    </footer>

    <?php wp_footer(); ?>
    
</body>
</html>