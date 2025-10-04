<?php  
 include "connectionOnDatabase.php";

 if($_GET["id"]){
    $id=$_GET["id"];
    $sql = "UPDATE news SET status = 'deleted' WHERE user_id = $id";  
    $result=$connection->query($sql);
    if($result==true){
        header("Location:ShowAllNewsUI.php?deleted=true");
    }else{
        echo "faile";
    }
 }
?>