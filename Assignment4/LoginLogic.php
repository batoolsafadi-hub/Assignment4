<?php
session_start();
include "connectionOnDatabase.php";
if($connection->error==false){
    if(isset($_POST["login"])){
        $email=$_POST["email"];
        $password=$_POST["password"];

        $sql="SELECT * FROM users WHERE email = '$email'
         and password = '$password'";
        $result=$connection->query($sql);
        if($result->num_rows > 0){
            header("Location:DashboardUI.php");
            echo "Login done";
        }else{
            echo "Login faile";
        }
    }
}






?>