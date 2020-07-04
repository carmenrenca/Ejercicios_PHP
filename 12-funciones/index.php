<?php

/**
 * FUNCIONES:
 * una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto y 
 * que pueden reutilizarse invocando a la función tantas veces como
 * queramos
 
 *function nombre_de_mi_funcion($parametro){
  *  BLOQUE CONJUNTO DE INSTRUCCIONES 


*}
*nombre_de_mi_funcion($miparanetro)

 */
//Ejemplo 1 


function muestraNombres(){
    echo "Carmen Rendon <br/>";
    echo "Antonio Rendon <br/>";
    echo "Miguel Rendon <br/>";
echo '<hr/>';
}

//invocar funcion
muestraNombres();


function tabla($numero){
 
    for($i=0; $i<=10 ; $i++){
        echo $numero.' * '.$i.' = '.$numero*$i.'<br/>';
        
    }
}
if(isset($_GET['numero'])){
    tabla($_GET['numero']);

}else{
echo 'No hay número para sacar la tabla';
}
//Ejemplo 3

function calculadora($numero1, $numero2, $negrita=false){
  $suma = $numero1+$numero2;
  $resta = $numero1-$numero2;
  $multiplicacion = $numero1*$numero2;
  $division = $numero1/$numero2;
  $cadena= "";

if($negrita ){
  $cadena .=  '<h1>';
}
$cadena .=   'Suma: '.$suma.'</br>';
$cadena .=   'Resta: '.$resta.'</br>';
$cadena .=   'Multiplicacion: '.$multiplicacion.'</br>';
$cadena .=  'Division: '.$division.'</br>';
    
    if($negrita ){
        $cadena .=   '</h1>';
    }
    return   $cadena;

}

function getNombre($nombre){
    $texto= "el nombre es: $nombre";
return $texto;
}


function getApellidos($apellidos){
    $texto= "el Apellido es: $apellidos";
return $texto;
}

echo calculadora(10,2, true);
function devuelveElNombre($nombre, $apellidos){
    $texto= getNombre("Carmen")."<br/> ".getApellidos("Rendon");
    return $texto;
}
echo devuelveElNombre('Carmen', "Rendon");

?>