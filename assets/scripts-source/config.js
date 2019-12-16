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
	
	//Search Psicanalistas
	$(".psicanalistas-link").click(function(){
		$(".search").slideUp("fast");
		if ($(".psicanalistas").is(":hidden")) {
			$(".psicanalistas").slideDown("slow");
		} else {
			$(".psicanalistas").slideUp("fast");
		}
	});
	$(".close-psicanalistas").click(function(){
		$(".psicanalistas").slideUp("fast");
	});

	//Search Buscar
	$(".search-link").click(function(){
		$(".psicanalistas").slideUp("fast");
		if ($(".search").is(":hidden")) {
			$(".search").slideDown("slow");
		} else {
			$(".search").slideUp("fast");
		}
	});
	$(".close-search").click(function(){
		$(".search").slideUp("fast");
	});

	//Submenu
	$(".nav a").click(function(){
		$(".nav").css("border-bottom","none");
		$(".subnav").fadeOut("fast");
		var link = $(this).attr('class');
		var seletor = "#" + link;
		if ($(seletor).is(":hidden")) {
			$(".nav").css("border-bottom","1px solid #C4C4C4")
			setTimeout(function(){
				$(seletor).fadeIn("fast");;
			},300);
		} else {
			$(seletor).fadeOut("fast");
			$(".nav").css("border-bottom","none");
		}
	});
});
