<?php
session_start();
include "connectionOnDatabase.php";
if($connection->error==false){
    if($_POST["Update_news"]){
        $title=$_POST["new_news_title"];
        $category=$_POST["new_category"];
        $details=$_POST["new_news_details"];
        $image=$_POST["new_news_image"];
        $userid=$_POST["new_user_id"];
        $sql="UPDATE news SET newstitle='$title', category='$category', 
        newsdetails='$details',newsimage='$image',user_id='$userid' WHERE user_id='$userid'";
        $result=$connection->query($sql);
        if($result==true){
            header("Location:ShowAllNewsUI.php?updated=true") ;
        }else{
            echo "faile";
        }
    }
}

?>