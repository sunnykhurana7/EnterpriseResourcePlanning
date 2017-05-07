<?php 
    // connection comes here
    include '../includes/conn.php';
?>

<?php
    // insert code here
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($stmt = $conn->prepare("insert into admin_login set username =?,password=?,email=?")){
                $stmt->bind_param('sss',$username,$password,$email);
                $stmt->execute();
                if($stmt->affected_rows==1){
                    header('location:registermoreadmins.php?insert');
            }else
            {
                header('location:registermoreadmins.php?error');
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

<!-- Javascript Code Comes Here-->
	<script type="text/javascript">
		function validation()
		{
			var username = document.getElementById("username").value;
			var fullname = document.getElementById("fullname").value;
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;
			var confirms = document.getElementById("confirms").value;
			
			if(username ==  "")
			{
				document.getElementById("username").style.borderColor =  "#F00";
				document.getElementById("user").innerHTML  = "Unique Username Required";
				document.getElementById("username").focus();
				return false;
			}else
				if(fullname =="")
				{
					document.getElementById("fullname").style.borderColor = "F00";
					document.getElementById("full").innerHTML = "Name Required";
					document.getElementById("fullname").focus();
					return false;
				}else
					if(email =="")
			    {
					document.getElementById("email").style.borderColor = "#F00";
					document.getElementById("ema").innerHTML = "E-mail Address Required";
					document.getElementById("email").focus();	
					return false;		
				}else
					if(password =="")
					{
						document.getElementById("password").style.borderColor = "#F00";
						document.getElementById("pass").innerHTML ="Please Enter Password";
						document.getElementById("password").focus();
						return false;
					}else 
						if(confirms  =="")
					{
						document.getElementById("confirms").style.borderColor = "#F00";				
						document.getElementById("confi").innerHTML = "Please Enter Password";
						document.getElementById("confi").focus();
						return false;	
					}	
					
		}		
	</script>	
<!-- -->
</head>
<body>
<!-- Header -->
<nav class="navbar navbar-fixed-top navbar-inverse header">
  <div class="container"> <a href="index.php" class="navbar-brand" style="color:#FFF;">Jagan Institute Of Management Studies</a> </div>
</nav>
<!-- End Of Navbar --> 

<!-- Starting Of Main Container -->
	<div class="container" style="margin-top:80px;">
		<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">REGISTER NEW ADMIN</span>
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
							<span id="user"  style="font-weight:bold;color:#F00;"></span>
						</div>
						
						
						<div class="form-group">
							<label for="username" class="pull-left">Full Name</label>
							<input type="text" class="form-control" placeholder="Sunny Khurana" required name="name" id="fullname">
							<span id="full" style="font-weight:bold;color:#F00;"></span>
						</div>
						
						
						<div class="form-group">
							<label for ="email" class="pull-left">E-mail Address</label>
							<input type="text"  class="form-control" placeholder="sunnykhurana777.sk@gmail.com" name="email" required id="email">
							<span id="ema" style="color:#F00;font-weight:bold;"></span>	
						</div>
						
						<div class="form-group">
							<label for="password" class="pull-left">Password</label>
							<input type="password" class="form-control" placeholder="********" required name="password" id="password">
							<span id="pass" style="color:#F00;font-weight:bold;"></span>	
						</div>
						
						<div class="form-group">
							<label for ="Confirm Password" class="pull-left"> Confirm Password</label>
							<input type="password" class="form-control" placeholder="*********" required name="confirmpassword" id="confirms">
							<span id="confi" style="font-weight:bold;color:#F00;"></span>	
						</div>
						
						
						
						<div class="form-group text-center">
							<input type="submit" name="submit" value="Register" class="btn btn-sm btn-primary" onClick="validation();">
						</div>
						
						<div class="form-group text-center">
							<a href="viewadmins.php" target="_blank" style="text-decoration:none;background-color:black;color:white;padding:5px;">View Details Of Register Admin</a>
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