<header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a onclick="window.location='index.php'" class="logo" style="cursor:pointer"><i class="fa fa-clock-o"></i> <span>Education Time Attendance</span> </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <!--<li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>-->
                            
							<?php									   
if($conn)
{
	if ($result = mysqli_query($conn, "SELECT COUNT(*) AS countNotifications FROM notifications WHERE recipient='$userID' && status='0'")) {
   while($info = mysqli_fetch_array( $result ))  {
$countNotifications= $info['countNotifications'];
		}
	}
}							
?>
							
							
							
							
							
							
							
							<li class="dropdown hidden-xs">
                                <a data-target="#" class="dropdown-toggle waves-effect waves-light"
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
WHERE notifications.recipient='2' && notifications.status='0'
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
<div class='media'>
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

                                    <li>
                                        <a href="javascript:void(0);" class=" text-right">
                                            <small><b>See all notifications</b></small>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><?php echo $userFirstname . " " . $userLastname?> <i class="fa fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                     <li><a onclick="window.location='logout.php'" style="cursor:pointer">Logout</a></li>
									<hr/>
                                    <li><a onclick="window.location='account.php'" style="cursor:pointer">Account</a></li>
                                    <li><a onclick="window.location='settings.php'" style="cursor:pointer">Settings</a></li>
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
                                <a onclick="window.location='index.php'" style="cursor:pointer"><i class="md md-dashboard"></i> Dashboard</a>
                            </li>
							
							
							
							
							
							<li class="has-submenu">
                                <a style="cursor:pointer"><i class="fa fa-clock-o"></i>Attendance</a>
                                <ul class="submenu">
                                     <li><a onclick="window.location='view-staff-attendance.php'" style="cursor:pointer"> Attendance</a></li>
									
									<li><a onclick="window.location='view-staff-schedule.php'" style="cursor:pointer"> Schedule</a></li>
                                </ul>
                            </li>
							
							
							
							
							
							
							
						
							<li class="has-submenu">
                                <a onclick="window.location='view-sick-days.php'" style="cursor:pointer"><i class="fa fa-user-md"></i> Sick Requests</a>
                            </li>
							
							
							<li class="has-submenu">
                                 <a onclick="window.location='view-leave-request.php'" style="cursor:pointer"><i class="fa fa-plane"></i> Vacation Requests</a>
                            </li>
							
							<li class="has-submenu">
                               <a onclick="window.location='view-casual-request.php'" style="cursor:pointer"><i class="fa fa-leaf"></i> Casual Requests</a>
                            </li>
							
							
							<li class="has-submenu">
                                <a onclick="window.location='view-special-request.php'" style="cursor:pointer"><i class="fa fa-send-o"></i> Special Requests</a>
                            </li>
							
							
							
							<li class="has-submenu">
                                <a style="cursor:pointer"><i class="fa fa-file-excel-o"></i>Reports</a>
                                <ul class="submenu">
                                    <li> <a onclick="window.location='report-departmental-sick-leave.php'" style="cursor:pointer">Record of departmental & sick leave</a></li>
									<li><a onclick="window.location='report-sick-leave.php'" style="cursor:pointer">Sick leave Form </a></li>
									<li><a onclick="window.location='report-departmental-leave.php'" style="cursor:pointer">Departmental leave Form </a></li>
									<li><a onclick="window.location='report-absent.php'" style="cursor:pointer">Absent Report </a></li>
                                </ul>
                            </li>
							
							<li class="has-submenu">
                              <a onclick="window.location='users.php'" style="cursor:pointer"> <i class="fa fa-users"></i> Users</a>
                            </li>
							
							<!--<li class="has-submenu">
                                <a href="#"><i class="fa fa-shopping-bag"></i> Store</a>
                            </li>
							
							<li class="has-submenu">
                                <a href="settings.php"><i class="fa fa-cog"></i> Settings</a>
                            </li>
							
							<li class="has-submenu">
                                <a href="system.php"><i class="fa fa-laptop"></i> System</a>
                            </li>-->
							
							
							
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>