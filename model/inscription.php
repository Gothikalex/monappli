<?php

function rec($ids, $cours) {
    // print_r($ids, $cours);
    require 'connect.php';
    foreach($cours as $c){
    $sql = $pdo->prepare( 'INSERT into inscription (id_cours,id_student) VALUES (?, ?)');
    $sql->execute([$ids,$c]);
}
}


?>