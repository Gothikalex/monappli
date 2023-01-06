<?php

function madd($stud) {
    print_r($stud);
    require 'connect.php';
    $sql = $pdo->prepare( 'INSERT into student (firstname,lastname,mail,password) VALUES (?,?,?,?)');
    $sql->execute([$stud['firstname'],$stud['lastname'],$stud['mail'],$stud['password']]);
}

function liststudents(){
    require 'connect.php' ;
    $sql = $pdo->prepare('SELECT * FROM student');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows;
}

function quelcours($ids){
    require 'connect.php' ;
    // print_r($ids);
    $sql = $pdo -> prepare ('SELECT course.* FROM inscription, course, student WHERE inscription.id_cours=course.id_cours AND inscription.id_student=student.id_student AND student.id_student=?');
    $sql -> execute([$ids]);
    $rows=$sql -> fetchAll();
    return $rows;
    
}
?>