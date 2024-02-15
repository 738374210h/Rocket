<?php
     
     if(isset($_POST['update'])){
        include_once 'database.php';
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $username=$_POST["username"];
        $email=$_POST["email"];
        $pre_password=$_POST["pre_password"];
        $new_password=$_POST["new_password"];
        $confirm_new_password=$_POST["confirm_new_password"];
    $query="UPDATE test2.hayel SET firstname='$firstname' ,lastname='$lastname', username='$username' , password='$new_password',confirm='$confirm_new_password' WHERE  password='$pre_password' AND email='$email'";
    
    if(mysqli_query($conn,$query)){
        echo "<script> confirm('Updated')</script>";
        echo "<script> location.replace('login.php')</script> ";
    }
    mysqli_close($conn);
    }
?>
</body>
</html>



