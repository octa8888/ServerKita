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
    <title>Manage Item</title>
</head>
<body>
    <script src="script/jquery.min.js"></script>
    <script src="script/item.js"></script>
    <div class="container">
        <div class="table-data">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Num</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price (Unit)</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                    <tbody class="table-body">
                <script>
                    $.ajax({
                        url: 'controller/apiStore.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            action: 'getStoreItems',
                            type: 'All'
                        },
                        success: function(data){
                            var html="";
                            $.each(data,function(index,item){
                                html+=`
                                <tr>
                                    <th scope="row">${index+1}</th>
                                    <td>${item.Name}</td>
                                    <td>${item.Quantity}</td>
                                    <td>Rp. ${item.Price}</td>
                                    <td>${item.Type}</td>
                                    <td>
                                        <button class="btn btn-warning")">Update</button>
                                        <button class="btn btn-danger" onclick=doDelete('${item.ItemId}')>Delete</button>
                                    </td>
                                </tr>
                                `
                            });
                            $('.table-body').html(html);
                        },
                    });
                    
                </script>
                </tbody>
            </table>
            <div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="itemName">
                </div>
                <div class="form-group">
                    <label>Quantity:</label>
                    <input type="number" class="form-control" name="itemQuantity">
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <input type="number" class="form-control" name="itemQuantity">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" class="form-control" name="itemQuantity">
                </div>
                <div class="form-group">
                    <label>Type:</label><br>
                    <input type="radio" name="itemType" value="Computer"> Computer <br>
                    <input type="radio" name="itemType" value="Laptop"> Laptop <br>
                    <input type="radio" name="itemType" value="Mouse"> Mouse <br>
                    <input type="radio" name="itemType" value="Headset"> Headset <br>
                    <input type="radio" name="itemType" value="Keyboard"> Keyboard <br>
                </div>
            </div>
            <button class="btn btn-primary" style="float:right; margin-right:20px;")>Insert Item</button>
        </div>
    </div>
</body>
</html>