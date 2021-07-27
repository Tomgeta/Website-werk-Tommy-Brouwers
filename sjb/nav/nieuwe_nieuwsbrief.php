<?php
$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	<p> Preview </p>
	<p onclick='getpagecontent(\"fotobewerking.php\")'> Fotobewerking </p>
	<p> Versturen </p>
	<p onclick='getpagecontent(\"nieuwsbrieven_overzicht.php\")'> Overzicht </p>
	<p> Contact </p>
	<p> Help </p>
";




echo json_encode($html);




?>