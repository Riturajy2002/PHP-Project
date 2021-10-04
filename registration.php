<?php
$con=mysqli_connect("localhost","root", "", "sk tech") or die(mysqli_error($con));
@$Name=$_POST['Name'];
@$Email=$_POST['Email'];
@$Mobile=$_POST['Mobile'];
@$Password=$_POST['Password'];
@$Hobbies=$_POST['Hobbies'];
@$Gender=$_POST['Gender'];

$user_registration_query="insert into registration(Name,Email,Mobile, Password,Hobbies,Gender) values ('$Name','$Email','$Mobile','$Password','$Hobbies','$Gender')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
echo 'User successfully inserted';
?>
