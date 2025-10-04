<?php
session_start();
include "connectionOnDatabase.php";
if($connection->error==false){
    if($_POST["sign_up"]){
        $id=$_POST["userid"];
        $name=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        $sql="INSERT INTO users(id,name,email,password) 
        VALUES('$id','$name','$email','$password')";

        $result=$connection->query($sql);
        
        if($result==true){
            $_SESSION['user_id']=$id;
            header("Location:LoginUI.php");
        }else{
            echo "faile";
        }
    }
}







?>