<?php
include('Parts/Session.php');
$newFirstName=$_POST['firstName'];
$newLastName=$_POST['lastName'];
$newUserName=$_POST['userName'];
$newuserPassword=base64_encode($_POST['userPassword']);
$cid= $_REQUEST['cid'];

echo $cid;

if($conn==true) 
	{
	$query="UPDATE users SET username='$newUserName',password='$newuserPassword' WHERE id='$cid'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		header("Location: account.php");
	}
} 
?>