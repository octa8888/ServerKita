<?php
    include('header.php');
    if(!isset($_SESSION['userId'])){
        header("location: index.php");
    }
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
    <script src="script/buy.js"></script>
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
                            var total=0,totalQty=0;
                            $.each(data,function(index,item){
                                var totalPrice=item.Price*item.Quantity;
                                total+=totalPrice;
                                totalQty+=item.Quantity;
                                html+=`
                                <tr>
                                    <th scope="row">${index+1}</th>
                                    <td>${item.Name}</td>
                                    <td>${item.Quantity}</td>
                                    <td>Rp. ${totalPrice}</td>
                                </tr>
                                `
                            });
                            if(data.length>0){
                                html+=`
                                <tr>
                                    <th scope="row"></th>
                                    <td>Grand Total</td>
                                    <td>${totalQty}</td>
                                    <td>Rp. ${total}</td>
                                </tr>
                                `
                            }
                            $('.table-body').html(html);
                            if(data.length>0){
                                var html = `<button class="btn btn-primary" onclick="doTransaction('<?=$_SESSION['userId']?>')">Buy</button>
                                <button class="btn btn-danger" onclick="clearCart('<?=$_SESSION['userId']?>')">Cancel</button>`
                                $('.choose-button').html(html);
                            }
                        }
                    });
                    
                </script>
                </tbody>
            </table>
        </div>
        <div class="choose-button"></div>
    </div>
</body>
</html>