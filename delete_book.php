<?php 
$conn = mysqli_connect('localhost','root',"") or die("connection fail");
if(!mysqli_select_db($conn,'membership')){
echo 'db not selected';}
else{
echo 'db selected';}



?>