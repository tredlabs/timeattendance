<?php
include('Parts/Session.php');

$sickID= $_REQUEST['id'];
$noDays= $_REQUEST['noDays'];
$selectUser= $_REQUEST['user'];





if ($result = mysqli_query($conn, "SELECT attendance_staff.department AS nDepartment, attendance_staff.user_type AS nType, users.type AS users_type, users.*, attendance_staff.*, departments.*,user_types.*
FROM attendance_staff
LEFT JOIN users ON attendance_staff.staff_id=users.id
LEFT JOIN departments ON attendance_staff.department=departments.id
LEFT JOIN user_types ON users.type=user_types.id
WHERE attendance_staff.staff_id='$selectUser'")) {
while($info = mysqli_fetch_array( $result ))  { 
$selectUserFirstname= $info['firstName'];
$selectUserLastname= $info['lastName'];
$selectUserType= $info['type'];
$sickDaysAllowed= $info['sick'];
$cDepartment= $info['department'];
$cUserType= $info['users_type'];
$cDepartmentName= $info['nDepartment'];
	}
}






















if ($result = mysqli_query($conn, "SELECT * FROM departments WHERE id='$cDepartmentName'")) {
while($info = mysqli_fetch_array( $result ))  { 
$staffDepartment= $info['department'];
	}
}

if ($result = mysqli_query($conn, "SELECT * FROM user_types WHERE id='$cUserType'")) {
while($info = mysqli_fetch_array( $result ))  { 
$userPost= $info['type'];
	}
}
















									

if ($result = mysqli_query($conn, "SELECT MAX(request_id) AS maxRequest FROM requests WHERE staff_id='$selectUser' && request_type='1' && status='0'")) {
   while($info = mysqli_fetch_array( $result ))  {
$maxRequest= $info['maxRequest'];	
	}
}	




if ($result = mysqli_query($conn, "SELECT SUM(value) AS countSickDaysFirst FROM requests WHERE request_type='1' && staff_id='$selectUser' && status='1'")) {
while($info = mysqli_fetch_array( $result ))  { 
$countSickDaysFirst= $info['countSickDaysFirst'];

if($countSickDaysFirst===null)
{
	$newCountSickDaysFirst=0;
}
else
{
	$newCountSickDaysFirst=$countSickDaysFirst;
}
	}
}




 
$firstBalance= $sickDaysAllowed-$countSickDaysFirst;					
	


	if ($result = mysqli_query($conn, "SELECT SUM(value) AS countNoDays FROM requests WHERE request_id='$maxRequest'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countNoDays= $info['countNoDays'];	

if($countNoDays===null)
{
	$newCountNoDays=0;
}
else
{
	$newCountNoDays=$countNoDays;
}
   }
	}
	
		
	
$secondBalance= $firstBalance-$countNoDays;	
		
	

if ($result = mysqli_query($conn, "SELECT MAX(date) AS maxRequestDate, MIN(date) AS minRequestDate FROM requests WHERE staff_id='$selectUser' && request_type='1' && request_id='$maxRequest'")) {
while($info = mysqli_fetch_array( $result ))  { 
$maxRequestDate= date_create($info['maxRequestDate']);
$maxRequestDate1= date_format($maxRequestDate, "F d, Y");
$minRequestDate= date_create($info['minRequestDate']);
$minRequestDate1= date_format($minRequestDate, "F d, Y");
	}
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

         <title><?php echo $pageTitle?></title>

        <link href="plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

		
		
		
		 <!-- DataTables -->
        <link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		

    </head>


    <body>


        <div class="wrapper">
            <div class="container">

				
			<div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div> <span class="pull-left"><img src="logo.png" width="100px" height="100px"/></span> 
							<span class="pull-right" style="text-align:right">St. Andrew High School for Girls<br/>10 Cecelio Ave<br/>Kingston 10</span></div>
							<br/>
							<br/>
							<br/>
							<center><h4><u> Section A to be completed by Applicant </u></h4></center>
							<span class="pull-right"> <b>Department: <?php echo $userPost?> </b> </span>
							<br/>
							<p>A. To the Chairman</p>
							<br/>
							<br/>
							<p>I <b><?php echo $selectUserFirstname. " " .$selectUserLastname?></b> hereby apply for <b><?php echo $newCountNoDays?></b> days. sick leave from <b><?php echo $minRequestDate1?></b> to <b><?php echo $maxRequestDate1?></b> inclusive.
							</p>
							
							
							<br/>
							
							
							<p>
							<span class="pull-left">Signature of Applicant ____________________________________ </span> <span class="pull-right"> <b>Post: <?php echo $staffDepartment?></b></span>
							</p>
							
							<br/>
							
							
							
							
							
							
							
							
							
							
							
							
							<hr/>
							
							<center><u><h4> OFFICIAL USE </h4></u></center>
							
							<br/>
							
							<p><span class="pull-left">Maximum Allowed</span> <span class="pull-right"><?php echo $sickDaysAllowed?></span></p>
							
							<br/>
							
							
							<p><span class="pull-left">Already taken</span> <span class="pull-right"><?php echo $newCountSickDaysFirst?></span></p>
							
							
							<br/>
							
							<p><span class="pull-left"> Balance</span> <span class="pull-right"><?php echo $firstBalance?></span></p>
							
							
							<br/>
							
							<p><span class="pull-left"> Leave granted</span> <span class="pull-right"><?php echo $newCountNoDays?></span></p>
							
							
							<br/>
							
							<p><span class="pull-left"> Balance</span> <span class="pull-right"><?php echo $secondBalance?></span></p>
							
							
							<hr/>
							
							
							<p><span class="pull-left"> _________________________________</span> <span class="pull-right">_________________________________</span></p>
							
							<br/>
							
							
							
							<p><span class="pull-left"> Recommended by (Principal)</span> <span class="pull-right">Date</span></p>
							
							<br/>
							
							<p><span class="pull-left"> _________________________________</span> <span class="pull-right">_________________________________</span></p>
							
							<br/>
							
							<p><span class="pull-left"> Approved by (Chairman)</span> <span class="pull-right">Date</span></p>
							
							<br/>
							<center><h4> <u>Special Note</u> </h4></center>
							<textarea class="form-control" rows="3"> </textarea>
							
							
							<!--<center><h5>(P.T.O For record of Department and Sick leave taken to date- <?php echo date("Y")?>).</h5></center>-->
							
							
						
                        </div>
                    </div>
                </div>
				

            </div> <!-- end container -->
        </div>
        <!-- End wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Counter Up  -->
        <script src="plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!-- circliful Chart -->
        <script src="plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
        <script src="plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- skycons -->
        <script src="plugins/skyicons/skycons.min.js" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#3bafda"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        </script>
		
		
		
		
		
		
		
		
		
		
		<!-- Datatables-->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "../plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>

    </body>
</html>