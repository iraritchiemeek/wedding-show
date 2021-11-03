<?php 
/**
 * The template for the home page
 *

 */

get_header(); ?>
	
	<div class="content">
    <div class="scene-title-logo-container text-center">
    </div>
        
        <section class="cover">
        <div class="grid-container">
               <div class="grid-x grid-margin-x showdetails">
                <div class="cell small-4 border-right"><p>Wellington<br /> Wedding & <br />Event Show</p></div>
                <div class="cell small-4 border-right"><p>1ST MAY, <br />10am – 4pm,<br />2022</p></div>
                <div class="cell small-4"><p>TSB BANK <br />AREA, <br />WELLINGTON</p></div>
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
        
    <div class="grid-container">
        <div class="inner-content grid-x grid-margin-x grid-padding-x">
            <div class="small-12 large-12 medium-12 cell">
            <p>EXHIBITORS</p>
            </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
        
            <div class="grid-container exhibitors">
        <div class="inner-content grid-x grid-margin-x grid-padding-x">
            <div class="small-12 large-12 medium-12 cell">
                <ul>
                    <li><a href="#">Caterers</a><sub class="number-of"> 5</sub></li>
                    <li><a href="#">Entertainment</a><sub class="number-of"> 7</sub></li>
                    <li><a href="#">Florists</a><sub class="number-of"> 4</sub></li>
                    <li><a href="#">Fashion</a><sub class="number-of"> 5</sub></li>
                    <li><a href="#">Hair & makup</a><sub class="number-of"> 2</sub></li>
                    <li><a href="#">Photography & videographers</a><sub class="number-of"> 15</sub></li>
                    <li><a href="#">Planners</a><sub class="number-of"> 3</sub></li>
                    <li><a href="#">Stylists</a><sub class="number-of"> 4</sub></li>
                    <li><a href="#">Transport</a><sub class="number-of"> 2</sub></li>
                    <li><a href="#">Venues</a><sub class="number-of"> 10</sub></li>
                </ul>
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