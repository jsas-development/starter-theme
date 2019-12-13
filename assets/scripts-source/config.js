$( document ).ready(function() {
	console.log("Ready for use!");
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		arrows: true,
		focusOnSelect: true,
		prevArrow:"<i class='icon-arrow-down' style='transform: rotate(90deg);position: absolute;top: 60px;left: -30px;' >",
		nextArrow:"<i class='icon-arrow-down' style='transform: rotate(270deg);position: absolute;top: 60px;right: -30px;' >"
	});

	$(".video-fancybox").fancybox();
	  
	$(".video-background").click(function(){
		$('.slick-active div a').trigger("click");
	});
	
});
