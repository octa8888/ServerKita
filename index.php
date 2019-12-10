<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Komputer</title>
    <link rel="stylesheet" href="styles/index.css">
    
</head>
<style>
    body{
    background-image: url("./assets/home_bg.jpg"); 
    background-size : auto;
    background-repeat: no-repeat;
}
</style>
<body>
    <?php
        include('header.php');
    ?>

    <div class="main-page">
        <div class="slider-picture">
            <img src="./assets/komputer1.png" class="pic">
        </div>
        <div class="slider-picture">
            <img src="./assets/komputer2.jpg" class="pic">
        </div>
        <div class="slider-picture">
            <img src="./assets/komputer3.jpg" class="pic">
        </div>
        <div class="slider-picture">
            <img src="./assets/laptop1.jpg" class="pic">
        </div>
        <div class="slider-picture">
            <img src="./assets/laptop2.jpg" class="pic">
        </div>
        <div class="slider-picture">
            <img src="./assets/laptop3.jpg" class="pic">
        </div>
    </div>



    <div style="text-align:center; margin-top:20px">
        <span class="dot" onclick="showSlide(0);"></span>
        <span class="dot" onclick="showSlide(1);"></span>
        <span class="dot" onclick="showSlide(2);"></span>
        <span class="dot" onclick="showSlide(3);"></span>
        <span class="dot" onclick="showSlide(4);"></span>
        <span class="dot" onclick="showSlide(5);"></span>
    </div>

    <footer>
        <div class="Promo-Pictures">
            <div class="Deskripsi">

            
            </div>

        </div>
    </footer>


    <script src="./script/index.js"></script>

</body>
</html>