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
}

function insertItem(){
    var Name= $('#itemName').val();
    var Quantity=$('#itemQuantity').val();
    var Price=$('#itemPrice').val();
    var Description=$('#itemDescription').val();
    var Type=$("input[name='itemType']:checked").val();
    $.ajax({
        url: 'controller/itemController.php',
        type: 'POST',
        data: {
            action: 'insertItem',
            itemName: Name,
            itemQuantity: Quantity,
            itemPrice: Price,
            itemDescription: Description,
            itemType: Type
        },
        success: function(){
            alert("Success");
            window.location.reload();
        }
    })
}

var fileName;
function getFile(file){
    fileName=file.files[0].name;
    $('.custom-file-label').html(fileName);
}