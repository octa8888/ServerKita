<?php
    session_start();
?>
<head><link rel="stylesheet" href="styles/header.css"></head>
<body>
    <header>
        <nav>
            <ul>
                <div>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li> <a href="">Komputer & Laptop</a>
                        <ul>
                            <li>
                                <a href="pc.php">Komputer</a>
                            </li>
                            <li>
                                <a href="laptop.php">Laptop</a>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="">Aksesoris</a>
                        <ul>
                            <li>
                                <a href="headset.php">Headset</a>
                            </li>
                            <li>
                                <a href="mouse.php">Mouse</a>
                            </li>
                            <li>
                                <a href="keyboard.php">Keyboard</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                        if(isset($_SESSION['username'])){
                    ?> 
                        <li>
                            <a href="cart.php">Cart</a>
                        </li>
                    <?php
                        }
                    ?>
                </div>
                
                <div class="logRes">

                <?php
                    if(isset($_SESSION['userId'])&&$_SESSION['userId']=='administrator_account'){
                        ?>
                        <li> <a href="manageItem.php">Manage Item</a></li>
                        <?php
                    }
                ?>

                <?php
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