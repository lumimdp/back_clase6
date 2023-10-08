<?php

$pares = ["2","4","6","8","10","12","14","16","18","20"];
foreach($pares as $numero) {
	print"$numero<br>";
}

$consigna2 = ["Pedro", "Ana", "34", "1"];
print_r($consigna2);

$consigna3 = array('Nombre'=>"Pedro", 'Apellido'=>"Torres", 'Direccion'=>"Av. Mayor 3703", 'Telefono'=>1122334455);

$consigna4 = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach($consigna4 as $indice => $ciudad) {
	print "<br><br>La ciudad con el índice $indice tiene el nombre $ciudad<br>";
}

$consigna5 = array('MD' => "Madrid", 'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "New York", 'LA' => "Los Ángeles", 'CCG' => "Chicago");

foreach($consigna5 as $clave => $ciudad) {
	print "<br><br>El índice de $ciudad es $clave.";
}
?>