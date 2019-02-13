  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="HK Archery">
            <p>The HK Archery website is designed to serve
              the local archery amateurs and to engage more people with this sport!</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>HK Archery</h4>
            <div>
              <div class="left">
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="<?php bloginfo('template_url'); ?>/index.html">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="<?php bloginfo('template_url'); ?>/archery.html">About Archery</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="<?php bloginfo('template_url'); ?>/tutorials.html">Tutorials</a></li>
            </ul>
              </div>
              <div class="right">
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="<?php bloginfo('template_url'); ?>/ranking.html">Ranking</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="<?php bloginfo('template_url'); ?>/clubs.html">Clubs</a></li>
            </ul>
              </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Declaration</h4>
            <p>
              This is a student project by Yvonne Xin for the course
              COM5961 of the New Media Programme of the School of Journalism
              and Communication, CUHK.
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php bloginfo('template_url'); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/superfish/superfish.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/venobox/venobox.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php bloginfo('template_url'); ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

  <!-- Javascript For Map -->
  <script>
      var mapboxTiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy; <a href="https://openstreetmap.org">OpenStreetMap</a>', maxZoom: 18,})

      var map = L.map('map')
            .addLayer(mapboxTiles)
            .setView([22.3489, 114.1464], 11);

      var items = [];
      var airtable_read_endpoint = "https://api.airtable.com/v0/appoSSyxNcXWWvTf0/Archery%20Club?api_key=keyx6ScOw6mCv5Vc4&sortField=_createdTime&sortDirection=desc";
      var data = [];
      $.getJSON(airtable_read_endpoint, function(result) {
             $.each(result.records, function(key,value) {
                 items = {};
                     items["name"] = value.fields.Name;
                     items["url"] = value.fields.url;
                     items["latitud"] = value.fields.Lat;
                     items["longitud"] = value.fields.Lng;
                     data.push(items);
                     console.log(items);
              }); // end .each
      }); // end getJSON
  </script>
  <script>
  function show_districts(){

    for (var i in data) {
        var latlng = L.latLng({ lat: data[i].latitud, lng: data[i].longitud });
        L.marker( latlng )
        .bindPopup( '<a href="' + data[i].url + '" target="_blank">' +data[i].name + '</a>' )
        .addTo(map);
    }
  }
  </script>
  <?php wp_footer(); ?>
</body>

</html>