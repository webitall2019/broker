// JavaScript Document
$(function() {
	$('.select_drop, .input_check, input[type="radio"]').styler({

	});
});

$(document).ready(function(){

	
	var menu_active = 0;
	$('.pull').click(function(){
		if (!$('.wrap_menu').hasClass('active')) {
			$('.wrap_menu').addClass('active');
			$('.pull').addClass('active');
			$('.wrapper').addClass('active');
			menu_active = 1;
		} else{
			$('.wrap_menu').removeClass('active');
			$('.pull').removeClass('active');
			$('.wraper').removeClass('active');

			menu_active = 0;
		}
	});
	$('.close').click(function(){
		if (menu_active == 1) {
			$('.wrap_menu').removeClass('active');
			$('.wrapper').removeClass('active');
			$('.pull').removeClass('active');
			menu_active = 0;
		}
	});	
	$('.closed_menu').click(function(){
		if (menu_active == 1) {
			$('.wrap_menu').removeClass('active');
			$('.wrapper').removeClass('active');
			$('.pull').removeClass('active');
			menu_active = 0;
		}
	});	
	

	$('h4').click(function(){
		$(this).parents('.faq_item').find('.faq_show').slideToggle(400, function(){
			$('.faq_item h4').removeClass('active');
		});  
		$(this).parents('.faq_item').find('h4').toggleClass('active');
		
	});

	
	$('.show_more').click(function(){
		$(this).parents('.wrap_items').find('.invise').slideToggle(400);  
		$(this).parents('.wrap_items').find('.show_more').toggleClass('active');
		
	});
	
	$('.show_more').click(function(){
		$(this).parents('.catalog_items').find('.invise').slideToggle(400);  
		$(this).parents('.catalog_items').find('.show_more').toggleClass('active');
		
	});
	
	$('.show_more').click(function(){
		$(this).parents('.wrap_reviews_cont').find('.invise').slideToggle(400);  
		$(this).parents('.wrap_reviews_cont').find('.show_more').toggleClass('active');
		
	});
	
	$('.pull_menu').click(function(){
		$(this).parents('.left_profile').find('ul').slideToggle(400);  
		$(this).parents('.left_profile').find('.pull_menu').toggleClass('active');
		
	});
	$('.pull_catalog').click(function(){
		$(this).parents('.left_catalog').find('.cat_menu').slideToggle(400);  
		$(this).parents('.left_catalog').find('.pull_catalog').toggleClass('active');
		
	});	
	
	function setEqualHeight(columns){
		var tallestcolumn=0;
		columns.each(
			function(){
				currentHeight=$(this).height();
				if(currentHeight>tallestcolumn) {
					tallestcolumn=currentHeight;
				}
			}
			);
		columns.height(tallestcolumn);
	}
	$(window).resize(function() {
	$('.type_img').css('height','auto'); //solve for all you browser stretchers out there!
	setEqualHeight($('.type_img'));
	
});
	$(window).load(function() {
		setEqualHeight($(".type_img"));
	});
	
	function setEqualHeight(columns){
		var tallestcolumn=0;
		columns.each(
			function(){
				currentHeight=$(this).height();
				if(currentHeight>tallestcolumn) {
					tallestcolumn=currentHeight;
				}
			}
			);
		columns.height(tallestcolumn);
	}
	$(window).resize(function() {
	$('.wr_type > p').css('height','auto'); //solve for all you browser stretchers out there!
	setEqualHeight($('.wr_type > p'));
	
});
	$(window).load(function() {
		setEqualHeight($(".wr_type > p"));
	});
	
	function setEqualHeight(columns){
		var tallestcolumn=0;
		columns.each(
			function(){
				currentHeight=$(this).height();
				if(currentHeight>tallestcolumn) {
					tallestcolumn=currentHeight;
				}
			}
			);
		columns.height(tallestcolumn);
	}
	$(window).resize(function() {
	$('.review_item_m').css('height','auto'); //solve for all you browser stretchers out there!
	setEqualHeight($('.review_item_m'));
	
});
	$(window).load(function() {
		setEqualHeight($(".review_item_m"));
	});	
	
	function setEqualHeight(columns){
		var tallestcolumn=0;
		columns.each(
			function(){
				currentHeight=$(this).height();
				if(currentHeight>tallestcolumn) {
					tallestcolumn=currentHeight;
				}
			}
			);
		columns.height(tallestcolumn);
	}
	$(window).resize(function() {
	$('.payment_item').css('height','auto'); //solve for all you browser stretchers out there!
	setEqualHeight($('.payment_item'));
	
});
	$(window).load(function() {
		setEqualHeight($(".payment_item"));
	});	
	
	function setEqualHeight(columns){
		var tallestcolumn=0;
		columns.each(
			function(){
				currentHeight=$(this).height();
				if(currentHeight>tallestcolumn) {
					tallestcolumn=currentHeight;
				}
			}
			);
		columns.height(tallestcolumn);
	}
	$(window).resize(function() {
	$('.browser_img').css('height','auto'); //solve for all you browser stretchers out there!
	setEqualHeight($('.browser_img'));
	
});
	$(window).load(function() {
		setEqualHeight($(".browser_img"));
	});	

	
	
	$("body").on("click",".hide", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

	});	
	$("body").on("click","a.to_top", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
		top = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1000);
	});

	var swiper = new Swiper('.swiper-container', {

		paginationClickable: true,
		slidesPerView: 1,
		loop:true,
		effect: 'fade',
		
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
			speed:800,
		},
		spaceBetween: 60,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		}
	});

	$(".inp_phone").mask("+7 ppp ppp pp pp");
	$(".inp_cart").mask("pppp pppp pppp pppp");

	$('.open_vid').click(function(){
		$('#open_vid').arcticmodal();
	});
	

	$('.fancybox').fancybox( 
	{
		"padding" : 0
	}); 
	$('.fancybox-media')
	.attr('rel', 'media-gallery')
	.fancybox({
		openEffect : 'none',
		closeEffect : 'none',
		prevEffect : 'none',
		nextEffect : 'none',

		arrows : false,
		helpers : {
			media : {},
			buttons : {}
		}
	});
});

