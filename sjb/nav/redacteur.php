<?php
$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	<p onclick='getpagecontent(\"redactie_verhalen.php\")'> Controle Verhalen </p>
	<p onclick='getpagecontent(\"redactionelepaginasR.php\")'> Redactionele Pagina's </p>
	<p onclick='getpagecontent(\"collagepaginasR.php\")'> Collage Pagina's </p>
	<p> Contact </p>
	<p> Help </p>
";

echo json_encode($html);

?>