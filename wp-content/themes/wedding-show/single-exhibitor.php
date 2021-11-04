<?php 
/*
	Template Name: Single Exhibitor
*/

$hours = get_field('hours');
$phone = get_field('phone');
$address = get_field('address');
$email = get_field('email');
$website = get_field('website');
$facebook = get_field('facebook');
$instagram = get_field('instagram');

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
                        <?php echo $hours ? "<p>Hours: {$hours}</p>" : "" ?>
                        <?php echo $phone ? "<p>Phone: {$phone}</p>" : "" ?>
                        <?php echo $address ? "<p>Address: {$address}</p>" : "" ?>
                        <?php echo $email ? "<p>Email: {$email}</p>" : "" ?>
                        <?php echo $website ? "<p>Website: <a href='{$website}' target='_blank'>{$website}</a></p>" : "" ?>
                        <?php echo $facebook ? "<p>Facebook: {$facebook}</p>" : "" ?>
                        <?php echo $instagram ? "<p>Instagram: @{$instagram}</p>" : "" ?>
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