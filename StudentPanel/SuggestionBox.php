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

<!-- Javascript comes here-->
	<script type="text/javascript">
		function validation()
      {
		var n = document.getElementById("names").value;
		var e = document.getElementById("email").value;
		var num = document.getElementById("mobile").value;
		var mes  = document.getElementById("message").value;
		
		
		if(n == "")
		{
			//alert("Please Enter Some Details");
			document.getElementById("names").style.borderColor = "#F00";
			document.getElementById("nam").innerHTML = "Please Enter Name";
			document.getElementById("names").focus();
			return false;
		}else 
		   if(e == ""){
			document.getElementById("email").style.borderColor = "#F00";
			document.getElementById("ema").innerHTML = "Please Enter E-mail Address";
			document.getElementById("email").focus();
			return false;
		}else 
		   if(num == ""){
			document.getElementById("mobile").style.borderColor = "#F00";
			document.getElementById("mob").innerHTML = "Please Enter E-mail Address";
			document.getElementById("mobile").focus();
			return false;
		   }else 
		      if(mes == ""){
				document.getElementById("message").style.borderColor = "#F00";
				document.getElementById("mes").innerHTML = "Please Enter Message";
				document.getElementById("message").focus();
				return false;
			  }
	  }
	</script>
<!-- End Javascript Here -->
</head>
	
<body>
<!-- Header -->
<nav class="navbar navbar-fixed-top navbar-inverse header">
  <div class="container"> <a href="#" class="navbar-brand" style="color:#FFF;">Jagan Institute Of Management Studies</a> </div>
</nav>
<!-- End Of Navbar --> 

   <!-- Start Of Container -->
	<div class="container" style="margin-top:80px;">
		<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">SUGGESTION BOX</span>
					<p style="text-transform:uppercase;font-weight:bold;">Send Your Suggestions To The Director Of Your College</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label for="name">Enter Your Name</label>
						<input type="text" class="form-control" placeholder="Sunny Khurana" name="to" required="required" id="names">
						<span id="nam" style="color:#F00;font-weight:bold;"></span>
					</div>
					
					<div class="form-group">
						<label for="Send From">Enter Your E-mail Address</label>
						<input type="text" class="form-control" placeholder="sunnykhurana777.sk@gmail.com" name="email" required="email" id="email">
						<span id="ema" style="color:#F00;font-weight:bold;"></span> 
					</div>
					
					
					<div class="form-group">
						<label for ="mobilee number">Enter Your Mobile Number</label>
						<textarea class="form-control" placeholder="+91-9871727979" style="resize:none;" name="mobile" required="required" id="mobile"></textarea>
					<span id="mob" style="color:#F00;font-weight:bold;"></span>
					</div>
					
					
					<div class="form-group">
						<label for="message">Enter Your Message</label>
						<textarea class="form-control" placeholder="Message Comes Here" style="resize:none" name="message" required="required" id="message"></textarea>
						<span id="mes" style="color:#F00;font-weight:bold;"></span>
					</div>
					
					<div class="form-group text-center">
						<input type="submit" name="submit" value="SEND FEEDBACK" class="btn btn-primary btn-sm"  onClick="validation();">
					</div>
				</div>
				
						
				
				
				<div class="col-md-4">
				</div>
			</div>
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