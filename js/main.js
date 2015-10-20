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
	$("#main-slider").css("position", "absolute").css("top", 0).css("z-index", "-2");
}


$(document).ready(function()
{
	
	//slider
	$('.flexslider').flexslider(
	{
		animation: "slide"
	});
	
	
	repositionSlider();
	setTimeout("resize()", 100);
	
	
	
	
	//resize main-menu row on screen change
	$( window ).resize(function() {
		resize();
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
		paginateElement: '.news',
		elementsPerPage: 1,
		effect: 'slide',
       	slideOffset: '200',
        prevButtonText:' &#8592;',
		nextButtonText:' <span class="right-arrow">&#x279d;</span>',
  	});
	$(".prev").appendTo("#toback");
	$(".next").appendTo("#toforward");
	
	//gallery
	 $("td").mouseenter(function() 
	 {
		 $(".photo-back").css("visibility", "visible");
		 $(".photo-info").css("visibility", "visible");
	 });
	 
	  $("td").mouseleave(function() 
	 {
		 $(".photo-back").css("visibility", "hidden");
		 $(".photo-info").css("visibility", "hidden");
	 });
	
	
	
	
	
}); 