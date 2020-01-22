<?php 
include('Parts/Session.php');
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
                            <h1><center>Add Staff Member</center></h1>
							
						  <form name="" action="php-add-users.php" method="post" autocomplete="off">
						 <div class="row">
						 
						
						 <div class="col-md-3">
						 <input type="text" class="form-control" name="firstName" placeholder="Enter First name"/>
						 </div>
						 
						 <div class="col-md-3">
						  <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name"/>
						 </div>
						 
						 
						 
						 <div class="col-md-3">
						<select name="staffType" class="form-control" required>
						  <option value="" hidden> --Select staff type-- </option>
						  <?php
							   
							if ($result = mysqli_query($conn, "SELECT * FROM user_types ORDER BY type ASC")) {
						   while($info = mysqli_fetch_array( $result ))  { 
						$type_id= $info['id'];
						$user_types= $info['type'];
						echo"
						  <option value='$type_id'>$user_types</option>
						";
								}
							}
						?>
						  </select>
						 </div>
						 
						 
						 
						 <div class="col-md-3">
						<select name="department" class="form-control" required>
						  <option value="" hidden> --Select Department-- </option>
						  <?php
							   
							if ($result = mysqli_query($conn, "SELECT * FROM departments ORDER BY department ASC")) {
						   while($info = mysqli_fetch_array( $result ))  { 
						$dept_id= $info['id'];
						$user_dept= $info['department'];
						echo"
						  <option value='$dept_id'>$user_dept</option>
						";
								}
							}
						?>
						  </select>
						 </div>
						 
						 
						 
						 
						 
						 
						 </div>
						 
						 <hr/>
						 
						 <h1><center>Set Staff Member's Schedule</center></h1>
						 
						<div class="row">
						 
						<div class="col-md-3">
						<input type="checkbox" name="scheduleSundayDate" value="1" > Sunday
						</div>
						<div class="col-md-3">
						<input type="time" name="scheduleSundayTime" class="form-control"/>
						</div>
						
						
						<div class="col-md-3">
						<input type="checkbox" name="scheduleMondayDate" value="1" > Monday
						</div>
						<div class="col-md-3">
						<input type="time" name="scheduleMondayTime" class="form-control"/>
						</div>
						
						</div>
						
						
						<br/>
						
						<div class="row">
						 
						<div class="col-md-3">
						<input type="checkbox" name="scheduleTuesdayDate" value="1" > Tuesday
						</div>
						<div class="col-md-3">
						<input type="time" name="scheduleTuesdayTime" class="form-control"/>
						</div>
						
						
						<div class="col-md-3">
						<input type="checkbox" name="scheduleWednesdayDate" value="1" > Wednesday
						</div>
						<div class="col-md-3">
						<input type="time" name="scheduleWednesdayTime" class="form-control"/>
						</div>
						
						</div>
						
						
						<br/>
						
						<div class="row">
						 
						<div class="col-md-3">
						<input type="checkbox" name="scheduleThursdayDate" value="1" > Thursday
						</div>
						<div class="col-md-3">
						<input type="time" name="scheduleThursdayTime" class="form-control"/>
						</div>
						
						
						<div class="col-md-3">
						<input type="checkbox" name="scheduleFridayDate" value="1" > Friday
						</div>
						<div class="col-md-3">
						<input type="time" name="scheduleFridayTime" class="form-control"/>
						</div>
						
						</div>
						
						
						
						 <br/>
						
						
						<div class="row">
						 
						<div class="col-md-3">
						<input type="checkbox" name="scheduleSaturdayDate" value="1" > Saturday
						</div>
						<div class="col-md-3">
						<input type="time" name="scheduleSaturdayTime" class="form-control"/>
						</div>
						
						</div>
						
						
					
						 
						 
						   
						    <hr/>
						  <input type="checkbox" name="moreUsers" value="1"> I have more users to add<br>
						  <br/>
						   <button class="btn btn-primary btn-lg"> Add user </button>
						 </form>  
					
						
						   
						   
						   
                            
                        </div>
                    </div>

                </div>
				
				
				
				
				
				
				
				
				
				
                    </div>
                </div>
                <!-- Page-Title -->





                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                2017 © Minton.
                            </div>
                        </div>
                    </div>
                </footer>
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