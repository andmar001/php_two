<?php


function suma($a, $b) {
    echo 'La suma de ' . $a . ' y ' . $b . ' es: ' . ($a + $b);
}

suma(5, 10);
echo "\n";

// valores por defecto en la function 
function suma2($a = 0, $b = 1) {
    echo 'La suma de ' . $a . ' y ' . $b . ' es: ' . ($a + $b);
}
suma2();
echo "\n";
suma2(10);
echo "\n";


// suma de arrays
$arreglo = [ 1, 2, 3];
$arreglo2 = [ 4, 5, 6];

$suma_arreglos = array_merge($arreglo, $arreglo2);
print_r($suma_arreglos);

// array unpacking,   desempaquetar un array
$datos = [10,3,3];
$datos2 = [1,2,3];

$resultado = [ ...$datos, ...$datos2];
print_r($resultado);

// array unpacking,   ejemplo en una funcion

$numeros =[12,2];

function resta( $a, $b) {
    echo 'La resta de ' . $a . ' y ' . $b . ' es: ' . ($a - $b);
}
echo "\n";
echo "Pasar datos por medio de array unpacking";
echo "\n";
resta(...$numeros);

echo "\n";
$other = [...$numeros];
print_r($other);

echo "\n";
echo "\n";
echo "Sumas dinamicas por medio de array unpacking";
echo "\n";
// ... convierten de manera automatica un array en un string
function suma_infinita( ...$params ){

    $suma = 0;

    foreach($params as $numero){
        $suma += $numero;
    }
    echo 'La suma es: ' . $suma;

}

// suma_infinita(23,3,21);
// echo "\n";
// suma_infinita(23);
// echo "\n";
// suma_infinita(228273,89237,31);
echo "\n";
suma_infinita(228273,89237,2331,2323,23,2323);
echo "\n";