<?php
/*
Template Name: Tutorial Video
Template Post Type: Page
*/

get_header();

?>

  <section id="banner-2">
    <div class="banner-container wow fadeIn">
      <h1 class="mb-4 pb-0">Archery Tutorials</h1>
      <p class="mb-4 pb-0">Taking your first shot is easy. Learn how to make it count.</p>
    </div>
  </section>

  <main id="main" class="main-page">

    <!--==========================
      Video Section
    ============================-->
    <section id="tutorials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Archery Videos</h2>
        </div>

        <div class="row">
			
		 <!-- Start the Video Loop -->
			
		<?php 
			$args = array(
			  'post_type' => array('archery_video')
			 );

			// WP_Query
			$eq_query = new WP_Query( $args );
			?>

			<?php  if ($eq_query->have_posts()) : 
						 while ($eq_query->have_posts()): 
						 $eq_query->the_post();  ?>

						   <div class="col-lg-4 col-md-6"> 
				     		 <a href="<?php the_permalink(); ?>" target="_blank">
							 <div class="tutorial">		  
							  <?php the_post_thumbnail('large','style=max-width:100%;height:auto;'); ?>  
					 		  <div class="details">
							  <h3><?php the_title(); ?></h3>
								  <p><i><?php the_excerpt(); ?></i></p>
							  </div>
							 </div>
							 </a>
				 		   </div> <!--/col-md-4-->   

		<?php endwhile;
			  endif; ?>
      
        </div><!--/row-->
      </div><!--/container-->

    </section>

  </main>



<?php get_footer(); ?>