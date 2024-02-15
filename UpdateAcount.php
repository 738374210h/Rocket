<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="update.css" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
</head>

<body>
    <form action="update.php" method="post">
        <!-- <img src="img/Alsharq2.png" alt="user"> -->
        <h2>Update acount details</h2>
        <label for=""></label>
        <input type="text" placeholder="Firs Name" name="firstname" required>
        <input type="text" placeholder="Last Name" name="lastname" required>
        <input type="text" placeholder="User Name" name="username" required>
        <input type="email" placeholder="@gmail.com" name="email" required>
        <input type="password" placeholder="pre_password" name="pre_password" required>
        <input type="password" placeholder="new_password" name="new_password" required>
        <input type="password" placeholder="confirm_new_password" name="confirm_new_password" required>
        <input type="submit" value="update" name="update" >
        <a href="login.php">Back to Login</a>
    </form>
</body>

</html>