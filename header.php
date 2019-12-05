<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/header.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <div>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li> <a href="">Bahan Kimia</a>
                        <ul>
                            <li>
                                <a href="asam.php">Asam</a>
                            </li>
                            <li>
                                <a href="">Basa</a>
                            </li>
                            <li>
                                <a href="">List3</a>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="">Menu2</a>
                        <ul>
                            <li>
                                <a href="">List1</a>
                            </li>
                            <li>
                                <a href="">List2</a>
                            </li>
                            <li>
                                <a href="">List3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Cart</a>
                    </li>
                </div>
                <div class="logRes">
                <?php
                    session_start();
                    
                    if(isset($_SESSION['username'])){
                        $html="<li> <a href='controller/logoutController.php'>Logout</a></li>";
                        echo $html;
                    }
                    else{
                        $html="<li> <a href='login.php'>Login</a></li>
                                <li> <a href='register.php'>Register</a></li>";
                        echo $html;
                    }
                ?>
                </div>
                
            </ul>
        </nav>
    </header>
</body>
</html>