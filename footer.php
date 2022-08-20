<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 DJI Drones 
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">Nikola Mihaylov</a></p>
            </div>
          </div>
        </div>
      </div>


    </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/isotope.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

<?php wp_footer();     ?>

  </body>


</html>
