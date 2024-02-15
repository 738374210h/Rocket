<?php
include_once 'database.php';
    $a=$_POST["id"];
    $d=$_POST["username"];
    $c=$_POST["email"];
    $e=$_POST["message"];
$query="INSERT INTO test2.abdulrahman(id,username,email,message) values('$a','$d','$c','$e')";
mysqli_query($conn,$query);
if($query){
    header("location: Project.php");
}

mysqli_close($conn);
?>