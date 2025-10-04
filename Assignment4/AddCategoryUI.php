<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <style>
        .welcome{
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
        .radio-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 15px 0;
        }

        .radio-btn {
            position: relative;
            cursor: pointer;
        }

        .radio-btn input {
            display: none;
        }

        .radio-btn span {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid #1e4d6b;
            border-radius: 25px;
            color: #1e4d6b;
            font-size: 16px;
            transition: all 0.3s ease;
        }


        .radio-btn input:checked + span {
            background-color: #1e4d6b;
            color: #fff;
            box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
        }

   


    </style>
</head>
<body>
    <center>
        <h1 class="welcome">Please Add Category</h1>
        <form class="form" action="AddCategoryLogic.php" method="post">
        <input type="text" name="category_name" placeholder="category name">    
        <br>
        <input type="text" name="category_description" placeholder="category description">
        <br>
        <input type="date" name="category_date" required>
        <br>
        <div class="radio-group">
        <label class="radio-btn">
        <input type="radio" name="status" value="active" required>
        <span>Active</span>
        </label>
        <label class="radio-btn">
        <input type="radio" name="status" value="notactive" required>
        <span>Not Active</span>
        </label>
        </div>
        <br>
        <input type="submit" name="add_category" value="Add Category">
        </form>

    </center>
    
</body>
</html>