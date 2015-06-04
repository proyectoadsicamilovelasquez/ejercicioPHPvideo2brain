<?php

$agenda[0]['nombre'] = "Luis";
$agenda[0]['telefono'] = 5415412342;
$agenda[0]['email'] = "gfdsafsa@fsafds.com";

$agenda[1]['nombre'] = "Miguel";
$agenda[1]['telefono'] = 000001;
$agenda[1]['email'] = "gfdsafsd@fgsa.com";

$agenda[2]['nombre'] = "Martha";
$agenda[2]['telefono'] = 5415412342;
$agenda[2]['email'] = "gfdsafsa@fds.com";

$agenda[3]['nombre'] = "Andres";
$agenda[3]['telefono'] = 5415412342;
$agenda[3]['email'] = "gfdsafsa@fds.com";

$agenda[4]['nombre'] = "Emilia";
$agenda[4]['telefono'] = 5415412342;
$agenda[4]['email'] = "gfdsafsa@fds.com";

$agenda[5]['nombre'] = "Maria";
$agenda[5]['telefono'] = 5415412342;
$agenda[5]['email'] = "gfdsafsa@fds.com";

echo $agenda[2]['nombre'];

function dameAgenda(){
for ($indice=0; $indice <=5 ; $indice++) { 
	
	
echo '
	<table border=1 width=300px>
	<tr>
	<td>
	Nombre:
	</td>
	<td>'.$agenda[$indice]['nombre'].'</td>
	</tr>

	<tr>
	<td>
	Telefono:
	</td>
	<td>'.$agenda[$indice]['telefono'].'</td>
	</tr>

	<tr>
	<td>
	Email:
	</td>
	<td>'.$agenda[$indice]['email'].'</td>
	</tr>

</table>

';
}
}

dameAgenda();
?>