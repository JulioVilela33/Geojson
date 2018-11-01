<?php

$file = file_get_contents("https://server.segcontrol.com/segcontrole/navegador_leaflet/api/consulta_json.php?gmg=0");

$obj = json_decode($file, true);



foreach($obj as $a):
      
 echo $a['lat']."<br>"; 
endforeach;

?>

