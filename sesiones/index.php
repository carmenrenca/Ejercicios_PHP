<?php

/**session: almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que
 * cierra session o cienrra el navegador
 */

 //inicar la sesion
 session_start();
 //variable normal
 $variable="soy una cadena de texto";
 //variable de sesion

 $_SESSION['variable_persistente']= "Hola soy una session activa";
echo $variable;
echo '<br/>';
echo $_SESSION['variable_persistente'];

?>