<?php
include "zklibrary.php";
$zk = new ZKLibrary();
date_default_timezone_set("Jamaica");
	$today = date("Y-m-d");
$i=0;

$conn=mysqli_connect('localhost','root','','comptech_timeattendance_sahs');

if($zk->connect()){
	echo "connected <br>"; 
	$users = $zk->getUser();
//print_r($users);
$attendances=$zk->getAttendance();
	
	$no = 0;
foreach($attendances as $key=>$attendance)
{
	
  $no++;
  $dateOriginal= $attendance[3];
  $date= date_create($attendance[3]);
  $dateLong= date_format($date, "F d, Y");
  $date1= date_format($date, "Y-m-d");
  $date2= strtolower(date_format($date, "D"));
  $clockedInTime= date_format($date, "Gi");
  $clockedInTimeLong= date_format($date, "g:i a");
  $clockedInTimeLong1= date_format($date, "g:i");
  $usersID= $attendance[1];


//if($date1==$today){

//echo "Date: $date1 Day: ". $date2." ".$clockedInTimeLong."".$usersID."".$users[$usersID][1]."<br/>";







  	if ($result = mysqli_query($conn, "SELECT $date2 FROM schedule_time WHERE staff_id='$usersID'")) {
	while($info = mysqli_fetch_array( $result ))  { 
	$checkTime= $info["$date2"];
	$remove= array(":");
	$scheduledTime= str_replace($remove,'',$checkTime);
	$clockedIn= str_replace($remove,'',$clockedInTimeLong1);

			if($clockedIn>$scheduledTime)
			{
				$clockInStatus= "L";
				
				// echo "Time you must clock in : $scheduledTime <br>";
			//	echo "Time you clockin: $clockedIn  <br>";
			}
			else
			{
				$clockInStatus= "E";
			}
			
			
			
		}
	}
	

	
	
	
	
			$sql ="SELECT * FROM attendance WHERE user_id ='$usersID' and date='$date1'";
			
				
					
$result = $conn->query($sql);
			
		if ($result->num_rows > 0)
		{
			
		while($row = $result->fetch_assoc())
			{
			
				
				$activity=$row["activity"];
				$note=$row["note"];
					$time=$row["time"];
	//echo"$intime";
				if($note=="new" ){
	//echo"$note";
	$sql = "UPDATE attendance set time='$clockedInTimeLong'
					   WHERE user_id='$usersID' and date='$date1' and activity='O'";		
					   if($conn->query($sql) === TRUE){

//echo "Status: Clockout: ". $date1." ".$clockedInTimeLong." User ID: ".$usersID.""."<br/>";
		}
					   
					   if($activity=="I"){
					   	
						
				$newtime=array();
						   $newtime[$i]="$clockedInTimeLong";
						   
			
				  
						   if($i==0){
							$sql = "UPDATE attendance set time='".$newtime[0]."'
					   WHERE user_id='$usersID' and date='$date1' and activity='I'";		
					   if($conn->query($sql) === TRUE){
//echo"update";

		}
					   else{
					//   	echo"no update";
					   }		
						   	
							
						   }
				
					   }
					   
				$update="yes";   
					   
			 	
				   
			
		}
			
			
			
			else{
				
				
			}
			$i++;
			}	
			
			

			
		
	
		}
		
		
		else{
			
	 $sql= "INSERT INTO attendance(user_id,date,time,activity,status) VALUES('$usersID','$date1','$clockedInTimeLong','I','$clockInStatus')";
  
						
		if($conn->query($sql) === TRUE){

echo "Status: Clockin: ". $date1." ".$clockedInTimeLong." User ID: ".$usersID.""."<br/>";
		}
		else
					{
						echo "Error while creating receival ".$conn->error;
					}
					
		
	//$conn=mysqli_connect('localhost','root','','comptech_timeattendance_sahs');
		 $sql= "INSERT INTO attendance(user_id,date,time,activity,note) VALUES('$usersID','$date1','','O','new')";
  		   if($conn->query($sql) === TRUE){

//echo"Clock out punch";
	$update="yes";
			
		}			
					
					
 
}
	
			
		}
		
		
	
}

	
	

else {
	echo "not connected <br>";
}














/* 

	if ($result = mysqli_query($conn, "SELECT * FROM holidays")) {
	while($info = mysqli_fetch_array( $result ))  { 
	$hUserID= $info["user_id"];
	$hDate= $info["date"];
	$hTime= $info["time"];
	$hActivity= $info["activity"];
	$hStatus= $info["status"];
	$hNote= $info["note"];
	
	
	
	
	
	$sqlNew= "INSERT INTO attendance(user_id,date,time,activity,status,note) VALUES('$hUserID','$hDate','$hTime','$hActivity','$hStatus','$hNote')";
$resultNew= mysqli_real_query($conn,$sqlNew);



echo $hUserID;

 $sql123= "INSERT INTO attendance(user_id,date,time,activity,status) SELECT user_id,date,time,activity,status FROM holidays";
 $result123= mysqli_real_query($conn,$sql123);

	}
}	
 */



	if($update=="yes"){
	//	echo"eewrwerewr";
			
				$sql = "UPDATE attendance set note=''
					  ";		
					   if($conn->query($sql) === TRUE){


		
					   
				   
					   
			
				   
			
		}	
			
			
		}






?>