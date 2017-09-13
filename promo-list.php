<?php include('header.php'); ?>

<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Акции </h1>
	</div>
</section>


<section class="s-promo-list">
	<div class="container">

		<div class="promo-list row">

			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo b-promo--old">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo b-promo--old">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo b-promo--old">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo b-promo--old">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo b-promo--old">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>
			</div>
			<div class="grid-3 grid-4_l grid-6_s grid-12_xs">
				<a href="#" class="b-promo b-promo--old">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>
			</div>

		</div>

		<div class="pagination">
			<a href="#" title="Предыдущая страница"><i class="i-left"></i></a>
			<a href="#" class="active">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#" title="Следующая страница"><i class="i-right"></i></a>
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