<?php
$html ="
	<p onclick='getpagecontent(\"leerling.php\")'> Leerling </p>
	<p onclick='getpagecontent(\"leraar.php\")'> Leraar </p>
	<p onclick='getpagecontent(\"coordinator.php\")'> Coordinator </p>
	<p onclick='getpagecontent(\"redacteur.php\")'> Redacteur </p>
	<p onclick='getpagecontent(\"hoofdredacteur.php\")'> Hoofdredacteur </p>
";

echo json_encode($html);

?>