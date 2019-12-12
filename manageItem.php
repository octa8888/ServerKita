<?php
    include('header.php');
    if(!isset($_SESSION['userId'])||$_SESSION['userId']!='administrator_account'){
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
                                        <button class="btn btn-warning" onclick="updateItem('${item.ItemId}','${item.Name}','${item.Quantity}','${item.Price}','${item.Description}','${item.Type}')">Update</button>
                                        <button class="btn btn-danger" onclick="doDelete('${item.ItemId}')">Delete</button>
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
            <form action="controller/itemController.php" enctype="multipart/form-data" method="post">
                <div class="form-group item-id-form" style="display: none;">
                    <label>Item ID:</label>
                    <input type="number" class="form-control" name="itemId" id="itemId" readonly>
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="itemName" id="itemName">
                </div>
                <div class="form-group">
                    <label>Quantity:</label>
                    <input type="number" class="form-control" name="itemQuantity" id="itemQuantity">
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <input type="number" class="form-control" name="itemPrice" id="itemPrice">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" class="form-control" name="itemDescription" id="itemDescription">
                </div>
                <div class="form-group">
                    <label>Type:</label><br>
                    <input type="radio" name="itemType" value="Computer" id="Computer"> Computer <br>
                    <input type="radio" name="itemType" value="Laptop" id="Laptop"> Laptop <br>
                    <input type="radio" name="itemType" value="Mouse" id="Mouse"> Mouse <br>
                    <input type="radio" name="itemType" value="Headset" id="Headset"> Headset <br>
                    <input type="radio" name="itemType" value="Keyboard" id="Keyboard"> Keyboard <br>
                </div>
                <div id="input-file">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="uploadedFile" onchange="getFile(this);">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
            </div>
                <button class="btn btn-primary" style="float:right; margin-right:20px; margin:50px 0;" name="btnInsert" value="insert" id="btn-insert">Insert Item</button>
            </form>
            <div id="btn-update" style="display:none;">
                <button class="btn btn-warning" style="float:right; margin-right:20px; margin-bottom:50px;" onclick="doUpdate()">Update Item</button>
                <button class="btn btn-danger" style="float:right; margin-right:20px; margin-bottom:50px;" onclick="window.location.reload()">Cancel Update</button>
            </div>
        </div>
    </div>
</body>
</html>