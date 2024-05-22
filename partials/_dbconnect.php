<?php

$database = "football";
$servername = "localhost";
$username = "root";
$password = "forest#123@cat";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Unable to connect to database";
}

?>