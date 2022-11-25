https://www.php.net/manual/es/ref.array.php

# Arreglos



# Switch
La sentencia switch es similar a una serie de sentencias if en la que el valor de la expresión se compara con el valor de cada caso.

PHP_EOL es una constante que representa el final de una línea en el sistema operativo actual. Es útil para que los archivos se vean de la misma manera en todos los sistemas operativos.

# While
No usar while( true ) ya que itera infinitamente.
Ciclar es cuando se repite una acción infinitamente.

# Do while
Se ejecuta al menos una vez.

- in_array -> Busca un valor en un array, sintaxis => 
>> in_array( valor, array)

# Foreach
Es un ciclo que recorre un array, se puede usar para recorrer un array asociativo.
//sintaxis basica
>foreach( $array as $valor){
>    //codigo a repetir
>}

// Recorrer un array asociativo
>foreach( $array as $key => $value ) {
>    echo $key . ' => ' . $value . PHP_EOL;
>}

# Tablero de miro 

# array unpacking
Es una forma de extraer valores de un array y asignarlos a variables.
$numeros = [1,2,3,4,5];
$value = (...$numeros)

# array spread

Es lomas similar a spread operator en JS, es una forma de expandir un array en otro array.

# operador de nave espacial
Es un operador que compara dos valores y devuelve -1, 0 o 1 dependiendo de si el primer valor es menor, igual o mayor que el segundo.

- Podemos ordenar un arreglo por medio de usort, la sintaxis es la siguiente:
> usort( $array, function( $a, $b ) {
usort modifica el arreglo original, no nos crea uno nuevo.
usort recorre el arreglo y compara los valores con la función que le pasamos como segundo argumento.