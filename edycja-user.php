    <!-- HEADER:begin -->
	<?php include 'includes/header.php'; ?>
    <!-- HEADER:end -->
    
    
    
    
    
    
    <!-- SLIDER:begin -->
	<?php include 'includes/subslider.php'; ?>
    <!-- SLIDER:end -->
    
	<br>
        
    
	<div class="container" id="content">
    	<div class="row">
        
        	<div class="threecol">
            	<ul id="sub-nav">
                    	<li><a href="#" title="Mój profil" class="active">Mój profil</a></li>
                        <li><a href="#" title="Wiadomości">Wiadomości</a></li>
                        <li><a href="#" title="Znajomi" >Znajomi</a></li>
                        <li><a href="#" title="Wyzwanie">Wyzwanie</a></li>
                </ul>
            </div>
            
            <div class="ninecol last">
            	<h2>KONTO ADMINISTRATORA</h2>
                <a href="#" title="Nazwa kota"><h2>EDYCJA: NAZWA USERA</h2></a>
                
             <!-- FORM:begin -->
                <article class="form">
            		<div class="row">
                
            			<div class="fourcol label">Imię:</div>
                		<div class="eightcol last">
                    		<input type="text" name="name" />
                    	</div>
                        
                       <div class="fourcol label">Nazwisko:</div>
                		<div class="eightcol last">
                    		<input type="text" name="surname" />
                    	</div>
                        
                       <div class="fourcol label">Nazwa użytkownika:</div>
                		<div class="eightcol last">
                    		<input type="text" name="username" />
                    	</div>
                        
                       <div class="fourcol label">E-mail:</div>
                		<div class="eightcol last">
                    		<input type="email" name="email" />
                    	</div>
                        
                       <div class="fourcol label">Hasło:</div>
                		<div class="eightcol last">
                    		<input type="password" name="password" />
                    	</div>
                        
                       <div class="fourcol label">Powtórz hasło:</div>
                		<div class="eightcol last">
                    		<input type="password" name="password2"/>
                    	</div>
                        
                    </div>
                    
                    <hr/>
                        
                     <div class-"row">
                        <div class="row"><div class="fourcol label">Ulica:</div><div class="eightcol last"><input type="text" name="street" /></div></div>
                        <div class="row"><div class="fourcol label">Numer domu/lokalu:</div><div class="eightcol last"><input type="text" name="street_num" /></div></div>
                        <div class="row"><div class="fourcol label">Kod pocztowy:</div><div class="eightcol last"><input type="text" name="postal" /></div></div>
                        <div class="row"><div class="fourcol label">Miasto:</div><div class="eightcol last"><input type="text" name="city" /></div></div>
                     </div>
                        
                     <hr/>
                     
                     <div class="row">
                     	 <div class="row"><div class="fourcol label">Płeć:</div><div class="eightcol last"><select name="sex"><option>Kobieta</option><option>Mężczyzna</option></select></div></div>
                        <div class="row"><div class="fourcol label">Data urodzenia:</div><div class="eightcol last"><select name="birth_date_day"><option>1</option></select><select name="birth_date_month"><option>1</option></select><select name="birth_date_year"><option>2015</option></select></div></div>
                     </div>
                     
                     <hr/>
                    
          			<div class="row">
                    	<div class="fourcol label">Zdjęcie:</div><div class="eightcol last"><img src="img/kot-maly.png" alt="Nazwa usera"/></div>
            		</div>
               	
                    <div class="row">
                    	<div class="fourcol"></div><div class="eightcol last"><a class="button button-teal fleft" type="submit" href="#" title="Wyślij">Wybierz zdjęcie &nbsp; &nbsp; &#10010;</a></div>
                	</div>
             
                	<hr/>
                    
                    <div class="row">
                    	<div class="fourcol label">Pokaż e-mail:</div>
                       	<div class="eightcol last">
                        	<select name="show-mail">
                            	<option>Tak</option>
                                <option>Nie</option>
                            </select>
                    	</div>
                   	</div>
                    
                    <div class="row">
                    	<div class="fourcol label">Skype:</div>
                		<div class="eightcol last">
                    		<input type="text" name="skype" />
                    	</div>
                   	</div>
                 	
                    <div class="row">
                    	<div class="fourcol label">Newsletter:</div>
                       	<div class="eightcol last">
                        	<select name="newsletter">
                            	<option>Tak</option>
                                <option>Nie</option>
                            </select>
                    	</div>
                   	</div>
                    
                    <div class="row">
                		<div class="fourcol label">Opis:</div>
                		<div class="eightcol last">
                			<textarea type="text" name="description"></textarea>
                		</div>
                    </div>
                    
                    <hr/>
                    
                    <div class="row">
                    	<div class="fourcol label">Profil:</div>
                		<div class="eightcol last">
                			<a class="button button-teal fleft" type="submit" href="#" title="Wyślij">Usuń profil &nbsp; &nbsp; &#10006;</a>
                		</div>
                	</div>
                
              	</article>
            <!-- FORM:end -->
                
                
        	</div>
        	
    	</div>
   </div>
    
    
    
    
    
    
    
    
    
   
    
    <!-- FOOTER:begin -->
	<?php include 'includes/footer.php'; ?>
    <!-- FOOTER:end -->
    
    
	
