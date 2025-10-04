<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
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
        <form class="form" action="AddNewsLogic.php" method="post"> 
            <input type="number" name="user_id" placeholder="user_id">
            <br>
            <input type="text" name="news_title" placeholder="news title">
            <br>
            <input type="text" name="category" placeholder="category">
            <br>
            <input type="text" name="news_details" placeholder="news details">
            <br>
            <input type="text" name="news_image" placeholder="news image">
            <br>
            <input type="submit" name="add_news" value="Add_News">

        </form>
    </center>
    
</body>
</html>