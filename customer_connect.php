<?php

$servername="localhost";
$username="root";
$password="";
$database='billing_database';

$con=new mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("Error accessing record:".mysqli_error($con));
}


    $name=$_POST['firstname'];
    $mail=$_POST['email'];
    $gender=$_POST['gender'];
    $contact=$_POST['contact'];

   $sql="insert into customer(firstname,gender,contact,email) values('$name','$gender','$contact','$email')";


   if(mysqli_query($con,$sql)){
    echo "<script>alert('new record inserted')</script>";
   }else{
    echo "error :".mysqli_error($con);

   }
   mysqli_close($con);


?>