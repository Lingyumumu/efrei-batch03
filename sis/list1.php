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

//step2: create a query
//SELECT, UPDATE, DELETE, INSERT - CRUD
$query = "SELECT * FROM tblstudents WHERE country = 'France'";
//step3: execute the query
$results = mysqli_query($connection,$query);
//display results
echo '<h2>Students Details</h2>';
echo '<table border=1 cellpadding="10" cellspacing ="0" >';//creer un tableau
echo '<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Country</th>
    </tr>';
while($row = mysqli_fetch_assoc($results)){
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
}
echo '</table>';

mysqli_close($connection); 