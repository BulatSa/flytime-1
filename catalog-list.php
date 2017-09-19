<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Арки из шаров</h1>
	</div>
</section>


<section class="s-catalog-list">
	<div class="container">

		<div class="white-panel">
			<p class="h3">В этой категории нет товаров.</p>
		</div>

		<div class="row">

			<div class="grid-3 grid-12_l">

				<a href="#" class="btn btn--big filter-show-btn">Фильтр <i class="i-down"></i></a>
				<div class="filter-block">

					<div class="filter">
						<span class="h3 filter__title">Название свойства длинное как змея</span>
						<label class="style-checkbox">
							<input type="checkbox" name="filter_1" value="XXX" checked>
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Детские</span>
							</span>
						</label>
						<label class="style-checkbox">
							<input type="checkbox" name="filter_1" value="XXX" checked>
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Для свадеб</span>
							</span>
						</label>
						<label class="style-checkbox">
							<input type="checkbox" name="filter_1" value="XXX">
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">На открытие магазина, офиса, салона</span>
							</span>
						</label>
					</div>

					<div class="filter">
						<span class="h3 filter__title">Цвет</span>
						<label class="style-checkbox">
							<input type="checkbox" name="filter_2" value="XXX" checked>
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Красный</span>
							</span>
						</label>
						<label class="style-checkbox">
							<input type="checkbox" name="filter_2" value="XXX">
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Зеленый</span>
							</span>
						</label>
						<label class="style-checkbox">
							<input type="checkbox" name="filter_2" value="XXX">
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Розовый</span>
							</span>
						</label>
						<label class="style-checkbox">
							<input type="checkbox" name="filter_2" value="XXX">
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Черный</span>
							</span>
						</label>
						<label class="style-checkbox">
							<input type="checkbox" name="filter_2" value="XXX">
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Белый</span>
							</span>
						</label>
					</div>

					<div class="filter">
						<span class="h3 filter__title">Цена</span>

						<div class="price-filter">
							<div class="price-filter__header">
								<label>
									<span>от</span>
									<input type="text" placeholder="1100" class="price-filter--from">
								</label>
								<label>
									<span>до</span>
									<input type="text" placeholder="25000" class="price-filter--to">
								</label>
							</div>
							<input type="text" class="price_range" data-min="1100" data-max="25000" data-from="2000" data-to="8000">
						</div>

					</div>

					<div class="filter-block__footer">
						<a href="#" class="btn btn--big">Показать <i class="i-right"></i></a>
						<a href="#" class="link filter-block__reset">Сбросить фильтр</a>
					</div>

				</div>

				<a href="/promo-details.php" class="b-promo">
					<img src="/img/thumbs/promo-thumb.jpg" alt="1" class="b-promo__img">
				</a>

				<a href="/promo-details.php" class="b-promo">
					<img src="/img/thumbs/promo-thumb-2.jpg" alt="1" class="b-promo__img">
				</a>

			</div>

			<div class="grid-9 grid-12_l">

				<div class="catalog-sort">
					<select class="style-select">
						<option value="1">Цены по убыванию</option>
						<option value="2">Цены по возрастанию</option>
					</select>
					<select class="style-select">
						<option value="1">Рейтинг по убыванию</option>
						<option value="2">Рейтинг по возрастанию</option>
					</select>
					<select class="style-select">
						<option value="1">Показывть по 12</option>
						<option value="2">Показывть по 18</option>
						<option value="2">Показывть по 24</option>
					</select>
				</div>

				<div class="products-list row">
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<div class="b-product__sale">-50%</div>
								<a href="/catalog-details.php" class="b-product__title">Короткое название</a>
								<span class="b-product__oldprice">3 500 руб.</span>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик</a>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<div class="b-product__sale">-50%</div>
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик очень длинное название</a>
								<span class="b-product__oldprice">3 500 руб.</span>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик</a>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<div class="b-product__sale">-50%</div>
								<a href="/catalog-details.php" class="b-product__title">Короткое название</a>
								<span class="b-product__oldprice">3 500 руб.</span>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик</a>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<div class="b-product__sale">-50%</div>
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик очень длинное название</a>
								<span class="b-product__oldprice">3 500 руб.</span>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик</a>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<div class="b-product__sale">-50%</div>
								<a href="/catalog-details.php" class="b-product__title">Короткое название</a>
								<span class="b-product__oldprice">3 500 руб.</span>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик</a>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<div class="b-product__sale">-50%</div>
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик очень длинное название</a>
								<span class="b-product__oldprice">3 500 руб.</span>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
					</div>
					<div class="grid-4 grid-6_s grid-12_xs">
						<div class="b-product">
							<a href="/catalog-details.php" class="b-product__imgwrap">
								<img src="/img/thumbs/product-thumb.jpg" alt="1" class="b-product__img">
							</a>
							<div class="b-product__content">
								<a href="/catalog-details.php" class="b-product__title">Большой прозрачный шар Морской пузырик</a>
								<span class="b-product__price">1 500 руб.</span>
								<div class="b-product__triggers">
									<i class="i-tr-gift" title="Подарок"></i>
									<i class="i-tr-car" title="Бесплатная доставка"></i>
									<i class="i-tr-box" title="Упаковка"></i>
									<i class="i-tr-shield" title="Гарантия"></i>
									<i class="i-tr-camera" title="Фото"></i>
								</div>
							</div>
							<div class="b-product__actions">
								<a href="#" class="btn">В корзину</a>
								<a href="#" class="link fancy" data-src="#modal-oneclick" rel="nofollow">В 1 клик</a>
							</div>
						</div>
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

		</div>
	</div>
</section>


<?php include('footer.php'); ?>