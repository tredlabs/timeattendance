<?php 
include('Parts/Session.php');
$qFormID= $_REQUEST['id'];
if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM quickForms WHERE id='$qFormID'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$formName= $info['formName'];
$formURL= $info['formURL'];
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

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        
						
						
						<div class="row">
                    <div class="col-lg-12">
                        
						
						
						
						
						
						<div class="card-box">
                        <form name="" action="php-add-users.php" method="post">
						 
						 
						 
						 
						 
						 
						 
						 <div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-default">
				<div class="panel-heading clearfix">
						<center><h4 class="panel-title">System Information</h4></center>
						</div>	
				<?php
						if ($result = mysqli_query($conn, "SELECT * FROM system WHERE id='1'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$systemName= $info['systemName'];
$systemModel= $info['systemModel'];
$systemVersion= $info['systemVersion'];
$locale= $info['locale'];
$developer= $info['developer'];
$developerURL= $info['developerURL'];
$fullDeveloper= "<a href='$developerURL' target='_BLANK'>$developer</a>";
$systemTime= date("g:i a");
$systemDate= date("F d, Y");


echo" 
						<div class='table-responsive'>
							<table class='table'>
								<tbody> 
									<tr> 
										<td>System Name</td> 
										<td>$systemName</td> 
									</tr>
									<tr> 
										<td>System Model</td> 
										<td>$systemModel</td> 
									</tr> 
									<tr> 
										
										<td>System Version</td> 
										<td>$systemVersion</td> 
									</tr> 
									<tr>
										<td>Developer</td> 
										<td>$fullDeveloper</td> 
									</tr> 
									<tr> 
										 <td>Locale</td> 
										 <td>$locale</td> 
									</tr>
									<tr> 
										 <td>System Date</td> 
										 <td>$systemDate</td> 
									</tr> 
									<tr> 
										 <td>System Time</td> 
										 <td>$systemTime</td> 
									</tr> 
								</tbody> 
							</table>
						</div>";
		}
	}
		?>
				</div>
				</div>
				
				
				
				
			</div>
						 
						 
						 
						  
						 </form>  
					
						
						   
						   
						   
                            
                        </div>
                    </div>

                </div>
				
				
				
				
				
				
				
				
				
				
                    </div>
                </div>
                <!-- Page-Title -->





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

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


    </body>
</html>