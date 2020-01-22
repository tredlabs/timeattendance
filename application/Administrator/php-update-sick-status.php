<?php
include('Parts/Session.php');
$approved= $_REQUEST['ns'];
$sid= $_REQUEST['sid'];
$user_id2= $_REQUEST['u'];

 if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM requests WHERE request_id='$sid'")) {
   while($info = mysqli_fetch_array( $result ))  {
$nStaffID= $info['staff_id'];
		}
	}
}







if($conn)
{
	if ($result = mysqli_query($conn, "SELECT SUM(value) AS countSickDays FROM requests WHERE request_id='$sid'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickDays= $info['countSickDays'];
		}
	}
}


if($approved==="1")
{
	$query="INSERT INTO attendance_sick(request_id,no) VALUES('$sid','$countSickDays')"; 
	$result=mysqli_real_query($conn,$query);
	if($result)
	{
		echo "";
	}
	$query1="UPDATE requests SET status='$approved' WHERE request_id='$sid'"; 
	$result2=mysqli_real_query($conn,$query1);
	if($result2)
	{
		header("Location: view-sick-days.php");
		}
		
	$details="Sick days request approved";	
	$query="INSERT INTO notifications(details,request_id,sender,recipient) VALUES('$details','$sid','$userID','$user_id2')"; 
	$result=mysqli_real_query($conn,$query);
	if($result)
	{
		echo "";
	} 
	}

if($approved==="0")
{
	$query="DELETE FROM attendance_sick WHERE request_id='$sid'"; 
	$result=mysqli_real_query($conn,$query);
	if($result)
	{
		echo "";
	}
	$query1="UPDATE requests SET status='$approved' WHERE request_id='$sid'"; 
	$result2=mysqli_real_query($conn,$query1);
	if($result2)
	{
		header("Location: view-sick-days.php");
		}
	}
	
	
	
	
	$query3="UPDATE notifications SET status='1' WHERE request_id='$sid'";
	$result3=mysqli_real_query($conn,$query3);
?>