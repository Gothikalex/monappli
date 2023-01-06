<?php

function inscription(){
    require('model/course.php');
    require('model/student.php');
    $students = liststudents();
    $course = listcourse();
    require('view/inscription.php');
}



function ajouter() {
    require('model/inscription.php');
    print_r($_POST);
    $ids = $_POST['etudiant'];
    $cours = $_POST['course'];
    rec($ids,$cours);
}
?>