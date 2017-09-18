<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Регистрация</h1>
	</div>
</section>


<section class="s-register">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_m">
				<form>
					<div class="checkout-panel vertical-form">
						<label class="input-block">
							<span class="input-block__label">Имя</span>
							<input type="text" name="" class="input-text" placeholder="Ваше имя">
						</label>
						<label class="input-block">
							<span class="input-block__label">Телефон*</span>
							<input type="tel" name="" class="input-text error" placeholder="Ваш телефон*">
						</label>
						<label class="input-block">
							<span class="input-block__label">E-mail*</span>
							<input type="email" name="" class="input-text error" placeholder="Ваш e-mail*">
						</label>
						<label class="input-block">
							<span class="input-block__label">Город</span>
							<input type="text" name="" class="input-text" placeholder="Ваш город" value="Москва">
						</label>
						<label class="input-block">
							<span class="input-block__label">Адрес</span>
							<input type="text" name="" class="input-text" placeholder="Ваш адрес">
						</label>
						<label class="input-block">
							<span class="input-block__label">Комментарии</span>
							<textarea  name="" class="input-text" placeholder="Текст комментария" rows="5"></textarea>
						</label>
						<label class="style-checkbox style-checkbox--policy">
							<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked>
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Заполняя поля и нажимая на кнопку “Отправить”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a>.</span>
							</span>
						</label>
						<input type="hidden" value="Вход в личный кабинет - Регистрация" name="form_subject">
						<div class="right-btn">
							<button type="submit" class="btn btn--big">Зарегистрироваться <i class="i-right"></i></button>
						</div>
					</div>
				</form>
			</div>

			<div class="grid-6 grid-12_m">
				<div class="register__text">
					<p class="h2">Зачем нужна регистрация?</p>
					<div class="user-content">
						<p>Зарегистрировавшись на сайте Вы сможете получить личный кабинет, что позволит Вам отслеживать историю заказов, быстрее оформлять заказы в нашем Интернет магазине, так как вся информация о Вас будет доступна в нашем магазине и ее не нужно будет повторно вносить.</p>
					</div>
					<img src="img/register/ballons.png" alt="">
				</div>
			</div>

		</div>
	</div>
</section>



<?php include('footer.php'); ?>