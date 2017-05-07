<?php
    include '../includes/conn.php';
?>  

<?php
    if(!isset($_SESSION['teacherusername'])){
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
<?php
    include '../includes/teachermenu.php';
?>
<!-- End Of Header -->
   <!-- Start Of Container -->
	<div class="container" style="margin-top:80px;">
		<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">ATTENDANCE REGISTERS</span>
				</div>
			</div>
			
			<div class="row text-center" style="margin-bottom:80px;">
            
            <?php
                if($stmt = $conn->query("select * from teacher_add_subject where username = '".$_SESSION['teacherusername']."'")){
                    while($p = $stmt->fetch_array(MYSQLI_ASSOC)){
                        
                            ?>
            
				<div class="col-md-4 col-xs-12 col-lg-4" style="padding-bottom:15px;">
					
						<span style="font-weight:bold;">JAGAN INSTITUTE OF TECHNOLOGY TRAINING AND RESEARCH</span><br>
					<!--	<img src="images/JK-inst.jpg" class="img-responsive text-center" style="width:100px;height:100px;text-align:center" > -->
					
					<span style="font-weight:bold;color:red;margin-top:50px;">Mr.<?php echo $p['name'] ?> </span><br>
					<p style="background-color:silver;text-align:center">
						<span style="font-weight:bold;margin:20px;"><?php echo  $p['subject'];?></span><br>
                        
                        
                       <span style="text-transform:uppercase;font-weight:bold;"><?php echo $p['course'] ?></span><br>
						
                        
                        <span style="text-transform:uppercase;font-weight:bold;"><?php echo $p['semester'] ?></span><br>
						<span style="text-transform:uppercase;font-weight:bold;"><?php  echo $p['shift'] ?></span>
					</p>
					
					<a href="subjectregisters.html" style="text-decoration:none;background-color:black;color:white;padding:5px;margin-top:50px;" target="_blank">OPEN REGISTER</a>
					
				</div>
				
                
                <?php
                    }
                }

?>
                
				
					
			</div>
			
			</div>
		</form>
	</div>
	
	<!-- End Of Container -->
	
	<!-- Starting Of Foooter  -->
<footer class="container-fluid navbar-fixed-bottom" style="background-color:#000;">
	<div class="container" style="margin-top:15px;margin-bottom:15px;">
		<span style="color:#FFF;padding-top:20px;">&copy; Jagan Institute Of Management Studies</span>
        <span style="float: right;color: white;"><a href="#" style="text-decoration:none;color: white;">Developed By:- Sunny Khurana</a></span>
	</div>
</footer>	

<!-- End Foooter  -->
</body>

<!-- All Scripts Are Come Here -->
<script type="text/javascript" src ="bootstrap.js"></script>
<script type="text/javascript" src ="bootstrap.min.js"></script>

<!-- End Of Scripts -->
</html>