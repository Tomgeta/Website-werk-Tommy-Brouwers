<?php
$html ="
<h1 id='redactie_titel'>Redactie</h1>

<div id='RD_div'>
Selecteer een optie aan de linker kant.
<h2>Webmail</h2>
Openen van de webmail van .......
<h2>Nieuwsbrief</h2>
Versturen van nieuwsbrieven naar specifieke groepen (leerlingen,mentoren/docenten, team/afdelingsleiders, redacteuren, hoofdredacteuren).
<h2>Advertentiepagina's</h2>
Opmaak van advertentiepagina's met titel van advertentie + keuze uit formaat advertentie.
<br/>
Mogelijkheid om een foto of pdf te uploaden.
<h2>Collagepagina's</h2>
Opmaak van collagepagina's met titel van de collagepagina.
<br/>
Mogelijkheid om meerdere foto's te uploaden (maximaal 10)
<h2> Redactionele pagina's </h2>
Opmaak van redactionele pagina's met titel vam de [agoma + tekst van macimaal 3000 tekens.
<br/>
Mogelijkheid om meerdere foto's te uploaden (maximaal 3).
<h2>Verhalen</h2>
Overzicht van verhalen van leerlingen. mentoren/docenten, team/afdelingsleiders.

</div>
";

echo json_encode($html);

?>