<?php

// $contador = 0;

// do{
//     echo "Actualmente estoy en el numero: $contador";
//     echo "\n";
//     $contador++;
// }
// while( $contador <= 10);

echo "\n";

$usernames = ["tony12","pepe_pecas","juan_perez"];

do{
    $username = readline("Ingrese su nombre de usuario: "); 
    if( !in_array($username, $usernames) ){
        echo "El usuario no existe";
        array_push($usernames, $username); //agrega un elemento al final del array
        echo "\n";
    }
    else{
        echo "El usuario ya existe";
        echo "\n";
        exit ("El programa ha finalizado");
    }
    print_r($usernames);
}
while( in_array( $username, $usernames ));

