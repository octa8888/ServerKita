<?php
include('../database/connect.php');

    function getStoreData(){
        // if(isset($_POST['action'])){
            // if($_POST['action']=="getStoreItems"){
                $query="SELECT * FROM KItems";
                if($rs=$con->query($query)){
                    var_dump(json_encode($rs));
                    die();
                    return json_encode($rs);
                }
            // }
        // }
    }

    getStoreData();

?>