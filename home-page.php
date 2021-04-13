<?php

/*
Template Name: home-page
*/

get_header();
?>

<main class="content-yuko-academy">


<!-- home page slider -->

	<!-- home page slider chortcode -->

		<?php echo do_shortcode( '[home-page-slider]' ); ?> 

	<!-- home page slide chortcode -->

<!-- home page slider -->


	<div class="home-page-info-block">
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-lg-4 col-sm-6">
				
					<div class="home-page-info-block-header">
					
						<p>Платформа Современного</br>обучения</p>
					
					</div>

					<div class="home-page-info-icon-block">
					
						<div class="home-page-icon-block">
							<div class="home-page-icon-content">

								<img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Page-1.png" alt="#">

							</div>
							<div class="home-page-info-text">
							
								<span>Прокачай знания</span>
							
							</div>

						</div>
						<div class="home-page-icon-block">
							<div class="home-page-icon-content">

								<img src="http://academy.testing.in.net/wp-content/uploads/2021/04/magnifying-glass-1.png" alt="#">

							</div>
							<div class="home-page-info-text">

								<span>Проверь свой уровень</span>

							</div>
						
						</div>
						<div class="home-page-icon-block">
							<div class="home-page-icon-content">

								<img src="http://academy.testing.in.net/wp-content/uploads/2021/04/ribbon-1.png" alt="#">

							</div>

							<div class="home-page-info-text">

								<span>Стань экспертом</span>

							</div>
						
						</div>
					
					</div>
				
				</div>
				<div class="col-lg-8 col-sm-6">

					<div class="home-page-navigation-menu">
					
						<img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Big-Link-Block.png" alt="#">

					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>
	
</main>

<?php
get_footer();
