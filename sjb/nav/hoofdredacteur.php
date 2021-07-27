<?php
$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	<p onclick='getpagecontent(\"nieuwsbrieven_overzicht.php\")'> Nieuwsbrieven </p>
	<p onclick='getpagecontent(\"collagepaginasH.php\")'> Collage Pagina's </p>
	<p onclick='getpagecontent(\"redactionelepaginasH.php\")'> Redactionele Pagina's </p>
	<p onclick='getpagecontent(\"advertentiepaginasH.php\")'> Advertentie Pagina's </p>
	<p> Contact </p>
	<p> Help </p>
";

echo json_encode($html);

?>