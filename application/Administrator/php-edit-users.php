<?php
include('Parts/Session.php');
$newFirstName=$_POST['firstName'];
$newLastName=$_POST['lastName'];
$newUserName=$_POST['userName'];
$cid= $_REQUEST['cid'];

echo $cid;

if($conn==true) 
	{
	$query="UPDATE users SET firstName='$newFirstName', lastName='$newLastName', username='$newUserName' WHERE id='$cid'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		header("Location: users.php");
	}
} 
?>