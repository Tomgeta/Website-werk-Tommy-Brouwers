<?php
$html ="
<h1 id='NADD_titel'>Nieuwe advertentiepagina</h1>
<p id='NADD_p'> Foto/PDF toevoegen </p>
<div id='NCOLL_div'>
	Titel:
	<form>
		<input type='text' value='Mijn Advertentie' readonly>
	</form>
	Formaat:
	<select>
			<option  selected>--Kies een formaat--</option>
			<option > hele pagina</option>
			<option > halve pagina</option>
			<option > kwart pagina</option>	
		</select>
</div>
";




echo json_encode($html);





?>