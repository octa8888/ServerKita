function doDelete(itemID){
    $.ajax({
        url: 'controller/itemController.php',
        type: 'POST',
        data: {
            action: 'deleteItem',
            itemId: itemID
        },
        success: function(){
            alert("Success");
            window.location.reload();
        }
    });
}

function updateItem(itemID,itemName,itemQuantity,itemPrice,itemDescription,itemType){
    $('.item-id-form').css({"display":"block"});
    $('#itemId').val(itemID);
    $('#itemName').val(itemName);
    $('#itemQuantity').val(itemQuantity);
    $('#itemPrice').val(itemPrice);
    $('#itemDescription').val(itemDescription);
    $('#'+itemType).prop("checked",true);
    $('#btn-insert').css({"display":"none"});
    $('#btn-update').css({"display":"block"});
    $('#input-file').css({"display":"none"});
}

function doUpdate(){
    var itemId=$('#itemId').val();
    var itemName=$('#itemName').val();
    var itemQuantity=$('#itemQuantity').val();
    var itemPrice=$('#itemPrice').val();
    var itemDescription=$('#itemDescription').val();
    var itemType=$("input[name='itemType']:checked"). val();
    console.log(itemId);
    console.log(itemName);
    console.log(itemQuantity);
    console.log(itemPrice);
    console.log(itemDescription);
    console.log(itemType);
    $.ajax({
        url: 'controller/itemController.php',
        type: 'POST',
        data: {
            action: 'updateItem',
            itemId: itemId,
            itemName: itemName,
            itemQuantity: itemQuantity,
            itemPrice: itemPrice,
            itemDescription: itemDescription,
            itemType: itemType
        },
        success: function(){
            alert("Update Success");
            window.location.reload();
        }
    })
}

var fileName;
function getFile(file){
    fileName=file.files[0].name;
    $('.custom-file-label').html(fileName);
}