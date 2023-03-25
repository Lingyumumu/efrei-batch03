<?php
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
?>

<!Doctype html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<form action="#" method="get">

        <select id="contrainte" name="contrainte">
            <option value="ID">ID</option>
            <option value="first_name">First Name</option>
            <option value="last_name">Last Name</option>
            <option value="country">Country</option>
            <option value="email">Email</option>
            <option value="password">Password</option>
        </select>
        <input type="text" name="text" placeholder="text">
        <input type="submit" value="Send Message" name="btnSend">
        <input type="reset" value="Clear">
    </form>

    <h2>Students Details</h2>
    <?php

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['btnSend'])){
            $contrainte = $_GET['contrainte'];
            $text = $_GET['text'];
            /*if ($contrainte == "ID"){
                $query = "SELECT * FROM tblstudents WHERE ID = $text";
            }
            if ($contrainte == "first_name"){
                $query = "SELECT * FROM tblstudents WHERE first_name LIKE '%$text%'";
            }
            if ($contrainte == "country"){
                $query = "SELECT * FROM tblstudents WHERE country LIKE '%$text%'";
            }*/
            if ($contrainte =="first_name" || $contrainte =="last_name" || $contrainte =="email" || $contrainte =="password"){
                $query = "SELECT * FROM tblstudents WHERE $contrainte LIKE '%$text%'";
            }

            if ($contrainte =="country" || $contrainte =="ID"){
                $query = "SELECT * FROM tblstudents WHERE $contrainte = '$text'";//si je rajoute pas '' sur $text ca marche pas car c'est un int et pas un string et France c'est un string
            }
        }
        else{
            $query = "SELECT * FROM tblstudents";
        }}
            

    //step2: create a query
    //SELECT, UPDATE, DELETE, INSERT - CRUD
    
    //$query = "SELECT * FROM tblstudents";
    //$query = "SELECT * FROM tblstudents WHERE country = 'France'";
    //$query = "SELECT * FROM tblstudents WHERE ID = 642";
    //$query = "SELECT * FROM tblstudents WHERE first_name LIKE '%an%'";
    //$query = "INSERT INTO tblstudents (first_name,last_name,email,password,country) VALUES ('Remy','Dimachkie','remy@gmail.com','123456','France')";

    //step3: execute the query
    $results = mysqli_query($connection,$query);
    ?>
    <table border="1" cellspacing='10'>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Country</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($results)){
            /*mysqli_fectch_assoc $row['ID'] or $row[0]
            mysqli_fectch_array = $row[ID]
            mysqli_fectch_row = $row[0]
            tblstudents{ID,first_name,last_name,email,password,country}
            */
            echo '<tr>';
            echo '<td>'. $row['ID'] . '</td>';
            echo '<td>'. $row['first_name'] . '</td>';
            echo '<td>'. $row['last_name'] . '</td>';
            echo '<td>'. $row['email'] . '</td>';
            echo '<td>'. $row['password'] . '</td>';
            echo '<td>'. $row['country'] . '</td>';
            echo '</tr>';
        }?>
    </table>
        </body>
        </html>