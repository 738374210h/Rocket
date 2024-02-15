<html>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rocket</title>

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: linear-gradient(125deg, #2d86e0, #38d77a, #504bd3, #d99b74, #8c44ad);
            background-size: 300% 150%;
            font-family: "Work Sans", sans-serif;
            animation: bganimation 15s infinite
        }

        form {

            transform: translate(36%, -1%);
            width: 321px;
            height: 372px;
            background: rgb(255 255 255);
            ;
            border-radius: 15px;
            box-sizing: border-box;
            position: relative;
            left: 26%;
        }

        img[alt="user"] {
            position: absolute;
            top: -50px;
            left: 118px;
        }

        h2 {
            color: rgb(0, 0, 0);
            text-align: center;
            margin-top: 90px;
            padding-top: 44px;
            font-size: 39px;

        }

        input[type="email"],
        [type="password"] {
            position: absolute;
            outline: none;
            border: none;
            width: 250px;
            height: 35px;
            border-bottom: 2px solid #0094ff;
            background: none;
            padding: 5px;
            color: rgb(1, 0, 0);
        }

        label {
            position: absolute;
            top: 200px;
            left: 269px;
        }

        input[type="email"] {
            top: 116px;
            left: 34px;
        }

        input[type="password"] {
            top: 187px;
            left: 34px;
        }

        ::placeholder {
            color: rgb(175 172 172);
        }

        input[type="submit"] {
            position: relative;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 15px;
            font-size: 20px;
            cursor: pointer;
        }

        input[value="login"] {
            width: 250px;
            height: 37px;
            top: 123px;
            left: 34px;
            background: #0077ff;

        }

        input[value="Create Acount?"] {
            width: 250px;
            height: 44px;
            top: 139px;
            left: 34px;
            background: #ff0000;
        }



        input[value="login"]:hover {
            background: #ffa200;
            color: #ffffff;
            height: 35px;
            transition-duration: 0.2s;
        }

        input[value="Create Acount?"]:hover {
            background: #0f030385;
            color: #ffffff;
            height: 43px;
            transition-duration: 0.2s;
        }


        a {
            position: absolute;
            top: 231px;
            left: 193px;
            color: #2100ff;
            font-size: 12px;
            cursor: pointer;
        }


        text {
            color: black;
            text-align: center;
            text-transform: uppercase;
            margin: 360px 0;
            font-size: 22px;
        }

        @keyframes bganimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
    <form action="sin.php" method="post">
        <!-- <img src="img/Alsharq2.png" alt="user"> -->
        <h2>login</h2>
        <label for=""></label>
        <input type="email" placeholder="@gmail.com" name="email" require>
        <input type="password" placeholder="Enter Password" name="password" require>
        <!-- <button value="login"><a href="index.html">login</a></button> -->
        <label>
            <input type="checkbox" checked="checked" name="remember">
        </label>
        <input type="submit" name="login" value="login">
        <input type="submit" name="create" value="Create Acount?" href="">
    </form>
    <?php
    
    // if(isset($_POST['login']))
    // { include_once 'database.php';
    //     $username=$_POST['UserName'];
    //     $password=$_POST['Password'];
    //     $sql="SELECT 'count(*)' FROM test2.myproject WHERE username = '$username' AND password = '$password'";
    //     $login=mysqli_query($con,$sql);
    //     $result=mysqli_fetch_array($login);
    //     if($result['count(*)']>0){
    //      echo "<script> location.replace('project.html')</script>";
    // }else{
    //         echo "error";
    //     }

    //     // if(($username=='Hayel@gmail.com')&&($password=="1234")){
    //     //     echo "<script> location.replace('project.html')</script>";
    //     // }else if(($username!='Hayel@gmail.com')&&($password!="1234")){
    //     //     echo "<script> location.replace('Login.php')</script> ";
    //     // }
    //  if(isset($_POST['create'])){
    //     echo "<script> location.replace('CreatAcount.php')</script> ";
    // }

    ?>
</body>

</html>