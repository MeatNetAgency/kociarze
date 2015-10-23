function resize()
{
	//resize main-menu row:
	var height = 				$("#main-menu").outerHeight();
	var width = 				$("#main-menu").width();
	var marginRight = 		$("#main-menu").css("margin-right");
	var spacerWidth = $("#main-menu").parent().width() - ($("#main-menu").width() + $("#search-box").width());
	$("#menu-spacer").css("margin-left", (width-1)).css("width", spacerWidth);
	var position = $("#main-menu").position();
	var lenght = position.left;
	$("#row-spacer").css("width", lenght);
	
	
	// set-up menu margin
	var sliderHeight = $("#main-slider").height();
	var menuHeight = $("#header").height();
	var newMargin = sliderHeight - menuHeight;
	
	//alert("sliderHeight = "+sliderHeight + "\n" + "menuHeight = " + menuHeight + "\n" + "newMargin = "+newMargin);
	
	$("#header").css("margin-bottom", newMargin);
}





function repositionSlider()
{
	// set up slider
	var height = $("#content").css("top");
	
	var marginTop = 0;
	if($(".panel-roll").is(":visible"))
		marginTop = 45;
	
	$("#main-slider").css("position", "absolute").css("top", marginTop).css("z-index", "-2");
	$(".flex-control-nav").insertBefore("#content").css("top", height).css("margin", 0).css("padding", 0);
	
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
	
	
	
	
	
	
	
	
	
	
	repositionSlider();
	setTimeout("resize()", 100);

	
	//resize main-menu row on screen change
	$( window ).resize(function() {
		resize();
		
		// hide popups
		$(".panel-roll").hide();
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
    	$( "#tab" ).tabs();
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

	
	
	
	
	
	
	
	
	
	
	//tabs users/movies/photos
	$(function() 
	{
   		$( "#tabs" ).tabs();
  	});
	
	
	
	
	
	
	
	
	
	
	
	//ADMIN
	$("#events").click(function()
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
	 $(".gallery-big-photo").mouseenter(function() 
	 {
		 $(".photo-background").css("visibility", "visible");
		 $(".photo-des-content").css("visibility", "visible");
	 });
	 
	  $(".gallery-big-photo").mouseleave(function() 
	 {
		 $(".photo-background").css("visibility", "hidden");
		 $(".photo-des-content").css("visibility", "hidden");
	 });
	 

	 
	 // gallery small photo
	  $(".gallery-small-photo").mouseenter(function() 
	 {
		
		 $(this).find(".photo-background-s").css("visibility", "visible");
		 $(this).find(".photo-des-content-s").css("visibility", "visible");
	 });
	 
	  $(".gallery-small-photo").mouseleave(function() 
	 {
		 $(this).find(".photo-background-s").css("visibility", "hidden");
		 $(this).find(".photo-des-content-s").css("visibility", "hidden");
	 });
	
	
	
	
	
}); 