<?php
$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	<p onclick='getpagecontent(\"x.php\")'> x </p>
	<p onclick='getpagecontent(\"x.php\")'> x</p>
	<p onclick='getpagecontent(\"nieuwe_nieuwsbrief.php\")'> nieuwe nieuwsbrief </p>
	<p onclick='getpagecontent(\"x.php\")'> x </p>
	<p onclick='getpagecontent(\"x.php\")'> x </p>
	<p onclick='getpagecontent(\"x.php\")'> x</p>
	<p onclick='getpagecontent(\"Contact.php\")'> Contact </p>
	<p onclick='getpagecontent(\"Help.php\")'> Help </p>
";




echo json_encode($html);




?>