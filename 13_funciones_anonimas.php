
<?php

$precios_cafe = [1.50, 1.20, 1.10, 1.45];

usort($precios_cafe, function($actual, $siguiente){
    return $actual <=> $siguiente;
});

print_r($precios_cafe);

// si $actual es menor que $siguiente, devuelve un número negativo
// si $actual es igual que $siguiente, devuelve 0
// si $actual es mayor que $siguiente, devuelve un número positivo

echo "\n";
echo "Con caracteres ";

$nombres = ['Juan', 'Ana','Zamara','Pedro', 'María','Aangle'];

usort($nombres, function($actual, $siguiente){
    return $actual <=> $siguiente;
});

print_r($nombres);