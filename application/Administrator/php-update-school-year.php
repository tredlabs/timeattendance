<?php
include('Parts/Session.php');
$cid= $_REQUEST['cid'];




if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM school_year WHERE id='1'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$yearStart= $info['start'];
$yearEnd= $info['end'];
$newStart= $yearStart+1;
$newEnd= $yearEnd+1;
		}
	}
}






if($conn==true) 
	{
	$query="UPDATE school_year SET start='$newStart', end='$newEnd' WHERE id='1'"; 
	
	$result=mysqli_real_query($conn,$query);
	
	if($result)
	{
		echo "";
	}
} 
?>