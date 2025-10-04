<?php
include "connectionOnDatabase.php";
if($connection->error==false){
    if($_POST["add_category"]){
        $catname=$_POST["category_name"];
        $catdescription=$_POST["category_description"];
        $catdate=$_POST["category_date"];
        $status=$_POST["status"];

        $sql="INSERT INTO category (category_name,category_description,date_added,category_status)
        VALUES ('$catname','$catdescription','$catdate','$status') ";
        $result=$connection->query($sql);
        if($result==true){
            header("Location:ShowCategoryUI.php");
        }else{
            echo "faile";
        }
    }
}

?>
