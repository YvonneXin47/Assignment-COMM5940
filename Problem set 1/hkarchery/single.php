<?php get_header(); ?>

  <main id="main" class="main-page">

    <!--==========================
      Tutorials Details Section
    ============================-->
    <section id="tutorials-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2><?php the_title(); ?></h2>
        </div>

        <div class="row">

          <div class="col-md-9" style="float: none; margin: 0 auto;">
            <div class="details">
			  
				<?php if (have_posts()):
     				  while (have_posts()):
      						  the_post();?>  
                   			 			
				  <?php the_content(); ?>
                  					     
				<?php endwhile;
					  endif; ?>

            </div>
          </div>

        </div>
      </div>

    </section>

  </main>


<?php get_footer(); ?>
