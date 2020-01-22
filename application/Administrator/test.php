<?php 
include("Parts/Session.php");


$start= "2018-01-01";
$today= date("Y-m-d");

if ($result = mysqli_query($conn, "SELECT COUNT(*) AS daysPassed FROM activeDays WHERE date BETWEEN '$start' AND '$today' && status='1'")) {
while($info = mysqli_fetch_array( $result ))  { 
$daysPassed= $info['daysPassed'];


echo $daysPassed;
	}
}

?>