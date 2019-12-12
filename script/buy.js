function buyById(itemId, userId){
    $.ajax({
        url: 'controller/apiCart.php',
        type: 'POST',
        data: {
            action: 'addToCart',
            itemId: itemId,
            userId: userId
        },
        success: function(data){
            alert(data);
        },
        error: function(){
            alert('.....');
        }
    });
}

function doTransaction(customerId, token){
    $.ajax({
        url: 'controller/transactionController.php',
        type: 'POST',
        data: {
            action: 'doTransaction',
            userId: customerId,
            csrfToken: token
        },
        success : function(){
            alert("Success");
            document.location.href="userUpload.php";
        }
    });
}

function clearCart(customerId){
    $.ajax({
        url: 'controller/apiCart.php',
        type: 'POST',
        data: {
            action: 'clearCart',
            userId: customerId
        },
        success : function(){
            alert("Success");
            window.location.reload();
        }
    });
}