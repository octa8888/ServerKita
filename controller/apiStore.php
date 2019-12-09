<?php
    function getStoreData(){
        include('../database/connect.php');
        if(isset($_POST['action'])){
            if($_POST['action']=="getStoreItems"){
                $type=$_POST['type'];
                if($type!="Laptop"&&$type!="Computer"){
                    echo "Invalid Type";
                }
                $query="SELECT * FROM KItems WHERE Type = '".$type."'";
                if($rs=$con->query($query)){
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