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

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method = "post" enctype="application/form-data">	
			<div class="row">
				
                
                <?php
                          if($stmt = $conn->query("select * from  admin_register_teacher ")){
                              while($r = $stmt->fetch_array(MYSQLI_ASSOC)){                            
?>    
                <div class="col-md-4 col-lg-4 col-xs-12 text-center" style="margin-bottom:25px;">
						<img src="../TeacherPanel/photos/<?php echo $r['image']?>" class="img-responsive text-center" alt="No Image Found" style="margin-left: 40px;height:250px;width:300px;"><br>
						<span class="text-center"><b><?php echo $r['fullname'] ?></b></span><br>
						<span><b><?php echo $r['designation'] ?></b></span><br>
						<a href="details.php?id=<?php echo $r['id']; ?>" style="text-decoration:none;">View Full Profile</a>	<br>
				
                
                
                </div>
				
                
                             <?php
    
                              }
                          }  
?>

			</div>
		  </form>	
		</div>
	
	<!-- End Of Profile -->

	<!-- Starting Of Foooter  -->
<footer class="container-fluid navbar-fixed-bottom " style="background-color:#000;">
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
