<?php

// Question - 1
$vetor_1 = ['ES', 'MG', 'RJ', 'SP', 'MT'];
$vetor_2 =  ['Mato Grosso', 'São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

$vetor_2 = array_reverse($vetor_2);
$i=0;
$combinacao =  array_combine($vetor_1, $vetor_2);
foreach ( $combinacao as $key => $var)
{
	$i=$i;
	echo($key)."-".($var).", ";
}

//Returno = ES-Espírito Santo, MG-Minas Gerais, RJ-Rio de Janeiro, SP-São Paulo, MT-Mato Grosso, 