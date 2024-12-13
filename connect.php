<?php
    $hostname = "localhost";
    $username = "sean";
    $password = "4321";
    $database = "recipe_com";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    /*
 if ( !$connect ) {
    echo "could not connect" . mysqli_connect_error();
 }

 else {
     echo "connection successful";
 }
     */
?>