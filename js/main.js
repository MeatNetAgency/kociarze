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
				$('#top-container').css("position", "absolute").css("top", 48);
			}
    });
	
	
	
	
	
	
	
	setTimeout("resize()", 300);
	
	
}); 