<?php
$html ="
<h1 id='NRed_titel'>Nieuwe collagepagina</h1>
<p id='NRed_p'> Foto(s) toevoegen </p>
<div id='NRed_div'>
	Titel:
	<form>
		<input type='text' readonly>
	</form>
	Tekst:
	<form>
		<input type='text' id='big' readonly>
	</form>
	
	
</div>
";




echo json_encode($html);





?>