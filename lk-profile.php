<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Личный кабинет</h1>

		<nav class="lk-nav">
			<a href="/lk-profile.php" class="active">Профиль</a>
			<a href="/lk-history.php">Заказы</a>
			<a href="/lk-favorite.php">Избранное</a>
			<a href="#">Выход</a>
		</nav>

	</div>
</section>


<section class="s-profile">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_m">

				<div class="white-panel">
					<p class="h2">Личные данные</p>
					<div class="error-block">
						<p>Неверный логин/пароль</p>
					</div>
					<form class="vertical-form">
						<label class="input-block">
							<span class="input-block__label">Имя</span>
							<input type="text" name="" class="input-text" placeholder="Введите имя">
						</label>
						<label class="input-block">
							<span class="input-block__label">Фамилия</span>
							<input type="text" name="" class="input-text" placeholder="Введите фамилию">
						</label>
						<label class="input-block">
							<span class="input-block__label">Телефон*</span>
							<input type="tel" name="" class="input-text error" placeholder="Введите телефон*">
						</label>
						<label class="input-block">
							<span class="input-block__label">E-mail*</span>
							<input type="email" name="" class="input-text error" placeholder="Введите e-mail*">
						</label>
						<label class="input-block">
							<span class="input-block__label">Пароль*</span>
							<span class="input-block-pass">
								<input type="password" name="" class="input-text error" placeholder="Введите пароль*">
								<i class="i-eye" title="Показать/скрыть пароль"></i>
							</span>
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
							<input type="checkbox" name="user_policy" value="yes" checked required>
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Заполняя поля и нажимая на кнопку “Сохранить”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a>.</span>
							</span>
						</label>
						<button type="submit" class="btn btn--big btn--outline">Сохранить <i class="i-right"></i></button>
					</form>
				</div>

			</div>

			<div class="grid-6 grid-12_m">
				<div class="register__text">
					<img src="img/register/ballons.png" alt="baloons">
				</div>
			</div>

		</div>
	</div>
</section>


<?php include('footer.php'); ?>