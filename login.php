<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    require_once 'header.php'
    ?>

<div class="content">
<a href="index.php">
    <button class="UserChatBtn">User</button>
  </a>
    <button class="AdminChatBtn">Admin</button>
    
</div>
        <?php
        require_once 'footer.php'
        ?>
        <style>
        .UserChatBtn {
        background-color: #BFBFBF;
        color: black;
        padding: 16px 20px;
        border: none;
        font-weight: 500;
        font-size: 18px;
        cursor: pointer;
        position: left;
        width: 280px;
        border-radius: 22px;
    }
    .AdminChatBtn {
        background-color: #BFBFBF;
        color: black;
        padding: 16px 20px;
        border: none;
        font-weight: 500;
        font-size: 18px;
        cursor: pointer;
        position: right;
        width: 280px;
        border-radius: 22px;
    }
        </style>
</body>
</html>
