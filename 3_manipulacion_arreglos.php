<?php

$edades = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

//count es una funcion que cuenta los elementos de un array
echo count ($edades);

//-----------------------------------------------------

//array_push agrega un elemento al final del array
array_push($edades, 23);
var_dump($edades);

//-----------------------------------------------------

// is_array es una funcion que verifica si una variable es un array
$this_is_not_array = "Hola";
var_dump(is_array($this_is_not_array));  //false 


//-----------------------------------------------------
// array_pop elimina el ultimo elemento del array
array_pop($edades);
var_dump($edades);

echo "\n";
//-----------------------------------------------------Explode 
// explode convierte un string en un array
// agregar un separador entre los elementos del array
$frase = "Hola, soy un string";
var_dump(explode(" ", $frase));

$computer = "procesador->intel->ram->8gb->disco->1tb";
var_dump(explode("->", $computer));

//creacion de un array a partir de un string
$piezas = explode("->", $computer);
echo "El total de píezas es de ", count ($piezas);  //size new array
echo "\n";

//-----------------------------------------------------Implode
// implode convierte un array en un string
// agregar un separador entre los elementos del array
echo "Implode";
echo "\n";

$perros_array = ["chihuahua", "labrador", "pastor aleman", "bulldog"];
$perros_string = implode("--->", $perros_array); //convierte un array en un string
var_dump($perros_string);
echo "\n";

// echo "\n";
// iteracion de un array
foreach ($piezas as $pieza) {
    echo "\n";
    echo $pieza." ". "Antonio";
}
echo "\n";
echo "\n";

$notas = [8, 8, 9, 8, 6.7];
$total = 0;

for ($i=0; $i < count($notas)  ; $i++) { 
     $total += $notas[$i];
}
echo "El total es de: ", $total;
echo "\n";
echo "El promedio es de: ", $total/count($notas);