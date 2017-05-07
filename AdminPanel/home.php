<?php
    // connection include
    include '../includes/conn.php';
?>


<?php
    if(!(isset($_SESSION['admin_username']))){
        header('location:index.php');
    }
?>

<html>
<head>
<title>Jagan Institute Of Management Studies</title>
<!-- All StyleSheet Comes Here -->

<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet">
<link href="css/index.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- End Style Sheet -->
</head>
<body>
<!-- Header -->
<nav class="navbar navbar-fixed-top navbar-inverse header">
  <div class="container"> <a href="#" class="navbar-brand" style="color:#FFF;">Jagan Institute Of Management Studies</a> </div>
</nav>
<!-- End Of Navbar --> 

<!-- Starting Of Main Container -->
	<div class="container" style="margin-top:80px;">
		<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">ADMINISTRATION PANEL</span><br>
					<span style="font-weight:bold;text-transform:uppercase;color:red;">Welcome <?php echo $_SESSION['admin_username']; ?> </span>
				</div>
			</div>
			
			<!-- Options -->
			<div class="container text-center">
				<div class="row">
				
					<div class="col-md-4" style="margin-bottom:35px;">
						<span style="text-transform:uppercase;font-weight:bold;margin-bottom:35px;">Register New Admin</span>
							<p>You can regsiter new admin so that you work less</p>
							<a href="registermoreadmins.php" style="text-transform:uppercase;text-decoration:none;font-weight:bold;background-color:black;color:white;padding:5px;">Register Admin</a>
					</div>	
					
					<div class="col-md-4" style="margin-bottom:35px;">
						<span style="text-transform:uppercase;font-weight:bold;">Register New Student</span>
							<p style="text-transform:capitalize;">When New Student Comes You Can Register The Student in JIMS portal</p>
							<a href="registerstudent.php" style="text-transform:uppercase;text-decoration:none;font-weight:bold;background-color:black;color:white;padding:5px;">Register Student</a>
					</div>
					
					<div class="col-md-4" style="margin-bottom:35px;">
						<span style="text-transform:uppercase;font-weight:bold;">Register New Teacher</span>
						<p style="text-transform:capitalize;">When New teacher Comes You Can Register The teacher in JIMS portal</p>
						<a href="registerteacher.php" style="text-transform:uppercase;text-decoration:none;font-weight:bold;background-color:black;color:white;padding:5px;">Register Teacher</a>
					</div>
					
				</div>
				
				
				
				<div class="row" style="margin-top:60px;margin-bottom:159px;">
					<div class="col-md-4" style="margin-bottom:35px;">
						<span style="text-transform:uppercase;font-weight:bold;margin-bottom:15px;">Register New Coordinator</span>
							<p>You can regsiter new coordinator </p>
							<a href="registercoordianors.php" target="_blank" style="text-transform:uppercase;text-decoration:none;font-weight:bold;background-color:black;color:white;padding:5px;">Register Coordinator</a>
					</div>	
					
					<div class="col-md-4" style="margin-bottom:35px;">
						<span style="text-transform:uppercase;font-weight:bold;">Change Password</span>
							<p style="text-transform:capitalize;">You Can Change Your Password</p>
							<a href="changepassword.php" style="text-transform:uppercase;text-decoration:none;font-weight:bold;background-color:black;color:white;padding:5px;">Change Password</a>
					</div>
					
					<div class="col-md-4" style="margin-bottom:35px;">
						<span style="text-transform:uppercase;font-weight:bold;">logout</span>
						<p style="text-transform:capitalize;">Just click here to logout your session</p>
						<a href="logout.php" style="text-transform:uppercase;text-decoration:none;font-weight:bold;background-color:black;color:white;padding:5px;">Click Here</a>
					</div>
				</div>
				
			</div>

			
	</div>	
<!-- End Of Main Container -->

<!-- Starting Of Foooter  -->
<footer class="container-fluid navbar-bottom" style="background-color:#000;">
	<div class="container" style="margin-top:15px;margin-bottom:15px;">
		<span style="color:#FFF;padding-top:20px;">&copy; Jagan Institute Of Management Studies</span>
	</div>
</footer>	

<!-- End Foooter  -->


</body>

<!-- All Scripts Are Come Here -->
<script type="text/javascript" src ="bootstrap.js"></script>
<script type="text/javascript" src ="bootstrap.min.js"></script>

<!-- End Of Scripts -->
</html>