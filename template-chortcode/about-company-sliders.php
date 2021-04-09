<?php

// about slider one

function about_slider_one(){
	ob_start();
	?>
		<!-- Тут пишем кусок html кода -->
		
        <div class="slider">
            <div class="slide">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-20.png" alt="#">
            </div>
            <div class="slide">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-18.png" alt="#">
            </div>
            <div class="slide">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-19.png" alt="#">
            </div>
            <div class="slide">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-20.png" alt="#">
            </div>
            <div class="slide">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-18.png" alt="#">
            </div>
            <div class="slide">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-19.png" alt="#">
            </div>          
        </div>

		<!-- Тут пишем кусок html кода -->
	<?php

	return ob_get_clean();
}
add_shortcode('about-slider-one', 'about_slider_one');

// abbout slider two

function about_slider_two(){
	ob_start();
	?>
		<!-- Тут пишем кусок html кода -->

	<div class="slider-two">
            <div class="slide-two">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-40-1.png" alt="#">
            </div>
            <div class="slide-two">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-41-1.png" alt="#">
            </div>
            <div class="slide-two">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-42-1.png" alt="#">
            </div>
            <div class="slide-two">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-40-1.png" alt="#">
            </div>
            <div class="slide-two">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-41-1.png" alt="#">
            </div>
            <div class="slide-two">
                <img src="http://academy.testing.in.net/wp-content/uploads/2021/04/Rectangle-42-1.png" alt="#">
            </div>
    </div>

		<!-- Тут пишем кусок html кода -->
	<?php

	return ob_get_clean();
}
add_shortcode('about-slider-two', 'about_slider_two');



?>