<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <title>Document</title>
</head>
<body>
    <form action="login-submit.php"  method="post" enctype="multipart/form-data">
        <h1>LOGIN</h1>
        <div>
        <label for="username">Name</label>
        <input type="text" id="username" name="username">
        </div>
        <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        </div>
        <button type="submit">Log In</button>
        </form>

        <style>
            button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s;
}
        </style>
<?php

session_start();
if(isset($_SESSION['error'])){
    echo "<p style='color:red'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}


?>
</body>
</html>

