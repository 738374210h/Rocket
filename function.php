<?php
function check_login($conn){
    if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $query="SELECT * FROM  test2.hayel where id= '$id' limit 1";
        $result= mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
           $user_data = mysqli_fetch_assoc($result);
           return $user_data;
        }
    }
    //redirect to login
    header("location: sin.php");
    die;

}
?>