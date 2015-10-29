function resize()
{
	//resize main-menu row:
	var height = 				$("#main-menu").outerHeight();
	var width = 				$("#main-menu").width();
	var marginRight = 		$("#main-menu").css("margin-right");
	var spacerWidth = $("#main-menu").parent().width() - ($("#main-menu").width() + $("#search-box").width());
	$("#menu-spacer").css("margin-left", (width-1)).css("width", spacerWidth+1);
	var position = $("#main-menu").position();
	var lenght = position.left;
	$("#row-spacer").css("width", lenght+1);
	
	
}







$(document).ready(function()
{
	
	
	
	
	
	
	
	
	
	
	
	
	resize();
	$( window ).resize(function() {
		resize();
		$(".panel-roll").hide();
		$("#response").html($(document).width());
		
		
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//mobile menu (open/close)
	$("#open-mobile-menu").click(function() {
			$("#mobile-menu").toggle(300);
	});
	
	$("#close-mobile-menu").click(function() {
			$("#mobile-menu").hide(300);
	});
	
	
	

	
	
	
	
	
	
	
	
	
	
	// menu hover borders
	$("#main-menu ul li").hover(function() {
			var width = $(this).outerWidth();
			var position = $(this).position();
			var left = position.left;
			
			$("#nav-border-top").css("width", width).css("left", left).css("z-index", "90").show();
			$("#nav-border-bottom").css("width", width).css("left", left).css("z-index", "90").show();
			
	}, function() {
		$("#nav-border-top").hide();
		$("#nav-border-bottom").hide();
	});
	
	
	
	
	
	
	
	
	
	
	
	
		
	// tabs uzytkownicy, filmy, zdjecia
    $( "#tabs" ).tabs();
	
	
	
	
	
	
	
	
	
	
	
	// paginacja
    $('#easyPaginate').easyPaginate(
	{
		paginateElement: '.three-news',
		elementsPerPage: 1,
		effect: 'slide',
       	slideOffset: '200',

  	});
	$(".prev").appendTo("#small-nav-1-prev");
	$(".next").appendTo("#small-nav-1-next");

	
	
	
	
	
	
	
	
	
	
	
	//ADMIN
	$(".open-panel").click(function()
	{
        
		// set location of panel
		var panelWidth = $(".panel-roll").outerWidth();
		var rowWidth	= $("#top-bar .row").outerWidth();
		var newMarginLeft = rowWidth - panelWidth;
		
		
		$(".panel-roll").css("margin-left", (newMarginLeft)).stop(true,true).slideToggle(300);
		
    });
	
	// hide 
	$("#close-panel").click(function() {
		$(".panel-roll").slideToggle();
	});
	
	
	
	
	
	
	
	
	
	
	
	
	// gallery big photo
	 $(".gallery-big-photo").hover(function() {
		 $(".photo-background").css("visibility", "visible");
		 $(".photo-des-content").css("visibility", "visible");
	 }, function() {
		 $(".photo-background").css("visibility", "hidden");
		 $(".photo-des-content").css("visibility", "hidden");
	});

	 
	// gallery small photo
	$(".gallery-small-photo").hover(function() {
		 $(this).find(".photo-background-s").css("visibility", "visible");
		 $(this).find(".photo-des-content-s").css("visibility", "visible");
	 }, function() {
		 $(this).find(".photo-background-s").css("visibility", "hidden");
		 $(this).find(".photo-des-content-s").css("visibility", "hidden");
	});

	
	// gallery small photo (subpages)
	$(".gallery-small-photo-sub").hover(function() {
		 $(this).find(".photo-background-s").css("visibility", "visible");
		 $(this).find(".photo-des-content-s").css("visibility", "visible");
	 }, function() {
		 $(this).find(".photo-background-s").css("visibility", "hidden");
		 $(this).find(".photo-des-content-s").css("visibility", "hidden");
	});










	
	
	// tooltip
	$('.tooltip').tooltipster();

	
	
	
	
	 $(window).scroll(function () {
			
			//get top-bar and logos height
			var height = $("#top-bar").outerHeight()+$("#logotypes").outerHeight();
			
			//alert(height);
			
			if($(this).scrollTop() > height) 
			{
				var height2 = $("#logotypes").height();
				var top = height2 * (-1);
				$('#top-container').css("position", "fixed").css("top", top);
       	 	} 
			else if($(this).scrollTop() <= height) 
			{
				$('#top-container').css("position", "absolute").css("top", 50);
			}
    });
	
	
	
	
	
	
	
	
	
	// accordion
	
	$(".date-show").click(function(){
		
		$(".submenu-months").not($(this).find(".submenu-months")).hide("fold", 400);
        $(this).find(".submenu-months").show("fold", 400);
	
    });
	
	
	
	$(".submenu").click(function(){
		
		$(".submenu").css("background-color", "white");
		$(".submenu").css("color", "#373a3b");
		
		$(this).css("background-color", "#1d8995");
		$(this).css("color", "white");
	
	});
	
	
	
			
	
	// challenge

	
	$(".accor").hover(function()
	{
		
		$(".accor").stop(true, true).not($(this)).animate(
		{
			width: '18.9%'
		});
		$(this).stop(true, true).animate(
		{
			width: '23.9%'
		});
		$(this).find(".accor-back").stop(true, true).animate(
		{
			opacity: '0.0'
		});
		$(this).find(".accor-content").stop(true, true).show('blind');
		$(this).find(".accor-header").stop(true, true).animate(
		{
			top: '45%'
		});
		$(this).find(".accor-subheader").stop(true, true).animate(
		{
			top: '55%'
		});
		
		
	}, function()
	{
		$(".accor").stop(true, true).animate(
		{
			width: '19.9%'
		});
		$(this).find(".accor-back").stop(true, true).animate(
		{
			opacity: '0.5'
		});
		$(this).find(".accor-content").stop(true, true).hide('blind');
		$(this).find(".accor-header").stop(true, true).animate(
		{
			top: '60%'
		});
		$(this).find(".accor-subheader").stop(true, true).animate(
		{
			top: '75%'
		});
	
	});
	
	
	
	
	
	
	
	
	setTimeout("resize()", 300);
	
	
	
	$("#search-button").click(function() {
		$("#search-form").submit();
	});
	
	
	
	
	$("#login-link .link").click(function() {
		$("#login-link").css("height", "auto").css("max-height", "auto").css("opacity","1.0");	
		$(".link").hide();
		$(".login-box").slideDown(300);
	});
	
	$("#close-login-box").click(function() {
		$("#login-link").css("opacity","0.8");		
		$(".login-box").hide();
		$(".link").slideDown(300);
	});
	
	
	
	
	
	
	
	
	// subnavigation - subpages
	// 1.show active elements
	$("#sub-nav .parent .active").parent().find("ul").show();
	
	$("#sub-nav .parent").click(function() {
		$(this).find("ul").slideToggle(300);	
	});
	
	
	
	
	
	$(".comment-reply").click(function() {
		$(this).parent().parent().find(".sub-reply").slideToggle(300);	
	});
	
	
	
	
	
}); 


$(window).load(function() {
	//slider
	$('.flexslider').flexslider(
	{
		animation: "slide",
		directionNav: false,
		controlNav: false
	});
});