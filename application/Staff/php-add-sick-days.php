<?php 
include('Parts/Session.php');
error_reporting(0);
  
if($conn)
{
	if ($result = mysqli_query($conn, "SELECT MAX(request_id) AS maxRequestID FROM requests")) {
   while($info = mysqli_fetch_array( $result ))  { 
$maxRequestID= $info['maxRequestID'];
		}
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

$requestType=1;





 
if($conn==true)
{
		foreach($_POST['sickDate'] as $key => $value) {
$sickDate = $_POST['sickDate'][$key];
$halfDay = $_POST['halfDay'][$key];


if($halfDay==="h")
{
	$value= 0.5;
}
else
{
	$value=1;
}


			 if($conn==true) 
			{
			$query="INSERT INTO requests (staff_id,request_id,request_type,date,value) VALUES ('$userID','$newRID','$requestType','$sickDate','$value')"; 
			
			$result=mysqli_real_query($conn,$query);
			
			if($result)
			{
				echo "";
			}
			else
		{
			echo $conn->error;
		}
		}
		
	}	
} 







$ext=pathinfo($_FILES['sickLeave']['name'],PATHINFO_EXTENSION);
$sickLeave = $userFirstname.$userLastname.'_sickleave_'.$newRID.'.'.$ext;
$SL = file_get_contents($_FILES['sickLeave']['tmp_name']);
file_put_contents("sick_leave/".$sickLeave, $SL);





$sickReason = $_POST['reason'];

			
			$query="INSERT INTO sick_reason (sick_id,reason,sick_leave) VALUES ('$newRID','$sickReason','$sickLeave')"; 
			
			$result=mysqli_real_query($conn,$query);
			
			if($result)
			{
				header("Location:view-sick-days.php");
			}
			
			
			
			
			$details="is requesting sick days";
			$recipient="2";
			$query1="INSERT INTO notifications(details,request_id,sender,recipient) VALUES('$details','$newRID','$userID','$recipient')";
			$result2=mysqli_real_query($conn,$query1);

			
?>