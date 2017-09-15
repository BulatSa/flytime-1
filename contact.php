<?php include('header.php'); ?>

<section class="s-intro">
	<div class="intro-wrapper">
		<div class="intro intro--contact">
			<div class="intro__content">
				<span class="h1">Контакты</span>
			</div>
			<div class="intro__map">
				<div id="contact-map"></div>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQfEu_8-pHG14T3d1VrAhof5J4UWKe7PE" async>
				</script>
			</div>
		</div>
	</div>
</section>

<section class="about-info-sec wave-bottom-white">
	<div class="container">
		<div class="about-info">
			<div class="about-info__text-wrap">
				<div class="row">
					<div class="grid-6 grid-12_s">
						<p class="about-info__title about-info__title--contact h2">Адрес самовывоза&nbsp;<img src="img/svg/map-bubble-orange.svg" alt=""></p>
						<div class="user-content about-info__text about-info__text--contact">
							<p><i class="i-geo"></i><span>Москва, Волгоградский пр-т, д. 32к8</span></p>
							<p><i class="i-clock"></i><span>Ежедневно с 10:00 до 19:00</span></p>
							<p><i class="i-phone-btns"></i><span>Телефон: <a href="tel:84950000000">8 495 000-00-00</a></span></p>
							<p><i class="i-mail"></i><span>E-mail: <a href="mailto:info@domen.ru">info@domen.ru</a></span></p>
						</div>
					</div>
					<div class="grid-6 grid-12_s">
						<p class="about-info__title about-info__title--contact h2">Адрес офиса&nbsp;<img src="img/svg/map-bubble-blue.svg" alt=""></p>
						<div class="user-content about-info__text about-info__text--contact">
							<p><i class="i-geo"></i><span>Москва, Волгоградский пр-т, д. 32к8</span></p>
							<p><i class="i-clock"></i><span>Ежедневно с 10:00 до 19:00</span></p>
							<p><i class="i-phone-btns"></i><span>Телефон: <a href="tel:84950000000">8 495 000-00-00</a></span></p>
							<p><i class="i-mail"></i><span>E-mail: <a href="mailto:info@domen.ru">info@domen.ru</a></span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="about-info__text-wrap">
				<p class="about-info__title h2">Для юридических лиц</p>
				<div class="row">
					<div class="grid-6 grid-12_s">
						<div class="user-content about-info__text">
							<p>Общество с ограниченной ответственностью  «Время летать»</p>
							<p>
								<b>Юридический адрес:</b><br>
								129515, Россия, г. Москва, ул. Академика Королева, д. 13, строение 1, этаж 8, помещение IV-комната 6
							</p>
							<p>
								<b>Фактический адрес:</b><br>
								142840, Россия, Московская обл., Ступенский р-н, поселок Михнево, ул. Сельхозтехника, д. 2а
							</p>
						</div>
					</div>
					<div class="grid-6 grid-12_s">
						<div class="user-content about-info__text">
							<p class="about-info__laws">
								<span>ИНН 770000000</span>
								<span>КПП 770000000</span>
								<span>ОГРН 1100000000</span>
							</p>
							<p>
								<b>Реквизиты Банка</b><br>
								ТОЧКА ПАО БАНКА "ФК ОТКРЫТИЕ" <br>
								Р/счет № 000000000000000 <br>
								К/счет № 000000000000000 <br>
								БИК 044000000
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="form-contact-sec">
	<div class="container">
		<div class="form-contact">
			<p class="h2">Вопросы, пожелания?</p>
			<form class="ajax-form horizontal-form horizontal-form--halfed">
				<div class="row">
					<div class="grid-5 grid-6_s grid-12_xs order-1_xs">
						<input type="text" name="user_name" class="input-text" placeholder="Введите имя" data-label="Имя пользователя">
						<input type="tel" name="user_tel" class="input-text" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
						<input type="mail" name="user_mail" class="input-text" data-label="Почта" placeholder="Введите email*" data-req="true">
						<button type="submit" class="btn btn--big">Отправить <i class="i-right"></i></button>
					</div>
					<div class="grid-7 grid-6_s grid-12_xs order-0_xs">
						<textarea class="input-textarea" name="user_comment" placeholder="Ваш комментарий*" data-label="Комментарий пользователя" data-req="true"></textarea>
					</div>
					<div class="grid-12 order-1_xs">
						<label class="style-checkbox style-checkbox--policy">
							<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
							<span class="style-checkbox__label">
								<span class="style-checkbox__descr">Нажимая на кнопку "Отправить", я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a>.</span>
							</span>
						</label>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>