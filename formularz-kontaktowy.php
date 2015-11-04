	<?php include 'includes/header.php'; ?>
    <!-- HEADER:end -->
    
    
    
    
    
    
    <!-- SLIDER:begin -->
	<?php include 'includes/slider.php'; ?>
    <!-- SLIDER:end -->
    
    
    
    <br>
        
    
	<div class="container" id="content">
    	<div class="row">
        	<div class="threecol">
            
            	<ul id="sub-nav">
                    	<li><a href="#" title="Mój profil">Mój profil</a></li>
                        <li><a href="#" title="Wiadomości" class="active">Wiadomości</a></li>
                        <li><a href="#" title="Moi znajomi">Moi znajomi</a></li>
                        <li><a href="#" title="Wyzwanie">Wyzwanie</a></li>
                </ul>
            
            </div>
            
            <!-- FORM:begin -->
            <div class="ninecol last">
            	<form class="validate">
            	<h2 class="subtitle">Formularz kontaktowy</h2>
                <div class="form" >
                
                <div class="row">
                	<div class="twocol label">Temat:</div>
                    <div class="sixcol" >
                    	  <select name="topic">
							<option value="Zapytanie dotyczące konkursu">Zapytanie dotyczące konkursu</option>
							<option value="Problem z działaniem strony">Problem z działaniem strony</option>
                            <option value="Prośba o usunięcie konta">Prośba o usunięcie konta</option>
                            <option value="Problem z rejestracją">Problem z rejestracją</option>
                            <option value="Problem z logowaniem">Problem z logowaniem</option>
						 </select>
                	</div>
                    <div class="fourcol last"></div>
                  </div>
                  
                  <div class="row">
                	<div class="twocol label">Treść:</div>
                    <div class="sixcol">
                    	   <textarea type="text" name="question"></textarea>
                    </div>
                    <div class="fourcol last"></div>                               
                </div>
                  
                 <div class="row">
                	<div class="twocol label">E-mail:</div>
                    <div class="sixcol">
                    	   <input type="email" name="email"/>
                           <div class="clear"></div>
                           <button class="button button-teal fleft" type="submit" href="#" title="Wyślij">Wyślij &nbsp; &nbsp; &#x279d;</button> 
                    </div>
                    <div class="fourcol last"></div>           
                                        
                </div>
                 
            
                    
                </div>
                </form>
            </div>
            <!-- FORM:end -->
            
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	<!-- FOOTER:begin -->
	<?php include 'includes/footer.php'; ?>
    <!-- FOOTER:end -->