<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

$accion= array('GTA', 'COD','PUGB');

function columna($accion){

    echo "<tr>";
    foreach($accion as $i){
    echo "<td>$i</td>";

}

echo "</tr>";


}

columna($accion);

   ?>

 
</body>
</html>

 