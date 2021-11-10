<?php 
/*
	Template Name: Show
*/


get_header(); ?>
	
	<div class="content">
        
        <section class="cover-show">
            <div class="bg-image bg-image-animate"></div>
            <div class="grid-container">
               <div class="grid-x grid-margin-x showdetails">
                    <div class="cell medium-4 "><p>1ST MAY 2022</p></div>
                   <div class="cell medium-4 medium-offset-4"><p>10AM - 4PM</p></div>
              </div>
                               <div class="grid-x grid-margin-x showdetails">
                   <div class="cell small-12"><h1>SCENE<br /> WEDDING &<br /> EVENT<br /> SHOW</h1></div>
                   </div>
                <div class="grid-x grid-margin-x">
                    <div class="cell medium-4"><p>TSB BANK AREA</p></div>
                    <div class="cell medium-4 medium-offset-4"><p>WELLINGTON</p></div>
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
              <p class="info-box">Experiences that bring us together and provide opportunities to celebrate and engage, whether for work or pleasure – personal growth or professional. </p>
            </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
    
    <div class="grid-container padding-row">
        <div class="inner-content grid-x grid-margin-x grid-padding-x align-middle ">
            <div class="small-12 large-6 medium-6 cell small-order-2 medium-order-1">
              <p class="info-box">Join us for a delicious day of fun, inspiration and the opportunity to meet the best and most creative wedding and event vendors Wellington has to offer.</p>
            </div>
            
            <div class="small-12 large-6 medium-6 cell small-order-1 medium-order-2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/show-2.jpg">
            </div>
            
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
        
    <div class="grid-container padding-row">
        <div class="inner-content grid-x grid-margin-x grid-padding-x align-middle">
            <div class="small-12 large-6 medium-6 cell">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/show-3.jpg">
            </div>
            <div class="small-12 large-6 medium-6 cell info-box">
                <p>See you on</p>
              <h2>Sunday <br />
                1st May<br />
                2022</h2>
                <p>10AM - 4PM<br />TSB BANK AREA</p>
            </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
        
     <div class="grid-container padding-row photo-credit">
        <div class="inner-content grid-x grid-margin-x grid-padding-x align-middle">
            <div class="small-12 cell">
              <p>A special thanks to <a href="https://patina.photo/" target="_blank">Patina Photo + Video</a>, <a href="https://www.facebook.com/sabrinakarinphotography/" target="_blank">Sabrina Karin Photography</a> and <a href="https://www.billiebrookphotography.co.nz/" target="_blank">Billie Brook Photography</a> for the images used on this page.</p>
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
                        <p class="dark">*Note that this is a mockup only. Cover image by <a href="https://patina.photo/" target="_blank">Patina Photo + Video</a></p>
                </div>
            </div> <!-- end #inner-content -->
        </div><!-- end grid-container --> 
    </section>

        
        
	</div> <!-- end #content -->

<?php get_footer(); ?>