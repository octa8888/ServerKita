function doDelete(itemID){
    $.ajax({
        url: 'controller/itemController.php',
        type: 'POST',
        data :{
            action: 'deleteItem',
            itemId: itemID
        },
        success: function(){
            alert("Success");
            window.location.reload();
        }
    });
}