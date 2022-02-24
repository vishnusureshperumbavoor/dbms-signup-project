<?php
$localhost = "localhost";
$user = "root";
$password = "";
$database = "s3ct";
$connect = mysqli_connect($localhost,$user,$password,$database);
if($_POST['submit']){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $pass = $_POST['password'];
    mysqli_query($connect,"INSERT INTO employee (firstname,lastname,secretkey) VALUES ('$fname','$lname','$pass')");   
    echo "<h1 style='text:bold; margin-top:200px; text-align:center; text-transform:uppercase; font-size:350% ' > 
    welcome $fname $lname </h1>";
}