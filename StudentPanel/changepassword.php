<?php
    // include the connection here
    include '../includes/conn.php';
?>


<?php
    if(!isset($_SESSION['studentusername'])){
            header('location:index.php');
    }
?>

    
<?php
    // code to change the password of the user
        if(isset($_POST['change'])){
            $old = $_POST['oldpassword'];
            $new = $_POST['newpassword'];
            
            
            
            if($stmt = $conn->query("update  admin_register_student set password = '".$new."' where password = '".$old."' and username = '".$_SESSION['studentusername']."'")){
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


<!-- Validation -->
	<script type="text/javascript">
		function validation()
		{
			var old = document.getElementById("old").value;
			var news = document.getElementById("new").value;
			var cnew = document.getElementById("cnew").value;

			if(old == "")
             {
				document.getElementById("old").style.borderColor = "#E34234";
				document.getElementById("ol").innerHTML = "Please Enter Old Password";
				document.getElementById("old").focus();
				
             }else
               if(news =="")
                 {
				document.getElementById("new").style.borderColor ="#E34234";
				document.getElementById("ne").innerHTML = "Please Enter New Password";
				document.getElementById("new").focus();	
				 }
				else 
                   if(cnew =="")
                     {
				document.getElementById("cnew").style.borderColor ="#E34234";
				document.getElementById("cne").innerHTML = "Please Confirm Password";
				document.getElementById("cnew").focus();			
					 }

		}
	</script>
<!-- End Validation -->

</head>
<body>
<?php
  // include a menu
    include '../includes/menu.php';  
?>
 

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method = "post" enctype="application/form-data">	
			<div class="row">
				<div class="col-md-12 col-xs-12 col-lg-12 text-center">
					<span class="text-center" style="font-size:25px;font-weight:bold;color:blue;">CHANGE PASSWORD</span>
				</div>
			</div>
			
			
			<div class="row" style="margin-top:15px;">
				<div class="col-md-4">
				</div>
				
				
				<div class="col-md-4">
					<div class="form-group">
						<label for="old password">Old Password</label>
						<input type="password" placeholder="***************" class="form-control" name="oldpassword" id="old" required="required">
						<span id="ol" style="font-weight:bold;color:red;"></span>
					</div>
					
					
					<div class="form-group">
						<label for="new password">New Password</label>
						<input type="password" placeholder="**************" class="form-control" name="newpassword" id="new" required="required">
						<span id="ne" style="font-weight:bold;color:red;"></span>

					</div>
					
					
					<div class="form-group">
						<label for="confirm new password">Confirm New Password</label>
						<input type="password" placeholder="****************" class="form-control" name="confirmnewpassword" id="cnew" required="required">
						<span id="cne" style="font-weight:bold;color:red;"></span>
					</div>
					
					<div class="form-group  text-center">
						<input type="submit" name="change" value="CHANGE PASSWORD" class="btn btn-primary btn-sm" onClick="validation()">
					</div>
					
					
				</div>
				
				<div class="col-md-4">
				</div>
			</div>
			
		  </form>	
		</div>
	
	<!-- End Of Profile -->
	
	
	
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