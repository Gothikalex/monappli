<?php

function listcourse(){
    require 'connect.php' ;
    $sql = $pdo->prepare('SELECT * FROM course');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows;
}

function mcadd($cour){
    require 'connect.php';
    $sql=$pdo->prepare('INSERT INTO course (code, titre, language) VALUES (?,?,?)');
    $sql->execute([$cour['code'],$cour['titre'],$cour['language']]);
}
?>