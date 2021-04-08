<?php

function slider_one(){
	ob_start();
	?>
		<!-- Тут пишем кусок html кода -->

		<div class="container">

		<div class="container-slider">
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
    	</div>

		</div>

		<!-- Тут пишем кусок html кода -->
	<?php

	return ob_get_clean();
}
add_shortcode('slider', 'slider_one');



?>