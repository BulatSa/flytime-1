<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Оформление заказа</h1>
	</div>
</section>


<section class="s-checkout">
	<form action="/checkout-end.php" class="container">
		<div class="row">

			<div class="grid-6 grid-12_m">
				<div class="checkout-panel">
					<p class="h2 checkout-panel__title">1. Способ доставки</p>
					<label class="style-checkbox">
						<input type="radio" name="XXX" value="1" checked>
						<span class="style-checkbox__label">
							<span class="h3 style-checkbox__title">Самовывоз</span>
							<span class="style-checkbox__descr">Казань, ул.Академика Сахарова, д.31 Рядом ТЦ "MEGA", через дорогу от ТЦ"Домино" </span>
						</span>
					</label>
					<label class="style-checkbox">
						<input type="radio" name="XXX" value="2">
						<span class="style-checkbox__label">
							<span class="h3 style-checkbox__title">Курьер по Москве</span>
							<span class="style-checkbox__descr">Привезет в любую точку Москвы и в удобное для вас время</span>
						</span>
					</label>
				</div>
			</div>

			<div class="grid-6 grid-12_m">
				<div class="checkout-panel">
					<p class="h2 checkout-panel__title">2. Способ оплаты</p>
					<label class="style-checkbox">
						<input type="radio" name="YYY" value="1" checked>
						<span class="style-checkbox__label">
							<span class="h3 style-checkbox__title">Наличные курьеру</span>
							<span class="style-checkbox__descr">Оплата производится наличными деньгами, в момент получения заказа. Подтверждением вашей оплаты является фискальный кассовый чек, вручаемый во время получения и оплаты заказа.</span>
						</span>
					</label>
					<label class="style-checkbox">
						<input type="radio" name="YYY" value="2">
						<span class="style-checkbox__label">
							<span class="h3 style-checkbox__title">Онлайн-оплата</span>
							<span class="style-checkbox__descr">Оплата производится с помощью платежного сервиса Яндек.Касса</span>
						</span>
					</label>
				</div>
			</div>

			<div class="grid-6 grid-12_m">
				<div class="checkout-panel vertical-form">
					<p class="h2 checkout-panel__title">3. О покупателе</p>
					<label class="input-block">
						<span class="input-block__label">Имя</span>
						<input type="text" name="" class="input-text" placeholder="Введите имя">
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
						<span class="input-block__label">Город</span>
						<input type="text" name="" class="input-text" placeholder="Введите город" value="Москва">
					</label>
					<label class="input-block">
						<span class="input-block__label">Адрес</span>
						<input type="text" name="" class="input-text" placeholder="Введите адрес">
					</label>
					<label class="input-block">
						<span class="input-block__label">Комментарии</span>
						<textarea  name="" class="input-text" placeholder="Текст комментария" rows="5"></textarea>
					</label>
				</div>
			</div>

			<div class="grid-6 grid-12_m">
				<div class="checkout-panel">
					<p class="h2 checkout-panel__title">4. Заказ</p>

					<div class="checkout-products">
						<table>
							<tr>
								<th>Наименование</th>
								<th>Цена</th>
								<th>Кол-во</th>
								<th>Стоимость</th>
							</tr>
							<tr>
								<td>
									<span class="h5">Большой прозрачный шар Морской пузырик</span>
								</td>
								<td>
									<span class="checkout-products__price">3 430 руб.</span>
									<span class="checkout-products__oldprice">3 810 руб.</span>
								</td>
								<td>
									<span class="checkout-products__num">1</span>
								</td>
								<td>
									<span class="checkout-products__price">3 430 руб.</span>
								</td>
							</tr>
							<tr>
								<td>
									<span class="h5">Большой прозрачный шар</span>
								</td>
								<td>
									<span class="checkout-products__price">344 430 руб.</span>
									<span class="checkout-products__oldprice">3 810 руб.</span>
								</td>
								<td>
									<span class="checkout-products__num">2</span>
								</td>
								<td>
									<span class="checkout-products__price">688 430 руб.</span>
								</td>
							</tr>
							<tr>
								<td>
									<span class="h5">Большой прозрачный шар</span>
								</td>
								<td>
									<span class="checkout-products__price">4 430 руб.</span>
								</td>
								<td>
									<span class="checkout-products__num">555</span>
								</td>
								<td>
									<span class="checkout-products__price">250 430 руб.</span>
								</td>
							</tr>
						</table>
					</div>

					<div class="checkout-summary">
						<div class="checkout-summary__param">Товаров на сумму</div>
						<div class="checkout-summary__val">14 700 руб.</div>
					</div>
					<div class="checkout-summary">
						<div class="checkout-summary__param">Скидка</div>
						<div class="checkout-summary__val">4 410 руб.</div>
					</div>
					<div class="checkout-summary">
						<div class="checkout-summary__param">Доставка</div>
						<div class="checkout-summary__val">1 100 руб.</div>
					</div>
					<div class="checkout-summary checkout-summary--all">
						<div class="checkout-summary__param">Итого</div>
						<div class="checkout-summary__val">555 390 руб.</div>
					</div>

					<div class="checkout-actions">
						<a href="/basket.php" class="link"><i class="i-left"></i>Вернуться в&nbsp;корзину</a>
						<button type="submit" class="btn btn--big">Оформить <i class="i-right"></i></button>
					</div>

					<label class="style-checkbox style-checkbox--policy">
						<input type="checkbox" name="" value="yes" checked required>
						<span class="style-checkbox__label">
							<span class="style-checkbox__descr">Заполняя поля и нажимая на кнопку “Оформить”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a>.</span>
						</span>
					</label>
				</div>
			</div>

		</div>
	</form>
</section>


<?php include('footer.php'); ?>