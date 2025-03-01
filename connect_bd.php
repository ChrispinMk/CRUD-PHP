<?php

    $sever = "localhost";
    $username = "root";
    $password = "";
    $db = "crud_bd";

    $conn = new mysqli($sever, $username, $password, $db);
    if($conn->connect_error){
        die("connection echoue" . $conn->connect_error);
    }
?>