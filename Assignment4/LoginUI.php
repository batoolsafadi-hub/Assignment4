<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .welcom{
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
        <h1 class="welcom">Welcom To Login Page</h1>
        <form class="form" action="LoginLogic.php" method="post">
            <input type="email" name="email" placeholder="email">
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <input type="submit" value="login" name="login">




        </form>
    </center>
    
</body>
</html>