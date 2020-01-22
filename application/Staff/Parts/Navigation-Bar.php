<header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="index.php" class="logo"><i class="fa fa-clock-o"></i> <span>Education Time Attendance</span> </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            
							
							<?php									   
if($conn)
{
	if ($result = mysqli_query($conn, "SELECT COUNT(*) AS countNotifications FROM notifications WHERE recipient='$userID' && status='1'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countNotifications= $info['countNotifications'];
		}
	}
}							
?>
							
							
							
							
							
							
							<li class="dropdown hidden-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
                                   data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span
                                        class="badge badge-xs badge-pink"><?php echo $countNotifications?></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group nicescroll notification-list">
                                       



									   
									   
									   
									   
									   
									   
									   
									   
									   
									   <?php
$query="
SELECT * FROM notifications
LEFT JOIN users ON notifications.sender=users.id
WHERE notifications.recipient='$userID' && notifications.status='1'
";									   
if($conn)
{
	if ($result = mysqli_query($conn, $query)) {
   while($info = mysqli_fetch_array( $result ))  {
$notificationDetails= $info['details'];
$notificationsender= $info['sender'];
$notificationRecipient= $info['recipient'];
$notificationStatus= $info['status'];
$senderFname= $info['firstName'];
$senderLname= $info['lastName'];


echo"<a href='javascript:void(0);' class='list-group-item'>
<div class='media' onclick=window.location='notifications.php'>
<div class='pull-left p-r-10'>
<em class='fa fa-check noti-primary'></em>
</div>
<div class='media-body'>
<h5 class='media-heading'>$senderFname $senderLname</h5>
<p class='m-0'>
<small>$notificationDetails</small>
</p>
</div>
</div>
</a>";
		}
		
	}
}	
else
		{
			echo $conn->error;
		}						
?>





									

										
										
										
										
										

                                    </li>

                                    <li onclick="window.location='notifications.php'">
                                        <a href="javascript:void(0);" class=" text-right">
                                            <small><b>See all notifications</b></small>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><?php echo $userFirstname . " " . $userLastname?> <i class="fa fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                     <li><a href="logout.php">Logout</a></li>
									<hr/>
                                    <li><a href="account.php">Settings</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End topbar -->


            <!-- Navbar Start -->
            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="index.php"><i class="md md-dashboard"></i> Dashboard</a>
                            </li>
							
							
							<li class="has-submenu">
                                <a href="view-staff-attendance.php"><i class="fa fa-clock-o"></i> Attendance</a>
                            </li>
							
							<li class="has-submenu">
                                <a href="view-staff-schedule.php"><i class="fa fa-calendar"></i> Schedule</a>
                            </li>
							
							<li class="has-submenu">
                                <a href="view-sick-days.php"><i class="fa fa-user-md"></i> Sick Requests</a>
                            </li>
							
							
							<li class="has-submenu">
                                <a href="view-leave-request.php"><i class="fa fa-plane"></i> Vacation Requests</a>
                            </li>
							
							<li class="has-submenu">
                                <a href="view-casual-request.php"><i class="fa fa-leaf"></i> Casual Requests</a>
                            </li>
							
							<li class="has-submenu">
                                <a href="view-special-request.php"><i class="fa fa-send"></i> Special Requests</a>
                            </li>
							
							<!--<li class="has-submenu">
                                <a href="#"><i class="fa fa-shopping-bag"></i> Store</a>
                            </li>
							
							<li class="has-submenu">
                                <a href="account.php"><i class="fa fa-lock"></i> Account</a>
                            </li>-->
							
							
							<li class="has-submenu">
                                <a href="system.php"><i class="fa fa-laptop"></i> System</a>
                            </li>
							
							
							
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>