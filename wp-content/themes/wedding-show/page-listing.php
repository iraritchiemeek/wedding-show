<?php 
/*
	Template Name: listing
*/

get_header(); ?>
	
	<div class="content">
        
        <div class="grid-container">
            <div class="grid-x grid-margin-x controls-row">
                <div class="cell small-12 medium-6 controls-left">                    
                    <p><a href="#">EXHIBITORS</a></p></p>
                   </div>
               <div class="cell small-12 medium-6 controls-right">                    
                   <p><a href="#">VENUES</a></p></div>
              </div>
        </div>
        
	<div class="grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 large-12 medium-12 cell" role="main">
                <h1><?php echo get_the_title(); ?></h1>
                
                			
			    					
			</main> <!-- end #main --> 
        </div> <!-- end #inner-content -->

		</div> <!-- end grid-container -->


         <div class="grid-container">
               <div class="grid-x grid-margin-x ">
                    <div class="cell small-12 medium-12">                    
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rs-main-image.jpg">
                    </div>
            </div>
          </div><!-- end grid-container -->
          <div class="grid-container">
               <div class="grid-x grid-margin-x details">                    
                   <div class="cell small-6 medium-2">                    
                      <h6>DETAILS</h6>
                        <p>Hours: by appointment</p>
                        <p>Phone: Show Number</p>
                        <p>Address: Tauherenikau Racecourse Rd, State Highway 2, Tauherenikau 5771</p>
                        <p>Email: Message Vendo===-098
                        <p>Website: <a href="https://roseandsmith.co.nz/" target="_blank">roseandsmith.co.nz</a></p>
                       <p>Facebook:  <a href="#">@roseandsmith</a></p>
                    </div>
                   <div class="cell small-6 medium-2 medium-offset-1">                    
                      <h6>NOTES</h6>
                        <p>Capacity: 200 dining<br />
                       500 cocktail.</p>
                    </div>

                    <div class="cell small-12 medium-5 medium-offset-2 content-pad">                    
                      <?php echo the_content(); ?>
                    </div>
                </div>
            </div><!-- end grid-container -->        

	</div> <!-- end #content -->

<?php get_footer(); ?>