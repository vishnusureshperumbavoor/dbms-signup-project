<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$database = "s3ct";
$connect = mysqli_connect($localhost,$user,$pass,$database);
if($_POST['submit']){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $pword = $_POST['password'];
    mysqli_query($connect,"INSERT INTO employee (firstname,lastname,password) VALUES ('$fname','$lname','$pword')");   
    $sql = mysqli_query($connect,"SELECT * FROM employee");
    echo "<h1 style='text:bold; margin-top:1px; text-align:center; text-transform:uppercase; font-size:100% ' > EMPLOYEE NAMES </h1><br>";
    while ($row = $sql->fetch_assoc()){
        echo "<h2 style='text:bold; margin-top:1px; text-align:center; text-transform:uppercase; font-size:100% ' > 
        " . $row["slno"] . " . " . $row["firstname"] . " " . $row["lastname"] . "</h2><br>";
    }
}
