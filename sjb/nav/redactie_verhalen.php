<?php

$html ="
	<p onclick='getpagecontent(\"Home.php\")'> HOME </p>
	
	<p id='HAVO'> HAVO
		<select>
			<option  selected>Jolanda Vossen</option>
			<option > Helena Hoedemakers</option>
			<option > Katelijn Ter Avest</option>		
			<option > Daphne Alberink</option>	
			<option > Arnoud Van Althuis</option>	
			<option > Roelof Kloet</option>	
			<option > Madelief Aling</option>	
		</select>
	</p>
			
	<p id='VWO'> VWO <BR/>	
		<select>
			<option >Marjolein Sneijers</option>	
			<option >Louise Van Akkeren</option>	
			<option >Joris Hoedemakers</option>	
			<option >Cornelia Van Ankeren</option>	
			<option >Alexander Aakster</option>	
			<option >Sebastiaan Van Andel</option>	
			<option >Arnold Houtkooper</option>	
			<option >Servaas Romijnsen</option>	
		</select>
	</p>
	<p onclick='getpagecontent(\"redacteur.php\")'> Terug </p>
	<p> Contact </p>
	<p> Help </p>
";


echo json_encode($html);




?>