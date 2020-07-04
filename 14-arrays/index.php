<?php

$pelicula =array('batman', 'spiderman', 'El señor de los anillos', 'harry potter');
$cantantes= ['jennider lopez', 'natalia lacunza', 'alba reche'];


//array asociativo
$persona= array(
    'nombre'=>'Carmen',
    'apellidos'=>'Rendón',
    'web'=>'carmenrendon.es'
);




 echo "<h1>Listado de peliculas</h1>";
 echo "<ul>";
 for($i=0; $i<count($pelicula); $i++){
     
    echo "<li>$pelicula[$i]</li>";
    echo "<br/>";
}
 echo "</ul>";

 echo "<br/>";
 echo "<h1>Listado de cantantes</h1>";
 echo "<ul>";

 foreach($cantantes as $cantante){
    echo "<li>$cantante</li>";
    echo "<br/>";
 }
 echo "</ul>";


 //ARRAYS MULTIDIMENSIONALES

 $contactos= array(
     array(
         'nombre'=>'Carmen',
         'email'=>'carmenrenca@gmail.com'

     ),
     array(
        'nombre'=>'Pedro',
        'email'=>'pedroluis@gmail.com'

     ),
    array(
        'nombre'=>'Carlos',
        'email'=>'carlosramirez@gmail.com'

    )
 );

 var_dump($contactos);
echo $contactos[2]['email'];


foreach($contactos as $contacto){
  
   echo $contacto['nombre'];
   echo "<br/>";
}
?>