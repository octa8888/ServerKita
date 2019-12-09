<?php
    include("database/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/pc.css">
    <title>PC</title>
</head>
<body>
    <?php
        include('header.php');
    ?>
    <script src="script/jquery.min.js"></script>
    <script src="script/buy.js"></script>

    <div class="container">
        
        <script>
            $("document").ready(function(){
                $.ajax({
                    url: "http://localhost:8080/ServerKita/controller/apiStore.php",
                    dataType: 'json',
                    type: 'POST',
                    data:{
                        action:'getStoreItems',
                        type: 'Laptop'
                    },
                    success: function (data){
                        if(data=="Invalid Type"){
                            header("location: index.php");
                        }
                        var html="";
                        $.each(data,function(index, item){
                            html+=`<div class="col-lg-3 shop-item">
                                <img src='${item.Picture}' class="img-setting">
                                <div class="description">
                                    <h5>${item.Name}</h5>
                                    <div>
                                        ${item.Description}
                                    </div>
                                    <div style="margin-top: 10px; color:orange">
                                        <strong>Rp. ${item.Price}</strong>
                                    </div>
                                </div>
                                <?php
                                    if(isset($_SESSION['username'])){
                                ?>
                                    <div class="cart-button">
                                        <button class="btn btn-danger" onclick=buyById(${item.ItemId})>Buy</button>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>`
                        });
                        $(".row").html(html);
                    },
                    error: function(e){
                       window.location="index.php";
                    }
                });
            })
            
        </script>

    <div class="row"></div>

    </div>
    

</body>
</html>