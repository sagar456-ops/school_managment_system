<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'neweraac_result');
$id = $_POST['ID'];
$password = $_POST['password'];
$reg_no = $_POST['reg_no'];

$query = mysqli_query($con,"SELECT * FROM usertable WHERE id='$id' or reg_no='$reg_no' ");
if (mysqli_num_rows($query) != 0)
{
    header('location:registerpage.php?error=already_exist');
}
else{
$reg = " insert into usertable(id,password,reg_no) values ('$id','$password','$reg_no')";
mysqli_query($con,$reg);
header('location:index.php?error=sucess');
}
?>
