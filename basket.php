<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Корзина</h1>
	</div>
</section>


<section class="s-basket-top-actions">
	<div class="container">

		<a href="#" class="btn btn--big btn--outline fancy" data-src="#modal-oneclick">Оформить в 1 клик <i class="i-right"></i></a>
		<a href="#" class="btn btn--big">Все верно, перейти к оформлению <i class="i-right"></i></a>

	</div>
</section>


<section class="s-basket wave-bottom-light-blue">
	<div class="container">

		<div class="basket-list">

			<div class="basket-item">
				<div class="basket-item__col--key">1</div>
				<div class="basket-item__col--thumb">
					<a href="#"><img src="/img/thumbs/basket-thumb.jpg" alt=""></a>
				</div>
				<div class="basket-item__col--name">
					<div class="basket-item__col-title">Наименование</div>
					<a href="#" class="basket-item__name"><span class="h5">Большой прозрачный шар</span></a>
				</div>
				<div class="basket-item__col--price">
					<div class="basket-item__col-title">Цена</div>
					<div class="basket-item__price">3 430 руб.</div>
					<div class="basket-item__oldprice">4 630 руб.</div>
				</div>
				<div class="basket-item__col--num">
					<div class="basket-item__col-title">Количество</div>
					<div class="numblock">
						<span class="numblock__btn">-</span>
						<input type="text" value="2">
						<span class="numblock__btn">+</span>
					</div>
				</div>
				<div class="basket-item__col--sum">
					<div class="basket-item__col-title">Сумма</div>
					<div class="basket-item__sum">6 860 руб.</div>
				</div>
				<a href="#" class="basket-item__delete" title="Удалить из корзины"></a>
			</div>

			<div class="basket-item">
				<div class="basket-item__col--key">55</div>
				<div class="basket-item__col--thumb">
					<a href="#"><img src="/img/thumbs/basket-thumb.jpg" alt=""></a>
				</div>
				<div class="basket-item__col--name">
					<div class="basket-item__col-title">Наименование</div>
					<a href="#" class="basket-item__name"><span class="h5">Большой прозрачный шар Морской пузырик Большой шар Морской пузырик</span></a>
				</div>
				<div class="basket-item__col--price">
					<div class="basket-item__col-title">Цена</div>
					<div class="basket-item__price">356 430 руб.</div>
				</div>
				<div class="basket-item__col--num">
					<div class="basket-item__col-title">Количество</div>
					<div class="numblock">
						<span class="numblock__btn">-</span>
						<input type="text" value="2">
						<span class="numblock__btn">+</span>
					</div>
				</div>
				<div class="basket-item__col--sum">
					<div class="basket-item__col-title">Сумма</div>
					<div class="basket-item__sum">686 860 руб.</div>
				</div>
				<a href="#" class="basket-item__delete" title="Удалить из корзины"></a>
			</div>

		</div>

	</div>
</section>


<section class="s-basket-summary">
	<div class="container">

		<div class="basket-summary">

			<div class="basket-summary__coupon">
				<div class="coupon">
					<input type="text" class="input-text" placeholder="Введите купон">
					<button type="submit" class="btn"><i class="i-right"></i></button>
				</div>
			</div>

			<div class="basket-summary__col basket-summary__col--itogo">
				<div class="h3">Итого:</div>
			</div>

			<div class="basket-summary__col">
				<div class="basket-summary__col-title">Скидка</div>
				<div class="basket-summary__val">3 000 руб.</div>
			</div>

			<div class="basket-summary__col">
				<div class="basket-summary__col-title">Количество</div>
				<div class="basket-summary__val">3</div>
			</div>

			<div class="basket-summary__col">
				<div class="basket-summary__col-title">Сумма</div>
				<div class="basket-summary__val">14 000 руб.</div>
			</div>

		</div>


	</div>
</section>


<section class="s-basket-bottom-actions">
	<div class="container">

		<a href="#" class="link"><i class="i-left"></i> Продолжить покупки</a>
		<a href="#" class="btn btn--big btn--outline fancy" data-src="#modal-oneclick">Оформить в 1 клик <i class="i-right"></i></a>
		<a href="#" class="btn btn--big">Все верно, перейти к оформлению <i class="i-right"></i></a>

	</div>
</section>



<?php include('footer.php'); ?>