<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <?php
        include('header.php');
    ?>
    <div class="container">
        <h1 style="text-align:center;">Login</h1>
        <form action="controller/loginController.php" method="post">
            <div class="label">
                Username
            </div>
            <input type="text" name="txtUsername" class="input-form">
            <div class="label">
                Password
            </div>
            <input type="password" name="txtUsername" class="input-form">
            <input type="submit" value="Login" class="submit-btn">
        </form>
    </div>
</body>
</html>