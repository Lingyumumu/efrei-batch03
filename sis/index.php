<?php
     session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    if (isset($_SESSION['name']) == null) {
        echo "Welcome Guest";
        echo '<br><br><a href="register.php">Register</a>' . ' | ';
        echo '<a href="login.php">Login</a>';
        
        
    } else {
        echo "Welcome back, " . $_SESSION['name'];
        echo '<br><a href="logout.php">Logout</a>';
        
    }

    ?>
    
    <br>
    <h1>This is your main page</h1>
    <br>
    
</body>
