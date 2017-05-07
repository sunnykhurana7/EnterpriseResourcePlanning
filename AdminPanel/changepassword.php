<?php
    // connection code
    include '../includes/conn.php';
?>  



<?php 
  // code to update the password
  if(isset($_POST['submit'])){
        $oldpas = $_POST['oldpassword'];
        $newpas = $_POST['newpassword'];
        
        if($stmt = $conn->query("update  admin_login set password = '".$newpas."' where password = '".$oldpas."' and username = '".$_SESSION['admin_username']."'")){
            header('location:index.php');
            session_destroy();   
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


<!-- Start Validation Code-->
	<script type="text/javascript">
		function validation()
			{
				var old = document.getElementById("oldpassword").value;
				var news =  document.getElementById("newpassword").value;
				var confirms = document.getElementById("confirm").value;
				
				if(old =="")
				  {
					document.getElementById("oldpassword").style.borderColor = "#FOO";
					document.getElementById("old").innerHTML = "Please Enter Password";
					document.getElementById("oldpassword").focus();
					return false;
                  }else
					if(news =="")
					 {
						document.getElementById("newpassword").style.borderColor = "FOO";
						document.getElementById("ne").innerHTML = "Please Enter New Password";
						document.getElementById("newpassword").focus();
						return false;	
					 }else 
						if(confirms =="")
						{
							document.getElementById("confirm").style.borderColor = "FOO";
							document.getElementById("con").innerHTML =  "Please Confirm Password";
							document.getElementById("confirm").focus();
							return false;
					    } 				
			}
	</script>	
<!-- End Validation Code -->
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
					<span style="font-size:25px;font-weight:bold;color:blue;">CHANGE PASSWORD</span>
				</div>
			</div>
			
			<!-- Options -->
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4 col-xs-12 col-lg-4">
						
					</div>
					
					
					<div class="col-md-4 col-xs-12 col-lg-4">
						<div class="form-group">
							<label for="Old password" class="pull-left">Old Password </label>	
							<input type="password" class="form-control" placeholder="************" required name="oldpassword" id="oldpassword">
							<span  id="old" style="color:#F00;font-weight:bold;"></span>	
						</div>
						
						
						<div class="form-group">
							<label for="new password" class="pull-left">New Password</label>
							<input type="password" class="form-control" placeholder="***********" required name="newpassword" id="newpassword">
							<span id="ne" style="color:#F00;font-weight:bold;"></span>
						</div>
						
						<div class="form-group">
							<label for="confirm-new password" class="pull-left">Confirm New Password</label>
							<input type="password" class="form-control" placeholder="********" required name="confirmnewpassword" id="confirm">	
							<span id="con" style="font-weight:bold;color:#F00;"></span>	
						</div>
						
						<div class="form-group text-center">
							<input type="submit" name="submit" value="UPDATE PASSWORD" class="btn btn-sm btn-primary" onClick="validation();">
						</div>
						
						
					</div>
					
					
					<div class="col-md-4 col-xs-12 col-lg-4">
						
					</div>
				</div>
			</div>

			
	</div>	
<!-- End Of Main Container -->

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