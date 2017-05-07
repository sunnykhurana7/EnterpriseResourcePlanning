<!-- PHP CODE COMES HERE -->

<?php
    // code to include the connection
    include '../includes/conn.php';
?>   

<?php
    if(!isset($_SESSION['studentusername'])){
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
    <?php include '../includes/menu.php' ?>
<!-- End Of Navbar --> 
 
   <!-- Start Of Container -->
	<div class="container" style="margin-top:80px;">
		<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">SYLLABUS</span>
						<p style="font-weight:bold;text-transform:uppercase">From Here You Can Download The Syllabus</p>
				</div>
			</div>
			
			<!-- Start Container -->
			
			<div class="row">
			
				<!-- For MCA -->
				<div class="col-md-4 col-lg-4 col-xs-12 text-center" style="padding:20px;">
					<span style="text-transform:uppercase;font-weight:bold;font-size:20px;color:black;">Master Of Computer Application</span><br>
						<a href="syllabus/mca.pdf" target="_blank" style="margin-top:100px;clear:both;text-decoration:none;text-transform:uppercase;background-color:red;color:white;padding:5px;" title="Download" class="text-center;">Download</a>
				</div>
				
				<!-- For BCA -->
				<div class="col-md-4 col-lg-4 col-xs-12 text-center" style="padding:20px;">
					<span style="text-transform:uppercase;font-weight:bold;font-size:20px;color:black;">Bachelor Of Computer Application<br></span>
						<a href="syllabus/bca.pdf" style="margin-top:100px;clear:both;text-decoration:none;text-transform:uppercase;background-color:green;color:white;padding:5px;" title="Download" class="text-center;" target="_blank">Download</a>
				</div>
				
				<!-- For BBA -->
				<div class="col-md-4 col-lg-4 col-xs-12 text-center" style="padding:20px;">
					<span style="text-transform:uppercase;font-weight:bold;font-size:20px;color:black;">Bachelor Of Business Administration<br></span>
						<a href="syllabus/bba.pdf" style="margin-top:100px;clear:both;text-decoration:none;text-transform:uppercase;background-color:blue;color:white;padding:5px;" title="Download" class="text-center;" target="_blank">Download</a>
				</div>
				
				
			</div>
			
			<!-- End Container -->
		</form>
	</div>
	
	<!-- End Of Container -->
	
	<!-- Starting Of Foooter  -->
<footer class="container-fluid navbar-fixed-bottom" style="background-color:#000;">
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