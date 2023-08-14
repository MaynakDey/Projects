<?php
include 'database.php';
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $chk="";
    foreach($message as $chk1){
        $chk.=$chk1.",";
    }
}

// SQL Starting
    $sql="INSERT INTO contactus(name,email,phone,message) VALUES ('$name','$email','$phone','$message')";
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Your Request Received')</script>";
        echo "<script>window.open('index.html','_self')</script>";
    
    }
    else{
        echo "error:".mysqli_error($con);
    }

    // $mysqli_close($con);
?> 