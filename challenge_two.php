<?php

$cantidad_donaciones = readline("Ingrese la cantidad donada: ");

if(is_numeric($cantidad_donaciones)){

    if($cantidad_donaciones >= 100){
        echo "Usted puede retirar el dinero ya que tiene $cantidad_donaciones dolares";
    }else{
        echo "Usted no puede retirar el dinero ya que tiene $cantidad_donaciones dolares, solo puede retirar despues de los 100 dolares";
    }
}
else{
    echo "Ingrese un valor numerico";
}