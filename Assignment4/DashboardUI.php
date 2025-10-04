<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <style>
    boday{
            margin: 0;
            font-family:'Arial', sans-serif;
        }
   
    .navbar{
            background-color: #fff;
            padding: 100px 0;
            text-align: center;
            box-shadow: 0 3px 5px rgba(0,0,0,0.1);
        }
    .navbar ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      gap: 40px;
    }
    .navbar li a {
      text-decoration: none;
      color: #4F959D;
      font-size: 14px;
      font-weight: bold;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: color 0.3s ease;
    }
    .navbar li a:hover {
      color: #a88c6f;
    }
    .welcome{
      padding: 20px;
        color:#205781;
    }
    .news{
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
        <h1 class="welcome">Welcome To News Page</h1>
  </center>
    <div class="buttons">
      <button class="btn-signup" onclick="location.href='SignupUI.php'">Sign up</button>
      <button class="btn-login" onclick="location.href='LoginUI.php'">Login</button>
    </div>
         <nav class="navbar">
                <ul>
                    <li><a href="AddCategoryUI.php">Add category</a></li>
                    <li><a href="ShowCategoryUI.php">Show categories</a></li>
                    <li><a href="ShowAllNewsUI.php">View all news</a></li>
                    <li><a href="AddNewsUI.php">Add news</a></li>
                    <li><a href="ShowDeletedNewUI.php">View deleted news</a></li>
                </ul>
         </nav>
    </center>
    <center>
                 
    </center>
</body>
</html>