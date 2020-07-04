<?php
$cantantes= ['Famous', 'Natalia lacunza', 'Alba reche'];
$numeros=[1,2,3,4,5,6];
//odenar por orden alfabetico 

asort($cantantes);
//odenar por orden alfabetico inverso
arsort($cantantes);
//orderdar numericamentente

sort($cantantes);


//Añadir eletos a un array

$cantantes[]="Miki Nuñez";
var_dump($cantantes);
array_push($cantantes, 'Julia Medina');
var_dump($cantantes);
//eliminar de el array el ultimo elemento

array_pop($cantantes);
var_dump($cantantes);
//eliminar un elemento en concreto del array

unset($cantantes[1]);

//sacar un elemento aleatorio de un array

$indice= array_rand($cantantes);
echo $cantantes[$indice];
var_dump($cantantes);


//INVERTIR UN ARRAY

var_dump(array_reverse($numeros));

//BUSCAR DENTRO DE UN ARRAY

$resultado= array_search('Natalia lacunza', $cantantes);
var_dump($resultado);

//CONTAR NUMEROS DE ELEMENTOS

echo count($cantantes);

 

?>