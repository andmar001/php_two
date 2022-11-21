
<?php

$contador = 0; 
$suma = 0;
while($contador <= 10){
    $suma += $contador;
    $contador++;
    echo "La suma es: $suma";
    echo "\n";
}

echo "La suma de los numeros del 1 al 10 es: $suma";
echo "\n";

$tabla = readline("Ingrese la tabla que desea ver: ");
$total  = 0;
$cont = 0;

while ($cont <= 10){
    $total = $tabla * $cont;
    echo "$tabla x $cont = $total";
    echo "\n";
    $cont++;
}

echo "\n";
$inc = 0;

while($inc <=10){
    echo "Actualmente estoy en el numero: $inc";
    echo "\n";
    $inc++;
}
