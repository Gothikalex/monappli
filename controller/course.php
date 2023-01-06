<?php
function affiche_course(){
    require ('model/course.php');
    $course = listcourse();
    require('view/listcourse.php');
}

function add(){
    require ('view/createcourse.php');
}

function record() {
    require('model/course.php');
    mcadd($_POST);
}
  ?>