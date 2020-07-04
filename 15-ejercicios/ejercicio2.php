<?php

/**
 * Escribir un programa con php que añada valores a un array miesntras que su longitud sea menor a 120
 * y liego mostrarlo por pantalla
 */

$array = array();

 while(count($array)<120){
$num=rand();

    array_push($array,$num );


 }


 foreach($array as $i){
     echo '<li>';
     echo $i;

     echo '</li>';

 }

 
 var_dump($array);

?>