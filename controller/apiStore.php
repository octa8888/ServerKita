<?php
    function getStoreData(){
        include('../database/connect.php');
        if(isset($_POST['action'])){
            if($_POST['action']=="getStoreItems"){
                $query="SELECT * FROM KItems";
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