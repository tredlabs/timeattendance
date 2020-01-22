<?php
include('Parts/Session.php');
$approved= $_REQUEST['ns'];
$lid= $_REQUEST['lid'];
$user_id2= $_REQUEST['u'];

if($conn)
{
	if ($result = mysqli_query($conn, "SELECT COUNT(*) AS countleaveDays FROM requests WHERE request_id='$lid'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countleaveDays= $info['countleaveDays'];
		}
	}
}


if($approved==="1")
{
	$query="INSERT INTO attendance_vacation(request_id,no) VALUES('$lid','$countleaveDays')"; 
	$result=mysqli_real_query($conn,$query);
	if($result)
	{
		echo "";
	}
	$query1="UPDATE requests SET status='$approved' WHERE request_id='$lid'"; 
	$result2=mysqli_real_query($conn,$query1);
	if($result2)
	{
			header("Location: view-leave-request.php");
		}
		
	$details="Vacation days request approved";	
	$query="INSERT INTO notifications(details,request_id,sender,recipient) VALUES('$details','$lid','$userID','$user_id2')"; 
	$result=mysqli_real_query($conn,$query);
	if($result)
	{
		echo "";
	} 
	}

if($approved==="0")
{
	$query="DELETE FROM attendance_vacation WHERE request_id='$lid'"; 
	$result=mysqli_real_query($conn,$query);
	if($result)
	{
		echo "";
	}
	$query1="UPDATE requests SET status='$approved' WHERE request_id='$lid'"; 
	$result2=mysqli_real_query($conn,$query1);
	if($result2)
	{
		header("Location: view-leave-request.php");
		}
	}
	
	
	$query3="UPDATE notifications SET status='1' WHERE request_id='$lid'";
	$result3=mysqli_real_query($conn,$query3);
?>