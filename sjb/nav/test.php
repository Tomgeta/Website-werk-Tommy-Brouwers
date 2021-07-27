<?php
$html ="
	<p> HOME </p>
	<p> ta </p>
	<p onclick='getpagecontent(\"test.php\")'> advertentiepagina's test</p>
	<p onclick='getpagecontent(\"nieuwe_nieuwsbrief.php\")'> nieuwe nieuwsbrief </p>
	<p onclick='getpagecontent(\"nieuwe_advertentiepagina.php\")'> nieuwe advertentiepagina </p>
	<p onclick='getpagecontent(\"redactie_verhalen.php\")'> redactie_verhalen </p>
	<p> advertentiepagina's test</p>
	<p> Contact </p>
	<p> Help </p>
";




echo json_encode($html);




?>