<?php
include "connectionOnDatabase.php";
$sql="SELECT * FROM news WHERE status = 'deleted'";
$result=$connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Deleted News</title>
    <style>
        .deletenews{
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
        <h1 class="deletenews">Deleted News</h1>
         <table border="1px" width="100%">
        <tr>
          <th>User Id</th> 
          <th>News Title</th>
          <th>Category</th>
          <th>News Details</th>
          <th>News Image</th>
          </tr>
           <tr>
            <?php
          if($result->num_rows !=0){
            while($row =$result->fetch_assoc()){?>
            <tr>
              <td> <?php echo $row["user_id"] ?> </td>
              <td> <?php echo $row["newstitle"]?> </td>
              <td> <?php echo $row["category"]?> </td>
              <td> <?php echo $row["newsdetails"]?> </td>
              <td> <?php echo $row["newsimage"]?> </td>
                </tr>
          <?php }
          }
          ?>
       </table>
       
    </center>
    
</body>
</html>