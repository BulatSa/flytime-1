/***********************
 отправка формы в php BEGIN
***********************/
$(document).ready(function(){

	$(".ajax-form").on("submit", function(event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')){
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')){
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label');
			form_data.append(input_label__name,input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/bitrix/templates/flytime/php/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function(result) {
					console.log(result);
					$.fancybox.close();
					$.fancybox.open({src  : '#modal-thanks'});
					// setTimeout(function() {$.fancybox.close();},4500);
					form[0].reset();
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
***********************/


/***********************
Input mask BEGIN
***********************/
$(function($){
	//$("input[type='tel']").mask("+7 (999) 999-99-99");
});
/***********************
Input mask END
***********************/


/***********************
 fancybox BEGIN
 ***********************/
function init_fancy() {
	$('.fancy').fancybox({
		fullScreen: false,
		slideShow: false,
		thumbs: false,
		transitionEffect : "slide",
		autoFocus : false,
		backFocus : false,
		animationDuration : 400,
		touch : {
			vertical : false
		}
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn : true,
		autoFocus : false,
		backFocus : false,
		animationDuration : 400
	});
}
function init_fancy__video() {
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn : true,
		fullScreen: false,
		thumbs: false,
		youtube: {
			controls : 1,
			showinfo : 0,
			autoplay: 1
		},
		onUpdate : function( instance, current ) {
			var width,
				height,
				ratio = 16 / 9,
				video = current.$content;
			if ( video ) {
				video.hide();
				width  = current.$slide.width() - 30;
				height = current.$slide.height() - 100;
				if ( height * ratio > width ) {
					height = width / ratio;
				} else {
					width = height * ratio;
				}
				video.css({
					width  : width,
					height : height
				}).show();
			}
		}
	});
}
$(document).ready(function(){
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(document).ready(function(){
	$('.scrollto').click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop:destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Mobile menu and search BEGIN
 ***********************/
$(document).ready(function(){
	$('.menu-btn').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.mob-panel,.mob-panel__back').toggleClass('opened');
	});

	$(document).on('click touchstart',function (e){
		var div = $(".mob-panel,.menu-btn,.mob-panel__back");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			$('.mob-panel,.mob-panel__back').removeClass('opened');
			$('.menu-btn').removeClass('active');
		}
	});

	$('.cat-menu-item--search').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.search-panel').toggleClass('opened').find('input').focus();
	});

	$(document).on('click touchstart',function (e){
		var div = $(".search-panel,.cat-menu-item--search");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			$('.search-panel').removeClass('opened');
			$('.cat-menu-item--search').removeClass('active');
		}
	});
});
/***********************
 Mobile menu and search END
 ***********************/


/***********************
Intro slider BEGIN
***********************/
$(document).ready(function() {
	if ($('.intro-slider').length){
		var intro_slider = $('.intro-slider').flickity({
			contain: true,
			wrapAround: true,
			selectedAttraction: 0.025,
			friction: 0.3,
			adaptiveHeight: true,
			bgLazyLoad: true,
			dragThreshold: 20,
			arrowShape: 'M19.3,53.1c-1.9-1.9-1.9-4.9,0-6.8L63.2,2.4c1.9-1.9,4.9-1.9,6.8,0L74,6.5L34.2,46.3c-1.9,1.9-1.9,4.9,0,6.8 L74,92.9L69.9,97c-1.9,1.9-4.9,1.9-6.8,0L19.3,53.1L19.3,53.1z'
		});
		intro_slider.flickity('resize');

		setTimeout(function () {
			intro_slider.flickity('resize');
		},100)
	}
});
/***********************
Intro slider END
***********************/


/***********************
 Productslider BEGIN
 ***********************/
$(document).ready(function() {
	if ($('.product-slider').length){
		var product_slider = $('.product-slider').flickity({
			contain: true,
			wrapAround: true,
			selectedAttraction: 0.025,
			friction: 0.3,
			adaptiveHeight: true,
			dragThreshold: 20,
			imagesLoaded: true,
			arrowShape: 'M19.3,53.1c-1.9-1.9-1.9-4.9,0-6.8L63.2,2.4c1.9-1.9,4.9-1.9,6.8,0L74,6.5L34.2,46.3c-1.9,1.9-1.9,4.9,0,6.8 L74,92.9L69.9,97c-1.9,1.9-4.9,1.9-6.8,0L19.3,53.1L19.3,53.1z'
		});
		product_slider.flickity('resize');

		setTimeout(function () {
			product_slider.flickity('resize');
		},100)
	}
});
/***********************
 Productslider END
 ***********************/


/***********************
Reviews-wall BEGIN
***********************/
$(document).ready(function() {
	var reviews_wall = $('.reviews-wall').masonry({
		itemSelector: '.reviews-wall__item',
		columnWidth: '.grid-sizer',
		percentPosition: true
	});

	reviews_wall.imagesLoaded().progress( function() {
		reviews_wall.masonry('layout');
	});
});
/***********************
Reviews-wall END
***********************/


/***********************
Nice Select BEGIN
***********************/
$(document).ready(function() {
	$('.style-select').niceSelect();
});
/***********************
Nice Select END
***********************/


/***********************
Filters BEGIN
***********************/
$(document).ready(function() {



	$('.filter-show-btn').on('click touchstart',function (e) {
		e.preventDefault();
		$('.filter-block').toggleClass('open');
	})

});
/***********************
Filters END
***********************/


/***********************
 Password Open BEGIN
 ***********************/
$(document).ready(function() {
	if($('.input-block-pass .i-eye').length) {
		$('.input-block-pass .i-eye').on('click', function () {
			var passInput = $(this).siblings('input')[0];
			$(this).toggleClass('active');
			if (passInput.type == 'password') {
				passInput.type = 'text';
			} else {
				passInput.type = 'password';
			}
		})
	}
});
/***********************
 Password Open END
 ***********************/


/**************************************************
 Google Maps
 ***************************************************/
// gmaps
$(document).ready(function(){
	if ($('#contact-map').length) {
		google.maps.event.addDomListener(window, 'load', initMap);

		function initMap() {
			var latLng= {};
			latLng.lat = 55.746218;
			if ($(window).width() < 740) {
				latLng.lng = 37.509164;
			} else {
				latLng.lng = 37.509164;
			}
			var mapOptions = {
				zoom: 16,
				scrollwheel: false,
				mapTypeControl: false,
				zoomControlOptions: {
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				center: new google.maps.LatLng(latLng.lat, latLng.lng)
			};

			var mapElement = document.getElementById('contact-map');

			var map = new google.maps.Map(mapElement, mapOptions);

			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(55.746218, 37.509164),
				map: map,
				title: 'г. Москва, ул. Тучковская 11к2',
				icon: '/bitrix/templates/flytime/img/svg/map-bubble-orange.svg'
			});
		}
	}
});
/**************************************************
 End Google Maps
 ***************************************************/