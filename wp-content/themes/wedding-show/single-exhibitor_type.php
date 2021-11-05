<?php 
/*
	Template Name: Single Exhibitor Type
*/

	function getExhibitors() {
		$args = array(
			'numberposts' => -1,
			'post_type' => 'exhibitor',
			'meta_query' => array(
		        array(
		            'key' => 'type',
		            'value' => get_the_ID(),
		            'compare' => '='
		        ),
		    )
		);
		$posts = get_posts($args);
		return $posts;
	}

	$exhibitors = getExhibitors();

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
               	<?php foreach($exhibitors as $exhibitor) : ?>
               		 <div class="cell small-12 medium-6 exhibitor-cat">                    
               		     <a href="<?php get_permalink($exhibitor) ?>"><img src="<?php echo get_the_post_thumbnail_url($exhibitor->ID, 'full'); ?>" style="object-fit: cover; height: 100%; width: 100%;">
               		     <h2><?php echo $exhibitor->post_title ?></h2></a>
               		</div>
               	<?php endforeach; ?>
            </div>

	</div> <!-- end #content -->

<?php get_footer(); ?>