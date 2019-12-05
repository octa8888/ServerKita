<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>

    <?php
        include('header.php');
    ?>

    <div class="container">
        <h1>Register</h1>
        <form action="controller/registerController.php" method="POST" class="form">
            Username
            <input type="text" name="username">
            Email
            <input type="text" name="email">
            Date of Birth
            <input type="date" name="dob">
            Password
            <input type="password" name="password">
            Retype your password
            <input type="password" name="password2">
            <input type="submit" value="Register" class="submitBtn" name="submitButton">
            <div>
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error']==1){
                            echo "Username must be filled !";
                        }
                        else if($_GET['error']==2){
                            echo "Email must be filled !";
                        }
                        else if($_GET['error']==3){
                            echo "Must input Date of Birth !";
                        }
                        else if($_GET['error']==4){
                            echo "Password must be filled !";
                        }
                        else if($_GET['error']==5){
                            echo "Password is not valid !";
                        }
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>