$(document).ready(function(){
	//Подключаем Slick Slider для отзывов на index.html
	$('.reviews_slide').slick({
		dots: true,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 4000,
		slidesToShow: 4,
		slidesToScroll: 2,
		dots: false,
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 2,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});
});

(function($) {
	$(function() {
		$(".tabs_content").css('position', 'absolute');
		$('ul.tabs_caption').on('click', 'li:not(.active)', function() {
			$(this)
			.addClass('active').siblings().removeClass('active')
			.closest('div.tab_sb').find('div.tabs_content').removeClass('active').eq($(this).index()).addClass('active');
		});

		var tabIndex = window.location.hash.replace('#tab','')-1;
		if (tabIndex != -1) $('ul.tabs_caption li').eq(tabIndex).click();

		$('a[href*=#tab]').click(function() {
			var tabIndex = $(this).attr('href').replace(/(.*)#tab/, '')-1;
			$('ul.tabs_caption li').eq(tabIndex).click();
		});

	});
})(jQuery);



var HeaderTop = $('.header').offset().top;
//Добавим переменную SectioOneTop определения расстояния section.block1 до верхней границы страницы
//var SectioOneTop = $('.block1').offset().top;
$(window).scroll(function(){
	//Если текущеё положение скролла больше чем сумма переменных HeaderTop и SectioOneTop...
	if( $(window).scrollTop() > HeaderTop ) {
		//...то добавляем header класс .fixed
		$('.header').addClass('fixed');
	} else {
		$('.header').removeClass('fixed');
	}
});

/* Popup Forms */
jQuery(window).load(function() {
	$('.popup-window').each(function(p){
		$('.logs a').click(function(){
			$('.popup-shadow').slideDown(180, function() {
				$('.popup_wrapper').addClass('open_popup');
				$('body').addClass('not_scroll');
			});
		});
		$('.close_popup').click(function(){
            $('.popup_wrapper').removeClass('open_popup');
            setTimeout(function () {
                $('.popup-shadow').slideUp(180);
                $('body').removeClass('not_scroll');
            }, 300);
		});
		if (window.location.hash === "#login") {
			$(".popup-shadow").slideDown(180, function() {
                $('.popup_wrapper').addClass('open_popup');
                $('body').addClass('not_scroll');
			});
		}
	});
});
/* Секция вопросы и ответы */
$(document).ready(function(){
	var i = 0;
	var t = 0; 
	$('.col-fx .faq_item_col').each(function(){
		i++;
		$(this).attr('id','tab-'+i);
	});
	$('.col-fx .faq_tab').each(function(){
		t++;
		$(this).attr('data-tab','tab-'+t);
	});
	$('.tabs .faq_tab').click(function(){
		var tab = $(this).attr('data-tab');
		$('.tabs .faq_tab').removeClass('active');
		$('.faq_item_col').removeClass('active');
		$(this).addClass('active');
		$('#'+tab).addClass('active');
	});
});

$(document).ready(function(){
	/* Выпадающее меню */
	var subMenu = $('.cat_menu li');
	if(subMenu.children('ul').lenght !=0) {
		subMenu.children('ul').parent('li').addClass('hasChild');
		$('.hasChild').prepend('<span class="slide"></span>');
	}
	$('.hasChild .slide').click(function(e){
		$(this).closest('li').toggleClass('current');
	});

	/* Выпадающий список фиьтров */
	$('.filter_item').each(function(){
		var f = $('.filter_item');
		$(this).find('.filter_title').click(function(){
			$(this).next('.filter_cont').slideToggle(300);
			$(this).toggleClass('hide');
		});
	});
	
	/* Фильтр цен */
	if ($('#range_price').length) {
        var $range = $('#range_price'),
			$mininp = $('#min_price'),
			$maxinp = $('#max_price'),
			min = 0,
			max = 100000,
			instance;
		$range.ionRangeSlider({
			type: 'double',
			min: min,
			max: max,
			postfix: ' руб',
			step: 100,
			onStart: function (data) {
				$mininp.prop('value', data.from);
				$maxinp.prop('value', data.to);
			},
			onChange: function (data) {
				$mininp.prop('value', data.from);
				$maxinp.prop('value', data.to);
			},
			onFinish: function (data) {
				$mininp.prop('value', data.from);
				$maxinp.prop('value', data.to);
			}
		});
		instance = $range.data("ionRangeSlider");
		$mininp.on("change keyup", function () {
			var val = $(this).prop("value");
			// validate
			if (val < min) {
				val = min;
			} else if (val > max) {
				val = max;
			}
			instance.update({
				from: val
			});
		});
		$maxinp.on("change keyup", function () {
			var valm = $(this).prop("value");
			// validate
			if (valm > max) {
				valm = max;
			} else if (valm < min) {
				valm = min;
			}
			instance.update({
				to: valm
			});
		});
	}
	
	/* Меняем раскладку товаров Сетка/Список */
	$('.templ_see').each(function() {
		var pw = $('.product_wrapper'),
				sp = $('.single_product'),
				sps = $('.sp_section'),
				gs = $('.grid_see'),
				rs = $('.row_see');
		gs.click(function(){
			pw.addClass('product_grid').removeClass('product_row');
			sp.addClass('sp_grid').removeClass('sp_row');
			gs.addClass('active');
			sps.addClass('fx-col').removeClass('fx-jcsa');
			rs.removeClass('active');
		});
		rs.click(function(){
			pw.addClass('product_row').removeClass('product_grid');
			sp.addClass('sp_row').removeClass('sp_grid');
			sps.removeClass('fx-col').addClass('fx-jcsa');
			rs.addClass('active');
			gs.removeClass('active');
		});
	});
	$('.show_more').click(function(){
		$(this).prev('.product_wrapper').find('.invise:lt(4)').removeClass('invise'); 
	});
	
    /* Поиск в шапке */
    
    
    var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();
    
    function searchHeader(event) {
        
        var target = $(event.currentTarget),
            search = target.val(),
            resultWrapper = $('.result_search'),
            resultBlock = resultWrapper.find('.block');
    
        resultBlock.html('');
        resultWrapper.addClass('animate');
        if (search.length === 0) {
            $('.result_search .block').html('');
            $('.result_search').removeClass('show animate');
        }
        delay(function(){
            $.ajax({
                type: "POST",
                url: "/catalog",
                dataType: 'json',
                data: {quick_search: search},
                success: function (response) {
                    var result = '';
                    for (var key in response) {
                        result += '<a href="'+ response[key].url +'">' + response[key].name + '</a>'
                    }
                    if (result.length != '') {
                        resultBlock.append(result);
                    } else {
                        resultBlock.append('<p>Нет результата</p>');
                    }
                    resultWrapper.addClass('show');
                    resultWrapper.removeClass('animate');
                }
            });
        }, 200 );
    }
    $(document).on('keyup focus', '#search_header', searchHeader.bind(event));
    $(document).mouseup(function (e) {
        var parent = $('.wr_search form');
        if (parent.has(e.target).length === 0) {
            $('.result_search .block').html('');
            $('.result_search').removeClass('show animate');
        }
    });
	
	let rateStar = document.querySelectorAll('.fa-star');
	
		for(let s = 0 ; s < rateStar.length; s++){

			if(rateStar[s].classList.contains('bg-light') ){
				rateStar[s].addEventListener('click', function(){
					rateStar[s].classList.remove('fa-star-o');
				} );
			}
			else{
				rateStar[s].addEventListener('click', function(){
					rateStar[s].classList.add('fa-star-o');
				} );
				
			}
			
		};
		
	

});
