<?php

$tienda_cafe = array(
    "Americano" => 10,
    "Capuccino" => 5,
    "Canela" => 3,
    "Mocka" => 2,
    "Chocolate" => 1
);

#EJEMPLO CON ARREGLO ASOCIATIVO
//llave - cafe
//valor - precio
foreach ($tienda_cafe as $cafe => $precio) {
    if($cafe == "Canela"){
        continue;  //salta la iteracion actual
    }
    echo "El cafe $cafe esta bueno \n";
}

// echo "\n";

// foreach ($tienda_cafe as $cafe => $precio)
//     echo "El precio del $cafe es $$precio USD \n";

$marcas = array(
    "Apple" => array(
        "iPhone" => 1000,
        "iPad" => 500,
        "MacBook" => array(
            "MacBook Pro" => 2000,
            "MacBook Air" => 1500
        )
    ),
    "Microsoft" => array(
        "Bud" => 500,
        "Tableta" => 600,
        "Dell" => array(
            "Dell XPS" => 1000,
            "Dell Inspiron" => 800
        )
    )
);

