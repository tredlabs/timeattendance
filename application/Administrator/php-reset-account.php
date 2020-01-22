<?php
include('Parts/Session.php');
$cid= base64_decode($_REQUEST['cid']);
$rPassword= base64_encode("123");

if($conn==true) 
	{
	$query="UPDATE users SET password='$rPassword' WHERE id='$cid'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		header("Location: users.php");
	}
} 
?>