<?php
$html ="
<h1 id='NB_titel'>Nieuwe nieuwsbief</h1>
<p id='NB_p'> Foto toevoegen </p>

<div id='NB_div'>
Onderwerp:	
<form>
		<input type='text' readonly>
</form>
</br>
Bericht:
	<form>
		<input type='text' id='big2' readonly>
	</form>
Aantal karakters: 5000 over van 5000

</div>
";




echo json_encode($html);





?>