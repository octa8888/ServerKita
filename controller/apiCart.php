<?php
    include('../database/connect.php');

    if(isset($_POST['action'])){
        if($_POST['action']=="addToCart"){
            $itemId=$_POST['itemId'];
            $userId=$_POST['userId'];
            $quantity=1;

            $query=$con->prepare('SELECT * FROM KCart WHERE ItemId = ? AND CustomerId = ?');
            $query->bind_param("is",$itemId,$userId);
            $query->execute();
            if($rs=$query->get_result()){
                if($rs->num_rows==1){
                    $rs=$rs->fetch_assoc();
                    $quantity+=$rs['Quantity'];
                    $query="UPDATE KCart set Quantity=".$quantity." WHERE Id=".$rs['Id'];
                    $con->query($query);
                    echo "Success";
                    die();
                }
            }

            $query=$con->prepare('INSERT INTO KCart(CustomerId, ItemId, Quantity) VALUES (?,?,?)');
            $query->bind_param("sii",$userId,$itemId,$quantity);
            $query->execute();
            echo "Success";
        }
    }
?>