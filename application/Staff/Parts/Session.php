<?php
session_start();
if(!isset($_SESSION['teacheruser']) || (trim($_SESSION['teacheruser']) == '')) {
		header("location:../../index.php");
		exit();
	}
	$Username=$_SESSION['Username'];
include('../../Connection/Connections.php');

if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM users WHERE username='$Username'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$userFirstname= $info['firstName'];
$userLastname= $info['lastName'];
$userID= $info['id'];
$userName= $info['username'];
$userPassword= $info['password'];
$userType= $info['type'];
//$userInstitution= $info['institution'];
		}
	}
}



	if ($result = mysqli_query($conn, "SELECT * FROM user_types WHERE id='$userType'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$userMode= $info['mode'];
$userCasual= $info['casual'];
$userVacation= $info['vacation'];
$userSick= $info['sick'];
$userSpecial= $info['special'];
		}
	}
	
	
	
if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM school_year WHERE id='1'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$schoolYearStart= $info['start'];
$schoolYearEnd= $info['end'];
		}
	}
}

if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM school_day WHERE id='1'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$schoolDayStart= $info['start'];
$schoolDayEnd= $info['end'];
		}
	}
}


if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM system WHERE id='1'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$systemName= $info['systemName'];
$systemVersion= "v".$info['systemVersion'];
$systemdeveloper= $info['developer'];
$developerURL= $info['developerURL'];
$pageTitle= $systemName ." ". $systemVersion;
$pageFooter= date("Y"). " © " . $systemName ." ". $systemVersion. ". Powered by ". "<a href='$developerURL' target='_BLANK'>".$systemdeveloper."</a>";
		}
	}
}

date_default_timezone_set("Jamaica");
?>