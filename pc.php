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
    
    <div class="container">
        
        <script>
            $("document").ready(function(){
                $.ajax({
                    url:'http://localhost:8080/ServerKita/controller/apiStore.php',
                    dataType:'json',
                    type:'POST',
                    data:{
                        action:'getStoreItems'
                    },
                    success: function (data){
                        
                    },
                    error: function(){
                        alert('error');
                    }
                });
            })
            
        </script>
         <?php
            $query="SELECT * FROM KItems";
            if($rs=$con->query($query)){
                while($data=$rs->fetch_assoc()){
        ?>
            <div class="row">
                <div class="col-lg-3 shop-item">
                    <img src="<?=$data['Picture']?>" class="img-setting">
                    <div class="description">
                        <h5><?=$data['Name']?></h5>
                        <div>
                            <?=$data['Description']?>
                        </div>
                        <div style="margin-top: 10px; color:orange">
                            <strong>Rp. <?=$data['Price']?></strong>
                        </div>
                    </div>
                    <div class="cart-button">
                        <button class="btn btn-danger">Buy</button>
                    </div>
                </div>
            </div>

        <?php  
                } 
            }
        ?>

        

    </div>
    

</body>
</html>