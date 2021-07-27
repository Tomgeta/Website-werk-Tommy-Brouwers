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
	<!-- Style-CSS --><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

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
    
	</style>
</head>

<body>
	<!-- home -->
	<div id="home">
		<!-- banner -->
		<div class="banner_w3lspvt">
			<!-- nav -->
			<div class="nav_w3ls pt-4 pb-3 text-center">
			
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

            	<!-- banner-text -->
				<div class="banner-text" id="fieldsetmain">
					<fieldset id="fieldsetid">
						<legend>

						</legend>
						<div class="banner-sub-txt"><br/><br/>
                        	<br/><br/>
                        	<h3 class="tittle text-center" ><strong>Contactgegevens</strong></h3>
					    	<p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">
								Graag heten wij u van harte welkom in onze moderne praktijk aan de Lindenlaan 7 in Heesch. De praktijk is zeer goed bereikbaar en bevindt zich in de nabijheid van het stationsplein in Heesch. Parkeren kunt u voor de deur.
Wilt u meer informatie of online een afspraak maken? Neemt u dan via onderstaand formulier contact met ons op. Wij zullen vervolgens zo spoedig mogelijk reageren!
							</p>
						</div>
					</fieldset>
				</div>
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
				
			
				<!-- //banner-text -->
			

	

	<!-- services -->
    
	<!-- //home -->

	<!-- contact -->
	<section class="contact py-5" id="contact">
		<div class="container-fluid py-md-5">
			<h3 class="tittle text-center" id="contactformtitle">Contact formulier</h3>
			
			<div class="row mt-4">
				<div class="col-lg-6 mb-5" id="contactformdiv">
                <form class="form" method="post" <?php if ($validation = false) { echo "novalidate"; } ?> action="mailto:twbdekkers@outlook.com">
		            <ul>
			            <?php if (isset($results['message'])) {  ?>
			            <li class="<?php if ($_GET['status'] == "success") { echo 'success'; } else { echo 'error'; } ?>">
				        <?php echo $results['message']; ?>
			            </li>
			        <?php } ?>
			        <li>
                        <input type="radio" name="aanhef" value="Dhr" id="dhr">
                        <label for="dhr">Dhr.</label>
                        <input type="radio" name="aanhef" value="Mevr" id="mevr">
                        <label for="mevr">Mevr.</label>
                        <input type="text" name="naam" id="naam" required placeholder="Naam contactpersoon" value="">
			        </li>
                    <li>
                        <label for="e-mail">E-mail</label>
                        <input type="email" name="e-mail" id="e-mail" required placeholder="E-mail adres">
                    </li>
                    
                    <li>
                        <label for="bericht">Bericht:</label>
                        <textarea name="bericht" required id="bericht" placeholder="Vermeld hier uw vraag of opmerking"></textarea>
                    </li>
                    <li>
                        <button type="submit">Versturen</button>
                        <button type="reset">Reset</button>
                    </li>
		            </ul>
                </form>


			</div>
				<div class="col-lg-4 mb-5">
					<iframe id="googlemaps"
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.840348494338!2d5.537586899999989!3d51.735955399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6fcd96d9e0c4f%3A0x57661a400d021f03!2sLindenlaan+7%2C+5384+BD+Heesch!5e0!3m2!1snl!2snl!4v1420549684680"></iframe>
						<p id="googlemaps">Graag heten wij u van harte welkom in onze moderne praktijk aan de Lindenlaan 7 in Heesch. De praktijk is zeer goed bereikbaar en bevindt zich in de nabijheid van het stationsplein in Heesch. Parkeren kunt u voor de deur.
Wilt u meer informatie of online een afspraak maken? Neemt u dan via onderstaand formulier contact met ons op. Wij zullen vervolgens zo spoedig mogelijk reageren!</p>
				</div>
			</div>
			
		</div>
	</section>
	<!-- //contact -->

	
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

<?php 

// HTML5 formulier validation: true = ja / false = nee
$validation = true;
// Vermeld hier je e-mail adres!
$ontvanger = 'jouw@emailadres.nl';
// Weergave ondewerp van ontvangen email
$onderwerp = 'Contactformulier';
// Vermelding indien successvol verzonden:
$success = 'Het bericht werd succesvol verzonden.<br>Indien nodig wordt er contact met u opgenomen.';
// Vermelding voor lege velden:
$valid = 'Vermeld uw naam, een geldig email adres en uw vraag of opmerking a.u.b.';
// Formulier error vermelding:
$error = 'Onze excusses, maar er is een fout ontstaan.<br>Probeer het eventueel later opnieuw.';
// Vermelding voor spambot:
$spambot = 'Bewijs dat je een persoon bent en geen spambot.';
// PHP Script - Don't edit below!
$results = array();
if (isset($_GET['status'])) {
if ($_GET['status'] == "success") $results['message'] = $success;
if ($_GET['status'] == "error") $results['message'] = $error;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (empty($_POST['email'])) {
if(empty($_POST['naam']) || empty($_POST['e-mail']) || empty($_POST['bericht']) || !filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)) {
$results['message'] = $valid;
} else {
$body = 'Naam: '.$_POST['aanhef'].'. '.$_POST['naam']."\r\n";
$body .= 'Bericht: '.$_POST['bericht'];
$headers = 'MIME-Version: 1.0';
$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
$headers .= 'From: '.$_POST['e-mail'];
$sendmail = mail($ontvanger, $onderwerp, $body, $headers);
if ($sendmail) {
header("Location: contact.php?status=success");
} else {
header("Location: contact.php?status=error");
}
}
} else {
$results['message'] = $spambot;
}
}
?>

