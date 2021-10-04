<?php
$con=mysqli_connect("localhost","root", "", "sk tech") or die(mysqli_error($con));
@$Email_id=$_POST['Email_id'];
@$Password=$_POST['Password'];
$user_registration_query="insert into login(Email_id, Password)values ('$Email_id','$Password')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
echo 'User successfully inserted';
?>