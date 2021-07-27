<?php
$html ="
<h1 id='CON_titel'>Contact</h1>
<div id='CON_div'>
	<form>
	
		Naam*:
		<input type='text' value='My Name' readonly>
		
		E-mail adres*:
		<input type='text' value='myemail@emailhost.nl' readonly>
		
		Telefoonnummer:
		<input type='text' readonly> (Formaat: 0612345676)
		
		Bericht*:
		<input type='text' readonly>
		
		Vul onderstaande beveiligingscode in*:
		<div id='IMG5'>
		</div>
		<input type='text' readonly>
		<input type='submit' name='Verstuur' value='Verstuur'><input type='submit' name='Wissen' value='Wissen'>
	</form>
	<div id='IMG6'>
	</div>

</div>
";




echo json_encode($html);





?>