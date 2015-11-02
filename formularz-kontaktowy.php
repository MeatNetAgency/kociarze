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
            	<h1 class="subtitle">Formularz kontaktowy</h1>
                <form id="send-form" action="wyslij-wiadomosc.php" method="post">
                
                <div class="row">
                	<div class="twocol" style="margin-right:0%">
                    	<h2>Temat</h2>
                    </div>
                    <div class="sixcol" >
                    	  <input type="text" placeholder="problem z logowaniem"/>
                	</div>
                    <div class="fourcol last"></div>
                  </div>
                  
                 <div class="row" style="margin-top:2%;">
                	<div class="twocol" style="margin-right:0%">
                    	  <h2>Treść</h2>
                    </div>
                    <div class="sixcol">
                    	   <textarea></textarea>
                           <div class="clear"></div>
                           <a class="button button-teal fleft" type="submit" href="#" title="Wyślij">Wyślij &nbsp; &nbsp; &#x279d;</a> 
                    </div>
                    <div class="fourcol last"></div>           
                                        
                </div>
                 
            
                    
                </form>
            </div>
            <!-- FORM:end -->
            
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	<!-- FOOTER:begin -->
	<?php include 'includes/footer.php'; ?>
    <!-- FOOTER:end -->