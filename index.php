<?php
    $nombre = (string) 'Claudia Patricia Arciniegas Cáceres';
    $_edad = (int) 44;
    $Altura = (double) 1.55;
    $soy_Su_Profesor = (boolean) false;
    $HOBBIES = (array) ['Bailar','Jugar con mi familia'];
    
    $objeto = new stdClass;
    $objeto->cosas = "Tv";

    print_r($objeto->cosas);
    // echo "<br>"; 
    // var_dump($HOBBIES);

?>