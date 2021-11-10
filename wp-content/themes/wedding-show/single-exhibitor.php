<?php 
/*
	Template Name: Single Exhibitor
*/

$type = get_field('type');
$hours = get_field('hours');
$phone = get_field('phone');
$address = get_field('address');
$email = get_field('email');
$website_url = get_field('website');
$website = explode('://', get_field('website'));
$website = end($website);
$facebook = get_field('facebook');
$instagram = get_field('instagram');
$notes = get_field('notes');

get_header(); ?>
	
	<div class="content">
        
        <div class="grid-container">
            <div class="grid-x grid-margin-x controls-row">
                <div class="cell small-6 medium-6 controls-left">                    
                    <p><a href="<?php echo get_permalink(9); ?>">EXHIBITORS</a></p>
                   </div>
               <div class="cell small-6 medium-6 controls-right">                    
                   <p><a href="<?php echo get_permalink($type) ?>"><?php echo strtoupper($type->post_title) ?></a></p></div>
              </div>
        </div>
        
	<div class="grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x exhibitor-title">
		    <main class="main small-12 large-12 medium-12 cell" role="main">
                <h1><?php echo get_the_title(); ?></h1>
			</main> <!-- end #main --> 
        </div> <!-- end #inner-content -->

		</div> <!-- end grid-container -->


         <div class="grid-container">
               <div class="grid-x grid-margin-x ">
                    <div class="cell small-12 medium-12">                    
                      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" style="object-fit: cover; height: 90%; width: 100%;" />
                    </div>
            </div>
          </div><!-- end grid-container -->
          <div class="grid-container">
               <div class="grid-x grid-margin-x details">                    
                   <div class="cell small-12 medium-2 details-list">                    
                      <h6>DETAILS</h6>
                        <?php echo $phone ? "<p>Phone: {$phone}</p>" : "" ?>
                        <?php echo $email ? "<p>Email: <a href='mailto:{$email}'>{$email}</a></p>" : "" ?>
                        <?php echo $website ? "<p>Website: <a href='{$website_url}' target='_blank'>{$website}</a></p>" : "" ?>
                        <?php echo $facebook ? "<p>Facebook: <a target='_blank' href='https://www.facebook.com/{$facebook}'>{$facebook}</p>" : "" ?>
                        <?php echo $instagram ? "<p>Instagram: <a target='_blank' href='https://www.instagram.com/{$instagram}'>{$instagram}</a></p>" : "" ?>
                    </div>


                    <div class="cell small-12 medium-6 medium-offset-4">   
                        <h6>ABOUT</h6>
                      <?php echo the_content(); ?>
                    </div>
                </div>
            </div><!-- end grid-container -->        

	</div> <!-- end #content -->

<?php get_footer(); ?>