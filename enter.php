<?php include('header.php'); ?>


<section class="s-register">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_m">

				<div class="white-panel white-panel--centered">
					<p class="h2">Войти в кабинет</p>
					<p class="form__descr">Для упрощения регистрации и входа Вы можете связать свой аккаунт в соц.сети с личным кабинетом</p>
					<div class="form__soc-enter">
						<img src="img/register/enter-soc.jpg" alt="">
					</div>
					<div class="error-block">
						<p>Неверный логин/пароль</p>
					</div>
					<form class="enter-form">
						<input type="email" name="" class="input-text error" placeholder="Введите e-mail*">
						<span class="input-block-pass">
							<input type="password" name="" class="input-text" placeholder="Введите пароль*">
							<i class="i-eye" title="Показать/скрыть пароль"></i>
						</span>
						<button type="submit" class="btn btn--big ">Войти <i class="i-right"></i></button>
					</form>
					<a href="/restore.php" class="form__pass-last">Забыли пароль?</a>
				</div>

			</div>

			<div class="grid-6 grid-12_m">
				<div class="register__text register__text--new">
					<p class="h2">Я — новый покупатель</p>
					<div class="user-content">
						<p>Регистрация позволит получать бонусы и экономить время при следующих покупках, а так же у вас будет доступ к истории своих заказов.</p>
					</div>
					<a href="/register.php" class="btn btn--big btn--outline">Зарегистрироваться<i class="i-right"></i></a>
					<p class="register__text-descr">Это займет не более минуты</p>
				</div>
			</div>

		</div>
	</div>
</section>



<?php include('footer.php'); ?>