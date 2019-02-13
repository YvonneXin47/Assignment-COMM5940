<?php
/*
Template Name: Ranking
Template Post Type: Page
*/

get_header(); 

?>

  <section id="banner-4">
    <div class="banner-container wow fadeIn">
      <h1 class="mb-4 pb-0">Hong Kong Ranking</h1>
      <p class="mb-4 pb-0">See the latest rankings and top players' excellent performance.</p>
    </div>
  </section>

	<main id="main" class="main-page">
	<div class="row">
          <div class="col-md-9" style="float: none; margin: 0 auto;">
            <div class="details">
				
			<?php if (have_posts()):
				  while (have_posts()): 
				  the_post(); 
			?>
			    <?php
                        if ( is_page('ranking') ) {
                             echo "<center>Cool!</center>";
                             $query = new AirpressQuery();
                             $query->setConfig("Default");
                             $query->table("Furniture");
                             $query->addFilter("{Type}='Chairs'");

                             $events = new AirpressCollection($query);

                             foreach($events as $e){
                                 echo "<a href='/wp502a/furniture/".$e["ID"]."' target='_blank'>".$e["Name"]."</a>:<br>".
                                 substr($e["Description"],0,300)."<br><img src='".$e["Pic_name"]."'><hr><br>";
                                    }
                        }
                    ?>

			<?php endwhile;
				  endif; ?>

			 </div>
          </div>
        </div>
	</main>

<?php get_footer(); ?>