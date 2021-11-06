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
                    <?php foreach($exhibitor_types as $type) : ?>
                        <li><a href="<?php echo get_permalink($type); ?>"><?php echo $type->post_title; ?></a><sub class="number-of"><?php echo getTypeCount($type); ?></sub></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div> <!-- end #inner-content -->
    </div><!-- end grid-container --> 
   <section class="scenemagazine">
        <div class="grid-container ">
            <div class="inner-content grid-x grid-margin-x grid-padding-x">
                <div class="small-12 large-12 medium-12 cell">
                    <p>Introducing SCENE MAGAZINE. <br />Celebrating the Wellington Weddings <br />& Events Show Scene</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scene-cover-100.jpg">
                    <p>Available 1ST MAY</p>
                </div>
            </div> <!-- end #inner-content -->
        </div><!-- end grid-container --> 
    </section>

        
        
	</div> <!-- end #content -->

<?php get_footer(); ?>