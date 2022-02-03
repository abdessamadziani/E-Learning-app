<?php

 if($_SERVER['REQUEST_METHOD'] == 'post'){
    $newStudent = [
        "name"=> $_POST['name'],
        "phone"=> $_POST['tel']
    ];
    print_r($newStudent);
    
 }

?>