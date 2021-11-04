<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
                     <div class="grid-container">
                    <div class="inner-footer grid-x grid-margin-x grid-padding-x">
                    
                        <div class="cell small-3"><h6>Scene - Wellington<br /> Wedding & <br />Event Show</h6>
                        <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
                        </div>
                               <div class="cell small-3">
                        		  <nav role="navigation">
	    						    <?php joints_footer_links(); ?>
	    					      </nav>
                                </div>
                            <div class="cell small-3">
                                <p>Join us on:</p>
                                <ul>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Instagram</a></li>
                                </ul></div>
                        
                            <div class="cell small-3">
                            <p>Paula Bevege<br />
                               Phone: 0274 490 025<br />
                               Email: paula@sceneevents.co.nz</p>
                            <p>Charlotte Wood<br />
                               Phone 027 372 5015<br />
                               Email: charlotte@sceneevents.co.nz</p>
                            </div>
                        
                          
                        
                    </div><!-- end #inner-footer -->
                    </div><!-- end grid-container-->
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->