<?php
include "connectionOnDatabase.php";

$sql="SELECT * FROM category ";
$result=$connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Category</title>
    <style>
        .showCategory{
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
       <h1 class="showCategory">Categories List</h1>
       <table border="1px" width="100%">
        <tr>
          <th>Category Name</th>
          <th>Category Description</th>
          <th>Category Status</th>
          <th>Category Date</th>
          </tr>
           <?php
           if($result->num_rows !=0){
            while($row =$result->fetch_assoc()){?>
            <tr>
              <td>
                <?php echo $row["category_name"] ?>
              </td>
              <td>
                <?php echo $row["category_description"] ?>
              </td>
              <td>
                <?php echo $row["date_added"] ?> 
              </td>
              <td>
                 <?php 
              if ($row["category_status"] == 'active') {
                      echo "active";
                 } else {
                      echo "not active";
                 }
  ?>
              </td>
            </tr>

            <?php }
           }



           ?>
       </table>
    </center>
      

    
</body>
</html>