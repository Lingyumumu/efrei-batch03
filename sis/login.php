<?php
    session_start();
    //step1: create a database connection
    $host = 'localhost';//127.0.0.1
    $user = 'root';
    $password = '';
    $database = 'efrei';
    $connection = mysqli_connect($host,$user,$password,$database);
    //test if connection succeeded
    if($connection === false){
        die('Connection failed' . mysqli_connect_error());
    }
    else{
        echo'Database conection established';
    }
    

    if(isset($_POST['btnLogin'])){
        //$username = $_POST['txtUName'];
        $email = $_POST['txtUName'];
        $password = $_POST['txtPassword'];
        $query = "SELECT * FROM tblstudents WHERE email = '$email' AND password = '$password'";
        //$query = "SELECT * FROM tblstudents WHERE Username = '$username' AND password = '$password'";
        $results = mysqli_query($connection,$query);
        $row = mysqli_fetch_assoc($results);
        $count = mysqli_num_rows($results);
        if($count == 1){
            echo '<br>User Exists in the database';
            //start a session
            $_SESSION['name'] = $row['first_name'] . ' ' . $row['last_name'];
            $_SESSION['id'] = $row['ID'];
            $_SESSION['email'] = $row['email'];

            //redorect the user 
            header("location: index.php");
        }else{
            echo '<br>User does not exist in the database';
        }
        /*if($username == 'admin' && $password == '123456'){
            $_SESSION['username'] = $username;
            header('location: index.php');
        }else{
            echo 'Login failed';
        }*/
    }
    mysqli_close($connection);
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
    <h1>Login</h1>
    <form action="" method="post">
        <input type="text" name="txtUName" placeholder="Username"><br>
        <input type="password" name="txtPassword" placeholder="Password"><br>
        <input type="submit" name="btnLogin" value="Login">
    </form>
    <br>
    <p>
        Click<a href="register.php"> here </a> if you do not have an account
    </p>
</body>
</html>

