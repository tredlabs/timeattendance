<?php
if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickJan FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-01-01' AND '2017-01-31' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickJan= $info['countSickJan'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickFeb FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-02-01' AND '2017-02-29' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickFeb= $info['countSickFeb'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickMar FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-03-01' AND '2017-03-31' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickMar= $info['countSickMar'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickApr FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-04-01' AND '2017-04-30' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickApr= $info['countSickApr'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickMay FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-05-01' AND '2017-05-31' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickMay= $info['countSickMay'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickJun FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-06-01' AND '2017-06-30' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickJun= $info['countSickJun'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickJul FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-07-01' AND '2017-07-31' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickJul= $info['countSickJul'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickAug FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-08-01' AND '2017-08-31' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickAug= $info['countSickAug'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickSep FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-09-01' AND '2017-09-30' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickSep= $info['countSickSep'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickOct FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-10-01' AND '2017-10-31' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickOct= $info['countSickOct'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickNov FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-11-01' AND '2017-11-30' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickNov= $info['countSickNov'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickDec FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-12-01' AND '2017-12-31' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickDec= $info['countSickDec'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countSickTotal FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-01-01' AND '2017-12-31' && request_type='1' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countSickTotal= $info['countSickTotal'];
	}
}





if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalJan FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-01-01' AND '2017-01-31' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalJan= $info['countDepartmentalJan'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalFeb FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-02-01' AND '2017-02-29' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalFeb= $info['countDepartmentalFeb'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalMar FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-03-01' AND '2017-03-31' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalMar= $info['countDepartmentalMar'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalApr FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-04-01' AND '2017-04-30' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalApr= $info['countDepartmentalApr'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalMay FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-05-01' AND '2017-05-31' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalMay= $info['countDepartmentalMay'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalJun FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-06-01' AND '2017-06-30' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalJun= $info['countDepartmentalJun'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalJul FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-07-01' AND '2017-07-31' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalJul= $info['countDepartmentalJul'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalAug FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-08-01' AND '2017-08-31' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalAug= $info['countDepartmentalAug'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalSep FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-09-01' AND '2017-09-30' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalSep= $info['countDepartmentalSep'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalOct FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-10-01' AND '2017-10-31' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalOct= $info['countDepartmentalOct'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalNov FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-11-01' AND '2017-11-30' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalNov= $info['countDepartmentalNov'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalDec FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-12-01' AND '2017-12-31' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalDec= $info['countDepartmentalDec'];
	}
}

if ($result = mysqli_query($conn, "SELECT COUNT(date) AS countDepartmentalTotal FROM requests WHERE staff_id='$staffsID' && date BETWEEN '2017-01-01' AND '2017-12-31' && request_type='3' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countDepartmentalTotal= $info['countDepartmentalTotal'];
	}
}
?>