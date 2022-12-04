<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "queen";



$connection = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_error()){
    echo "Error: Unable to connect to mysql <br>";
    echo "Message: ".mysqli_connect_error()."<br>";
}

?>