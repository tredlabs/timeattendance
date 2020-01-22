<?php
include('../Connection/Connections.php');	
//include('Parts/Session.php');

$today= date("Y-m-d");

if ($result = mysqli_query($conn, "SELECT COUNT(academic) AS countAcademic FROM anm_daylist WHERE academic='1' && dt BETWEEN '2017-01-01' AND '$today'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$countAcademic= $info['countAcademic'];
		}
	} 

if ($result = mysqli_query($conn, "SELECT COUNT(admin) AS countAdmin FROM anm_daylist WHERE admin='1' && dt BETWEEN '2017-01-01' AND '$today'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$countAdmin= $info['countAdmin'];
		}
	} 	
	
if ($result = mysqli_query($conn, "SELECT COUNT(ancil) AS countAncil FROM anm_daylist WHERE ancil='1' && dt BETWEEN '2017-01-01' AND '$today'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$countAncil= $info['countAncil'];
		}
	} 	
	
	echo $userEnrollDate;
	echo $userID;

/* echo $countAcademic;
echo "<br/>";
echo $countAdmin;	
echo "<br/>";
echo $countAncil;	 */

$query1="UPDATE user_types SET no_days='$countAcademic' WHERE id='1' || id='2' || id='3' || id='4'";
$result1= mysqli_real_query($conn,$query1);

$query2="UPDATE user_types SET no_days='$countAdmin' WHERE id='5' || id='6'";
$result2= mysqli_real_query($conn,$query2);

$query3="UPDATE user_types SET no_days='$countAncil' WHERE id='7' || id='8' || id='9'";
$result3= mysqli_real_query($conn,$query3);
?>