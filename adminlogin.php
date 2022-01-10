<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'neweraac_result');
$id = $_POST['ID'];
$password = $_POST['password'];

$query =mysqli_query($con,"select * from admintable where id = '$id' and password = '$password'");

if (mysqli_num_rows($query) != 0){
	$_SESSION['ID'] = $id;
header('location:admin_panel.php');
}
else{
	header('location:admin.php?error=invalidadminid');
}
 ?>
