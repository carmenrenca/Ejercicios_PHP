<?php
/*
crear un script en php que tenga 4 variables, una de tipo array,
otra string, otra int y otra booleana
que imprima un mensaje segun el tipo de variable que sea
*/

$variable1="Hola esto es una cadea";
$variable2=12;
$variable3=array("hola mundo",12);
$variable4=true;

function mostrarTipo($variable){
    return gettype($variable);
}

echo '<h1>variable1 es un '.mostrarTipo($variable1).'</h1>';
echo '<br/>';
echo '<h1>variable2 es un '.mostrarTipo($variable2).'</h1>';
echo '<br/>';

echo '<h1>variable3 es un '.mostrarTipo($variable3).'</h1>';
echo '<br/>';

echo '<h1>variable4 es un '.mostrarTipo($variable4).'</h1>';
?>