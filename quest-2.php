<?php
// Question - 2
function recursivo($num){
	if (($num % 2 == 0) &&($num % 3 == 0) && ($num % 10 == 0)){
		echo "<br>".$num;
	} else {
		$num++;
        recursivo($num);
	}	
}
recursivo(1);

//Retorno: 30