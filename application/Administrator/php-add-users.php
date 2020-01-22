<?php
include("Parts/Session.php");
$uPassword=base64_encode("123");
$uType="teacher";

$uFirstName=$_POST['firstName'];
$uLastName=$_POST['lastName'];
$uUserName=$uFirstName.".".$uLastName;
$moreUsers=$_POST['moreUsers'];
$enroll_date= date("Y-m-d");

$department=$_POST['department'];
$staffType=$_POST['staffType'];

$scheduleSundayDate=$_POST['scheduleSundayDate'];
$scheduleMondayDate=$_POST['scheduleMondayDate'];
$scheduleTuesdayDate=$_POST['scheduleTuesdayDate'];
$scheduleWednesdayDate=$_POST['scheduleWednesdayDate'];
$scheduleThursdayDate=$_POST['scheduleThursdayDate'];
$scheduleFridayDate=$_POST['scheduleFridayDate'];
$scheduleSaturdayDate=$_POST['scheduleSaturdayDate'];

$scheduleSundayTime=$_POST['scheduleSundayTime'];
$scheduleMondayTime=$_POST['scheduleMondayTime'];
$scheduleTuesdayTime=$_POST['scheduleTuesdayTime'];
$scheduleWednesdayTime=$_POST['scheduleWednesdayTime'];
$scheduleThursdayTime=$_POST['scheduleThursdayTime'];
$scheduleFridayTime=$_POST['scheduleFridayTime'];
$scheduleSaturdayTime=$_POST['scheduleSaturdayTime'];

		$query="INSERT INTO users(firstName,lastName,username,password,type) VALUES ('$uFirstName','$uLastName','$uUserName','$uPassword','$staffType')"; 
		
		$result=mysqli_real_query($conn,$query);
		
		if($result)
		{
			echo "";
		}
		else
		{
			echo $conn->error;
		}
	

		if ($result = mysqli_query($conn, "SELECT * FROM users WHERE username='$uUserName'")) {
		while($info = mysqli_fetch_array( $result ))  {
		$uUserID= $info['id'];
			}
		}
		
$today= date("Y-m-d");

if ($result = mysqli_query($conn, "SELECT * FROM school_year WHERE id='2'")) {
while($info = mysqli_fetch_array( $result ))  { 
$semesterStart= $info['start'];
	}
} 

if ($result = mysqli_query($conn, "SELECT COUNT(dt) AS countCurrentDays FROM anm_daylist WHERE dt BETWEEN '$semesterStart' AND '$today'")) {
while($info = mysqli_fetch_array( $result ))  { 
$daysPassed= $info['countCurrentDays'];
	}
}

		$query="INSERT INTO attendance_staff(staff_id,enroll_date,passed,user_type,department) VALUES ('$uUserID','$enroll_date','$daysPassed','$staffType','$department')"; 
		
		$result=mysqli_real_query($conn,$query);
		
		if($result)
		{
			echo "";
		}
		else
		{
			echo $conn->error;
		}
		
		$query1="INSERT INTO schedule_date(staff_id,sun,mon,tue,wed,thu,fri,sat) VALUES ('$uUserID','$scheduleSundayDate','$scheduleMondayDate','$scheduleTuesdayDate','$scheduleWednesdayDate','$scheduleThursdayDate','$scheduleFridayDate','$scheduleSaturdayDate')"; 
		
		$result=mysqli_real_query($conn,$query1);
		
		if($result)
		{
			echo "";
		}
		else
		{
			echo $conn->error;
		}
	
	
	$query1="INSERT INTO schedule_time(staff_id,sun,mon,tue,wed,thu,fri,sat) VALUES ('$uUserID','$scheduleSundayTime','$scheduleMondayTime','$scheduleTuesdayTime','$scheduleWednesdayTime','$scheduleThursdayTime','$scheduleFridayTime','$scheduleSaturdayTime')"; 
		
		$result=mysqli_real_query($conn,$query1);
		
		if($result)
		{
			echo "";
		}
		else
		{
			echo $conn->error;
		}

	if($moreUsers==="1")
	{
		header("Location: add-users.php");
	}
	else
	{
		header("Location: users.php");
	}  
?>