<?php

$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	<p onclick='getpagecontent(\"coordinator.php\")'> Terug </p>
	<p onclick='getpagecontent(\"Help.php\")'> Help </p>
";




echo json_encode($html);




?>