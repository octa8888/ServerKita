<?php

include('../database/connect.php');

if(isset($_POST['submitButton'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    
    if(empty($username)){
        header("location: ../register.php?error=1");
    }
    else if(empty($email)){
        header("location: ../register.php?error=2");
    }
    else if(empty($dob)){
        header("location: ../register.php?error=3");
    }
    else if(empty($password)){
        header("location: ../register.php?error=4");
    }
    else if($password!==$password2){
        header("location: ../register.php?error=5");
    }
    else{
        // echo "Register";
        $userid=md5($username.$password);
        $password=md5($password);
        $dob=(string)$dob;
        $query=$con->prepare("INSERT INTO KUser VALUES(?,?,?,?,?)");
        $query->bind_param("sssss",$userid,$username,$password,$dob,$email);
        $query->execute();
        header("location: ../index.php");
    }
    return;
}
header("location: ../register.php?");