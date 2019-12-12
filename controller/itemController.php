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
    else if($action=="updateItem"){
        $itemId=$_POST['itemId'];
        $itemName=$_POST['itemName'];
        $itemQuantity= $_POST['itemQuantity'];
        $itemPrice= $_POST['itemPrice'];
        $itemDescription= $_POST['itemDescription'];
        $itemType=$_POST['itemType'];
        $query=$con->prepare("UPDATE KItems SET Name=?, Price=?, Quantity=?, Description=?, Type=? WHERE ItemId = ?");
        $query->bind_param("siissi",$itemName,$itemPrice,$itemQuantity,$itemDescription,$itemType,$itemId);
        $query->execute();
    }
}
else if(isset($_POST['btnInsert'])){
    $name=$_POST['itemName'];
    $price=$_POST['itemPrice'];
    $quantity=$_POST['itemQuantity'];
    $description=$_POST['itemDescription'];
    $type=$_POST['itemType'];
    $file=$_FILES['uploadedFile'];
    $fileName=$file['name'];
    $fileExtension=strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
    if($fileExtension=='jpg'||$fileExtension=='png'||$fileExtension=='jpeg'){
        $path='../assets/'.$fileName;
        move_uploaded_file($file['tmp_name'],$path);
        $fileName='assets/'.$fileName;
    }
    $query=$con->prepare("INSERT INTO KItems(Name,Price,Quantity,Description,Picture,Type,Status) VALUES(?,?,?,?,?,?,'Active')");
    $query->bind_param("siisss",$name,$price,$quantity,$description,$fileName,$type);
    $query->execute();
    header("location: ../manageItem.php");
}
?>