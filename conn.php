<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $databse = "abcvirtual";

    $conn = mysqli_connect($servername,$username,$password,$databse);

    if(!$conn){
        die("connection failed" .mysqli_connect_error());
    }
?>