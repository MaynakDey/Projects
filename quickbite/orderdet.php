<?php
include 'database2.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $items=$_POST['items'];
    $quantity=$_POST['quantity'];
    $comments=$_POST['comments'];
    $chk2="";
    foreach($comments as $chk3){
        $chk2.=$chk3.",";
    }
}

    $sql2="INSERT INTO orderdet(name,email,address,phone,items,quantity,comments) VALUES('$name','$email','$address','$phone','$items','$quantity','$comments')";
    if(mysqli_query($con,$sql2)){
        echo "<script>alert('Your Request Received')</script>";
        echo "<script>window.open('index.html','_self')</script>";
    
    }
    else{
        echo "error:".mysqli_error($con);
    }
?>

