<?php
include('Parts/Session.php');

$sickID= $_REQUEST['id'];
$nStaffID= $_REQUEST['SID'];

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


        <!-- Navigation Bar-->
       <?php include('Parts/Navigation-Bar.php');?>
        <!-- End Navigation Bar-->


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <!--<div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Welcome !</h4>
                    </div>
                </div>-->
                <!-- Page-Title -->
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<!--<div class="row">
                    <div class="col-lg-8">
                        <div class="card-box">
                            <h4 class="text-dark  header-title m-t-0"><u>Dates</u></h4>
                            <p class="text-muted m-b-25 font-13">
                                Your awesome text goes here.
                            </p>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Weekends</td>
                                            <td><i class="fa fa-check-circle" aria-hidden="true"></i> System is on-line</td>
                                        </tr>
                                        <tr>
                                            <td>March 15 (Wednesday) 11:59 pm</td>
                                            <td><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Deadline to enter grade for <b>February</b></td>
                                        </tr>
										 <tr>
                                            <td>April 24 (Monday) 11:59 pm</td>
                                            <td><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Deadline to enter grade for <b>March</b></td>
                                        </tr>
										
										 <tr>
                                            <td>June 14 (Wednesday) 11:59 pm</td>
                                            <td> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Deadline to enter grade for <b>May</b></td>
                                        </tr>
										
										<tr>
                                            <td>No date set</td>
                                            <td>Deadline to enter grade for Project</td>
                                        </tr>
										
										<tr>
                                            <td>July 7 (Friday) 11:59 pm</td>
                                            <td><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Deadline to enter grade for <b>Exam</b></td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-1.jpg" class="img-responsive img-circle" alt="user">
                                <div class="wid-u-info">
                                    <h4 class="m-t-0 m-b-5">Chadengle</h4>
                                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                    <small class="text-warning"><b>Admin</b></small>
                                </div>
                            </div>
                        </div>

                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-2.jpg" class="img-responsive img-circle" alt="user">
                                <div class="wid-u-info">
                                    <h4 class="m-t-0 m-b-5">Tomaslau</h4>
                                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                    <small class="text-success"><b>User</b></small>
                                </div>
                            </div>
                        </div>

                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-7.jpg" class="img-responsive img-circle" alt="user">
                                <div class="wid-u-info">
                                    <h4 class="m-t-0 m-b-5">Ok</h4>
                                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                    <small class="text-pink"><b>Admin</b></small>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>-->
				
				
			<div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                             <table class="table m-0">
                                <thead>
                                    <tr>
                                    <th>Date(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
								if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM requests WHERE request_id='$sickID'")) {
   while($info = mysqli_fetch_array( $result ))  {
$sStaff_id= $info['staff_id'];
$sDate= date_create($info['date']);
$sDate1= date_format($sDate,"l F d, Y");
$sApproved= $info['approved'];
$sReason= $info['reason'];
$sSickID= $info['sick_id'];



if($sApproved==="0")
{
	$statusIcon="<button class='btn btn-danger' onclick=window.location='php-update-sick-status.php?ns=1&sid=$sSickID'><i class='fa fa-times'></i></button>";
}
if($sApproved==="1")
{
	$statusIcon="<button class='btn btn-primary' onclick=window.location='php-update-sick-status.php?ns=0&sid=$sSickID'><i class='fa fa-check'></i></button>";
}




$viewIcon= "<button class='btn btn-success' onclick=window.location='view-sick-days-details.php?id=$sSickID'><i class='fa fa-eye'></i></button>";

									echo"
									<tr>
                                    <td>$sDate1</td>
                                    </tr>
									";
		}
	}
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
				
				
				
				
				

				
				
				<!--<div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="widget-simple-chart text-right card-box">
                            <div class="circliful-chart" data-dimension="90" data-text="35%" data-width="5" data-fontsize="14" data-percent="35" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
                            <h3 class="text-success counter">2562</h3>
                            <p class="text-muted text-nowrap">Total Sales today</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="widget-simple-chart text-right card-box">
                            <div class="circliful-chart" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="75" data-fgcolor="#3bafda" data-bgcolor="#ebeff2"></div>
                            <h3 class="text-primary counter">5685</h3>
                            <p class="text-muted text-nowrap">Daily visitors</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="widget-simple-chart text-right card-box">
                            <div class="circliful-chart" data-dimension="90" data-text="58%" data-width="5" data-fontsize="14" data-percent="58" data-fgcolor="#f76397" data-bgcolor="#ebeff2"></div>
                            <h3 class="text-pink">$ <span class="counter">12480</span></h3>
                            <p class="text-muted text-nowrap">Total Earning</p>
                        </div>
                    </div>
                </div>-->
                <!-- end row -->
				
				
				
				
				
				
				
				
				
				
				
				
			
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				




                <!--<div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark  header-title m-t-0 m-b-30">Total Revenue</h4>

                            <div class="widget-chart text-center">
                                <div id="sparkline1"></div>
                                <ul class="list-inline m-t-15">
                                    <li>
                                        <h5 class="text-muted m-t-20">Target</h5>
                                        <h4 class="m-b-0">$1000</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last week</h5>
                                        <h4 class="m-b-0">$523</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last Month</h5>
                                        <h4 class="m-b-0">$965</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark  header-title m-t-0 m-b-30">Yearly Sales Report</h4>

                            <div class="widget-chart text-center">
                                <div id="sparkline2"></div>
                                <ul class="list-inline m-t-15">
                                    <li>
                                        <h5 class="text-muted m-t-20">Target</h5>
                                        <h4 class="m-b-0">$1000</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last week</h5>
                                        <h4 class="m-b-0">$523</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last Month</h5>
                                        <h4 class="m-b-0">$965</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0 m-b-30">Weekly Sales Report</h4>

                            <div class="widget-chart text-center">
                                <div id="sparkline3"></div>
                                <ul class="list-inline m-t-15">
                                    <li>
                                        <h5 class="text-muted m-t-20">Target</h5>
                                        <h4 class="m-b-0">$1000</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last week</h5>
                                        <h4 class="m-b-0">$523</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted m-t-20">Last Month</h5>
                                        <h4 class="m-b-0">$965</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>-->
                <!-- end row -->



                <!--<div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-xs-6 text-center">
                                            <canvas id="partly-cloudy-day" width="100" height="100"></canvas>
                                        </div>
                                        <div class="col-xs-6">
                                            <h2 class="m-t-0 text-muted"><b>32°</b></h2>
                                            <p class="text-muted">Partly cloudy</p>
                                            <p class="text-muted">15km/h - 37%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <h4 class="text-muted m-t-0">SAT</h4>
                                            <canvas id="cloudy" width="35" height="35"></canvas>
                                            <h4 class="text-muted">30<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <h4 class="text-muted m-t-0">SUN</h4>
                                            <canvas id="wind" width="35" height="35"></canvas>
                                            <h4 class="text-muted">28<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <h4 class="text-muted m-t-0">MON</h4>
                                            <canvas id="clear-day" width="35" height="35"></canvas>
                                            <h4 class="text-muted">33<i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-xs-6 text-center">
                                                <canvas id="snow" width="100" height="100"></canvas>
                                            </div>
                                            <div class="col-xs-6">
                                                <h2 class="m-t-0 text-muted"><b> 23°</b></h2>
                                                <p class="text-muted">Partly cloudy</p>
                                                <p class="text-muted">15km/h - 37%</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <h4 class="text-muted m-t-0">SAT</h4>
                                            <canvas id="sleet" width="35" height="35"></canvas>
                                            <h4 class="text-muted">30<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <h4 class="text-muted m-t-0">SUN</h4>
                                            <canvas id="fog" width="35" height="35"></canvas>
                                            <h4 class="text-muted">28<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <h4 class="text-muted m-t-0">MON</h4>
                                            <canvas id="partly-cloudy-night" width="35" height="35"></canvas>
                                            <h4 class="text-muted">33<i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div> 
                </div>-->
                <!--end row/ WEATHER -->



                
                <!-- end row -->




                <!-- Footer -->
                <?php include 'Parts/Footer.php';?>
                <!-- End Footer -->

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