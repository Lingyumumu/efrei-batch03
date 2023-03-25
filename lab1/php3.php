<?php
    $age = 25;
    if ($age <= 5) {
        echo "toddler.";
    } elseif ($age <= 12) {
        echo "kid.";
    } elseif ($age <=19 ) {
        echo "teenager.";
    } elseif ($age<=34) {
        echo "young adult.";
    } else {
        echo "adult.";
    }