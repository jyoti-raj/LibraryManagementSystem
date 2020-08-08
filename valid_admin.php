<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'membership');
$q="select email,password from admin_view where email='$email' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['email']=$email;
    header('location:http://127.0.0.1/library/admin_page.php');

}
else
{
	echo "<script type = 'text/javascript'>window.alert('please enter correct email, password');</script>";
   header('location:http://127.0.0.1/library/login.html');
   
}
?>
