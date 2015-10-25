<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kociarze.pl</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--JS JQUERY-->
        <script src="js/jquery-1.11.3.min.js"></script>
        
        
        <!--JS FLEXSLIDER2-->
        <script src="js/flexslider/jquery.flexslider-min.js"></script>
        
        <!--CSS GRID 1280 PX-->
        <link rel="Stylesheet" type="text/css" href="css/grid.css" />
        
        <script type="text/javascript">
		
	
		
        
$(document).ready(function()
{
	
	//slider
	$('.flexslider').flexslider(
	{
		animation: "slide",
		directionNav: false,
		controlNav: false
	});
	
	
	
});
        </script>
        
<style type="text/css">

.row {max-width:1000px;}
</style>
	</head>
	<body>
    
    
    
    
    <div class="container"  style="margin:0px; padding:0px;">
            <div id="main-slider" style="width:100%; max-width:1550;  z-index:1; margin:0px auto; padding:0px;">
                <div class="flexslider" style="margin:0px; padding:0px;">
                    <ul class="slides">
                        <li><img src="img/layer-main.png" alt="slide1" /></li>
                        <li><img src="img/layer-main.png" alt="slide2" /></li>
                    </ul>
                </div>
            </div>
    </div>
    
    

    
    
    <div style="width:100%; position:fixed;top:0;">
    
    <div class="container" id="menu">
    	<div class="row" id="menu-nav">
        	<div class="sixcol"  style="background:#333; color:white;" id="response">0</div>
            <div class="sixcol last"  style="background:#333; color:white;">six</div>
        </div>
    </div>
    
    </div>
    
    
    
    </body>
    </html>