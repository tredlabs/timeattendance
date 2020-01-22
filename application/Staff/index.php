<?php
include('Parts/Session.php');
#include('php-upload-attendance.php');

if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM school_year WHERE id='1'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$yearStart= $info['start'];
$pYearStart= $info['start']-1;
$yearEnd= $info['end'];
		}
	}
}


$query="
SELECT  
(SELECT COUNT(DISTINCT date) FROM attendance WHERE status='E' && activity='I' && date BETWEEN '2018-01-01' AND '2018-01-31' && user_id='$userID') AS countEarlyJan,

(SELECT COUNT(DISTINCT date) FROM attendance WHERE status='L' && activity='I' && date BETWEEN '2018-01-01' AND '2018-01-31' && user_id='$userID') AS countLateJan";

if($conn)
{
	if ($result = mysqli_query($conn, $query)) {
   while($info = mysqli_fetch_array( $result ))  { 
$countEarlyJan= $info['countEarlyJan'];
$countLateJan= $info['countLateJan'];
		}
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
		
		
		
		<link rel="stylesheet" href="plugins/chartist/dist/chartist.min.css">




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

				
				
				
				
				
				
				
				
                <div class="row">
                   <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><center><b>Attendance Status</b></center></h4>
							<center> <div><i class="fa fa-circle-o-notch fa-2x" style="color:#43abd9; margin-right:10px"> Early</i>  <i class="fa fa-circle-o-notch fa-2x" style="color:#f86495;"> Late</i>  </div></center>
                            <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>
              
				
				
			
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
		 <!-- Todojs  -->
        <script src="assets/pages/jquery.todo.js"></script>
		
		

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
		
		
		
	<!--My scripts-->
	<script src="plugins/chartist/dist/chartist.min.js"></script>
	<script src="plugins/chart.js/chart.min.js"></script>
	<script src="plugins/chart.js/chart.min.js"></script>
	
	
	<script>
	//Simple line chart
	new Chartist.Line('#simple-line-chart', {
	  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	  series: [
		/*Early*/[<?php echo $countEarlyJan?>, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		/*Late*/ [<?php echo $countLateJan?>, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
	  ]
	}, {
	  fullWidth: true,
	  chartPadding: {
		right: 40
	  }
	});
	</script>
	
	
	
	
	
		
		<!--
		<script>
	//Simple line chart
	new Chartist.Line('#simple-line-chart2', {
	  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	  series: [
		/*Early*/[<?php echo $countEarlyJan?>, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		/*Late*/ [<?php echo $countLateJan?>, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
	  ]
	}, {
	  fullWidth: true,
	  chartPadding: {
		right: 40
	  }
	});
	</script>
		-->
		
		
		
		
		
		

    </body>
</html>