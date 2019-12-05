<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Komputer</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <?php
        include('header.php');
    ?>

    <div class="main-page">
        <div class="slider-picture">
            <img src="./assets/H2SO4.jpg" class="pic">
        </div>
        <div class="slider-picture">
            <img src="./assets/No2.jpg" class="pic">
        </div>
    </div>

    <div style="text-align:center; margin-top:20px">
        <span class="dot" onclick="showSlide(0);"></span>
        <span class="dot" onclick="showSlide(1);"></span>
    </div>

    <div class="classA">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae accusamus, unde repellendus neque animi eligendi rem, molestias esse sunt rerum cumque, amet ipsum ex delectus cupiditate? Maxime magnam accusantium voluptas.

    </div>



    <footer>
        Footer
    </footer>


    <script src="./script/index.js"></script>

</body>
</html>