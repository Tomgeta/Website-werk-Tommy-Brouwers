<?php
$html ="
<h1 id='NBO_titel'>Nieuwsbrieven overzicht</h1>
<div id='NBO_div'>
<table>
	<tr>
		<th>
			Nieuwsbrief
		</th>
		<th>
			Datum
		</th>
		<th>
			Status
		</th>
	</tr>
	<tr>
		<td>
			Instructie Eindexamenjaarboek mentoren
		</td>
		<td>
			02-04-2019
		</td>
		<td>
			Verstuurd
		</td>
	</tr>
	<tr>
		<td>
			Het Eindexamenjaarboek staat vanaf nu open!
		</td>
		<td>
			26-03-2019
		</td>
		<td>
			Verstuurd
		</td>
	</tr>
	<tr>
		<td>
			Uitnodiging Examenjaarboek-bijdrage leerlingen
		</td>
		<td>
			15-03-2017
		</td>
		<td>
			Verstuurd
		</td>
	</tr>


</table>


</div>
";




echo json_encode($html);





?>