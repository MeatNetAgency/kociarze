    <!-- HEADER:begin -->
	<?php include 'includes/header.php'; ?>
    <!-- HEADER:end -->
    
    
    <!-- SUBSLIDER:begin -->
	<?php include 'includes/subslider.php'; ?>
    <!-- SUBSLIDER:end -->
    
    <!-- JS:begin -->
    <script>
	
	$(document).ready(function(){
   		$(".faq").click(function(){
			if ($(this).find("h2").hasClass("active"))
			{
				$(this).find("article").slideUp(250);
				$(this).find("h2").removeClass("active");
			}
			else
			{
			$("h2").removeClass("active");
			$(this).find("h2").addClass("active");
			$("article").slideUp(250);
   			$(this).find("article").slideDown(250);
			}
   		});
  	 });

	</script>
    <!-- JS:end -->
    
    <!-- CSS:begin -->
    <style type="text/css">
	
	.faq h2:hover {cursor:pointer;}
	.faq article {display:none;}
	.faq .active {color:#1d8995; background-color:white;}
	
	</style>
    <!-- CSS:end -->
    
   
	<div class="container">
    	<div class="row">
        
        
        
        
        	<!-- SUB MENU:begin -->
        	<div class="threecol">
            	<ul id="sub-nav">
                    <li><a href="#" title="Jak to działa?" >Jak to działa?</a></li>
                    <li><a href="#" title="Galeria kotów" >Galeria kotów</a></li>
                    <li><a href="#" title="F.A.Q" class="active">F.A.Q</a></li>
                </ul>
            </div>
        	<!-- SUB MENU:end -->
            
            
            
            
            <!-- FAQ:begin -->
            <div class="ninecol last">
            
            	<div class="row">
                	<div class="twelvecol">
                    	<h1 class="subtitle">NAJCZĘŚCIEJ ZADAWANE PYTANIA - 3 TYGODNIOWE WYZWANIE</h1>
                    </div>
                </div>
                
                <div class="row">
                	<div class="twelvecol">
                    
                    
                    	<div class="faq">
                    		<h2>1. &nbsp;&nbsp;&nbsp; Na czym polega 3-tygodniowe wyzwanie PURINA ONE? </h2>
                        	<article>
                        		3-tygodniowe wyzwanie PURINA ONE to program dietetyczny mający na celu poprawę stanu zdrowia Twojego kota. W ramach tego programu będziesz stopniowo wprowadzać do diety Twojego kota karmę PURINA ONE. Po okresie adaptacji, gdy Twój kot będzie jadł wyłącznie karmę PURINA ONE, następuje okres trzech tygodni wyzwania. Już w tak krótkim okresie będziesz w stanie zaobserwować pozytywne zmiany w stanie zdrowia, kondycji sierści i skóry Twojego pupila.
Najważniejsze elementy 3-tygodniowego wyzwania PURINA ONE: 
Uczestnicy wyzwania otrzymują szczegółowe instrukcje dotyczące wprowadzania do diety kota nowej karmy. Przez trzy tygodnie koty uczestniczące w wyzwaniu jedzą wyłącznie karmę PURINA ONE. W tym czasie uczestnicy otrzymują regularnie porady pozwalające lepiej poznać potrzeby ich kota, biuletyn informacyjny oraz inne informacje związane ze zdrowiem i dobrym samopoczuciem ich kota. Po zakończeniu 3-tygodniowego wyzwania spośród użytkowników organizatorzy wyłonią dwunastu laureatów konkursu, w którym nagrodami są; roczny zapas karmy PURINA ONE, gadżety PURINA ONE, sesja zdjęciowa w domu zwycięzcy dla niego i jego kota oraz kalendarz ze zdjęciami 12 zwycięskich kotów.
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>2. &nbsp;&nbsp;&nbsp; Czy etap adaptacji jest rzeczywiście niezbędny w przypadku mojego kota? </h2>
                        	<article>
                        		Tak. Ma on kluczowe znaczenie dla zdrowia Twojego kota i zwykle powinien trwać od 7 do 10 dni. Koty nie mogą raptownie zmieniać diety. Są wrażliwe na zmiany w diecie, a ich układ pokarmowy wymaga czasu na przyzwyczajenie się do nowej karmy. Stopniowe wprowadzanie nowej karmy stanowi najlepszy sposób na zmianę diety Twojego kota i jest ważnym elementem programu 3-tygodniowego wyzwania. Okres przyzwyczajania trwa zazwyczaj od 7 do 10 dni, jednak w przypadku wyjątkowo wrażliwych kotów należy go wydłużyć do 12 dni lub nawet 2 tygodni.
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>3. &nbsp;&nbsp;&nbsp; Kiedy rozpocząć 3-tygodniowe wyzwanie PURINA ONE? </h2>
                        	<article>
                        		Rozpoczęcie wyzwania następuje w chwili, w której Twój dorosły kot je wyłącznie karmę PURINA ONE po okresie przejściowym i jest całkowicie przyzwyczajony do nowego składnika w swojej diecie.
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>4. &nbsp;&nbsp;&nbsp; Ile karmy PURINA ONE dawać swojemu kotu? </h2>
                        	<article>
                        		Zalecaną porcję dzienną należy dostosować do warunków atmosferycznych, poziomu aktywności kota i jego stanu fizycznego. W odniesieniu do poszczególnych produktów należy zapoznać się z zaleceniami dotyczącymi dawkowania podanymi na naszej stronie internetowej w części „Produkty dostosowane do indywidualnych potrzeb”. Kot powinien mieć stały dostęp do czystej, świeżej wody pitnej.
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>5. &nbsp;&nbsp;&nbsp; Mam kociaka. Czy kocięta również mogą uczestniczyć w tym programie? </h2>
                        	<article>
                        		Niestety nie. 3-tygodniowe wyzwanie jest otwarte tylko dla dorosłych kotów, nie dla kociąt na etapie intensywnego rozwoju.
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>6. &nbsp;&nbsp;&nbsp; Ile kotów mogę zarejestrować w programie 3-tygodniowego wyzwania?</h2>
                        	<article>
                        		W programie 3-tygodniowego wyzwania możesz zarejestrować każdego swojego kota.
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>7. &nbsp;&nbsp;&nbsp; Jakich rezultatów mogę się spodziewać po 3-tygodniowym wyzwaniu?</h2>
                        	<article>
                        		<p>POCZĄTEK: Wspaniały apetyt: Twój kot będzie chętnie jadł, ciesząc się doskonałym smakiem karmy PURINA ONE.</p>

								<p>TYDZIEŃ 1: Wysoki poziom energii i witalności: poziom energii i witalności Twojego kota powinien wzrosnąć dzięki kompletnej i zbilansowanej pod względem odżywczym karmie PURINA ONE.</p>

								<p>TYDZIEŃ 2: Lepsze* trawienie: karma PURINA ONE zawiera cykorię, naturalny składnik o potwierdzonym korzystnym oddziaływaniu na zdrowie układu pokarmowego. Dzięki odpowiedniej zawartości błonnika i wysokiej przyswajalności karmy Purina ONE zauważysz również zmianę w stolcach Twojego kota: będą one mniejsze i bardziej zwarte (*w porównaniu z produktami niezawierającymi cykorii). </p>

								<p>TYDZIEŃ 3: Zdrowa skóra, lśniąca sierść, bystre oczy: karma PURINA ONE zawiera specjalne składniki odżywcze, między innymi kwasy tłuszczowe omega 3 i 6, oraz niezbędne witaminy i skłądniki mineralne zapewniające zdrowie skóry kota i blask jego sierści. Dzięki dużej zawartości przeciwutleniaczy karma ma również dobroczynne oddziaływanie na zdrowie oczu. </p>

								<p>ZAKOŃCZENIE: Odpowiednia ochrona układu immunologicznego: PURINA ONE Actilea® to wyjątkowa receptura o potrójnym działaniu, składająca się z drożdży, probiotyków i przeciwuletniaczy rozpoczynających swoje dobroczynne działanie w jelitach, wzmacniając od wewnątrz naturalne mechanizmy obronne organizmu</p>

								<p>"Początek: Wspaniały apetyt: Twój kot będzie chętnie jadł, ciesząc się doskonałym smakiem karmy PURINA ONE. "</p>

								<p>"Tydzień 1+: Duża witalność. Ogólny stan zdrowia i poziom witalności Twojego kota powinny ulec poprawie dzięki kompletnej i zbilansowanej pod względem odżywczym karmie PURINA ONE."</p>

								<p>"Tydzień 2+: Lepsze* trawienie: sucha karma PURINA ONE zawiera cykorię, naturalne składniki o potwierdzonym korzystnym oddziaływaniu na zdrowie układu pokarmowego oraz ułatwiające przyswajanie składników odżywczych. 
*w porównaniu z produktami niezawierającymi cykorii"</p>

								<p>"Tydzień 3+: Lśniąca sierść, gładka skóra, bystre oczy: Twój kot powinien teraz mieć lśniącą sierść, gładką skórę i bystre oczy — wszystko to dzięki kwasom tłuszczowym omega 3 i 6, niezbędnym witaminom i składnikom mineralnym dostarczanym w karmie PURINA ONE."</p>

								<p>"Zakończenie: Na tym etapie wyjątkowa kombinacja witamin i przeciwutleniaczy zawartych w karmie PURINA ONE aktywnie wspiera układ immunologiczny Twojego kota, pomagając mu zachować zdrowie teraz i w przyszłości."
3-tygodniowe wyzwanie jest skierowane do dorosłych, zdrowych kotów.</p>
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>8. &nbsp;&nbsp;&nbsp; A jeśli udział w programie mnie nie usatysfakcjonuje? </h2>
                        	<article>
                        		Powiedz nam o tym! Jeśli rezultaty wyzwania uważasz za niesatysfakcjonujące, podziel się z nami swoją opinią. Pod koniec programu poprosimy Cię o wypełnienie formularza stanu zdrowia Twojego kota. Udziel nam szczerych odpowiedzi i przekaż, co przyniosło korzyści Twojemu kotu, a co nie. Pamiętaj, że w programie mogą uczestniczyć wyłącznie zdrowie, dorosłe koty. Jeśli udział w programie był dla Ciebie niesatysfakcjonujący, możesz również skontaktować się z naszym działem obsługi klienta. Jak najprędzej odpiszemy Ci pocztą elektroniczną.
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>9. &nbsp;&nbsp;&nbsp; Co mam zrobić, żeby zdjęcie mojego kota znalazło się w galerii Koty na stronie internetowej PURINA ONE?</h2>
                        	<article>
                        		Pod koniec programu otrzymasz formularz oceny stanu zdrowia swojego kota wraz z zaproszeniem do przesłania jego nowego zdjęcia. Nie musisz przesyłać zdjęcia kota. Jeśli nie chcesz, aby zdjęcie zostało opublikowane, nie zaznaczaj pola wyboru „Wyrażam zgodę na poddanie mojej oceny moderacji i opublikowanie (zgodnie z warunkami programu)”.
                        	</article>
                            <hr/>
                        </div>
                        
                        <div class="faq">
                    		<h2>10. &nbsp;&nbsp;&nbsp; Czy mogę uzyskać więcej informacji na temat moderowania mojej oceny i zdjęcia mojego kota?</h2>
                        	<article>
                        		Rolą moderacji jest zatwierdzenie bądź odrzucenie (w całości lub częściowo) opublikowania informacji przesłanych przez użytkownika na stronie internetowej. Moderowanie może zająć 20 minut lub cały dzień, ten czas może ulegać zmianom. Jeśli opinia lub zdjęcie zostaną odrzucone, masz możliwość wysłania ich ponownie po zmodyfikowaniu. Otrzymasz informację co było powodem odrzucenia zdjęcia przez moderatora serwisu.
                        	</article>
                            <hr/>
                        </div>
                        
                        
                        
                    </div>
                </div>
                
            </div>
            <!-- FAQ:end -->
            
            
            
            
        </div>
    </div>
    
    
        
    <!-- FOOTER:begin -->
	<?php include 'includes/footer.php'; ?>
    <!-- FOOTER:end -->