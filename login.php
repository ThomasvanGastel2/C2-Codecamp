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

<div class="contentlogin">
    <div>
    <img src="img/lock (2).png" alt="Lock img">
    </div>
    <div class="loginmain">
    <div class="loginbtn">
        <a href="index.php">
        <button class="UserChatBtn">User</button>
        </a>
    </div>
        <div class="loginbtn2">
        <a href="admin.php">
        <button class="AdminChatBtn">Admin</button>
        </a>
    </div>
    </div>

    
</div>
        <?php
        require_once 'footer.php'
        ?>
</body>
</html>
