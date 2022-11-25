<?php

$veces = readline("Ingresa las veces que desees ejecutar la función: ");

function pedir()
{
    $numero = readline("Ingresa la cantidad en dolares: ");
    echo "\n";
    convertir($numero);
}
function convertir($numero)
{
    $pesos = $numero * 19.5;
    echo "El valor en pesos es: $pesos";
    echo "\n";
}
$contador = 0;
while( $contador <= $veces){
    pedir();
    $contador ++;    
}