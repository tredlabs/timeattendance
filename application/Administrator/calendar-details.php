var defaultEvents =  [
<?php
$staffID=$_REQUEST['id'];
$conn=mysqli_connect('localhost','root','','comptech_timeattendance_sahs');

	
	if ($result = mysqli_query($conn, "SELECT *

	FROM attendance 
WHERE attendance.user_id='$staffID'")) {

   while($info = mysqli_fetch_array( $result ))  { 

$attendanceActivity= $info['activity'];

$attendanceStatus=$info['status'];
$attendancetime=$info['time'];

$attendanceNote=$info['note'];

$attendanceDate1= $info['date'];

$attendanceDate= $info['date']." ".$info['time'];






//echo"$start1 <br>";

if($attendanceActivity==="I")

{

$start1=strtotime($attendanceDate) * 1000;
	$activity="Clock in";
$start2=$start1+ 1	*3600*1000;
	

}
	else{
		
		$start1=strtotime($attendanceDate) * 1000;
	
$start2=$start1+ 1	*3600*1000;
		if($attendancetime==""){
		$start2=0;	
		}
		$activity="Clock out";
	$background="bg-warning";	
	}




if($attendanceActivity==="H")

{

	$activity="";

}







if($attendanceStatus==="E")

	{

		$background="bg-primary";

	}

	if($attendanceStatus==="L")

	{

		$background="bg-danger";

	}



	







echo"

{

title: '$activity ',

start: new Date($start2),

className: '$background'

},";

	}

}

?>

];