<?php 
/*
	Template Name: Contact
*/


get_header(); ?>
	
	<div class="content">
        
       <div class="grid-container top-pad">
        <div class="inner-content grid-x grid-margin-x grid-padding-x">
            
		    <div class="main small-12 large-12 medium-12 cell" role="main">
                <h1>Contact us</h1>		    					
			</div> <!-- end #main --> 
        
		    
		</div> <!-- end #inner-content -->
            
    </div> <!-- end grid-container -->      

    <div class="grid-container">
        <div class="inner-content grid-x grid-margin-x grid-padding-x">
            
		    <div class="main small-12 large-12 medium-12 cell" role="main">
                     <img src="<?php echo get_the_post_thumbnail_url($exhibitor->ID, 'full'); ?>" style="object-fit: cover; height: 90%; width: 100%;">			    					
			</div> <!-- end #main --> 
        
		    
		</div> <!-- end #inner-content -->
            
    </div> <!-- end grid-container --> 
        
    <div class="grid-container padding-row">
        <div class="inner-content grid-x grid-margin-x grid-padding-x">
            <div class="small-12 large-3 medium-3 cell small-order-2 medium-order-1">
                <p>Paula Bevege<br />
                               0274 490 025<br />
                               paula@sceneevents.co.nz</p>
                            <p>Charlotte Wood<br />
                               027 372 5015<br />
                              charlotte@sceneevents.co.nz</p>

            </div>
            <div class="small-12 large-4 medium-4 cell contact-text small-order-1 medium-order-2">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>
            </div>
           <div class="small-12 large-4 medium-4 medium-offset-1  cell small-order-3 medium-order-3">
               <?php echo do_shortcode('[contact-form-7 id="88" title="Contact us"]'); ?>

            </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
    
        
        
        
   <section class="scenemagazine">
        <div class="grid-container ">
            <div class="inner-content grid-x grid-margin-x grid-padding-x">
                <div class="small-12 large-12 medium-12 cell">
                    <p>Introducing SCENE MAGAZINE. <br />Celebrating our Wellington Wedding <br />& Event Scenes</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scene-cover-100.jpg">
                    <p>Available 1ST MAY</p>
                </div>
            </div> <!-- end #inner-content -->
        </div><!-- end grid-container --> 
    </section>

        
        
	</div> <!-- end #content -->

<?php get_footer(); ?>