<?php
     echo '<h1>will this work?</h1>';
     echo 'Hellow world';
/*
     for($i=0; $i<10; $i++){
         echo $i . '<br>'; 
     }*/
     
     echo '<h1>Decision Structures</h1>';
     $username = 'admin';
     $password = 'user';

     if($username == 'admin' && $password == 'admin'){
         echo '<h2>Welcome Admin</h2>';
     }
        else{
            echo '<h2>Welcome Guest</h2>';
        }
?>