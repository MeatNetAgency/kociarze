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
	
	
	
	
	
	
	
					$(".validate").validate({
                        rules: {
                            name: {
                                required: true,
								minlength: 2
                            },
							catname:{
								required: true,
								minlength: 2
							},
                            surname: {
                                required: true,
								minlength: 2
                            },
                            username: {
                                required: true,
								minlength: 2
                            },
							email: {
                                required: true
                            },
                            password: {
                                required: true,
                                pwcheck: true,
                                minlength: 8
                            },
                            password2: {
                                required: true,
                                equalTo: "#password"
                            },
                            street: {
                                required: true,
								minlength: 2
                            },
							street_num: {
                                required: true,
								minlength: 2
                            },
							postal: {
                                required: true,
								postal: true,
								minlength: 5
                            },
							question: {
								 required: true,
								minlength: 20
							},
							city: {
                                required: true,
								minlength: 3
                            },
							regulations: {
                                required: true
                            }
                        },
                        messages: {
                            name: {
                                required: "&#8593; Podaj swoje imię",
								minlength: "&#8593; Minimalna ilość znaków to 2"
                            },
							catname:{
								required: "&#8593; Podaj imię kota",
								minlength: "&#8593; Minimalna ilość znaków to 2"
							},
                            surname: {
                                required: "&#8593; Podaj swoje nazwisko",
								minlength: "&#8593; Minimalna ilość znaków to 2"
                            },
                            username: {
                                required: "&#8593; Wybierz nazwę użytkownika",
								minlength: "&#8593; Minimalna ilość znaków to 2"
                            },
                            password: {
                                required: "&#8593; Ustaw nowe hasło",
                                pwcheck: "&#8593; Hasło mało skomplikowane",
                                minlength: "&#8593; Hasło jest zbyt krótkie"
                            },
                            password2: {
                                required: "&#8593; Wpisz ponownie hasło",
                                equalTo: "&#8593; Wpisana wartość różni się od hasła"
                            },
                            email: {
                                required: "&#8593; Podaj swój adres email",
                                email: "&#8593; Niepoprawny format adresu email"
                            },
							postal: {
								required: "&#8593; Podaj kod pocztowy",
								postal: "Niepoprawny format kodu pocztowego",
								minlength: "Minimalna ilość znaków to 5"
							},
							question: {
								required: "&#8593; Napisz wiadomość",
								minlength: "&#8593; Wiadomość jest za krótka."	
							},
							city: {
								required: "&#8593; Podaj nazwę miasta",
								minlength: "Minimalna ilość znaków to 3"
							},
							street: {
								required: "&#8593; Podaj nazwę ulicy",
								minlength: "Minimalna ilość znaków to 2"
							},
							street_num: {
								required: "&#8593; Podaj numer ulicy / mieszkania",
								minlength: "Minimalna ilość znaków to 2"
							},
							regulations: {
								required: "&#8593; To pole jest obowiązkowe",
							}
                        }
                    });

                    $.validator.addMethod("pwcheck",
                        function(value, element) {
                            return /^[A-Za-z0-9\d=!\-@._*]+$/.test(value);
                    });
					
					$.validator.addMethod("postal", 
						function(value, element) { 
							return this.optional(element) || /^\d{2}-\d{3}$/.test(value);
					});
	
	
	
	
	
	
	
	
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
	
	
	
	
	
	
	
	//new tabs
	$(".photos").click(function(){
		$(".show-photos").css("display", "block");
		$(".show-movies").css("display", "none");
		$(".show-users").css("display", "none");
		$(".photos").addClass("active");
		$(".movies").removeClass("active");
		$(".users").removeClass("active");
	});
	$(".movies").click(function(){
		$(".show-photos").css("display", "none");
		$(".show-movies").css("display", "block");
		$(".show-users").css("display", "none");
		$(".photos").removeClass("active");
		$(".movies").addClass("active");
		$(".users").removeClass("active");
	});
	$(".users").click(function(){
		$(".show-photos").css("display", "none");
		$(".show-movies").css("display", "none");
		$(".show-users").css("display", "block");
		$(".photos").removeClass("active");
		$(".movies").removeClass("active");
		$(".users").addClass("active");
	});
	
	
	// show more challange
	$("#show-more-challenge").click(function(){
		
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
	
	
	
			
	
	// challenge - ACCORDEON

	
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
		$(this).find(".accor-header").stop(true, true).animate(
		{
			top: '45%'
		});
		$(this).find(".accor-subheader").stop(true, true).animate(
		{
			top: '53%'
		});
		$(this).find(".accor-content").stop(true, true).show('toggle');
		
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
		$(this).find(".accor-header").stop(true, true).animate(
		{
			top: '60%'
		});
		$(this).find(".accor-subheader").stop(true, true).animate(
		{
			top: '68%'
		});
		$(this).find(".accor-content").stop(true, true).hide('toggle');
	

	});
	
	
	// SHOW MORE TEXT
	
$(".opinion-content").shorten({
    "showChars" : 200
});
 

$(".opinion-content").shorten({
    "showChars" : 500,
    "moreText"  : "<br/><p class='button button-grey' style='float:left; margin-top:5%;' >Rozwiń &nbsp; &nbsp; &#10549;</p>",
    "lessText"  : "<br/><p class='button button-grey' style='float:left; margin-top:5%;' >Ukryj &nbsp; &nbsp; &#10548;</p>",
});
	
	
	// BORDER IN MESSAGE PANEL
	
	
	var message = $(".messages").height();
	var chat = ($("#chat").height())+ ($(".delete-message").height());
	
	if (message > chat)
	{
	
	
		$(".messages").css("border-right", "solid #ccc 1px");
		$(".chat-box").css("border-left", "solid #ccc  0px");
		$(".write-message").css("border-left", "solid #ccc  0px");
		$(".delete-message").css("border-left", "solid #ccc  0px");
	}
	else
	{
		$(".messages").css("border-right", "solid #ccc 0px");
		$(".chat-box").css("border-left", "solid #ccc  1px");
		$(".write-message").css("border-left", "solid #ccc  1px");
		$(".delete-message").css("border-left", "solid #ccc  1px");
	}
	
	
	// SUCCESS OF SENDING MESSAGE
	
	//function success()
	//{
		$("#message-success").slideDown(400);
		setTimeout(hide_success_message, 3000);
		function hide_success_message ()
		{
			$("#message-success").slideUp(400);
		}
		
	
		
	//}
	
	
	
	
	
	setTimeout("resize()", 300);
	
	
	
	
	
	
	
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