<?php include('header.php'); ?>


<section class="s-promo-details">
	<div class="container">

		<div class="row">

			<div class="grid-6 grid-7_l grid-8_s grid-12_xs">
				<h1 class="h1 s-promo-details__title">Название акции длинное в несколько строк</h1>

				<div class="user-content s-promo-details__descr">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur cum debitis facere harum illo minus nihil nulla qui quia quos reiciendis sapiente sed, temporibus unde vel velit, veritatis vero? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<h3>Lorem ipsum dolor sit amet at culpa cumque facere</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur cum debitis facere harum illo minus nihil nulla qui quia quos reiciendis sapiente sed, temporibus unde vel velit, veritatis vero? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<h4>Lorem ipsum dolor sit amet at culpa cumque facere</h4>
					<ul>
						<li>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus; </li>
						<li>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus; </li>
						<li>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus; </li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur cum debitis facere harum illo minus nihil nulla qui quia quos reiciendis sapiente sed, temporibus unde vel velit, veritatis vero? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<ol>
						<li>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus;</li>
						<li>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus;</li>
						<li>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus;</li>
					</ol>
				</div>

				<div class="social-share">
					<p class="h5">Расскажи об этом обязательно друзьям:</p>
					<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
					<script src="//yastatic.net/share2/share.js"></script>
					<div class="ya-share2" data-services="vkontakte,facebook,twitter" data-counter=""></div>
				</div>
			</div>

			<div class="grid-6 grid-5_l grid-4_s hidden_xs">
				<div class="b-promo b-promo--details">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-promo-related">
	<div class="container">

		<p class="h2">Другие акции</p>

		<div class="promo-list row">

			<div class="grid-3 grid-4_l grid-6_s">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>
			</div>

		</div>

	</div>
</section>


<section class="s-subscribe">
	<div class="container">
		<p class="h1">Узнавай об акциях первым!</p>

		<form class="ajax-form subscribe-form">
			<div class="subscribe-form__block">
				<input type="email" name="user_email" class="input-text" placeholder="Введите e-mail*" data-label="Email" data-req="true">
				<button type="submit" class="btn btn--big"><i class="i-right"></i></button>
			</div>
			<input type="hidden" value="Подписка на новости и акции" name="form_subject">
			<label class="style-checkbox style-checkbox--policy">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked>
				<span class="style-checkbox__label">
					<span class="style-checkbox__descr">Заполняя поля и нажимая на кнопку “Оплатить”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a>.</span>
				</span>
			</label>
		</form>

	</div>
</section>

<?php include('footer.php'); ?>