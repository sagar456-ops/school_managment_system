<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'neweraac_result');
$id = $_POST['ID'];
$password = $_POST['password'];
$reg_no = $_POST['reg_no'];

$query =mysqli_query($con,"select * from usertable where id = '$id' and password = '$password' and reg_no = '$reg_no'");

if (mysqli_num_rows($query) != 0){
session_start();
$_SESSION['ID'] = $id;
header('location:ramesh.php');
}
else
{
 header('location:index.php?error=invaliduid');
}

 ?>
