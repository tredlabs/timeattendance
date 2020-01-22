<?php
include('Parts/Session.php');	

$term= $_REQUEST['term'];

if($term==="christmas")
{
	$fields= "<th>Department</th><th>Name of Staff</th><th>Sept</th><th>Oct</th><th>Nov</th><th>Dec</th><th>Total</th>";
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
                           

					<center><h3> St. Andrew High School for Girls <br/> Academic Staff List Absenteeism Record <br/> <?php echo $month2?> <?php echo $year?></h3></center>



					
					
					
					
					<?php
					$term= $_POST['term'];
					$year= $_POST['year'];
					
					
					/* $start    = new DateTime($year."-09-01");
					$start->modify('first day of this month');
					$end      = new DateTime($year."-12-01");
					$end->modify('first day of next month');
					$interval = DateInterval::createFromDateString('1 month');
					$period   = new DatePeriod($start, $interval, $end);
					foreach ($period as $dt) {
					$records= $dt->format("F") . "<br>\n";
					echo $records;
					} */
					
					
					
					if($term==="christmas")
					{
					$fields= "<th>Department</th>
					<th>Name of Staff</th>
					<th>Sept</th>
					<th>Oct</th>
					<th>Nov</th>
					<th>Dec</th>
					<th>Total</th>";
					}
					?>
					
					
					
					<table class="table">
					<thead>
					<tr>
					<?php echo $fields?>
					</tr>
					</thead>
					<tbody>
					
				<?php 
$query="SELECT attendance_staff.*,users.*,departments.* 
FROM attendance_staff
LEFT JOIN users ON attendance_staff.staff_id=users.id
LEFT JOIN departments ON attendance_staff.department=departments.id";
				
				
					if ($result = mysqli_query($conn, $query)) {
				   while($info = mysqli_fetch_array( $result ))  { 
				$sStaff_id= $info['staff_id'];
				$sUser_type= $info['user_type'];
				$sDepartment= $info['department'];
				$sFirstname= $info['firstName'];
				$sLastname= $info['lastName'];
				$sCountSick= number_format($info['countSick'],2);
				$sCountCasual= number_format($info['countCasual'],2);
				$countSpecial= number_format($info['countSpecial'],2);
				$sDepartment= $info['department'];
				$tot_user= $info['tot_user'];
				
				$total= number_format($sCountSick+$sCountCasual+$countSpecial,2);
				
				echo    "<tr>
						 <td> $sDepartment </td>
						 <td> $sFirstname $sLastname </td>
						 <td> $sCountCasual </td>
						 <td> $sCountSick </td>
						 <td> $countSpecial </td>
						 <td> </td>
						 <td> $total </td>
						 </tr>";
						}
					} 
				?>						 
					
					</tbody>
					</table>	
							
							
							
							
							
							
							
							
							
							
							
							
							
						
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
