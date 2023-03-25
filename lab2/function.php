<?php
    function Hello(){
        echo"Hello World!<br>";
    }

    function Bye(){
        echo"Thank you for joining this session.<br>";
    }

    function greeting($name){
        echo"Good afternoon " . $name . "<br>";
    }

    function add($num1, $num2){
        $sum = $num1 + $num2;
        echo "sum = " . $sum . "<br>";
    }

    function highvalue($x,$y,$z){
        if($x > $y && $x > $z){
            echo "The highest value is " . $x . "<br>";
        }
        else if($y > $x && $y > $z){
            echo "The highest value is " . $y . "<br>";
        }
        else if($z > $x && $z > $y){
            echo "The highest value is " . $z . "<br>";
        }
        else{
            echo "There is no highest value.<br>";
        }
    }

    function add2($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    echo max(10, 20, 30,50,900,2000) . "<br>";//function par defaut sur web

    highvalue(10, 20, 30);
    add(5, 10);
    greeting("Marc");
    Hello();
    Hello();
    Hello();
    Bye();


    //show the value sum
    echo add2(5, 10) . "<br>";
 