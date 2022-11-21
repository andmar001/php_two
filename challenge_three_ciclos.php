<?php
// casos de uso   sucesion de fibonacci
// 2 -> 1
// 3 -> 2
// 4 -> 3
// 5 -> 5
// 6 -> 8
// 7 -> 13
// 8 -> 21

$numero_tienda = (int) readline("Ingrese el numero de la tienda: ");
$anterior = 0;
$actual = 1;

for( $i=2; $i <= $numero_tienda; $i++ ){
    
    $temporal = $actual;  
    $actual += $anterior;
    $anterior = $temporal;  
    echo $actual . "\n";
}

echo "Hay " . $actual . " formas de llegar a la tienda " . $numero_tienda ;