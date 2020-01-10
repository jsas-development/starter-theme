$( document ).ready(function() {
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav',
		responsive: [{
			  breakpoint: 768,
			  settings: {
				arrows: true,
				prevArrow:"<i class='slick-prev icon-arrow-carousel'></i>",
				nextArrow:"<i class='icon-arrow-carousel slick-next'></i>",
			  }
			}]
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
	
	//Search Btn Psicanalistas
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

	//Search Btn Buscar
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
			$(seletor).fadeIn("fast");;
		} else {
			$(seletor).fadeOut("fast");
			$(".nav").css("border-bottom","none");
		}
	});

	//Menu Mobile
	$(".navbar-toggler").click(function(){
		$(".menu-mobile").slideDown("fast");
	});
	$(".menu-mobile div .icon-close-search").click(function(){
		$(".menu-mobile").slideUp("fast");
	});

	//Menu Institucional 
	// $(".institucional--select-change").focusin(function() {
	// 	$(".icon-arrow-carousel").css("transform","rotate(90deg)");
	// })
	// .focusout(function() {
	// 	$(".icon-arrow-carousel").css("transform","rotate(270deg)");
	// });

	//Contact form
	$(".contato--form form button").click(function(e){
		event.preventDefault(e);
		$(".contato--form form").animate({opacity: '0.', "z-index":'-1'});
		$(".contato--modal-sucess").css({
			display:"block",
			opacity:0
		});
		$(".contato--modal-sucess").animate({opacity: '1'});
	});

	//Localização
	$(".maps-fancybox").fancybox();

	//Sidebar Institucional
	$("#v-pills-tab li").click(function(){
		$("#v-pills-tab li").removeClass("active");
		$(this).addClass("active");
	});
	$(".sub-items").click(function(){
		$(".sub-items").removeClass("active");
	});

	//Select Mobile Estudos e Pesquisas
	
	// Verificar url para tabs
	var url = window.location.href;
	url = url.split("?");
	url = url[1];
  
	$("option").click(function(){
		alert("ok");
	});
	
	switch (url) {

	  case "divisao":
		$("#v-pills-documentacao-tab").click();
		$("option").removeAttr("selected");
		$(".option:eq(1)").attr("selected", "selected");
		break;

	  case "posts":
		$("#v-pills-posts-tab").click();
		$("option").removeAttr("selected");
		$(".option:eq(2)").attr("selected", "selected");
		break;

	case "biblioteca":
		$("#v-pills-biblioteca-tab").click();
		$("option").removeAttr("selected");
		$(".option:eq(0)").attr("selected", "selected");
		break;
		
	  default:
		break;
	}

});
