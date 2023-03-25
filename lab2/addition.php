<!DOCTYPE html>
<html>
    <head>
        <title>Lab 2 - Addition</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <h2>Addition</h2>

        <form action="#" method="get">
            First Number<input type="text" name="txtFirstNumber"><br>
            Second Number<input type="text" name="txtSecondNumber"><br>
            <input type="submit" value="Add" name="btnAdd">
            <input type="reset" value="Clear">
        </form>

        <?php
        if (isset($_GET['btnAdd']))
        {
            $firstNumber = $_GET['txtFirstNumber'];
            $secondNumber = $_GET['txtSecondNumber'];
            $sum = $firstNumber + $secondNumber;
            echo "Sum: $firstNumber + $secondNumber = $sum";
        }
        else {
            echo 'user did not click the button';
        }
        ?>
    </body>
</html>