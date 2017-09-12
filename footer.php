<section class="footer-sec wave-top-white">
	<div class="container">
		<div class="footer">
			<div class="footer__payment row">
				<div class="grid-3 grid-12_s">
					<p class="h3">К оплате принимаем</p>
				</div>
				<div class="grid-9 grid-12_s">
					<div class="footer__payment-list">
						<img src="img/footer-payment-1.jpg" alt="1">
						<img src="img/footer-payment-2.jpg" alt="2">
						<img src="img/footer-payment-3.jpg" alt="">
						<img src="img/footer-payment-4.jpg" alt="">
						<img src="img/footer-payment-5.jpg" alt="">
						<img src="img/footer-payment-6.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="footer__info row">
				<div class="grid-3 grid-6_s">
					<div class="footer__nav">
						<span class="footer__title">О компании</span>
						<ul>
							<li><a href="#">Доставка</a></li>
							<li><a href="#">Оплата</a></li>
							<li><a href="#">Гарантия качества</a></li>
							<li><a href="#">Отзывы</a></li>
							<li><a href="#">Бизнесу</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div class="grid-3 grid-6_s">
					<div class="footer__nav">
						<span class="footer__title">Каталог шаров</span>
						<ul>
							<li><a href="#">Оформление по событиям</a></li>
							<li><a href="#">Услуги и цены</a></li>
							<li><a href="#">Готовые решения</a></li>
							<li><a href="#">Все для праздника</a></li>
							<li><a href="#">Акции</a></li>
						</ul>
					</div>
				</div>
				<div class="grid-3 grid-6_s">
					<div class="footer__contact">
						<span class="footer__title">Контакты</span>
						<span class="footer__contact-descr">Бесплатный звонок по РФ</span>
						<a href="tel:88000000000" class="footer__contact-phone">8 800 000-00-00</a>
						<span class="footer__contact-descr">Москва и Московская область</span>
						<a href="tel:84950000000" class="footer__contact-phone">8 (495) 000-00-00</a>
						<a href="mailto:info@timefly.com" class="footer__contact-mail">info@timefly.com</a>
					</div>
				</div>
				<div class="grid-3 grid-6_s">
					<div class="footer__soc">
						<span class="footer__title">Следите за нами</span>
						<div class="footer__soc-list">
							<a href="#" target="_blank"><img src="img/icons/icon-soc-fb.png" alt=""></a>
							<a href="#" target="_blank"><img src="img/icons/icon-soc-vk.png" alt=""></a>
							<a href="#" target="_blank"><img src="img/icons/icon-soc-insta.png" alt=""></a>
							<a href="#" target="_blank"><img src="img/icons/icon-soc-ytb.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__bottom row">
				<div class="grid-3 grid-12_s">
					<div class="footer__bottom-col">
						<span>© 2017 ООО «Время летать»</span>
					</div>
				</div>
				<div class="grid-6 grid-6_s">
					<div class="footer__bottom-col">
						<a href="#">Публичный договор-оферта</a>
					</div>
				</div>
				<div class="grid-3 grid-6_s">
					<div class="footer__bottom-col footer__bottom-col--last">
						<a href="#">Сайт разработан Pen&Brain</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<p class="modal__title h3">Заказать обратный звонок</p>
		<p class="modal__subtitle">Оставьте заявку и наш администратор свяжется с&nbsp;Вами в&nbsp;течение 10 минут</p>
		<form class="ajax-form vertical-form">
			<label class="input-block">
				<span class="input-block__label">Имя</span>
				<input type="text" name="user_name" class="input-text" placeholder="Введите имя" data-label="Имя пользователя">
			</label>
			<label class="input-block">
				<span class="input-block__label">Телефон*</span>
				<input type="tel" name="user_tel" class="input-text" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
			</label>
			<label class="style-checkbox style-checkbox--policy">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked>
				<span class="style-checkbox__label">
					<span class="style-checkbox__descr">Заполняя поля и нажимая на кнопку “Оплатить”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a>.</span>
				</span>
			</label>
			<input type="hidden" value="Заказ обратного звонка" name="form_subject">
			<button type="submit" class="btn btn--big">Отправить</button>
		</form>
	</div>


	<div id="modal-order" class="modal">
		<p class="modal__title h3">Оставить заявку</p>
		<p class="modal__subtitle">Оставьте заявку и наш администратор свяжется с&nbsp;Вами в&nbsp;течение 10 минут</p>
		<form class="ajax-form vertical-form">
			<label class="input-block">
				<span class="input-block__label">Имя</span>
				<input type="text" name="user_name" class="input-text" placeholder="Введите имя" data-label="Имя пользователя">
			</label>
			<label class="input-block">
				<span class="input-block__label">E-mail*</span>
				<input type="email" name="user_email" class="input-text" placeholder="Введите e-mail*" data-label="Email" data-req="true">
			</label>
			<label class="input-block">
				<span class="input-block__label">Телефон*</span>
				<input type="tel" name="user_tel" class="input-text" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
			</label>
			<label class="style-checkbox style-checkbox--policy" focus>
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked>
				<span class="style-checkbox__label">
					<span class="style-checkbox__descr">Заполняя поля и нажимая на кнопку “Оплатить”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a>.</span>
				</span>
			</label>
			<input type="hidden" value="Новая заявка" name="form_subject">
			<button type="submit" class="btn">Отправить</button>
		</form>
	</div>


	<div id="modal-thanks" class="modal">
		<p class="modal__title modal__title--thanks h3">Спасибо за&nbsp;заявку!</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
