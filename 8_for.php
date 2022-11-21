<?php

$numeros = [1,2,3,4,5,6,7,8,9,10];

for ($i=0; $i < count($numeros) ; $i++) { 
    echo $numeros[$i];
    if( $numeros[$i] == 5 ){
        echo " - Encontraste el número 5";
    }
    echo "\n";
}

//inverso
for ($i= count($numeros); $i > 0 ; $i--) { 
    echo $numeros[$i];
    if( $numeros[$i] == 5 ){
        echo " - Encontraste el número 5";
    }
    echo "\n";
}

echo "\n";

// for con mas de una variable, i incrementa en 1 y j incrementa en 2
for ($i=0, $j=0; $i <= 10 ; $i++, $j+=2) { 
    echo "i = $i j = $j";
    echo "\n";
}