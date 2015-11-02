<!doctype html><html>
	<head>
		<meta charset="UTF-8">
		<title>Kociarze.pl</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--JS JQUERY-->
        <script src="js/jquery-1.11.3.min.js"></script>
        
        <!--JS JQUERY TABS-->
        <script src="js/tabs.js"></script>
        
        <!--JS FLEXSLIDER2-->
        <script src="js/flexslider/jquery.flexslider-min.js"></script>
        
        <!-- JS PAGINATOR -->
        <script src="js/jquery.easyPaginate.js"></script>
        
        <!-- JS TOOLTIP -->
        <script src="js/tooltip.min.js"></script>
        
         <!-- JS SHOW MORE TEXT -->
        <script src="js/showmoretext.js"></script>
        
        <!-- JS JQUERY VALIDATE -->
        <script src="js/jquery.validate.js"></script>
        
        <!--JS MAIN-->
        <script src="js/main.js"></script>
        
        <!--CSS GRID 1280 PX-->
        <link rel="Stylesheet" type="text/css" href="css/grid.css" />
        
        <!-- CSS TOOLTIP -->
        <link rel="Stylesheet" type="text/css" href="css/tooltip.css" />
                    
        <!-- GOOGLE FONTS: LATO -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
                        
        <!-- MAIN CSS -->
        <link rel="Stylesheet" type="text/css" href="css/main.css" />

	</head>
        
	<body>
    
    
    
    
    
    
    	<!--BUY NOW:begin-->
        
        	<div class="buy-now" ><a href="javascript:void();" title="Kup teraz!"><img src="img/ikona-lapa.png" alt="Kup teraz"/><br>kup teraz</a></div>
        	<div class="buy-now-mobile" ><a href="javascript:void();" title="Kup teraz!"><img src="img/ikona-lapa.png" alt="Kup teraz"/><span>kup teraz</span></a></div>
            
        <!--BUY NOW:end-->
       
       
		 <!-- MESSAGE SUCCESS:begin -->
        <div id="message-success" style="position:fixed; width:100%; text-align:center; padding:2% 0%;  z-index:99999; background-color:green; font-size:1.4em; color:white; opacity:0.9; display:none; ">
        Wiadomość została wysłana. Dziękujemy.
        </div>
        
        <!-- MESSAGE SUCCESS:end -->
        
        
        
        
        
        
        <!-- MOBILE MENU:begin -->
        
        <div id="mobile-menu">
        	<div>	
            	<h4 class="fleft">MENU:</h4>
                <a href="javascript:void();" id="close-mobile-menu" title="Zamknij menu" class="tooltip">&#10006;</a>
                <br class="clear">
                    <ul>
                        <li><a href="index.php" title="Strona główna">strona główna</a></li>
                        <li><a href="aktualnosci.php" title="Aktualności" style="display:inline-block;">aktualności</a></li>
                        <li><a href="koci-magazyn.php" title="Koci magazyn">koci magazyn</a></li>
                        <li><a href="wyzwanie.php" title="Wyzwanie">wyzwanie</a></li>
                        <li><a href="forum.php" title="Forum">forum</a></li>
                        <li><a href="blogi.php" title="Blogi">blogi</a></li>
                        <li><a href="klub.php" title="Klub">klub</a></li>
                        <li><a href="produkty.php" title="Produkty">produkty</a></li>
                    </ul> 
            </div>
        </div>
        
        <!-- MOBILE MENU:begin -->
        
        
        
        
        
        
        
        
        
        
               
       
       
       
       <!-- TOP BAR:begin -->
    <div class="container" id="top-bar">
    	
        
        <!-- login mobile -->
        <!--
        <div class="row" id="mobile-login-link">
            <div class="twelvecol">
                <a href="#" title="Zaloguj się">Zaloguj się &nbsp; &nbsp; &nbsp; &nbsp;&#x2192;</a>
            </div>
        </div>
        -->
    
    	<div class="row">
            <div class="twelvecol top-icons">
            	<span id="test-response"></span>
            	<a href="konto.php" title="Twoje konto"  class="administrator tooltip"><img src="img/person-black.png" alt="administrator"/><span>administrator</span></a>
				<a href="znajomi.php" title="Znajomi" class="tooltip"><img src="img/admin-img-1.png" alt="znajomi"/><span class="count">12</span></a>
               	<a href="javascript:void();" title="Wiadmości" class="open-panel tooltip"><img src="img/admin-img-2.png" alt="poczta"/><span class="count">3</span></a>
               	<a href="javascript:void();" class="open-panel tooltip" title="Wydarzenia"><img src="img/admin-img-3.png" alt="wydarzenia"/><span class="count">7</span></a>
           		<a href="wyloguj.php" title="Wyloguj" class="tooltip"><img src="img/admin-img-4.png" class="last-icon tooltip" alt="wyloguj"/></a>
            </div>
            
            
                
            <!-- messages:begin -->
            <div class="panel-roll">
                <div class="panel-options">
                    Powiadomienia: <span><a href="#" title="Oznacz wszystkie jako przeczytnane">Oznacz wszystkie jako przeczytane</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#" title="Ustawienia">Ustawienia</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#" id="close-panel" title="Zamknij panel">Zamknij</a></span>
                    <br class="clear">
                </div>
                <div class="panel-message unread">
					<div class="photo"><img src="img/koci-magazyn-image.png" alt="Tytuł wiadomości" /></div>
                    <div class="content">
                        <a href="#" title="Kociarze.pl">Kociarze.pl</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#" title="Kocim okiem">Kocim okiem</a>
                        <br>
                        <h4><a href="#" title="Tytuł artykułu">Najlepsze kocie zabawy pomocne w utrzymaniu odpowiedniej wagi.</a></h4>
                    </div>
                    <br class="clear">
				</div>
                <div class="panel-message unread">
					<div class="photo"><img src="img/koci-magazyn-image.png" alt="Tytuł wiadomości"/></div>
                    <div class="content">
                        <a href="#" title="Kociarze.pl">Kociarze.pl</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#" title="Kocim okiem">Kocim okiem</a>
                        <br>
                        <h4><a href="#" title="Tytuł artykułu">Najlepsze kocie zabawy pomocne w utrzymaniu odpowiedniej wagi.</a></h4>
                    </div>
                    <br class="clear">
				</div>
                 <div class="panel-message read">
					<div class="photo"><img src="img/koci-magazyn-image.png" alt="Tytuł wiadomości"/></div>
                    <div class="content">
                        <a href="#" title="Kociarze.pl">Kociarze.pl</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#" title="Kocim okiem">Kocim okiem</a>
                        <br>
                        <h4><a href="#" title="Tytuł artykułu">Najlepsze kocie zabawy pomocne w utrzymaniu odpowiedniej wagi.</a></h4>
                    </div>
                    <br class="clear">
				</div>
                <div class="panel-footer">
                	<a href="#" title="Zobacz wszystkie">Zobacz wszystkie</a>
                </div>
			</div>
            <!-- messages:end -->
            
            
            
            
		</div>
    </div>
    <!-- TOP BAR:end -->
       
       
       
       
       
       
       
     
     
     
     
     
     
     
     <!-- MOBILE MENU BAR:begin -->
     <div class="container" id="mobile-menu-bar">
     	<div class="row">
        	<div class="twelvecol content">
            	<a href="index.php" title="Kociarze.pl"><img class="logo-kociarze" src="img/logo-kociarze.png" alt="Kociarze.pl"/></a>
                <span class="fright"><img src="img/mobile-menu-icon.png" alt="Menu główne" id="open-mobile-menu"></span>
                <br class="clear">
            </div>
        </div>
     </div>
     <!-- MOBILE MENU BAR:end -->
     
     
     
     
     
     
     
       
       
       
       
       
       
       
       
       
     
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        
        
    
    <div id="top-container">
    
    
    
    <!-- HEADER:begin -->
    <div class="container" id="header">
    	
        
        <!-- Logos:begin -->
        <div class="row" id="logotypes">
            <div class="ninecol">
            	<div class="row">
                	<div class="threecol" id="purinaone-logo-wrapper">
                    	<div id="purinaone-logo"><a href="index.php" title="Purina One"><img class="logo-purina" src="img/logo-purina-one.png" alt="Purina One"/></a></div>
                     </div>
                    <div class="ninecol last"></div>
                </div>
            </div>
            <div class="threecol last">
            	<div id="kociarze-logo">
                	<a href="index.php" title="Kociarze.pl"><img class="logo-kociarze" src="img/logo-kociarze.png" alt="Kociarze.pl"/></a>
                </div>   
            </div>           
        </div>
        <!-- Logos:end -->
        
        
        <!-- Main menu:begin -->
        
        <div class="row" id="menu-container">
        	<div id="row-spacer">&nbsp;</div>
            <div id="nav-border-top">&nbsp;</div>
            <div id="nav-border-bottom">&nbsp;</div>
            <div class="ninecol" id="main-menu">
                <nav>
                    <ul>
                        <li><a id="home" href="index.php" title="Strona główna"><img  src="img/ikona-home.png" alt="Strona główna"/></a></li>
                        <li><a href="aktualnosci.php" title="Aktualności" style="display:inline-block;">aktualności</a></li>
                        <li><a href="koci-magazyn.php" title="Koci magazyn">koci magazyn</a></li>
                        <li><a href="wyzwanie.php" title="Wyzwanie">wyzwanie</a></li>
                        <li><a href="forum.php" title="Forum">forum</a></li>
                        <li><a href="blogi.php" title="Blogi">blogi</a></li
                        ><li><a href="klub.php" title="Klub">klub</a></li>
                        <li><a href="produkty.php" title="Produkty">produkty</a></li>
                    </ul> 
                </nav>
            </div>
            <div id="menu-spacer">&nbsp;</div>
            <form id="search-form" action="szukaj.php" method="post">
            <div class="threecol last" id="search-box">            	<div id="search"><input type="text" placeholder="SZUKAJ NA STRONIE" /><input type="submit" id="search-button" value=""></div>
            </div>
            </form>
        </div>
        <!-- Main menu:end -->
        
        
        <!-- Login:begin -->
        <div class="row">
        	<div class="ninecol"></div>
            <div class="threecol last">
            	<form id="login-form">
                    <div id="login-link">
                        <div class="link"><a href="javascript:void();" title="Zaloguj się"><img src="img/ikona-person.png" alt="Zaloguj się" /> zaloguj się &nbsp; &nbsp; &nbsp; &nbsp;&#x2192;</a></div>
                        <div class="login-box">
                            <h4 class="fleft">Logowanie</h4>
                            <a href="javascript:void();" id="close-login-box" title="Zamknij okno" class="tooltip">&#10006;</a>
                            <br class="clear">
                            <input type="email" placeholder="email" name="email" />
                            <input type="password" placeholder="hasło" name="password" />
                            <div style="text-align:left;">
                            <button class="button button-white fright">zaloguj się</button>
                            <span><strong>Zapomniałeś hasła?</strong><br><a href="haslo.php" class="underline">Kliknij tutaj</a></span>
                            
                            <br class="clear">
                            <hr />
                            <h4>Logowanie przez Facebook</h4>
                            <p>Logowanie dostępne dla osób, które nie posiadają konta na kociarze.pl</p>
                            <a class="button button-facebook">zaloguj się przez Facebook</a>
                            <hr />
                            <h4>Nie masz jeszcze konta?</h4>
                            <p>Aby w pełni korzystać z serwisu kociarze.pl zarejestruj się</p>
                            <a class="button button-white-register" href="rejestracja.php">zarejestruj się</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Login:end -->
        

        
        
        
    </div>
    <!-- HEADER:end -->
    </div>
   