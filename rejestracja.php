    <!-- HEADER:begin -->
	<?php include 'includes/header.php'; ?>
    <!-- HEADER:end -->
    
    
    
    
    
    
    <!-- SLIDER:begin -->
	<?php include 'includes/subslider.php'; ?>
    <!-- SLIDER:end -->
    
	<br>
        
    
	<div class="container" id="content">
    	<form class="validate">
            <div class="row">
                <div class="twelvecol"><h1 class="title">REJESTRACJA NOWEGO UŻYTKOWNIKA</h1></div>
            </div>
        
            <div class="row">
                <div class="sixcol">
                    <h2 class="title">Dane wymagane:</h2>
                    <article class="form">
                        <div class="row"><div class="fourcol label">Imię:</div><div class="eightcol last"><input type="text" name="name" /></div></div>
                        <div class="row"><div class="fourcol label">Nazwisko:</div><div class="eightcol last"><input type="text" name="surname" /></div></div>
                        <div class="row"><div class="fourcol label">Nazwa użytkownika:</div><div class="eightcol last"><input type="text" name="username" /></div></div>
                        <div class="row"><div class="fourcol label">E-mail:</div><div class="eightcol last"><input type="email" name="email" /></div></div>
                        <div class="row"><div class="fourcol label">Hasło:</div><div class="eightcol last"><input type="password" name="password" id="password" /></div></div>
                        <div class="row"><div class="fourcol label">Powtórz hasło:</div><div class="eightcol last"><input type="password" name="password2" /></div></div>
                        
                        <hr>
                                                
                        <div class="row"><div class="fourcol label">Ulica:</div><div class="eightcol last"><input type="text" name="street" /></div></div>
                        <div class="row"><div class="fourcol label">Numer domu/lokalu:</div><div class="eightcol last"><input type="text" name="street_num" /></div></div>
                        <div class="row"><div class="fourcol label">Kod pocztowy:</div><div class="eightcol last"><input type="text" name="postal" /></div></div>
                        <div class="row"><div class="fourcol label">Miasto:</div><div class="eightcol last"><input type="text" name="city" /></div></div>
                        
                        <hr>
                        
                        <div class="row"><div class="fourcol label">Płeć:</div><div class="eightcol last"><select name="sex"><option>Kobieta</option><option>Mężczyzna</option></select></div></div>
                        <div class="row"><div class="fourcol label">Data urodzenia:</div><div class="eightcol last"><select name="birth_date_day"><option>1</option></select><select name="birth_date_month"><option>1</option></select><select name="birth_date_year"><option>2015</option></select></div></div>
                        
                    </article>
                </div>
                <div class="sixcol last">
                    <h2 class="title">Informacje dodatkowe:</h2>
                    <article class="form">
                    	Wypełnienie pól informacji dodatkowych powoduje pojawienie się ich w ogólnie dostępnym profilu użytkownika. <br><strong>Informacje dodatkowe można w dowolnym momencie edytować, dodawać lub usuwać poprzez modyfikację ustawień konta użytkownika.</strong>
                        <hr>
                        <div class="row"><div class="threecol"><img src="img/noimage.png" class="avatar"></div><div class="ninecol last"><strong>Zdjęcie profilowe:</strong><br><br><button class="button button-teal">Wybierz zdjęcie +</button></div></div>
                        <hr>
                        <div class="row"><div class="fourcol label">Nazwa na Skype:</div><div class="eightcol last"><input type="text" name="skype" /></div></div>
                        <div class="row"><div class="fourcol label">Osoba polecająca (email):</div><div class="eightcol last"><input name="email_recomendation" type="email" /></div></div>
                        <div class="row"><div class="fourcol label">Opis:</div><div class="eightcol last"><textarea name="description"></textarea></div></div>
                        <hr>
                        <div class="row"><div class="fourcol label">Pokaż mój email:</div><div class="eightcol last"><select name="show_email"><option>Nigdy</option><option>Zawsze</option></select></div></div>
                        <div class="row"><div class="fourcol label">Newsletter:</div><div class="eightcol last"><select name="newsletter"><option>Tak</option></select></div></div>
                        
                        
                    </article>
                </div>
            </div>
            
            <br>
            
            
            <div class="row">
            	<div class="twelvecol">
                	<article class="form">
                    
                    	<div class="row">
                            <div class="tvelvecol center">
                            	<input type="checkbox" name="regulations">&nbsp;Wyrażam zgodę na przetwarzanie moich danych osobowych przez Nestlé Polska S.A. w zakresie związanym z prowadzeniem serwisu www.kociarze.pl zgodnie z postanowieniami <a href="#" title="Tytuł artykułu">regulaminu</a>. <br><br>
                            	<button class="button button-teal" type="submit">ZAŁÓŻ KONTO</button>
                            </div>
                        </div>
                        
                    </article>
                </div>
            </div>
            
            
            
            
        </form>
    </div>
    
    
    
    
    
    
    
    
    
   
    
    <!-- FOOTER:begin -->
	<?php include 'includes/footer.php'; ?>
    <!-- FOOTER:end -->
    
    
	
