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
