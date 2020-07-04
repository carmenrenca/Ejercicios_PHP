<?php
/**Crear un array con el contenido de la siguiente tabla:
 * ACCION AVENTURA DEPORTES
 * GTA    ASSASINS   FIFA20
 * COD     CRASH        PES20
 * PUG      PRINCE OF   MOTO GP 20
 *              PERSIA
 * 
 * 
 */

 $tabla = array("ACCION"=> array("GTA", "Call of duty", "PUGB"),
 "AVENTURAS"=> array("Assasins creed", "crash bandicoot", "prince os persia"),
 "DEPORTES"=> array("Fifa 2020", "Pes 20", "MotoGP 20")
);

var_dump($tabla);
$categorias= array_keys($tabla);


 
?>

<table border="1">
<?php require_once 'ejercicio5/encabecados.php';?>

<?php require_once 'ejercicio5/primera.php';?>
<?php require_once 'ejercicio5/segunda.php';?>
<?php require_once 'ejercicio5/tercera.php';?>



</table>