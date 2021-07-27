<?php
$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	<p onclick='getpagecontent(\"nieuwe_advertentiepagina.php\")'> Nieuwe Advertentiepagina</p>
	<p onclick='getpagecontent(\"hoofdredacteur.php\")'> Terug </p>
	<p> Contact </p>
	<p> Help </p>
";




echo json_encode($html);




?>