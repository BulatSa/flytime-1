<?php include('header.php'); ?>


<section class="s-register">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_m">

					<div class="white-panel">
						<p class="h2">Регистрация</p>
						<div class="error-block">
							<p>Неверный логин/пароль</p>
						</div>
						<form class="vertical-form">
							<label class="input-block">
								<span class="input-block__label">E-mail*</span>
								<input type="email" name="" class="input-text error" placeholder="Введите e-mail*">
							</label>
							<label class="input-block">
								<span class="input-block__label">Телефон*</span>
								<input type="tel" name="" class="input-text error" placeholder="Введите телефон*">
							</label>
							<label class="input-block">
								<span class="input-block__label">Пароль*</span>
								<span class="input-block-pass">
									<input type="password" name="" class="input-text error" placeholder="Введите пароль*">
									<i class="i-eye" title="Показать/скрыть пароль"></i>
								</span>
							</label>
							<label class="input-block">
								<span class="input-block__label">Имя</span>
								<input type="text" name="" class="input-text" placeholder="Введите имя">
							</label>
							<label class="input-block">
								<span class="input-block__label">Город</span>
								<input type="text" name="" class="input-text" placeholder="Введите город" value="Москва">
							</label>
							<label class="input-block">
								<span class="input-block__label">Адрес</span>
								<input type="text" name="" class="input-text" placeholder="Введите адрес">
							</label>
							<label class="style-checkbox style-checkbox--policy">
								<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked>
								<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Заполняя поля и нажимая на кнопку “Отправить”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a>.</span>
								</span>
							</label>
							<button type="submit" class="btn btn--big">Зарегистрироваться <i class="i-right"></i></button>
						</form>
					</div>

			</div>

			<div class="grid-6 grid-12_m">
				<div class="register__text">
					<p class="h2">Зачем нужна регистрация?</p>
					<div class="user-content">
						<p>Зарегистрировавшись на сайте Вы сможете получить личный кабинет, что позволит Вам отслеживать историю заказов, быстрее оформлять заказы в нашем Интернет магазине, так как вся информация о Вас будет доступна в нашем магазине и ее не нужно будет повторно вносить.</p>
					</div>
					<img src="img/register/ballons.png" alt="baloons">
				</div>
			</div>

		</div>
	</div>
</section>



<?php include('footer.php'); ?>