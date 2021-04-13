<?php
/*
Template Name: registration page 
*/
get_header();
?>


    <main class="content-yuko-academy">
       
        
        <div class="wplb_flex wplb_holder <?php echo is_user_logged_in() ? 'wplb_alert wplb_signon' : ''?>">
			<?php if(is_user_logged_in()) {
				echo 'Вы уже авторизованный пользователь! <a href="'.wp_logout_url().'">Выход</a>';
			}else { ?>

    		<?php } ?>
        

    <!-- Блок авторизации -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">

        <!-- <Add .modal-dialog-centered to .modal-dialog to vertically center the modal  -->
    <div class="modal-dialog modal-dialog-centered" role="document">


    <div class="modal-content">
      <div class="modal-header">
	  	
			<div class="container">
				<h1 class="modal-title" id="YokoModalLongTitle">Войти</h1>
			</div>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <div class="modal-body">
	  <div class="container">		
			<p class="authorization-info">Нет аккаунта? <span><a onclick="window.location.href = 'http://academy.testing.in.net/%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0-%d1%80%d0%b5%d0%b3%d0%b8%d1%81%d1%82%d1%80%d0%b0%d1%86%d0%b8%d0%b8/';">Зарегистрируйтесь здесь</a></span></p>

			<form data-type="authorization" autocomplete="false">
				<div class="authorization-inputs-block">

            		<div class="inputs">
                		<label for="name">Имя</label>
                		<input type="text" name="wplb_login" placeholder="Ваше Имя" require>        
            		</div>
            		<div class="inputs">
                		<label for="name">Пароль</label>
                		<input type="password" name="wplb_password" placeholder="Ваш Пароль" require>        
            		</div>

				</div>
					<input class="button-authorization" type="submit" name="wplb_submit" value="Войти">
				<div class="wplb_alert"></div>
			</form>

		</div>

    </div>

    </div>

  </div>

</div>

        <!-- Блок регистрация -->


<main id="primary" class="registration-page">

	<div class="container">

    <div class="form-header">
            <h1>Регистрация</h1>
            <div class="form-button-info">
                <a href="">Обратится с вопрос в<i class="fab fa-viber"></i></a>
            </div>
    </div>
        
    <form  data-type="registration" autocomplete="off">

        <div class="registration-inputs-block">
            <div class="inputs">
                <label for="name">Имя</label>
                <input type="text" placeholder="Ваше Имя" name="wplb_login" required>        
            </div>
            <div class="inputs">
                <label for="name">Фамилия</label>
                <input type="text" placeholder="Ваша фамилия" name="surname" required>        
            </div>
        </div>

        <div class="registration-inputs-block">
            <div class="inputs">
                <label for="name">Телефон</label>
                <input type="text" placeholder="+380 -- --">        
            </div>
            <div class="inputs">
                <label for="name">E-mail</label>
                <input type="text" placeholder="example@mail.com" name="wplb_email" required>        
            </div>
        </div>

        <div class="registration-inputs-block">
            <div class="inputs">
                <label for="name">Город</label>
                <select name="city" id="#">
                    <option value="value 1" selected>Выберете свой город</option>
                    <option value="value 2">ДНЕПР</option>
                    <option value="value 3">КИЕВ</option>
                </select>      
            </div>
            <div class="inputs">
                <label for="name">Компания</label>
                <input type="text" placeholder="Название компани" name="company" required>        
            </div>
        </div>

        <div class="registration-inputs-block">
            <div class="inputs">
                <label for="name">Пароль</label>
                <input type="text" placeholder="Не меньше 8 символов" name="wplb_password" required>        
            </div>
            <div class="inputs">
                <label for="name">Повторите пароль</label>
                <input type="text" placeholder="Повторите пароль" name="password_repeat" required>        
            </div>
        </div>

        <div class="inputs-cheked">
            <li>
                <input type="checkbox" name="checkbox">
                <label class="label-text" for="info">Я даю согласия на обработку личных данных, согласно <span>Полититке конфидициальности</span></label>
            </li>
        </div>

        <div class="button-form">
            <button type="submit" name="wplb_submit" class="btn btn-danger">Зарегистрироваться</button>
        </div>
        
        
    </form>

</main>



</main>

	
<?php

get_footer();