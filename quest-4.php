<?php
// calcule a soma de todos os numeros multiplos de 3 ou 5 abaixo de 1000

function somaMultiplos($valor_1, $valor_2, $valor_final){
    $sum = 0;
    $num = 1;	
        while($num < $valor_final){
            if (($num % $valor_1 == 0) || ($num % $valor_2 == 0)&&($num<$valor_final)){
                $sum+=$num;
                echo $num.",";	
            } 
            $num++;
        }
    echo "<br> Soma: ".$sum;
}
somaMultiplos(3,5,1000);