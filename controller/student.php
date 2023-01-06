<?php

function add(){
    require ('view/createstudent.php');
}

function record() {
    require('model/student.php');
    madd($_POST);
}

function affiche_student(){
    require ('model/student.php');
    $students = liststudents();
    require('view/liststudent.php');
    
}

function affiche_cours($ids){
    require ('model/student.php');
    $cstud = quelcours($ids);
    require('view/liststudent.php');
}
?>