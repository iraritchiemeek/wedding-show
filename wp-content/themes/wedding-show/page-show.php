<?php 
/*
	Template Name: Show
*/


get_header(); ?>
	
	<div class="content">
        
        <section class="cover-show">
            <div class="grid-container">
               <div class="grid-x grid-margin-x showdetails">
                    <div class="cell small-4 "><p>1ST MAY 2022</p></div>
                   <div class="cell small-4 medium-offset-4"><p>10AM - 4PM</p></div>
              </div>
                               <div class="grid-x grid-margin-x showdetails">
                   <div class="cell small-12"><h1>SCENE<br /> WEDDING &<br /> EVENT<br /> SHOW</h1></div>
                   </div>
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4"><p>TSB BANK AREA</p></div>
                    <div class="cell small-4 medium-offset-4"><p>WELLINGTON</p></div>
              </div>
            </div>
            

  
        </section>
        
        
        <div class="grid-container intro">
        <div class="inner-content grid-x grid-margin-x grid-padding-x">
            
		    <main class="main small-12 large-12 medium-12 cell" role="main">
                     
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main --> 
        
		    
		</div> <!-- end #inner-content -->
            
    </div> <!-- end grid-container --> 

        
    <div class="grid-container padding-row">
        <div class="inner-content grid-x grid-margin-x grid-padding-x align-middle">
            <div class="small-12 large-6 medium-6 cell">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/show-1.jpg">
            </div>
            <div class="small-12 large-6 medium-6 cell">
              <p class="info-box">Join us for a delicious day of fun, inspiration and the opportunity to meet the best and most creative wedding and event vendors Wellington has to offer.</p>
            </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
    
    <div class="grid-container padding-row">
        <div class="inner-content grid-x grid-margin-x grid-padding-x align-middle">
            <div class="small-12 large-6 medium-6 cell">
              <p class="info-box">Join us for a delicious day of fun, inspiration and the opportunity to meet the best and most creative wedding and event vendors Wellington has to offer.</p>
            </div>
            
            <div class="small-12 large-6 medium-6 cell">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/show-2.jpg">
            </div>
            
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
        
    <div class="grid-container padding-row">
        <div class="inner-content grid-x grid-margin-x grid-padding-x align-middle">
            <div class="small-12 large-6 medium-6 cell">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/show-3.jpg">
            </div>
            <div class="small-12 large-6 medium-6 cell ">
              <p class="info-box">Join us for a delicious day of fun, inspiration and the opportunity to meet the best and most creative wedding and event vendors Wellington has to offer.</p>
            </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
        
        
        
        
   <section class="scenemagazine">
        <div class="grid-container ">
            <div class="inner-content grid-x grid-margin-x grid-padding-x">
                <div class="small-12 large-12 medium-12 cell">
                    <p>Introducing SEEN MAGAZINE. <br />Celebrating the Wellington Weddings <br />& Events Show Scene</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scene-cover-100.jpg">
                    <p>Available 1ST MAY</p>
                </div>
            </div> <!-- end #inner-content -->
        </div><!-- end grid-container --> 
    </section>

        
        
	</div> <!-- end #content -->

<?php get_footer(); ?>