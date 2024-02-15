<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="CreatAcount.css" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
</head>

<body>
    <form action="s.php" method="post">
        <!-- <img src="img/Alsharq2.png" alt="user"> -->
        <h2>Create acount</h2>
        <label for=""></label>
        <input type="number" placeholder="id" name="id" style="display:none;" >
        <input type="text" placeholder="Firs Name" name="firstname" required>
        <input type="text" placeholder="Last Name" name="lastname" required>
        <input type="text" placeholder="User Name" name="username" required>
        <input type="email" placeholder="@gmail.com" name="email" required>
        <input type="password" placeholder="password" name="password" required>
        <input type="password" placeholder="confirm password" name="confirm" required>
        <input type="submit" value="Create" name="add" >
        <a href="login.php">Back to Login</a>
    </form>
</body>

</html>