<?php
    function getStoreData(){
        include('../database/connect.php');
        if(isset($_POST['action'])){
            if($_POST['action']=="getStoreItems"){
                $type=$_POST['type'];
                $query;
                if($type=='All'){
                    $query=$con->prepare("SELECT * FROM KItems ORDER BY Type, Name");
                }
                else{
                    $query=$con->prepare("SELECT * FROM KItems WHERE Type = ? AND Quantity > 0");
                    $query->bind_param("s",$type);
                }
                $query->execute();
                if($rs=$query->get_result()){
                    $rows=array();
                    while($item=$rs->fetch_assoc()){
                        $rows[]=$item;
                    }
                    echo json_encode($rows);
                }
            }
        }
    }

    getStoreData();

?>