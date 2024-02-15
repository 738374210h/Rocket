<?php
session_start();

include('database.php');
include('function.php');
//'<script>alert("Welcome to Geeks for Geeks")</script>'
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something is posted u can check what
    $id=$_POST['id'];
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $user_name=$_POST["username"];
    $email=$_POST["email"]; 
    $password=strval($_POST["password"]);
    $confirm=$_POST["confirm"]; 
    
 

    

   //password check
   $uppercase = preg_match('@[A-Z]@',$password);
   $lowercase = preg_match('@[a-z]@',$password);
   $number=preg_match('@[0-9]@',$password);
    
   if(!empty($username) && !empty($password) && !empty($email)){
    if((ctype_alpha($username))){
        echo "<script>alert('name should be characters only')</script>";
        echo "<script> location.replace('CreatAcount.php')</script> ";
    }
    elseif( !$uppercase || !$lowercase || !$number || strlen($password) < 9){

    echo "<script>alert('password should be 8 characters in length and include lowercase uppercase and numbers')</script>";
    echo "<script> location.replace('CreatAcount.php')</script> ";
   }
   elseif( $password != $confirm){

    echo "<script>alert('passwords are not the same')</script>";
    echo "<script> location.replace('CreatAcount.php')</script> ";

   }
    
   elseif(!(filter_var($email ,FILTER_VALIDATE_EMAIL))){
  echo  "<script>alert('your email is invalid')</script>";
  echo "<script> location.replace('CreatAcount.php')</script> ";
   }
   else{
    $sql="INSERT INTO test2.hayel(id,firstname,lastname,username,email,password,confirm) values('$id','$firstname','$lastname','$user_name','$email','$password','$confirm')";
    if(mysqli_query($conn,$sql)){
        echo "<script> confirm('your account is created')</script>";
        echo "<script> location.replace('login.php')</script> ";
        
    }
    else
        echo "<script>alert('error existed....You already have acount')</script>";
        echo "<script> location.replace('login.php')</script> ";
   }


}
else {
    echo "<script>alert('null error')</script>";
    
   }
   mysqli_close($conn);
}

?>
