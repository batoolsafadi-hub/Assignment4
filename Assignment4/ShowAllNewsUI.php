<?php
session_start();
include "connectionOnDatabase.php";

$sql="SELECT * FROM news  ";
$result=$connection->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All News</title>
    <style>
        .show{
            color:#205781;
        }
            table {
      width: 100%;
      border-collapse: collapse;
      border: 2px solid #07273fff; 
    }

    th, td {
      border: 1px solid #07273fff; 
      padding: 10px;
      text-align: center;
      color: #333; 
      font-size: 16px;
    }

    th {
      background-color: #f5f5f5;
      color: #205781; 
    }
    </style>
</head>
<body>
    <center>
        <h1 class="show">Show All News</h1>
         <table border="1px" width="100%">
        <tr>
          <th>User Id</th>  
          <th>News Title</th>
          <th>Category</th>
          <th>News Details</th>
          <th>News Image</th>
          <th>Delete News</th>
          <th>Upatate News</th>
          </tr>
          <?php
          if($result->num_rows !=0){
            while($row =$result->fetch_assoc()){?>
            <tr>
              <td> <?php echo $row["user_id"] ?> </td>
              <td> <?php echo $row["newstitle"]?> </td>
              <td> <?php echo $row["category"]?> </td>
              <td> <?php echo $row["newsdetails"]?> </td>
              <td> <?php echo $row["newsimage"]?> </td>
              <td> <a href="DeleteNews.php?id=<?php echo $row["user_id"]; ?>"><img src="../Assignment4/trash.png" alt="حذف الخبر" ></a> </td>
               <td> <a href="UpdateNewsUI.php?id=<?php echo $row["user_id"];?>&newstitle=<?php echo $row["newstitle"];?>&category=<?php echo $row["category"];?>&newsdetails=<?php echo $row["newsdetails"];?>&newsimage="<?php echo $row["newsimage"];?>><img src="../Assignment4/update.png" alt="تحديث الخبر" ></a> </td>

            </tr>
          <?php }
          }
          ?>
       </table>
    </center>
    
</body>
</html>