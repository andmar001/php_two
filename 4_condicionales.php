<?php

$persona = true;

if ($persona) {
    echo "Es una persona";
} else {
    echo "No es una persona";
}

echo "\n";

$asientos_disponible = 5;

if ($asientos_disponible > 0) {
    echo "seats available";
}
else {
    echo "no seats available";
}

echo "\n";

// otra sintaxis, cuando solo es una linea de codigo
if ($asientos_disponible > 0):
    echo "seats available";
else:
    echo "no seats available";
endif;

echo "\n";

// else if 
$edad = 18;
$hay_asientos = false;

if ($edad >=18) {
    echo "Tiene la edad requerida";
} 
else if ($hay_asientos == false) {
    echo "No hay asientos disponibles";
}
else {
    echo "No tiene la edad requerida";
}

echo "\n";
//ejemplo mas complejo

$seat_available = 10;
$es_hijo_tom_holland = true;
$conoce_tony_stark = false;

if ($seat_available > 0) {
    echo "Puedes ver la pelicula de spider";
} 
else if ($es_hijo_tom_holland ==  true) {
    echo "No creo pero puedes ver la pelicula";
}
else if ($conoce_tony_stark) {
    echo "Te creo adelante";
}
else {
    echo "No hay asientos disponibles";
}