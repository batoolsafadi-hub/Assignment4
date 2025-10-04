<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup and Login</title>
    <style>
        .welcome{
            color:#205781;
        }
         .buttons{
        display: flex;
        gap: 10px;
        justify-content: flex-end; 
        width: 100%;
        padding-right: 40px;
    }    
    .btn-signup {
      padding: 8px 20px;
      background-color: #fff;
      color: #205781;
      border: 2px solid #205781;
      border-radius: 30px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .btn-signup:hover {
      background-color: #205781;
      color: #ffffffff;
    }
    .btn-login {
      padding: 8px 20px;
      background-color: #205781;
      color: #fff;
      border: none;
      border-radius: 30px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-login:hover {
      background-color: #3a6685ff;
    }
    </style>
</head>
<body>
    <center>
        <h1 class="welcome">Welcom To Signup and Login Page</h1>
         <button class="btn-signup" onclick="location.href='SignupUI.php'">Sign up</button>
      <button class="btn-login" onclick="location.href='LoginUI.php'">Login</button><div class="buttons">
      
    </div>
    </center>
    
</body>
</html>