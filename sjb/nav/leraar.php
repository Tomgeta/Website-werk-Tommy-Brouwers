<?php
$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	<p onclick='getpagecontent(\"mijn_verhaal.php\")'> Mijn Verhaal </p>
	<p> Contact </p>
	<p> Help </p>
";

echo json_encode($html);

?>