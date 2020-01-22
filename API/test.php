<?php
include "zklibrary.php";
$zk = new ZKLibrary('72.252.154.60', 4370);
$zk->connect();
$zk->disableDevice();

$users = $zk->getUser();

$attendances=$zk->getAttendance();

$versions=$zk->getVersion();

 echo "Connected";


?>
