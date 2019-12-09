function buyById(itemId, userId){
    // alert(itemId);
    $.ajax({
        url: 'http://localhost:8080/ServerKita/controller/apiCart.php',
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