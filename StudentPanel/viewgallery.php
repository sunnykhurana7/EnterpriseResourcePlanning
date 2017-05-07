<?php
    // code to include the connection object
    include '../includes/conn.php';
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
    include '../includes/menu.php';
?>
<!-- End Of Navbar --> 

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method = "post" enctype="application/form-data">	
		  
		  <div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">VIEW GALLERY</span>
				</div>
			</div>

				<!-- Start A Gallery Session -->
					<div class="container">
						<div class="row">
                        
                        <?php 
                            // code to display the images
                            if($stm = $conn->query("select * from student_gallery")){
                                while($s = $stm->fetch_array(MYSQLI_ASSOC)){
                                    
                                
                        ?>
							<div class="col-md-4 col-lg-4 col-xs-12" style="margin-bottom:15px;">
								<img style ="width: 250px;height:250px;cursor: pointer" src ="photos/<?php echo $s['file']; ?>" class="img-responsive">
								<span style="color: red;text-transform: uppercase"><b>Post By:- <?php echo $s['fullname']; ?>(<?php echo $s['status']; ?>)</b><span><br>
								<span>Title:- <?php echo $s['title']; ?></span><br>
								<span>Description:- <?php echo $s['description']; ?> </span>		
							</div>
                            
                            <?php
                                }
                            }  
                            ?>
						</div>						
					</div>
				<!-- End A Gallery Session  -->
				
						
						<!-- Start pagination -->
							<div class="container text-center">
								<ul class="pagination">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">6</a></li>
								</ul>
							</div>
						<!-- End pagination -->
				</div>
		  
			</div>
		  </form>	
		</div>
	
	<!-- End Of Profile -->
	
	
	
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