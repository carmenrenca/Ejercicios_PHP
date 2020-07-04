<?php

//debuguear
$nombre= 'Carmen Rendon';
var_dump($nombre);

//fechas

echo date('d-m-y');
//matematicas
echo 'raiz cuadrada de 10: '.sqrt(10);
echo '<br/>';
echo 'Número aleatorio entre 10 y 40 '.rand(10,40);
echo '<br/>';
echo 'redondear: '.round(12.7243123, 2);
//MAS FUNCIONES GENERALE

echo '<br/>';
//Detectar tipado
echo gettype($nombre);
echo '<br/>';
if(is_string($nombre)){
    echo 'Esa variable es un string';
}
echo '<br/>';
if(!is_float($nombre)){
    echo 'La variable nonbre no es un numero con decmales';
}

echo '<br/>';
//comprobar si existe una variable
if(isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}
echo '<br/>';
//limpiar espacios dentro de una variable
$frase="  mi contenido     ";
var_dump(trim($frase));

//eliminar variables / indices de array

$year= 2020;
//unset me elimina del codigo la variable year

unset($year);
//comprobar variable vacia

$texto="";
if(empty($texto)){
    echo "La variable texto esta vacía";
}else{
    echo "La variable tiene contenido";
}
//contar caracteres de una cadena string
echo '<br/>';

$cadena="12345";
echo strlen($cadena);
echo '<br/>';

//encontrar en un string la posicion de un caracter determinado

$frase="La vida es bella";

echo strpos($frase, 'L');
//Reemplazar palabra de un string 
echo str_replace('vida', 'moto', $frase);
echo '<br/>';

//Convertir a mayuscula y miniscula
echo strtolower($frase);
echo '<br/>';

echo strtoupper($frase);
echo '<br/>';


?>