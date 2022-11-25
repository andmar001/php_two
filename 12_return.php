<?php

function tony()
{
    $numero_random = rand(1, 5);
    $frase = "";

    switch ($numero_random) {
        case 1:
            $frase = "No pares de intentarlo";
            break;
        case 2:
            $frase = "No te rindas";
            break;
        case 3:
            $frase = "No te desanimes";
            break;
        case 4:
            $frase = "No te desesperes";
            break;
        default:
            $frase = "No te preocupes";
            break;
    }
    return $frase;
}


$veces = 10;
$contador = 0;
do{
    echo tony();
    echo "\n";
    echo mathe();    
    echo "\n";
    $contador++;
}
while($contador < $veces);


function mathe(){
    $operacion = rand(1, 4);
    $resultado = 0;
    switch($operacion){
        case 1:
            $numero1 = rand(1, 10);
            $numero2 = rand(1, 10);
            $resultado = $numero1 + $numero2;
            return "$numero1 + $numero2 = $resultado";
            break;
        case 2:
            $numero1 = rand(1, 10);
            $numero2 = rand(1, 10);
            $resultado = $numero1 - $numero2;
            return "$numero1 - $numero2 = $resultado";
            break;
        default:
            $numero1 = rand(1, 10);
            $numero2 = rand(1, 10);
            $resultado = $numero1 * $numero2;
            return "$numero1 * $numero2 = $resultado";
            break;   
    }
}


// echo mathe();