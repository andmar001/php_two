<?php

$contador = 1;
$anio = 12;
$sueldo_mensual = 20000;
$renta_mensual = 2000;
$gastos_personales = 8000; 
$total = 0;

while ($contador <= $anio)
{   
    $total += $sueldo_mensual; //salario anio
    $total -= $renta_mensual;  //renta anio
    $total -= $gastos_personales; //gastos anuales
    $contador ++;
}

echo "El ahorro total fue de: ". $total;

echo "\n";
echo "\n";
echo "\n";

// with for
$total2 = 0;


for ($i=1; $i <=12 ; $i++) { 
    $total2 += $sueldo_mensual; //salario anio
    $total2 -= $renta_mensual;  //renta anio
    $total2 -= $gastos_personales; //gastos anuales
    echo "El ahorro del mes $i fue de: $total2 \n";
}