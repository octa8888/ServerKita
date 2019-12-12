<?php
    include('../database/connect.php');
    
    if(isset($_POST['action'])){
        $userId=$_POST['userId'];
        if($_POST['action']=="addToCart"){
            $itemId=$_POST['itemId'];
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
                }
            }

            $query=$con->prepare('INSERT INTO KCart(CustomerId, ItemId, Quantity) VALUES (?,?,?)');
            $query->bind_param("sii",$userId,$itemId,$quantity);
            $query->execute();
            echo "Success";
        }
        else if($_POST['action']=="clearCart"){
            $query=$con->prepare('DELETE FROM KCart Where CustomerId = ?');
            $query->bind_param("s",$userId);
            $query->execute();
            echo "Success";
        }
        else if($_POST['action']=="getCartData"){
            $query=$con->prepare('SELECT kc.ItemId,ki.Name,ki.Price,kc.Quantity FROM KCart kc JOIN KItems ki ON kc.Itemid = ki.ItemId Where CustomerId = ?');
            $query->bind_param("s",$userId);
            $query->execute();
            if($rs=$query->get_result()){
                $rows=array();
                while($item=$rs->fetch_assoc()){
                    $item['Name']=htmlspecialchars($item['Name']);
                    $rows[]=$item;
                }
                echo json_encode($rows);
            }
        }
    }
?>