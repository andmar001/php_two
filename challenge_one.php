<?php

#Arreglo con gatos, nomber ocupacion solo comida - favorita comida no le gusta

$escuela = array(
   array(
        "nombre" => "Michi",
        "ocupacion" => "Cazar ratones",
        "color" => "Gris",
        "comida" => array(
            "comida_favorita" => "Pescado",
            "comida_no_le_gusta" => "Lechuga"
        )
    ),
    array(
        "nombre" => "Dollar",
        "ocupacion" => "Cazar moscas",
        "color" => "Blanco",
        "comida" => array(
            "comida_favorita" => "Cerdo",
            "comida_no_le_gusta" => "Sopa"
        )
    ),
    array(
        "nombre" => "Michisancio",
        "ocupacion" => "Dormir",
        "color" => "Negro",
        "comida" => array(
            "comida_favorita" => "Pizza",
            "comida_no_le_gusta" => "Pescado"
        )
    ),

);

var_dump($escuela);
echo "\n";
print_r($escuela);
echo "\n";

//Dos niveles
$dollarsito = $escuela[1];
echo "Las comidas favoritas de Dollar es:" . $dollarsito['comida']['comida_favorita'] . "\n";
echo "\n";
// un nivel
$mi_michi = $escuela[2];
echo "El color de Michisancio es: " . $mi_michi['color'];
