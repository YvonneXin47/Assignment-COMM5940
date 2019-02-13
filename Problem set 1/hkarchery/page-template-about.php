<?php
/*
Template Name: About-Archery
Template Post Type: Page
*/

get_header(); 

?>

  <section id="banner-1">
    <div class="banner-container wow fadeIn">
      <h1 class="mb-4 pb-0">Get Started</h1>
      <p class="mb-4 pb-0">Learn the basics here, from what is archery to the rules of play.</p>
    </div>
  </section>

  <main id="main" class="main-page">

    <!--==========================
      About Archery Section
    ============================-->
    <section id="tutorials-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>About Archery</h2>
        </div>

        <div class="row">
          <div class="col-md-6">
            <img src="<?php bloginfo('template_url'); ?>/img/archery/0.jpg" alt="Tutorials" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>What Is Archery?</h2>
              <br/>
              <p style="text-align: justify;">Archery is the practice or skill of using a bow to shoot arrows.
                Historically, it has been used for hunting and combat.
                While today, it is mainly a competitive sport and recreational
                activity which is accessible for all ages, genders and abilities.
              </p>

              <p style="text-align: justify;">Archery requires skills of precision,
                control, focus, repetition and determination. One shot can have you hooked for a lifetime.</p>

              <p style="text-align: justify;">
              Archery has evolved into several variations in format. The main
              types are target, field, 3D, clout and flight archery.
              Each requires slightly different shooting methods and equipment.
              Whether you want to shoot inside or outside, at a range or in the
              wilderness, there is an archery style that meets your needs.
              Learn more from below to see which is right for you.</p>

            </div>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Types of Archery Section
    ============================-->
    <section id="tutorials" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Types of Archery</h2>
        </div>

        <div class="row">
			<!--start the loop-->
          <?php 
			$args = array(
			  'post_type' => array('type_of_archery')
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

    <!--==========================
          Types of Bow Section
        ============================-->
        <section id="blocks" class="wow fadeInUp">

          <div class="container">
            <div class="section-header">
              <h2>Types of Bow</h2>
            </div>

            <div class="row">

              			<!--start the loop-->
          <?php 
			$args = array(
			  'post_type' => array('type_of_bow')
			 );

			// WP_Query
			$eq_query = new WP_Query( $args );
		   ?>

			<?php  if ($eq_query->have_posts()) : 
						 while ($eq_query->have_posts()): 
						 $eq_query->the_post();  ?>

						<div class="col-lg-3 col-md-6"> 
						<a href="<?php the_permalink(); ?>" target="_blank">
						<div class="bow">		  
						  <div class="bow-img"><?php the_post_thumbnail('large','style=max-width:100%;height:auto;'); ?> </div>
						  <h3><?php the_title(); ?></h3>
						  <p><?php the_excerpt(); ?></p>
						</div>
						</a>
						</div> <!--/col-md-4--> 

		<?php endwhile;
			  endif; ?>

            </div><!--/row-->
          </div><!--/container-->

        </section><!-- End of Types of Bow -->

        <!--==========================
          Rules of Play Section
        ============================-->
        <section id="faq" class="section-with-bg wow fadeInUp">

          <div class="container">

            <div class="section-header">
              <h2>Rules of Play</h2>
            </div>

            <div class="row justify-content-center">
				
			 		<?php 
						$args = array(
						  'post_type' => array('rule_of_play')
						 );

						// WP_Query
						$eq_query = new WP_Query( $args );
						?>

						<?php  if ($eq_query->have_posts()) : 
									 while ($eq_query->have_posts()): 
									 $eq_query->the_post();  ?>
	
						  <div class="col-lg-9">
							  <ul id="faq-list">
								<li>
								  <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?><i class="fa fa-minus-circle"></i></a>
								</li>
							  </ul>
						  </div>
				
						<?php endwhile;
						  endif; ?>
				
            </div><!--/row-->

          </div><!--/container-->

        </section>

  </main>

<?php get_footer(); ?>