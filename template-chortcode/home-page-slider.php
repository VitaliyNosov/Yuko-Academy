<?php

// home page slider 

function home_page_slider(){
	ob_start();
	?>
		<!-- Тут пишем кусок html кода -->
		
<div class="home-page-slider">

		<!-- slider content -->

	<div class="home-page-slider-content">
		
		<div class="container">

			<div class="row">

				<div class="col-lg-6 col-sm-12">
					<div class="home-page-header">
	
						<h1>Платформа </br> Современного </br> обучения</h1>

					</div>

				<div class="home-page-info">
	
				<span>Платформа современного обучения
					предназначенная для повышения и
					проверки знаний специалистов по
					смазочным материалам. Данная
					платформа является полноценным учебным ресурсом всесторонней
					профессиональной подготовки.
				</span>				
			</div>
				<div class="home-page-video-button">
					<div class="header-block-socila-buttom">
						<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i>Посмотреть видео</a>
				</div>
			</div>
	</div>


			</div>

		</div>
		
	</div>


		<!-- slider content -->

			<!-- slider content -->

			<div class="home-page-slider-content">
		
		<div class="container">

			<div class="row">

				<div class="col-lg-6 col-sm-12">
					<div class="home-page-header">
	
						<h1>Платформа </br> Современного </br> обучения</h1>

					</div>

				<div class="home-page-info">
	
				<span>Платформа современного обучения
					предназначенная для повышения и
					проверки знаний специалистов по
					смазочным материалам. Данная
					платформа является полноценным учебным ресурсом всесторонней
					профессиональной подготовки.
				</span>				
			</div>
				<div class="home-page-video-button">
					<div class="header-block-socila-buttom">
						<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i>Посмотреть видео</a>
				</div>
			</div>
	</div>


			</div>

		</div>
		
	</div>


		<!-- slider content -->

				<!-- slider content -->

	<div class="home-page-slider-content">
		
		<div class="container">

			<div class="row">

				<div class="col-lg-6 col-sm-12">
					<div class="home-page-header">
	
						<h1>Платформа </br> Современного </br> обучения</h1>

					</div>

				<div class="home-page-info">
	
				<span>Платформа современного обучения
					предназначенная для повышения и
					проверки знаний специалистов по
					смазочным материалам. Данная
					платформа является полноценным учебным ресурсом всесторонней
					профессиональной подготовки.
				</span>				
			</div>
				<div class="home-page-video-button">
					<div class="header-block-socila-buttom">
						<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i>Посмотреть видео</a>
				</div>
			</div>
	    </div>

	</div>

		</div>
		
	</div>

</div>

		<!-- Тут пишем кусок html кода -->
	<?php

	return ob_get_clean();
}
add_shortcode('home-page-slider', 'home_page_slider');


?>