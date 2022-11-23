<?php

function getPokemon(){

    $number_aleatorio = rand(1,5);
    // echo 'numero aleatorio generado '. $number_aleatorio; 

    switch($number_aleatorio){
        case 1:
            echo "Pikachu \n";
            break;
        case 2:
            echo "Charmander \n";
            break;
        case 3:
            echo "Mewtwo \n";
            break;
        default:
            echo "No tenemos ningun pokemon 🤣 \n";
    }
}

// getPokemon();
# ejecutar n veces la funcion
$contador = 0;
$veces = readline("Ingresa las veces que desees ejecutar la función: ");

while( $contador <= $veces){
    getPokemon();
    $contador ++;    
}



// otra forma de funcion
for ($i=0; $i < $veces ; $i++) { 
    getPokemon();
}
