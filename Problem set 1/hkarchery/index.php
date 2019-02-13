<?php get_header() ?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">HONG KONG <span>ARCHERY</span></h1>
      <p class="mb-4 pb-0">For local archery amateurs and anyone who would like to explore it with us.<br> One shot can have you hooked for a lifetime.</p>
      <a href="https://youtu.be/hLwqskjFXwU" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About Archey</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>WHAT IS ARCHERY</h2>
            <p>Archery is the practice or skill of using a bow to shoot arrows.
              Historically, it has been used for hunting and combat. While today,
              it is mainly a competitive sport and recreational activity which
              is accessible for all ages, genders and abilities. Archery requires
              skills of precision, control, focus, repetition and determination.
              One shot can have you hooked for a lifetime. </p>
          </div>
          <div class="col-lg-3">
            <h3>Types of Archery</h3>
            <li>Target archery</li>
            <li>Field archery</li>
            <li>3D archery</li>
            <li>Clout archery</li>
            <li>Flight archery</li>
          </div>
          <div class="col-lg-3">
            <h3>Types of Bow</h3>
            <li>Recurve</li>
            <li>Compound</li>
            <li>Traditional</li>
            <li>Crossbow</li>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Tutorials Section
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

    <!--==========================
          Articles Section
        ============================-->
        <section id="blocks" class="section-with-bg wow fadeInUp">

          <div class="container">
            <div class="section-header">
              <h2>Archery Articles</h2>
            </div>
			  
			  <div class="row">
				   
				<!-- Start the Article Loop -->
				<?php if (have_posts()):
     				  while (have_posts()):
      						  the_post();?>  
							
               <div class="col-lg-4 col-md-6"> 
				<a href="<?php the_permalink(); ?>" target="_blank">
               	<div class="bow">		  
                  <div class="bow-img"><?php the_post_thumbnail('large','style=max-width:100%;height:auto;'); ?> </div> 					  
				  <h3><?php the_title(); ?></h3>
                </div>
				</a>
				</div> <!--/col-md-4-->   
				<?php endwhile;
					  endif; ?>
					  			                       
            </div><!--/row-->

          </div> <!--/container-->

        </section>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="wow fadeInUp">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#December" role="tab" data-toggle="tab">DEC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#January" role="tab" data-toggle="tab">JAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#February" role="tab" data-toggle="tab">FEB</a>
          </li>
        </ul>

        <div class="tab-content row justify-content-center">

          <!-- Schdule December -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="December">

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>01 - 02</b><br/>7:00-19:00</time></div>
              <div class="col-md-10">
                <h4>Hong Kong Youth Outdoor Target Archery Open Competition</h4>
                <p><span>LSFAR • YOUTH</span></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>15 - 16 / 23</b><br/>7:00-19:00</time></div>
              <div class="col-md-10">
                <h4>Hong Kong Youth Indoor Archery Elimination Tournament</h4>
                <p><span>LWHSC • YOUTH</span></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>16</b><br/>7:00-19:00</time></div>
              <div class="col-md-10">
                <h4>NDAC Archery Competition</h4>
                <p><span>NDSG • YOUTH</span></p>
              </div>
            </div>

          </div>
          <!-- End Schdule December -->

          <!-- Schdule January -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="January">

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>06</b><br/>7:00-19:00</time></div>
              <div class="col-md-10">
                <h4>Tsuen Wan District Archery Competition 2018/19</h4>
                <p><span>SMVSG • RECURVE NOVICE • JUNIOR • INTERMEDIATE</span></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>13</b><br/>7:00-19:00</time></div>
              <div class="col-md-10">
                <h4>The 11th Eastern District Archery Championship</span></h4>
                <p><span>TBC</span></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>19 / 26 - 27</b><br/>7:00-19:00</time></div>
              <div class="col-md-10">
                <h4>HK Target Archery Championship (Star Shoot)</h4>
                <p><span>LSFAR • RECURVE • COMPOUND • ALL</span></p>
              </div>
            </div>

          </div>
          <!-- End Schdule January -->

          <!-- Schdule February -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="February">

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>17</b><br/>8:00-20:00</time></div>
              <div class="col-md-10">
                <h4>20th HKUST Indoor Archery Open Competition</h4>
                <p><span>HKUST • ALL</span></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>17</b><br/>8:00-20:00</time></div>
              <div class="col-md-10">
                <h4>Wong Tai Sin Archery Competition 2018/19</h4>
                <p><span>NCWPAR • RECURVE JUNIOR • RECURVE NOVICE • COMPOUND JUNIOR</span></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><b>24</b><br/>7:00-19:00</time></div>
              <div class="col-md-10">
                <h4>21st Tuen Mun Recreation and Sports Centre Archery Competition</h4>
                <p><span>TMRSC • RECURVE JUNIOR • RECURVE NOVICE</span></p>
              </div>
            </div>

          </div>
          <!-- End Schdule February -->

        </div>

      
    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="section-with-bg wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>LOCAL CLUBS</h2>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map" id="map"><iframe frameborder="0" style="border:0" allowfullscreen></iframe></div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>The Best Local Archery Clubs You Can't Miss</h3>
                <p>With professional archery clubs, Hong Kong is a perfect place
                  for playing archery. For those who don't know where to start
                  with, these clubs provide a comfortable environment with
                  professional coaching and equipments.</p><br/>
                <button type="button" id='show' onclick="show_districts();">Show Clubs</button>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>


  </main>


<?php get_footer() ?>