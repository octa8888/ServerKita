
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Komputer</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/redirector.css"> 
</head>
<style>
    body{
    background-image: url("./assets/home_bg.jpg"); 
    background-size : auto;
    background-repeat: no-repeat;
}

h2{
    text-align : center;
    color: white;
    animation-name: promo;
    animation-duration: 20s;
    animation-iteration-count: infinite;
    margin-top: 45px;
}
@keyframes promo{
    0% {background-color: #000000;}
    5% {background-color: #500000;}
    10% {background-color: #005000;}
    15% {background-color: #000050;}
    20% {background-color: #000000;}
    25% {background-color: #500000;}
    30% {background-color: #005000;}
    35% {background-color: #000050;}
    40% {background-color: #000000;}
    45% {background-color: #500000;}
    50% {background-color: #005000;}
    55% {background-color: #000050;}
    60% {background-color: #000000;}
    65% {background-color: #500000;}
    70% {background-color: #005000;}
    75% {background-color: #000050;}
    80% {background-color: #000000;}
    85% {background-color: #500000;}
    90% {background-color: #005000;}
    95% {background-color: #000050;}
    100% {background-color: #000000;}
    
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
<h2>Today's Our Top Electronic Stuffs!!!</h2>
  



    <div style="text-align:center; margin-top:20px">
        <span class="dot" onclick="showSlide(0);"></span>
        <span class="dot" onclick="showSlide(1);"></span>
        <span class="dot" onclick="showSlide(2);"></span>
        <span class="dot" onclick="showSlide(3);"></span>
        <span class="dot" onclick="showSlide(4);"></span>
        <span class="dot" onclick="showSlide(5);"></span>
    </div>

    <footer>
        


    <script src="./script/index.js"></script>

</body>
</html>