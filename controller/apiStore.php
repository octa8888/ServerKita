<?php
    function getStoreData(){
        include('../database/connect.php');
        session_start();
        if(isset($_POST['action'])&&isset($_POST['csrfToken'])&&$_POST['csrfToken']==$_SESSION['csrfToken']){
            unset($_SESSION['csrfToken']);
            if($_POST['action']=="getStoreItems"){
                $type=$_POST['type'];
                $query;
                if($type=='All'){
                    $query=$con->prepare("SELECT * FROM KItems WHERE Status = 'Active' ORDER BY Type, Name");
                }
                else{
                    $query=$con->prepare("SELECT * FROM KItems WHERE Type = ? AND Quantity > 0");
                    $query->bind_param("s",$type);
                }
                $query->execute();
                if($rs=$query->get_result()){
                    $rows=array();
                    while($item=$rs->fetch_assoc()){
                        $item['Name']=htmlspecialchars($item['Name']);
                        $item['Type']=htmlspecialchars($item['Type']);
                        $item['Description']=htmlspecialchars($item['Description']);
                        $rows[]=$item;
                    }
                    echo json_encode($rows);
                }
            }
        }
    }

    getStoreData();

?>