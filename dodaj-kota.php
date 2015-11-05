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
            	<form class="validate">
                
            	<h2>KONTO ADMINISTRATORA</h2>
                <h2>DODAJ NOWEGO KOTA</h2>
                
             <!-- FORM:begin -->
                <article class="form">
            		<div class="row">
                
            			<div class="fourcol label">Imię:</div>
                		<div class="eightcol last">
                    		<input type="text" name="catname" />
                    	</div>
                    
                    	<div class="fourcol label">Data urodzenia:</div>
                		<div class="eightcol last">
                			<select name="dateofbirth">
							 	<option value="2015">2015</option>
							 	<option value="2014">2014</option>
                            	<option value="2013">2013</option>
                            	<option value="2012">2012</option>
                            	<option value="2011">2011</option>
                            	<option value="2010">2010</option>
                            	<option value="2009">2009</option>
                            	<option value="2008">2008</option>
                            	<option value="2007">2007</option>
							</select>
                		</div>
                        
                    	<div class="fourcol label">Miesiąc urodzenia:</div>
                		<div class="eightcol last">
                			<select name="monthofbirth">
								<option value="Styczeń">Styczeń</option>
							 	<option value="Luty">Luty</option>
                            	<option value="Marzec">Marzec</option>
                            	<option value="Kwiecień">Kwiecień</option>
                            	<option value="Maj">Maj</option>
                            	<option value="Czerwiec">Czerwiec</option>
                            	<option value="Lipiec">Lipiec</option>
                            	<option value="Sierpień">Sierpień</option>
                            	<option value="Wrzesień">Wrzesień</option>
                            	<option value="Październik">Październik</option>
                            	<option value="Listopad">Listopad</option>
                            	<option value="Grudzień">Grudzień</option>
							</select>
                		</div>
                        
                    	<div class="fourcol label">Płeć:</div>
                		<div class="eightcol last">
                			<select name="sex">
							 	<option value="Kotka">Kotka</option>
							 	<option value="Kot">Kot</option>
							</select>
                		</div>
                    
                   		<div class="fourcol label">Rasa:</div>
                		<div class="eightcol last">
                			<input type="text" name="race"/>
                		</div>
                        
                  		<div class="fourcol label">Kolory:</div>
                		<div class="eightcol last">
                			<select name="colors">
							 	<option value="1">1</option>
							 	<option value="2">2</option>
                            	<option value="3">3</option>
							 	<option value="4">4</option>
							</select>
                		</div>
                    
                   		<div class="fourcol label">Kolor dominujący:</div>
                		<div class="eightcol last">
                			<input type="text" name="main-color"/>
                		</div>
                    
                   		<div class="fourcol label">Wzór:</div>
                		<div class="eightcol last">
                			<select name="pattern">
							 	<option value="Pręgowaty">Pręgowaty</option>
							 	<option value="Ciapki">Ciapki</option>
                            	<option value="Jednolity">Jednolity</option>
							</select>
                		</div>
                
            		</div>
               		
                    <hr/>
               
                	<div class="row">
                		<div class="fourcol label">Zdjęcie:</div>
                		<div class="eightcol last">
                			<img src="img/kot-maly.png" alt="Nazwa usera"/> 
                		</div>
                    </div>
                    <div class="row">
                    	<div class="fourcol"></div>
                		<div class="eightcol last">
                			<a class="button button-teal fleft" type="submit" href="#" title="Wyślij">Wybierz zdjęcie &nbsp; &nbsp; &#10010;</a> 
                		</div>
                	</div>
                    
                     <hr/>
                    
                    <div class="row">
                		<div class="fourcol label">Zdjęcia kota:</div>
                		<div class="eightcol last">
                            <div class="gallery-small-photo-sub">
                                <img src="img/noimage.png" alt="Nazwa kota" />	
                            </div>
                		</div>
                    </div>
                    <div class="row">
                    	<div class="fourcol"></div>
                		<div class="eightcol last">
                			<a class="button button-teal fleft" type="submit" href="#" title="Wyślij">Dodaj zdjęcia &nbsp; &nbsp; &#10010;</a> 
                		</div>
                	</div>
             
                	<hr/>
                    
                    <div class="row">
                		<div class="fourcol label">Filmy kota:</div>
                		<div class="eightcol last">
                            <div class="gallery-small-photo-sub">
                                <img src="img/noimage.png" alt="Nazwa kota" />	
                            </div>
                		</div>
                    </div>
                    <div class="row">
                    	<div class="fourcol"></div>
                		<div class="eightcol last">
                			<a class="button button-teal fleft" type="submit" href="#" title="Wyślij">Dodaj filmy &nbsp; &nbsp; &#10010;</a> 
                		</div>
                	</div>
             
                	<hr/>
                
                	<div class="row">
                		<div class="fourcol label">Profil:</div>
                		<div class="eightcol last">
                        	<a class="button button-teal fleft" type="submit" href="#" title="Usuń profil">Usuń &nbsp; &nbsp; &#10006;</a>
                		</div>
                	</div>
                
                	<hr/>
                
                 	<div class="row">
                		<div class="fourcol label">Opis:</div>
                		<div class="eightcol last">
                			<textarea type="text" name="description"></textarea>
                		</div>
                    </div>
                    <div class="row">
                    	<div class="fourcol"></div>
                		<div class="eightcol last">
                			<button class="button button-teal fleft" type="submit" href="#" title="Wyślij">Wyślij &nbsp; &nbsp; &#x279d;</button> 
                		</div>
                	</div>
              	</article>
            <!-- FORM:end -->
                
                </form>
        	</div>
        	
    	</div>
   </div>
    
    
    
    
    
    
    
    
    
   
    
    <!-- FOOTER:begin -->
	<?php include 'includes/footer.php'; ?>
    <!-- FOOTER:end -->
    
    
	
