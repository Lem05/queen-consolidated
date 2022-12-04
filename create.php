<?php
require "database.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $queryCreate = "INSERT INTO contact VALUES (null, '$name', '$email', '$message')";
    $sqlCreate = mysqli_query($connection,$queryCreate);

    echo '<script>alert("Form Submitted Successfully!")</script>';
    header("Location:index.html");
}
?>