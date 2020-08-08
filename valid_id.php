<?php
session_start();
$Email=$_POST['Email'];
$Mobile_No=$_POST['Mobile_No'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'membership');
$q="select Email,Mobile_No from details where  Email = '$Email' && Mobile_No = '$Mobile_No'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['Email']=$Email;
	$_SESSION['Mobile_No'] = $Mobile_No;
    header('location:http://127.0.0.1/library/res.html');

}
else
{
	//echo "<script type = 'text/javascript'>window.alert('please enter correct email, password');</script>";
   header('location:http://127.0.0.1/library/for.html');
   
}
?>
