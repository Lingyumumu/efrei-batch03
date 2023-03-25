

<!DOCTYPE html>
<html>  
<head>
    <title>Lab 2 - Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>Contact page</h2>

    <form action="#" method="get">
        Name<input type="text" name="txtName"><br>
        Email Address<input type="text" name="txtEmail"><br>
        Password<input type="password" name="txtPassword"><br>
        Message <textarea name="txtMessage" rows="5" cols="30"></textarea><br>
        <input type="submit" value="Send Message" name="btnSend">
        <input type="reset" value="Clear">
    </form>
    <hr>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){//if($_SERVER['REQUEST_METHOD'] == 'POST' alors l'utilisateur n'a pas acces a ces informations
        if(isset($_GET['btnSend'])){
        $name = $_GET['txtName'];
        $email = $_GET['txtEmail'];
        $message = $_GET['txtMessage'];
        $password = $_GET['txtPassword'];

        if ($name == ""){
            echo "Fill up the name<br>";
        }
        if ($email == ""){
            echo "Fill up the email<br>";
        }
        if ($message == ""){
            echo "Fill up the message<br>";
        }
        if ($password == ""){
            echo "Fill up the password<br>";
        }

        if (empty($name) || empty($email) || empty($message) || empty($password)){
            echo "Fill up all the fields<br>";
        }
        
        echo "Contact Information<br>";
        echo 'Name:' . $name . '<br>';
        echo 'Email:'. $email . '<br>';
        echo 'Password:' . $password . '<br>';
        echo 'Message:' . $message . '<br>';
        }
    
    else{
        echo 'user did not click the button';
    }
}
    else{
        echo 'user is not allowed to access this information';
    }
    ?>
</body>

</html>