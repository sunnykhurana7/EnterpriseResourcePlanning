<?php
    // connection include
    include '../includes/conn.php';
?>


<?php
    // insertion code coomes here
    if(isset($_POST['submit'])){
        
        //header('location:abc.php');
        //exit;
        
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $course = $_POST['course'];
        $startdate = date('Y-m-d');
        $enddate = date('Y-m-d') + 3;
        $image = "Smiley_transparent.png";
        
        // To Display for checking
       /* echo $username;
        echo $name;
        echo $password;
        echo $course;
        echo $startdate;
        echo $enddate;
        
        exit;
        */
        // insert command use to insert the data
        if($stmt  = $conn->prepare("insert into admin_register_student set username = ?,fullname=?,password=?,course=?,start_date=?,end_date=?,image=? ")){
            $stmt->bind_param('sssssss',$username,$name,$password,$course,$startdate,$enddate,$image);
            $stmt->execute();
            if($stmt->affected_rows==1){
                header('location:registerstudent.php?insert');
            }else{
                header('location:registerstudent.php?notinsert');
            }
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
<!-- Start Javascript Validation -->
	<script type="text/javascript">
		function validation()
		 {
			
			
			var username = document.getElementById("username").value;
			
			var fullname = document.getElementById("fulllname").value;
			var password = document.getElementById("password").value;
			var confi = document.getElementById("confirm").value;
			var course = document.getElementById("course").value;
	        
			if(username =="")
            {
				document.getElementById("username").style.borderColor = "#F00";
				document.getElementById("user").innerHTML = "Please Enter Unique Username";
				document.getElementById("username").focus();
				return false;	
			}else
			    if(fullname=="")
			{
             	document.getElementById("fulllname").style.borderColor = "#F00";
				document.getElementById("full").innerHTML = "Please Enter Name";
				document.getElementById("fulllname").focus();		
				return false;				
 			}else
				if(password =="")
				{
					document.getElementById("password").style.borderColor = "#F00";
					document.getElementById("pass").innerHTML = "Please Enter Password Please";		
					document.getElementById("password").focus();	
					return false;
				}else
				if(confi =="")
				{
					document.getElementById("confirm").style.borderColor = "#F00";
					document.getElementById("confi").innerHTML = "Please Enter Password";
					document.getElementById("confirm").focus();
					return false;
                }else 
				   if(password!=confi)
					{
					document.getElementById("confirm").style.borderColor = "#F00";
					document.getElementById("confi").innerHTML = "Password Not Match";
					document.getElementById("confirm").focus();
					return false;
					}			
		 }	
	</script>
<!-- -->	

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
					<span style="font-size:25px;font-weight:bold;color:blue;">REGISTER STUDENT</span>
				</div>
			</div>
			
			<!-- Options -->
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4 col-xs-12 col-lg-4">
						
					</div>
					
					
					<div class="col-md-4 col-xs-12 col-lg-4">
						<div class="form-group">
							<label for="generateuniqueid" class="pull-left">Generate Unique Username</label>	
							<input type="text" class="form-control" placeholder="jims_Student_sunny_7705" required name="username" id="username">
							<span id="user" style="font-weight:bold;color:#F00;"></span>
						</div>
						
						
						<div class="form-group">
							<label for="username" class="pull-left">Full Name</label>
							<input type="text" class="form-control" placeholder="Sunny Khurana" required name="name" id="fulllname">
							<span id="full" style="color:#F00;font-weight:bold;"></span>
						</div>
						
						<div class="form-group">
							<label for="password" class="pull-left">Password</label>
							<input type="password" class="form-control" placeholder="********" required name="password" id="password">
							<span id="pass" style="color:#F00;font-weight:bold;"></span>
						</div>
						
						<div class="form-group">
							<label for ="Confirm Password" class="pull-left">Confirm Password</label>
							<input type="password" class="form-control" placeholder="*********" required name="confirmpassword"  id="confirm">
							<span id="confi" style="font-weight:bold;color:#F00;"></span>
						</div>
						
						<div class="form-group">
							<label for="select course"  style="clear:both;">Choose Course</label><br>
							<select name="course" id="course" required="required">
								<option value="Select Course">Select Course</option>
								<option value="mca" selected="true">Master In Computer Application</option>
								<option value="bca">Bachelor Of Computer Application</option>
								<option value ="bba">Bachelor Of Business Administration</option>
							</select>
						</div>
						
						<div class="form-group text-center">
							<input type="submit" name="submit" value="Register" class="btn btn-sm btn-primary" onClick="validation();">
						</div>
						
						<div class="form-group text-center">
							<a href="viewstudentregister.php" target="_blank" style="text-decoration:none;background-color:black;color:white;padding:5px;">View Details Of Register Students</a>
						</div>
						
					</div>
					
					
					<div class="col-md-4 col-xs-12 col-lg-4">
						
					</div>
				</div>
			</div>

			
	</div>	
<!-- End Of Main Container -->

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