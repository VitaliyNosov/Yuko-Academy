<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yuko_Academy
 */

?>
	
<!-- footer -->
      
<footer class="page-footer font-small footer-indigo">

  <div class="container">

      <div class="row">

        <div class=" col-lg-3 col-md-12">
          <div class="footer-logo">
		  	<!-- <img src="footer-logo.PNG" alt="#"> -->
			  <!-- <img src="http://academy.testing.in.net/wp-content/uploads/2021/03/footer-logo.png" alt="#"> -->
        <?php the_custom_logo(); ?>
		  </div>
        </div>

      <div class="col-lg-9 col-md-12 col-sm-12">

	
        <div class="menu-navigation">

		<ul>
		          
		  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'nav-item custom-nav-link nav-custom active',
				)
			);
		?>
		</ul>
		<!-- <ul class="">	
            <li class="nav-item">
              <a class="custom-nav-link" href="#">Главная
              </a>
            </li>
            <li class="nav-item">
              <a class="custom-nav-link" href="#">Обучение</a>
            </li>
            <li class="nav-item">
              <a class="custom-nav-link" href="#">Тестирование</a>
            </li>
            <li class="nav-item">
              <a class="custom-nav-link" href="#">О компании</a>
            </li>
            <li class="nav-item">
              <a class="custom-nav-link" href="#">Контакты</a>
            </li>   
        </ul> -->

      </div>

      </div>

   </div>

    <!-- </div> -->

  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <div class="social-block">
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i><a>
          <a href="https://www.instagram.com/" target="_black"><i class="fab fa-instagram"></i></a>
        </div>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

      <button type="button" class="btn custom-btn-contact">Техническая поддержка</button>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">


        <ul class="location-block">
          <!-- <p><i class="fas fa-map-marker-alt"></i>г.Киев, 00000</p>
          <p>ул.Название улицы,OOO,оф.OOO</p> -->
          <div class="content-block-info">

            <p><i class="fas fa-envelope"></i>mail@domenblock.com</p>

          </div>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->

        <ul class="footer-contact-block">
          <div class="content-block-info">

            <p><i class="fas fa-phone-alt"></i>000 000 000</p>

          </div>
          <!-- <p><i class="fas fa-envelope"></i>mail@domenblock.com</p> -->
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <div class="container">
    <hr>
  </div>

  <!-- Copyright -->
  <div class="container">
    <div class="footer-info-block">
      <p>© 2002-2021 СП Юкоил. Завад технических масел</p>
      <div class="footer-map">
        <p class="footer-map-site">Карта сайта</p>
        <p class="footer-policy-conditality">Политика конфедициальности</p>
      </div>
    </div>
</div>
  <!-- Copyright -->

</footer>

<!-- footer -->


<?php wp_footer(); ?>

</body>
</html>
