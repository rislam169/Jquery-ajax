<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../classes/Project.php');
    $pro = new Project();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $skill = $_POST['skill'];
        $checkskill = $pro->checkSkill($skill);
    }
?>