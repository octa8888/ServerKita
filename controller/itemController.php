<?php
include('../database/connect.php');

if(isset($_POST['action'])){
    $action=$_POST['action'];
    $itemId=$_POST['itemId'];
    if($action=="deleteItem"){
        $query=$con->prepare("UPDATE KItems SET Status='Inactive' WHERE ItemId = ?");
        $query->bind_param("i",$itemId);
        $query->execute();
    }
}
?>