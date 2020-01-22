<?php 
include('Parts/Session.php');

  
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

$requestType=2;





 
if($conn==true)
{
		foreach($_POST['casualDate'] as $key => $value) {
$casualDate = $_POST['casualDate'][$key];
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
			$query="INSERT INTO requests (staff_id,request_id,request_type,date,value) VALUES ('$userID','$newRID','$requestType','$casualDate','$value')"; 
			
			$result=mysqli_real_query($conn,$query);
			
			if($result)
			{
				echo "";
				header("location:view-casual-request.php");
			}
			else
		{
			echo $conn->error;
		}
		}
		
	}	
}





			$details="is requesting casual days";
			$recipient="2";
			$query1="INSERT INTO notifications(details,request_id,sender,recipient) VALUES('$details','$newRID','$userID','$recipient')";
			$result2=mysqli_real_query($conn,$query1); 

?>