<!Doctolib html>
<html>
<head>
<title>PHP1</title>
</head>
<body>
<h2>Variable</h2>
<?php
$firstname="John";
$lastname="Doe";
$age=35;
$price=19.95;
$islogin = false;
$fruits = ["apple", "banana", "orange"];
$grades = [ 20,15,17,12,18];
echo $firstname + $lastname + $age + $price + $islogin + $fruits + $grades;
echo "you are" . $age . "years old now";
// const PI = 3.14;
define("PI", 3.14);
define('AC', 'Aera of the Circle');
$radius = 5;
//$area1 = 0;//scenario 1
$area2 = PI * $radius * $radius;//scenario 2
echo AC . $area2;
//echo AC . PI * $radius * $radius;//scenario2


?>
</body>
</html>
