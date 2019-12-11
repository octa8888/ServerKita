<?php
    header("X-XSS-Protection: 0");
    if(!isset($_POST['submitBtn'])){
        header("location: ../index.php");
    }

    include('../database/connect.php');

    $username= htmlspecialchars($_POST['username'], ENT_QUOTES,'UTF-8');
    $password=$_POST['password'];

    if(empty($username)){

    }
    else if(empty($password)){

    }
    else{
        $password=md5($password);
        $query=$con->prepare("SELECT * FROM KUser WHERE Username = ? AND Password = ?");
        $query->bind_param("ss",$username,$password);
        $query->execute();
        $rs=$query->get_result();
        if($rs->num_rows==1){
            $rs=$rs->fetch_assoc();
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['userId']=$rs['UserId'];
            header("location: ../index.php");
        }
        else{
            header("location: ../login.php");
        }
    }
    
?>