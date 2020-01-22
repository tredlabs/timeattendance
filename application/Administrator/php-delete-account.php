<?php
include('Parts/Session.php');
$cid= $_REQUEST['cid'];

if($conn==true) 
	{
	$query="DELETE FROM users WHERE id='$cid'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		echo "";
	}
	
	
	
	$query="DELETE FROM attendance WHERE user_id='$cid'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		echo "";
	}
	
	
	
	$query="DELETE FROM attendance_sick WHERE staff_id='$cid'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		echo "";
	}
	
	
	
	$query="DELETE FROM attendance_staff WHERE staff_id='$cid'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		echo "";
	}
	
	
	
	$query="DELETE FROM leave_request WHERE applicant_id='$cid'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		header("Location: users.php");
	}
	
	
	
	
} 
?>