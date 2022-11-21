
<?php

$edad = array (
    "Juan" => 10,
    "Pedro" => 20,
    "Maria" => 30
);

// echo "La edad de Juan es:"  . $edad["Juan"];

$cafes = array(
    "Latte" =>100,
    "Americano" => 80,
    "Mocka" => 34,
    "Cappuccino" => 20,
);

// echo "El precio del Latte es: " . $cafes["Latte"];
// #Otra forma de acceder a array asociativo
// echo "El precio del Latte es: $cafes[Cappuccino]";
// echo "El precio del Latte es: {$cafes['Americano']}";

// arreglos anidados
$personas = array(
    "Pepe" => array(
        "edad" => 20,
        "apellido" => "Perez"
    ),
    "Mr.Michi" => array(
        "edad" => 30,
        "apellido" => "Gomez"
    )
);

# Entrar al array de manera concatenada, escalonada
echo "La edad de Mr.Michi es: {$personas['Mr.Michi']['edad']}, la edad de Pepe es: {$personas['Pepe']['edad']}";
echo "\n";

$notas = array(
	"Antonio" => array(
		"matematicas" => 10,
		"ingles" => 8,
		"español" => 10	
	)
);

#Recorrer un array anidado
foreach ($notas as $nombre => $notas) {
    echo "El alumno $nombre tiene las siguientes notas: \n";
    foreach ($notas as $materia => $nota) {
        echo "$materia: $nota \n";
    }
}



$personas = array(
    "Usuario 1" => array(
        "nombre" => "Carlos",
        "edad" => 20,
        "apellido" => "Santana",
        "hobbies" => array(
            "Hobbie 1" => "Guitarra",
            "Hobbie 2" => "Afro",
            "Hobbie 3" => "Ver Drake & Josh",
        ),
    ),
    "Usuario 2" => array(
        "nombre" => "Eduardo",
        "edad" => 22,
        "apellido" => "Peraza",
        "hobbies" => array(
            "Hobbie 1" => "Videojuegos",
            "Hobbie 2" => "Deporte",
            "Hobbie 3" => "Coleccionar",
        ),
    ),
    "Usuario 3" => array(
        "nombre" => "Martha",
        "edad" => 54,
        "apellido" => "Vindas",
        "hobbies" => array(
            "Hobbie 1" => "Pintura country",
            "Hobbie 2" => "Art Diamong",
            "Hobbie 3" => "Bordado Punto en cruz",
        ),
    ),
    "Usuario 4" => array(
        "nombre" => "Ciara",
        "edad" => 4,
        "hobbies" => array(
            "Hobbie 1" => "Cazar y correr",
            "Hobbie 2" => "Revolcarse en la alfombra",
            "Hobbie 3" => "Rasguñar el sillon",
        ),
    ),
);


// Ejemplos gore 😒


$salto = "------------------------------------------------------- \n";

echo $salto;
echo "La edad de " . $personas["Usuario 1"]["nombre"] . " es: " . $personas["Usuario 1"]["edad"] . " años. \n" .
 " Sus hobbies son: \n" . 
 "- Hobbie 1: " . $personas["Usuario 1"]["hobbies"]["Hobbie 1"] . "\n" . 
 "- Hobbie 2: " . $personas["Usuario 1"]["hobbies"]["Hobbie 2"] . "\n" . 
 "- Hobbie 3: " . $personas["Usuario 1"]["hobbies"]["Hobbie 3"] . "\n" ;
echo $salto;

echo "La edad de " . $personas["Usuario 2"]["nombre"] . " es: " . $personas["Usuario 2"]["edad"] . " años. \n" . 
" Sus hobbies son: \n" . 
"- Hobbie 1: " . $personas["Usuario 2"]["hobbies"]["Hobbie 1"] . "\n" .  
"- Hobbie 2: " . $personas["Usuario 2"]["hobbies"]["Hobbie 2"] . "\n" . 
"- Hobbie 3: " . $personas["Usuario 2"]["hobbies"]["Hobbie 3"] . "\n" ;
echo $salto;

echo "La edad de " . $personas["Usuario 3"]["nombre"] . " es: " . $personas["Usuario 3"]["edad"] . " años. \n" . 
" Sus hobbies son: \n" . 
"- Hobbie 1: " . $personas["Usuario 3"]["hobbies"]["Hobbie 1"] . "\n" .  
"- Hobbie 2: " . $personas["Usuario 3"]["hobbies"]["Hobbie 2"] . "\n" . 
"- Hobbie 3: " . $personas["Usuario 3"]["hobbies"]["Hobbie 3"] . "\n" ;
echo $salto;

echo "La edad de " . $personas["Usuario 4"]["nombre"] . " es: " . $personas["Usuario 4"]["edad"] . " años. \n" . 
" Sus hobbies son: \n" . 
"- Hobbie 1: " . $personas["Usuario 4"]["hobbies"]["Hobbie 1"] . "\n" . 
"- Hobbie 2: " . $personas["Usuario 4"]["hobbies"]["Hobbie 2"] . "\n" . 
"- Hobbie 3: " . $personas["Usuario 4"]["hobbies"]["Hobbie 3"] . "\n" ;
echo $salto;

?>
