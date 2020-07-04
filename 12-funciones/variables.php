<?php
/**
 * Variales locales:
 * Son las que se definen dentro de una función y no pueden ser usadas fuera de la función solo están disponibles 
 * dentro. A no ser que hagamos un returm 
 * Variables globales:
 * son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones
 */
// Variable global
 $frase="Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;
function holaMundo(){
    global $frase;
    echo "<h1><$frase/h1>";
    $year=2020;
    echo "<h1>$year</h1>";
    return $year;

}

echo holaMundo();

function buenosDias(){
    return "Hola buenos dias";}

    function buenastardes(){
        return "ey que tal ha ido la comida??";

    }

    function buenasNoches(){
        return "¿Te vas a dormir ya?, buenas noches!!";
    }

    $horario="tardes";
    $mifuncion= "buenas".$horario;
   echo $mifuncion();

?>