<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "pokedex";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if(!$conn) {
        die("No hay conexion" .mysqli_connect_error());
    }
?>