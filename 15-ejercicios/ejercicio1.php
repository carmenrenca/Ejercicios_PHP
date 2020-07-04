<?php

/**Ejercicio 1. Programa en php que tenga un arrray con 8 numeros enteros
 * y haga lo siguiente
 * 
 * 1. Recorrerlo y mostrarlo
 * 2. ordenarlo y mostrarlo
 * 3. mostar su longitud 
 * 4. buscar algun elemento (bucar por el parametro get)
 */

$numeros= [53,22,93,64,15,56,77,58];

function mostrarArray($numeros){
    echo "<ul>";
    foreach($numeros as $numero){
        echo "<li>$numero</li>";
        echo "<br/>";
    }
    echo "</ul>";
    echo "<br/>";
}
echo "<h1>Array Mostrado</h1>";

mostrarArray($numeros);


echo "<h1>Array ordenado</h1>";



 sort($numeros);

 mostrarArray($numeros);
$longitud=count($numeros);

echo "<h1>Su longitud es de: $longitud </h1>";
if(isset($_GET['numero'])){
    $busqueda=$_GET['numero'];
}
echo "<h1>El numero a buscar es el  $busqueda</h1>";



$search=array_search($busqueda, $numeros);
var_dump($search);
if(!empty($search)){
    echo "<h1>El numero buscado existe en el array, en el indice, $search</h1>";

}else{
    echo "<h1>ese  numero no existe </h1>";

}
 
?>