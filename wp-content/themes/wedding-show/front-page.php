<?php 
/**
 * The template for the home page
 *
*/

function getExhibitorTypes() {
    $args = array(
        'numberposts' => -1,
        'post_type' => 'exhibitor_type',
    );
    $posts = get_posts($args);
    return $posts;
}

function getTypeCount($type) {
    $args = array(
        'numberposts' => -1,
        'post_type' => 'exhibitor',
        'fields' => 'ids',
        'meta_query' => array(
            array(
                'key' => 'type',
                'value' => $type->ID,
                'compare' => '='
            ),
        )
    );
    $posts = get_posts($args);
    return count($posts);
}

$exhibitor_types = getExhibitorTypes();

get_header(); ?>
	
	<div class="content">
    <div class="scene-title-logo-container text-center">
    </div>
        
        <section class="cover">
            <div class="bg-image bg-image-animate"></div>
            <div class="grid-container">
               <div class="grid-x grid-margin-x showdetails">
                <div class="cell small-4 "><p>Wellington<br /> Wedding & <br />Event Show</p></div>
                <div class="cell small-4 border-left-right"><p>1ST MAY, <br />10am – 4pm,<br />2022</p></div>
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
      <div class="cell small-6 medium-6 controls-left">                    
                    <p><a href="<?php echo get_permalink(9); ?>">EXHIBITORS</a></p></p>
                   </div>
               <div class="cell small-6 medium-6 controls-right">                    
                   <p><a href="<?php echo get_permalink(6); ?>">1ST MAY 2022</a></p></div>
              </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
        
            <div class="grid-container exhibitors">
        <div class="inner-content grid-x grid-margin-x grid-padding-x">
            <div class="small-12 large-12 medium-12 cell">
                <ul>
                    <?php foreach($exhibitor_types as $type) : ?>
                        <li><a href="<?php echo get_permalink($type); ?>"><?php echo $type->post_title; ?></a><sub class="number-of"><?php echo getTypeCount($type); ?></sub></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 

     <div class="grid-container padding-row photo-credit">
        <div class="inner-content grid-x grid-margin-x grid-padding-x align-middle">
            <div class="small-12 cell">
              <p>A special thanks to Larissa from Fineline Photography for suppling the image used on this page.</p>
            </div>
        
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 

   <section class="scenemagazine">
        <div class="grid-container ">
            <div class="inner-content grid-x grid-margin-x grid-padding-x">
                <div class="small-12 large-12 medium-12 cell">
                    <p>Introducing SCENE MAGAZINE. <br />Celebrating our Wellington Wedding <br />& Event Scene</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scene-cover-100.jpg">
                    <p>Available 1ST MAY</p>
                    <p class="dark">*Note that this is a mockup only. Cover image by <a href="https://patina.photo/" target="_blank">Patina Photo + Video</a></p>
                </div>
            </div> <!-- end #inner-content -->
        </div><!-- end grid-container --> 
    </section>

        
        
	</div> <!-- end #content -->

<?php get_footer(); ?>