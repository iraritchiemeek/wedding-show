<?php 
/*
	Template Name: Single Exhibitor Type
*/

get_header(); ?>
	
	<div class="content">
        
        <div class="grid-container">
            <div class="grid-x grid-margin-x controls-row">
                <div class="cell small-12 medium-6 controls-left">                    
                    <p><a href="#">EXHIBITORS</a></p></p>
                   </div>
               <div class="cell small-12 medium-6 controls-right">                    
                   <p><a href="#">All</a>     |    <a href="#">Weddings</a>    |     <a href="#">Events</a></p></div>
              </div>
        </div>
        
	<div class="grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 large-12 medium-12 cell" role="main">
                
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main --> 
        </div>
            

		    
		</div> <!-- end #inner-content -->
         <div class="grid-container">
               <div class="grid-x grid-margin-x ">
                <div class="cell small-12 medium-6 exhibitor-cat">                    
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/osp-test-imge-100.jpg">
                    <h2>Old St Pauls</h2></a>
                   </div>
                <div class="cell small-12 medium-6 exhibitor-cat">                    
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rs-test-image-100.jpg">
                    <h2>Rose &amp; Smith</h2></a></div>
              </div>
            </div>

	</div> <!-- end #content -->

<?php get_footer(); ?>