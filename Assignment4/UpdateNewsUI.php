<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update News</title>
    <style>
         .news{
            color:#205781;
        }
        .form{
            background-color: #fff;
            padding: 30px;
            border-radius: 20px;
        }
        .form input{
            border: 2px solid #205781; 
            border-radius: 30px;
            color:#205781;
            padding: 10px;
            margin-bottom: 15px;
            width: 30%;
        }
        .form input[type="submit"] {
            background-color: #205781;
            color:#fff;
            font: 1em sans-serif;
        }
    </style>
</head>
<body>
    <center>
        <h1 class="news">Add news</h1>
        <form class="form" action="UpdateNewsLogic.php" method="post"> 
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
            <input type="number" name="new_user_id" placeholder="new_user_id" value="<?php echo $_GET["id"] ?>">
            <br>
            <input type="text" name="new_news_title" placeholder="new_news_title" value="<?php echo $_GET["newstitle"] ?>">
            <br>
            <input type="text" name="new_category" placeholder="new_category" value="<?php echo $_GET["category"] ?>">
            <br>
            <input type="text" name="new_news_details" placeholder="new_news_details" value="<?php echo $_GET["newsdetails"] ?>">
            <br>
            <input type="text" name="new_news_image" placeholder="new_news_image" value="<?php echo $_GET["newsimage"] ?>">
            <br>
            <input type="submit" name="Update_news" value="Update_news">

        </form>
    </center>
    
</body>
</html>