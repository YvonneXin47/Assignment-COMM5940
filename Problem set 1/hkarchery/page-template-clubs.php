<?php
/*
Template Name: Club
Template Post Type: Page
*/

get_header(); 

?>

  <section id="banner-5">
    <div class="banner-container wow fadeIn">
      <h1 class="mb-4 pb-0">Where to shoot</h1>
      <p class="mb-4 pb-0">Have no idea where to shoot? Here are the popular local clubs for you to explore.</p>
    </div>
  </section>

  <main id="main" class="main-page">

    <!--==========================
      Club Section
    ============================-->
    <section id="club" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>LOCAL CLUBS</h2>
        </div>

        <div class="row club-new">
				
			<?php if (have_posts()):
				  while (have_posts()): 
				  the_post(); 
			?>
						
			    <?php
                        if ( is_page('clubs') ) {
                             $query = new AirpressQuery();
                             $query->setConfig("Club");
                             $query->table("Archery Club");                            

                             $events = new AirpressCollection($query);
														
                             foreach($events as $e){
								 echo "<h4>".$e["Name"].":<br>"."</h4>";
                                 echo $e["Intro"]."<br><br>";

                                    }
							
                        }
                    ?>
												
			<?php endwhile;
				  endif; ?>

		</div><!--/row-->


      </div><!--/container-->

    </section>


  </main>


<?php get_footer(); ?>