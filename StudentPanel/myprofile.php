<?php
    // code to include the connection
    include '../includes/conn.php';
?>


<?php
    // code to update the details of the students
    if(isset($_POST['update'])){
        
        $dob = $_POST['dob'];
        $semester = $_POST['semester'];
        $category = $_POST['category'];
        $state = $_POST['state'];
        $mobile = $_POST['mobile'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $shift = $_POST['shift'];
        $nationlity = $_POST['nationality'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        
        
        if($stmt = $conn->query("update admin_register_student set dob = ' ".$dob."',semester = ' ".$semester."',category='".$category."',state='".$state."',mobile = '".$mobile."',name='".$name."',cours='".$course."',shift='".$shift."',nationality='".$nationlity."',email='".$email."',address='".$address."' where username = '".$_SESSION['studentusername']."'")){
            
        }
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
					
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">MY PROFILE</span>
				</div>
			</div>	
					
					
			<div class="row">		
				<div class="col-md-6 col-lg-6 col-xs-6">
				  <div class="form-group">
					<label>Username</label>
					<input type="text" class = "form-control" placeholder="<?php echo $_SESSION['studentusername']; ?>" required value="<?php echo $_SESSION['studentusername']; ?> " readonly  >
				  </div>	
				</div>
                
                <?php
                    // code to display the data
                    if($stm = $conn->query("select * from admin_register_student where username = '".$_SESSION['studentusername']."'")){
                        while($s = $stm->fetch_array(MYSQLI_ASSOC)){
                            
                            ?>
                       
                
				<div class="col-md-6 col-lg-6 col-xs-6">
				   <div class="form-group">
					<label>Name</label>
                   
					<input type="text" class = "form-control" placeholder="Sunny Khurana" required name="name" value="<?php echo $s['fullname'];  ?>">
                    
				  </div>		
				</div>
				
				
				<div class="col-md-6 col-lg-6 col-xs-6">
				  <div class="form-group">
					<label>D.O.B</label>
					<input type="text" class = "form-control" placeholder="07/07/1993" required name="dob" value="<?php echo $s['dob']; ?>">
				  </div>	
				</div>
				<div class="col-md-6 col-lg-6 col-xs-6">
				   <div class="form-group">
					<label>Select Course</label>
					<input type="text" class = "form-control" placeholder="MCA" required name="course" value="<?php echo $s['course']; ?>">
				  </div>		
				</div>
				
				
				
				<div class="col-md-6 col-lg-6 col-xs-6">
				  <div class="form-group">
					<label>Select Semester</label>
					<input type="text" class = "form-control" placeholder="First Semester" required name="semester" value="<?php echo $s['semester'] ?>">
				  </div>	
				</div>
				<div class="col-md-6 col-lg-6 col-xs-6">
				   <div class="form-group">
					<label>Select Shift</label>
					<input type="text" class = "form-control" placeholder="First Shift" required name="shift" value="<?php echo $s['shift'] ?>">
				  </div>		
				</div>
				
				
				
				
				<div class="col-md-6 col-lg-6 col-xs-6">
				  <div class="form-group">
					<label>Category</label>
					<input type="text" class = "form-control" placeholder="General" required name="category" value="<?php echo $s['category'] ?>">
				  </div>	
				</div>
				<div class="col-md-6 col-lg-6 col-xs-6">
				   <div class="form-group">
					<label>Nationality</label>
					<input type="text" class = "form-control" placeholder="Hindu" required name="nationality" value="<?php echo $s['nationality'] ?>">
				  </div>		
				</div>
				
				
				<div class="col-md-6 col-lg-6 col-xs-6">
				  <div class="form-group">
					<label>Domisile State</label>
					<input type="text" class = "form-control" placeholder="Delhi" required name="state" value="<?php echo $s['state'] ?>">
				  </div>	
				</div>
				<div class="col-md-6 col-lg-6 col-xs-6">
				   <div class="form-group">
					<label>E-mail Address</label>
					<input type="text" class = "form-control" placeholder="sunnykhurana777.sk@gmail.com" required name="email" value="<?php echo $s['email'] ?>">
				  </div>		
				</div>
				
				
				<div class="col-md-6 col-lg-6 col-xs-6">
				  <div class="form-group">
					<label>Mobile Number</label>
					<input type="text" class = "form-control" placeholder="+91-9871727979" required name="mobile" value="<?php echo $s['mobile'] ?>">
				  </div>	
				</div>
				<div class="col-md-6 col-lg-6 col-xs-6">
				   <div class="form-group">
					<label>Address</label>
					<input type="text" class = "form-control" placeholder="A-11-C,Behind Holy Child School,Tagore Garden" required name="address" value="<?php echo $s['address'] ?>">
				  </div>		
				</div>
				</div>
                <?php
                
                 }
                    }
                                    
                ?>
				<div class="container">
					<div class = "row">
						<button class="btn btn-lg btn-primary" name="update">UPDATE</button>
					</div>
				</div>
				
				
			</div>
		  </form>	
		</div>
	
	
	<!-- End Of Profile -->
	
	
	
	<!-- Starting Of Foooter  -->
<footer class="container-fluid" style="background-color:#000;">
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