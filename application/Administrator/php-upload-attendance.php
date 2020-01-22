<?php
include('Parts/Session.php');
error_reporting(0);
$x=0;
$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");
mysql_select_db($db) or die ("Unable to select database!"); 
$file = file('uploads/test.txt');
$count = count($file);
if($count > 0)
{
    $milestone_query = "INSERT into attendance(user_id, date, time, activity, status) values";
    $i = 1;
    foreach($file as $row)
    {
	$milestone = explode('	',$row);
	//
	$uploadedUser= $milestone[0];
	$dateString = $milestone[1];
	$dateObject = new DateTime($dateString);
	$newDate= $dateObject->format('Y-m-d');
	$newTime= $dateObject->format('G:i');
	//
	$newTime1= $dateObject->format('Gi'); 
	$day_start=date_create($schoolDayStart);
	$day_start1=date_format($day_start,"Gi");
	$newStatus1= $day_start1;
	//
		
	$scanDate= date_create($newDate);
	$scanDate1= strtolower(date_format($scanDate, "D"));
		if ($result = mysqli_query($conn, "SELECT * FROM schedule_time WHERE staff_id='$uploadedUser' ORDER BY staff_id ASC LIMIT 1")) {
	while($info = mysqli_fetch_array( $result ))  { 
	$recordedDate= date_create($info["$scanDate1"]);
	$recordedTime=date_format($recordedDate,"Gi");

			if($newTime1>$recordedTime)
			{
				$status= "L";
			}
			else
			{
				$status= "E";
			}
	
			if($newTime1>"1430")
			{
			$activity= "O";
			}
			if($newTime1<"1430")
			{
			$activity="I";
			}
		}
	}

        $milestone_query .= "('$uploadedUser','$newDate','$newTime','$activity','$status')";
        $milestone_query .= $i < $count ? ',':'';
        $i++;
    }
    mysql_query($milestone_query); //or die(mysql_error());
}


$sql2= "UPDATE attendance SET status='-' WHERE activity='O'";
$result2= mysqli_real_query($conn,$sql2);
//unlink("uploads/test.txt");
?>