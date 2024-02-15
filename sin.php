<?php  
session_start();
include('database.php');
include('function.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something is posted u can check what
    $email=$_POST["email"];
    $password=strval($_POST["password"]);
    if(empty($email) && empty($password)){
            echo "<script>alert('You must write your email and password')</script>";
            echo "<script> location.replace('login.php')</script> ";
    }elseif(!empty($username) && !empty($password) && !empty($email)){
    $query="SELECT * FROM test2.hayel where email='$email' limit 1";
    $result=mysqli_query($conn,$query);
    if($result){
     if($result && mysqli_num_rows($result) > 0)
        {
           $user_data = mysqli_fetch_assoc($result);
           if($user_data['password'] === $password){
            $_SESSION['id'] = $user_data['id'];
            
            header("location: index.php");
            
           }else{ echo '<script>alert("The password or email you entered is wrong...please check")</script>';
            echo "<script> location.replace('login.php')</script> ";}
          

        }
        
    }
    mysqli_close($conn);
    }
}
  if(isset($_POST['create'])){
    header("location: CreatAcount.php");
}

?>