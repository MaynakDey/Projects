<?php
    $servername="localhost";
    $user="root";
    $password="";
    $database="mydb2";
    

    $con=new mysqli($servername,$user,$password,$database);
    
    if(!$con){
        die("Could not connect".$mysqli_error($con));
    }

// mysqli_close($con);
?>