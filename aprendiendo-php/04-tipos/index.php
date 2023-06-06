<?php

/*Tipos de datos */

/* 
Entero (int/integer)=99
Flotante (float/double)=3.45
Cadenas (String) = "Hola yo soy un string"
Booleanos (bool) = true false
null
Array (Coleccion de datos)
Objetos
*/

$numero_hola = 100;
$decimal = 27.9;
$texto = "Soy un texto \" numero_hola";
$verdadero = false;
$nula = null;

echo gettype($numero_hola);
echo '<br>';
echo gettype($decimal);
echo '<br>';
echo gettype($texto);
echo '<br>';
echo gettype($verdadero);
echo '<br>';
echo gettype($nula);
echo '<br>';
echo $verdadero.'<br>';

echo $texto;


/*Debugear */
$mi_nombre[] = "Enrique Irazoqui Ruelas";
$mi_nombre[] = "Enrique Irazoqui Ruelas";
//var_dump($mi_nombre);


?>