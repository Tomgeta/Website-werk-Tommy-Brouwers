<!DOCTYPE html>
<html lang="nl">

<head>
	<title>Podotherapie - Van Dreumel</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="" />
	<link rel="icon" type="image/png" href='images/logo.png' sizes="180x180" >

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}


	</script>
	
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<!-- //Web-Fonts -->

    <style>
    ul { 
        list-style-type: none; 
	}
	
	a{
		color: hotpink;
	}
	body {
		overflow-x: hidden;
	}


	</style>
</head>

<body>
	<!-- home -->
	<div id="home">
		<!-- banner -->
		<div class="banner_w3lspvt">
			<!-- nav -->
			
			<div class="nav_w3ls pt-4 pb-3 text-center">
			<!--<a href="index.php" class="logo"><img src="./images/logo.png" id="vandeursellogo"></a><br/><br/>-->
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">Van Dreumel</a></li>
						<li><a href="podotherapie.php">Podotherapie</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
			<!-- //nav -->
			<!-- banner slider -->
			<div id="homepage-slider" class="st-slider">
				<input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
				<div class="images">
					<div class="images-inner">
						<div class="image-slide">
							<div class="banner-w3ls-1">

							</div>
						</div>
						<div class="image-slide">
							<div class="banner-w3ls-2">

							</div>
						</div>
						<div class="image-slide">
							<div class="banner-w3ls-3">

							</div>
						</div>
					</div>
				</div>
				
				</div>
				<!-- banner-text -->
				<div class="banner-text" id="fieldsetmain">
					<fieldset id="fieldsetid">
					
						<legend>
					
							
						</legend>
						
						<div class="banner-sub-txt"><br/>
							<h3> Specialist in steunzolen </h3><br>
							<h1 class="banner-txt"><p id="randomquotes" > </p></h1>
							<p class="banner-txt1">A.P.W. Van Dreumel</p>
							
								<p>
									<ul
										><li>
											<i class="fa fa-map-marker fa-lg"></i>&nbsp;&nbsp;Lindenlaan 7,
											<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5384 BD Heesch
										</li>
										<li>
											<a href="skype:0412456331?call"><i class="fa fa-phone"></i> &nbsp; 0412 45 63 31</a><br>
											<i class="fa fa-envelope"></i>
											&nbsp;<a href="mailto:info@podotherapievandreumel.nl ">info@podotherapievandreumel.nl</a>
										</li>
									</ul>
								</p><br>
							
											
							<script>
							
							function randomtext( ) {					
							
							var randomtxt = [
										' "Wij staan voor een <strong>uiterst persoonlijke</strong> benadering"  ',
										' "Een <strong>Gezonde stap</strong> daar gaat het om " ',
										' “Uiteraard is onze praktijk rolstoelvriendelijk.”  ',
										' “Steunzolen worden geproduceerd in eigen beheer.” ' , 
										' “de titel ‘podotherapeut’ is een beschermde titel” '];
										 return randomtxt[Math.floor((Math.random() * 4.99))];
										
									
								}
								
								
								document.getElementById("randomquotes").innerHTML = randomtext();
								setInterval(function(){
									document.getElementById("randomquotes").innerHTML = randomtext();

								},7500); 
								
							</script>
							
						</div>
					</fieldset>
				</div>
				<!-- //banner-text -->
			</div>
			<!-- //banner slider -->
		</div>
		<!-- //banner -->
	</div>
    <!-- //home -->
    

    <!-- behandelingen -->
	<section class="about py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="d-xl-flex about-grids">
				<div class="col-xl-4 about-left p-0" id="indexvid">
						<video   id="index" controls  autoplay muted disablePictureInPicture loop controlsList="nodownload" style="position: relative; left: 2vw; top: -6.5vh; " >
								<source src="video/pvd.mp4" type="video/mp4">
								
								Your browser does not support HTML5 video.
							  </video>
				</div>
				<div class="col-xl-8 about-left indextxt" id="move">
                    <h3 class="mb-2">Behandeling</h3>
                    <h5>Praktijk voor Podotherapie van Dreumel is expert op het gebied 
                        van voetbehandelingen en advies voor iedereen. 
                    </h5>
					<p class="mb-3">
							<ul>
								<li><i class="fa fa-check" style="color:#000"></i> 
									Bedrijven; Van Dreumel adviseert met betrekking tot	bedrijfsschoeisel en daarvoor betreffende zolen
									<br/>
							    	Waardevol advies kan ervoor zorgen dat het ziekteverzuim wordt teruggedrongen en het personeel beter kan werken
								</li>
								<li><i class="fa fa-check" style="color:#000"></i> 
									Diabetici; de praktijk heeft een overeenkomst met Zorggroep Synchroom en is zeer bedreven in het screenen,<br/> vaststellen van zorgprofiel en behandelen van de diabetische voet, ook op het gespecialiseerde vlak waaronder wondbehandeling.
								</li>
								<li><i class="fa fa-check" style="color:#000"></i> 
									Kinderen; de podotherapeut constateert en behandelt voetproblemen
								</li>
								<li><i class="fa fa-check" style="color:#000"></i> 
									Sporters; gedurende sportblessures kan de sporter terecht bij Praktijk voor Podotherapie Van Dreumel
								</li>
							</ul>
					</p>
					
				</div>
			</div>	
		</div>
	</section>
    <!-- //behandelingen -->
    
    <!-- voetklachten -->
