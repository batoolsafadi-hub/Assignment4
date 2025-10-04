<?php
session_start();
include "connectionOnDatabase.php";
if($connection->error==false){
    if($_POST["add_news"]){
        $title=$_POST["news_title"];
        $category=$_POST["category"];
        $details=$_POST["news_details"];
        $image=$_POST["news_image"];
        $userid=$_POST["user_id"];

        $sql="INSERT INTO news(newstitle,category,newsdetails,newsimage,user_id)
        VALUES ('$title','$category','$details','$image','$userid')";
        $result=$connection->query($sql);
        if($result==true){
            header("Location:ShowAllNewsUI.php") ;
        }else{
            echo "faile";
        }
    }
}

?>