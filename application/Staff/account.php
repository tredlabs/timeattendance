<?php 
include('Parts/Session.php');
$cid= $userID;




if($conn)
{
	if ($result = mysqli_query($conn, "SELECT * FROM users WHERE id='$cid'")) {
   while($info = mysqli_fetch_array( $result ))  { 
$uFirstname= $info['firstName'];
$uLastname= $info['lastName'];
$uUsername= $info['username'];
$uPassword= $info['password'];
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
                            <h1><center>Account</center></h1>
							
						  <form name="" action="php-edit-users.php?cid=<?php echo $cid?>" method="post">
						 <div class="row">
						 <input type="text" class="form-control" name="firstName" value="<?php echo $uFirstname?>" readonly/>
						 </div>
						 <br/>
						  <div class="row">
						 <input type="text" class="form-control" name="lastName" value="<?php echo $uLastname?>" readonly/>
						 </div>
						 <br/>
						  <div class="row">
						 <input type="text" class="form-control" name="userName" value="<?php echo $uUsername?>"/>
						 </div>
						 <br/>
						   <div class="row">
						 <input type="password" class="form-control" name="userPassword" value="<?php echo $uPassword?>"/>
						 </div>
						 
						   
						   <br/>
						  
						   <button class="btn btn-primary btn-lg"> Update </button>
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