<section class="about py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="d-xl-flex about-grids">
				<div class="col-xl-4 about-left p-0">
						<img src="./images/voetklachten3.jpg" id="index">
				</div>
				<div class="col-xl-8 about-left indextxt " id="move">
                    <h3 class="mb-3">Voetklachten?</h3>
                    <h5>Voor de volgende klachten bent u welkom in de professionele Praktijk voor Podotherapie Van Dreumel 
                    </h5>
					<p class="mb-3">
							<ul>	
                                
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Ingegroeide nagels
                                </li>
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Klachten aan het steun- en bewegingsapparaat zoals knie-, heup- en rugklachten
                                </li>
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Klachten bij diabetes-mellitus (suikerziekte) en reuma 
                                </li>
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Overbelastingsklachten
                                </li>
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Specifieke voetproblemen bij kinderen 
                                </li>
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Sportblessures 
                                </li>
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Standsafwijkingen van tenen/nagels 
                                </li>
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Ulcera (wonden) bij diabetes-mellitus patiënten 
                                </li>
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                    Vermoeidheidsklachten
                                </li>
							</ul>
					</p>
					
				</div>
			</div>	
		</div>
	</section>
    <!-- //voetklachten -->

	<!-- Werkwijze -->
	<section class="about py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="d-xl-flex about-grids">
				<div class="col-xl-4 about-left p-0">
						<img src="./images/werkwijze.jpg"  id="index1">
				</div>
				<div class="col-xl-8 about-left indextxt" id="move">
                    <h3 class="mb-3">Werkwijze</h3>
                    <h5>Afhankelijk van de klacht bestaat een podotherapeutisch onderzoek uit verschillende onderdelen: 
                    </h5>
					<p class="mb-3">
							<ul>								
                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Bespreken van relevante persoonlijke gegevens.
                                </li>

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Doornemen van de voorgeschiedenis van de patiënt op medisch vlak.
                                </li>

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Uitvoeren van een inspectie waarbij wordt gelet op standsafwijkingen 
                                van voeten, benen en rug en op eventuele afwijkingen aan de huid en/of nagels.
                                </li>

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Onderzoeken van de relevante anatomische structuren.
                                </li>

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Nagaan van de beweeglijkheid en stabiliteit van de gewrichten door een functie-onderzoek 
                                Er kunnen spiertesten en pijnprovocaties worden uitgevoerd <br/>op voeten, enkels, knie, heup en rug.
                                </li> 

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Analyseren van het looppatroon van de patiënt; de afwikkeling van de voet, de bewegingsuitslag 
                                in de knie, heup en romp.
                                </li> 

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Formuleren van de diagnose, inclusief de (vermoedelijke) oorzaak van de klachten.
                                </li>

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Opstellen van een behandelplan.
                                </li> 

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Bespreken van de mogelijkheden met de patiënt.
                                </li> 

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Uitvoeren van het behandelplan in overeenstemming met de patiënt.
                                </li> 

                                <li><i class="fa fa-check" style="color:#000"></i> 
                                Correspondentie middels rapportage aan specialist of huisarts. 
                                </li>
							</ul><br /><br />
					</p>
					
				</div>
			</div>	
		</div>
	</section>
	<!-- //about -->

	

	
		
	<!-- testimonials -->
	<hr>
	<div class="container-fluid" >
	<div class="row">
		<div class="col-sm-12">
			<h2 style="position: relative; left: 2vw;">Wat <b>onze klanten</b> zeggen</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<!--<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   -->
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="row">
							<div class="col-sm-6">
								<div class="media">
									<div class="media-left d-flex mr-3">										
									</div>
									<div class="media-body">
										<div >
										<p><span class="fa fa-quote-left mr-1"></span> 
						Het is vooral de persoonlijke benadering die mij bij deze praktijk voor podotherapie zo aanspreekt.  <span
							class="fa fa-quote-right ml-1"></span></p>
					<div class="test-img mb-3">
						
					</div>
					<h3 class="my-md-2 my-3"> <strong>Heesch - </strong>Jan Bergmans </h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="media">
									<div class="media-left d-flex mr-3">
										
									</div>
									<div class="media-body">
										<div>
										<p><span class="fa fa-quote-left mr-1"></span> 
						Ik heb gekozen voor Podotherapie van Dreumel omdat mijn buurvrouw zo 
						tevreden was over de behandeling van haar klachten.  <span
							class="fa fa-quote-right ml-1"></span></p>
					<div class="test-img mb-3">
						
					</div>
					<h3 class="my-md-2 my-3"><strong>Oss - </strong>Anja van Woerkom</h3>
										</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
					<div class="item carousel-item">
						<div class="row">
							<div class="col-sm-6">
								<div class="media">
									<div class="media-left d-flex mr-3">
										<a href="#">
											<img src="/examples/images/clients/3.jpg" alt="">
										</a>
									</div>
									<div class="media-body">
										<div>
											<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
											<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="media">
									<div class="media-left d-flex mr-3">
										
									</div>
									<div class="media-body">
										<div >
											<p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
											<p class="overview"><b>Mary Saveley</b>, Web Designer</p>
										</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
					<div class="item carousel-item">
						<div class="row">
							<div class="col-sm-6">
								<div class="media">
									<div class="media-left d-flex mr-3">
										
									</div>
									<div class="media-body">
										<div >
											<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
											<p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="media">
									<div class="media-left d-flex mr-3">
										
									</div>
									<div class="media-body">
										<div >
											<p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
											<p class="overview"><b>John Williams</b>, Web Developer</p>
										</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #999;
	overflow: hidden;
    min-height: 120px;
	font-size: 13px;
}
.carousel .media img {
	width: 80px;
	height: 80px;
	display: block;
	border-radius: 50%;
}

