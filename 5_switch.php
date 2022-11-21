<?php
//michi 1:9
//michi 2:3
//michi 3:5
//michi 4:7

$michi = 3;

switch($michi){
    case 1:
        echo "Su numero favorito es el 9";
        break;
    case 2:
        echo "Su numero favorito es el 3";
        break;
    case 3:
        echo "Su numero favorito es el 5";
        break;
    case 4:
        echo "Su numero favorito es el 7";
        break;
    default:
}

//cuando colocamos los casos sin el break, se ejecuta todo el codigo de los casos siguientes

echo "\n";

$valor = 1;

switch($valor){
    case 1:
    case 2:
        echo "Su valor es 2";
        break;
    case 3:
        echo "Su valor es 3";
        break;
    default:
        echo "Su valor es 4";
}