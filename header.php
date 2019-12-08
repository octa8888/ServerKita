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
                                <a href="">Laptop</a>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="">Aksesoris</a>
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

                <li> <a href="#">About</a></li>

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