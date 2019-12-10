<?php

include('../database/connect.php');

if(isset($_POST['action'])&&$_POST['action']=="doTransaction"){
    $userId=$_POST['userId'];
    $date=date("Y-m-d H:i:s");
    $query=$con->prepare("INSERT INTO KTransactionHeader(UserId,TransactionDate) VALUES (?,?)");
    $query->bind_param("ss",$userId,$date);
    $query->execute();
    
    $query=$con->query("SELECT TransactionId FROM KTransactionHeader ORDER BY (TransactionId) DESC LIMIT 1");
    $rs=$query->fetch_assoc();
    $headerId=$rs['TransactionId'];

    $query=$con->prepare('SELECT * FROM KCart Where CustomerId = ?');
    $query->bind_param("s",$userId);
    $query->execute();
    if($rs=$query->get_result()){
        while($item=$rs->fetch_assoc()){
            $q=$con->prepare("INSERT INTO KTransactionDetail(TransactionId,ItemId, Quantity) VALUES (?,?,?)");
            $q->bind_param("iss",$headerId, $item['ItemId'],$item['Quantity']);
            $q->execute();
        }
    }
    $query=$con->prepare("DELETE FROM KCart WHERE CustomerId = ?");
    $query->bind_param("s",$userId);
    $query->execute();
}

?>