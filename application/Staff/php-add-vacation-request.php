<?php 
include('Parts/Session.php');

 

	if ($result = mysqli_query($conn, "SELECT MAX(request_id) AS maxRequestID FROM requests")) {
   while($info = mysqli_fetch_array( $result ))  { 
$maxRequestID= $info['maxRequestID'];
		}
	}



 if($maxRequestID==NULL)
{
	$newRID= 1;
}
else
{
	$newRID= $maxRequestID+1;
}


echo $maxRequestID;


$requestType=3;






$from= $_POST['from'];
$to= $_POST['to'];

$begin = new DateTime($from);
$end = new DateTime($to);
$end = $end->modify( '+1 day' ); 
$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);
foreach($daterange as $date){
$fullDates= $date->format("Y-m-d");
$allDates=date_create($fullDates);
$allDays1=date_format($allDates, "N");

	

	$query="INSERT INTO requests (staff_id,request_id,request_type,date,days,value) VALUES ('$userID','$newRID','$requestType','$fullDates','$allDays1','1')"; 
	$query1="DELETE FROM requests WHERE days='6' || days='7'"; 
	$result=mysqli_real_query($conn,$query);
	$result1=mysqli_real_query($conn,$query1);
}	
	
	if($result)
	{
		header("Location: view-leave-request.php");
	}
	
	
	
			$details="is requesting vacation days";
			$recipient="2";
			$query1="INSERT INTO notifications(details,request_id,sender,recipient) VALUES('$details','$newRID','$userID','$recipient')";
			$result2=mysqli_real_query($conn,$query1);

?>