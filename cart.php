<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/cart.css">
    <title>Cart</title>
</head>
<body>
    <script src="script/jquery.min.js"></script>
    <div class="container">
        <div class="table-data">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Num</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                    <tbody class="table-body">
                <script>
                    $.ajax({
                        url: 'controller/apiCart.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            action:'getCartData',
                            userId: '<?=$_SESSION['userId']?>'
                        },
                        success: function(data){
                            var html="";
                            $.each(data,function(index,item){
                                var totalPrice=item.Price*item.Quantity;
                                html+=`
                                <tr>
                                    <th scope="row">${index+1}</th>
                                    <td>${item.Name}</td>
                                    <td>${item.Quantity}</td>
                                    <td>${totalPrice}</td>
                                </tr>
                                `
                            });
                            $('.table-body').html(html);
                        }
                    });
                </script>
                </tbody>
            </table>
        </div>
        <div class="choose-button">
            <button class="btn btn-primary">Buy</button>
            <button class="btn btn-danger">Cancel</button>
        </div>
    </div>
</body>
</html>