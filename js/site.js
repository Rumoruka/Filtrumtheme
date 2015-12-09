

$(document).ready(function() {
	/* site decoration */
	$('#about_url').mouseenter(
		function(){
			$('#romb_menu1').css({
			'border-right' : '3px solid rgb(0, 0, 0)',
			'border-bottom' : '3px solid rgb(0, 0, 0)'
			})
	});
	$('#about_url').mouseleave(function(){
			$('#romb_menu1').css({
			'border-right' : '3px solid rgb(243, 151, 0)',
			'border-bottom' : '3px solid rgb(243, 151, 0)'
			})
	});
	$('#faq_url').mouseenter(
		function(){
			$('#romb_menu2').css({
			'border-right' : '3px solid rgb(0, 0, 0)',
			'border-bottom' : '3px solid rgb(0, 0, 0)'
			})
	});
	$('#faq_url').mouseleave(function(){
			$('#romb_menu2').css({
			'border-right' : '3px solid rgb(243, 151, 0)',
			'border-bottom' : '3px solid rgb(243, 151, 0)'
			})
	});
	$('#submit').mouseenter(
		function(){
			$('#submit_romb').css({
			'border-right' : '3px solid rgb(0, 0, 0)',
			'border-bottom' : '3px solid rgb(0, 0, 0)'
			})
	});
	$('#submit').mouseleave(function(){
			$('#submit_romb').css({
			'border-right' : '3px solid rgb(243, 151, 0)',
			'border-bottom' : '3px solid rgb(243, 151, 0)'
			})
	});
	$('#about_url').click(
		function(){
			$('#romb_menu1').css({
			'border-right' : '3px solid rgb(0, 0, 0)',
			'border-bottom' : '3px solid rgb(0, 0, 0)'
			})
	});
	$('#faq_url').click(
		function(){
			$('#romb_menu1').css({
			'border-right' : '3px solid rgb(0, 0, 0)',
			'border-bottom' : '3px solid rgb(0, 0, 0)'
			})
	});
	/* slider */
	$('.carousel_content').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		appendArrows: $('.carousel_nav'),
		prevArrow: '<div class="carousel-arrow-left slick-prev"></div>',
		nextArrow: '<div class="carousel-arrow-right slick-next"></div>',
		dots: true,
		appendDots: $('.carousel_nav'),
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 2,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
						{
				breakpoint: 500,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					infinite: true,
					dots: false
				}
			},
		]
	});
	/* CAROUSEL MAIN 
    var leftUIEl = $('.carousel-arrow-left');
    var rightUIEl = $('.carousel-arrow-right');
	var elementsList = $('.carousel-list');
	
	var pixelsOffset = 180;
	var currentLeftValue = 0;
	var elementsCount = elementsList.find('li').length;
	var minimmumOffset = - ((elementsCount - 5) * pixelsOffset);
	var maximumOffset = 0;
 
    leftUIEl.click(function() {
		if (currentLeftValue != maximumOffset){
			currentLeftValue += 180;
			elementsList.animate({ left : currentLeftValue + "px"}, 500);
		}
    });
 
    rightUIEl.click(function() {
		if (currentLeftValue != minimmumOffset){
			currentLeftValue -= 180;
			elementsList.animate({ left : currentLeftValue + "px"}, 500);
		}
    });
	/* END AROUSEL MAIN */
}); 