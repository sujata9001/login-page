<?php
session_start();
//create connection
$conn=mysqli_connect('localhost','root','pass1234','collection');
//check connection
if($conn){
	echo "connection successfully";
}
else
{
	echo "connection failed";
}
$user = $_POST['username'];
$pass = $_POST['password'];
$q = "select * from collectdata where username='$user' && password='$pass'";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);
if($num>0){
	echo "duplicate data";
}
else
{
	$qy = "insert into collectdata(username,password) values('$user','$pass')";
mysqli_query($conn,$qy);
}
mysqli_close($conn);

?>