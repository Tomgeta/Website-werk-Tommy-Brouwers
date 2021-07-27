<?php
$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	<p onclick='getpagecontent(\"x.php\")'> Advertentiepagina's </p>
	<p onclick='getpagecontent(\"x.php\")'> Collagepagina's </p>
	<p onclick='getpagecontent(\"x.php\")'> Redactionele Pagina's</p>
	<p onclick='getpagecontent(\"x.php\")'> Verhalen</p>
	<p> Contact </p>
	<p> Help </p>
";


echo json_encode($html);




?>