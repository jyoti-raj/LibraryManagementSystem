<?php
session_start();
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'membership');
$q="select * from login where Email='$Email' && Password='$Password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['Email']=$Email;
    header('location:http://localhost:8080/login/b.html');

}
else
{
   header('location:http://localhost:8080/login/login.html');
   
}
?>
