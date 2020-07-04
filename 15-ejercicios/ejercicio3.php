<?php

/**
 * Programa que compruebe si una variable está vacia . Y si es vaic rellenarla con texo en minusculay mostrarlo
 * en mayuscula en negrita
 */
$texto="sad";
  function comprueba($cadena){
    var_dump(empty($cadena));
         if(empty($cadena)){
            $cadena= strtolower('Testo prueba'); 
            return '<strong>'. strtoupper($cadena).'</strong>';

        }else{
            return '<strong>'. strtoupper($cadena).'</strong>';

        }


 }

 echo comprueba($texto);

 

?>