<?php
include('Parts/Session.php');	
$staffsFirstname= base64_decode($_REQUEST['fn']);
$staffsLastname= base64_decode($_REQUEST['ln']);
$staffsID= base64_decode($_REQUEST['id']);
include('sick-departmental.php');
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

               
				
			<div class="col-sm-12">
                        <div class="card-box table-responsive">
						<center><p><u><h3><?php echo $staffsFirstname . " " . $staffsLastname . "'s "?>Record of Departmental Leave and Sick Leave Taken for Year <?php echo date("Y")?></u></h3> </p></center>
						<hr/>
                            <table id="basictable" class="table table-striped table-bordered">
							
                                <thead>
                                    <tr>
                                         <tr>
                                        <th>Months</th>
                                        <th>No. of Days Departmental</th>
                                        <th>No. of Days Sick Leave</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
								<tr>
								<td>January</td>
								<td><?php echo $countDepartmentalJan?></td>
								<td><?php echo $countSickJan?></td>
								</tr>
								<tr>
								<td>February</td>
								<td><?php echo $countDepartmentalFeb?></td>
								<td><?php echo $countSickFeb?></td>
								</tr>
								<tr>
								<td>March</td>
								<td><?php echo $countDepartmentalMar?></td>
								<td><?php echo $countSickMar?></td>
								</tr>
								<tr>
								<td>April</td>
								<td><?php echo $countDepartmentalApr?></td>
								<td><?php echo $countSickApr?></td>
								</tr>
								<tr>
								<td>May</td>
								<td><?php echo $countDepartmentalMay?></td>
								<td><?php echo $countSickMay?></td>
								</tr>
								<tr>
								<td>June</td>
								<td><?php echo $countDepartmentalJun?></td>
								<td><?php echo $countSickJun?></td>
								</tr>
								<tr>
								<td>July</td>
								<td><?php echo $countDepartmentalJul?></td>
								<td><?php echo $countSickJul?></td>
								</tr>
								<tr>
								<td>August</td>
								<td><?php echo $countDepartmentalAug?></td>
								<td><?php echo $countSickAug?></td>
								</tr>
								<tr>
								<td>September</td>
								<td><?php echo $countDepartmentalSep?></td>
								<td><?php echo $countSickSep?></td>
								</tr>
								<tr>
								<td>October</td>
								<td><?php echo $countDepartmentalOct?></td>
								<td><?php echo $countSickOct?></td>
								</tr>
								<tr>
								<td>November</td>
								<td><?php echo $countDepartmentalNov?></td>
								<td><?php echo $countSickNov?></td>
								</tr>
								<tr>
								<td>December</td>
								<td><?php echo $countDepartmentalDec?></td>
								<td><?php echo $countSickDec?></td>
								</tr>
								<tr>
								<td><b>Total to date</b></td>
								<td><b><?php echo $countDepartmentalTotal?></b></td>
								<td><b><?php echo $countSickTotal?></b></td>
								</tr>
                                </tbody>
                            </table>
							<hr/>
							Verified: ____________________________________________
							<br/>
							<br/>
							<br/>
							Date: <u><?php echo date("F d, Y")?></u>
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