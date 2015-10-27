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
	
	//slider
	$('.flexslider').flexslider(
	{
		animation: "slide",
		directionNav: false,
		controlNav: false
	});
	
	
	
	
	
	
	
	
	
	
	resize();
	$( window ).resize(function() {
		resize();
		$(".panel-roll").hide();
		$("#response").html($(document).width());
		
		//$("#test-response").html($("#top-bar").outerHeight());
		
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
	$(function() 
	{
    	$( "#tabs" ).tabs();
 	});
	
	
	
	
	
	
	
	
	
	
	
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
	
	$(".challenge").mouseover(function(){
		
		$(".challenge").not($(this)).animate({
			width: '16%'
		});
			
		$(this).animate({
			width: '35.9%'
		});
	});
	
	
	setTimeout("resize()", 300);
	
	
}); 