.carousel .overview b {
	text-transform: uppercase;
	color: #1c47e3;
}
.carousel .carousel-indicators {
	bottom: -40px;
	display: none;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 18px;
    height: 18px;
	border-radius: 50%;
	margin: 1px 3px;
	display: none;
}
.carousel-indicators li {	
    background: #e2e2e2;
    border: 4px solid #fff;
}
.carousel-indicators li.active {
	color: #fff;
    background: black;    
    border: 5px double;    
}
.active {
	background-color: #ffff;
}
</style><hr>

	<!-- //testimonials -->

	

	<!-- footer -->
	<footer class="footer-sec-w3layouts py-5 ">
		<div class="container-fluid py-xl-5 py-lg-3" id="move2" >
			<div class="row pb-3">
				<div class="col-xl-5 col-md-6 footer-left-info text-left" style="position absolute;left: 4vw;"> 
					<div class="logo-footer">
					<form method="post" action="#" onSubmit="return validateForm();">
			<div style="min-width: 800px;">
			</div>
			<div style="padding-bottom: 18px;font-size : 24px;">Laat hier uw review achter</div>
			<div style="padding-bottom: 18px;">Uw naam<span style="color: red;"> *</span><br/>
			<input type="text" minlength ="2" id="data_2" name="data_2" style="width : 500px;" class="form-control"/>
			</div>
				
			<div style="padding-bottom: 18px;">Onderwerp<span style="color: red;"> *</span><br/>
			<input type="text" minlength ="2" id="data_5" name="data_5" style="width : 500px;" class="form-control"/>
			</div>

			<div style="padding-bottom: 18px;">Review<span style="color: red;"> *</span><br/>
			<textarea id="data_8" false name="data_8" style="width : 500px;" rows="9" class="form-control"></textarea>
			</div>

			<div style="padding-bottom: 18px;"><input name="skip_Submit" value="verstuur" type="submit"/></div>
			</form>		
		</div>		
		
		<!---->
		
	</div>


				<div class="col-md-6 footer-right-info text-left offset-xl-1 mt-md-0 mt-5" id="move3" style="position absolute;left: 2vw;">
					 <h3></h3>
						<h4>Handige links</h4><br/>
								
						<a href="https://www.podotherapie.nl/" target="_blank">Info Podotherapie</a> / 
						<a href="https://www.podotherapie.nl/vergoedingenoverzicht" target="_blank" > Overzicht Vergoedingen </a> <img src="images/nvvp.png" style="width: 10vw;"><hr>
						
						<a href="https://www.dvn.nl/" target="_blank" style="margin-right: 160px">meer info? klik hier </a><img  src="images/dvn.jpg" width="200vw"><hr>
						
						<a href="https://reumanederland.nl/" target="_blank" style="margin-right: 175px" >  meer info? klik hier </a><img  src="images/reuma.png" width="150vw"><hr>
						
						<a href="https://www.diabetespodotherapeut.nl/" target="_blank" style="margin-right: 95px" >Diabetespodotherapie NVvDP</a>
						<img src="images/nvvdp.jpg" width="80vw">
								
							

        

    			</div>
				

	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p> &copy; <?php echo date("Y"); ?> Praktijk voor Podotherapie van Dreumel |  KvK 17252248 | Lindenlaan 7 - 5384 BD Heesch<br/>
		Alle rechten onder voorbehoud.  Lid van De Nederlandse Vereniging van Podotherapeuten 
		
		</p>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-chevron-circle-up" aria-hidden="true"></span> 
	</a>
	<!-- //move top icon -->


</body>

</html>
