<?php 
include('Parts/Session.php');

$notificationID= $_REQUEST["nid"];

$query="DELETE FROM notifications WHERE id='$notificationID'";
$result=mysqli_real_query($conn,$query);

if($result)
{
	header("location: notifications.php");
}
?>