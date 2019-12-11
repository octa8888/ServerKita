<?php
include('../database/connect.php');

if(isset($_POST['action'])){
    $action=$_POST['action'];
    if($action=="deleteItem"){
        $itemId=$_POST['itemId'];
        $query=$con->prepare("UPDATE KItems SET Status='Inactive' WHERE ItemId = ?");
        $query->bind_param("i",$itemId);
        $query->execute();
    }
    else if($action=="insertItem"){
        $name=$_POST['itemName'];
        $price=$_POST['itemPrice'];
        $quantity=$_POST['itemQuantity'];
        $description=$_POST['itemDescription'];
        $type=$_POST['itemType'];

        $query=$con->prepare("INSERT INTO KItems(Name,Price,Quantity,Description,Type,Status) VALUES(?,?,?,?,?,'Active')");
        $query->bind_param("siiss",$name,$price,$quantity,$description,$type);
        $query->execute();
    }
}
?>