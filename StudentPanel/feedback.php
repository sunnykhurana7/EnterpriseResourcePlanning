<?php
    // code to include the connection
    include '../includes/conn.php';
?>

<?php 
    if(isset($_POST['submit'])){
     $to = $_POST['to'];
     $from = $_POST['from'];
     $feedback = $_POST['feedback'];
     $username = $_SESSION['studentusername'];
     
    
        if($st = $conn->prepare("insert into developer_feedback set username=?,to_name=?,from_name=?,feedback=?")){
            
            $st->bind_param('ssss',$username,$to,$from,$feedback);
            $st->execute();
            if($st->affected_rows==1){
                header('location:feedback.php?insert');
            }  else{
                header('location:feedback.php?error');
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

<!-- Javascript comes here-->
	<script type="text/javascript">
		function validation()
      {
	 	var to = document.getElementById("to").value;
		var from = document.getElementById("from").value;
		var feed = document.getElementById("feedback").value;
		
		if(to == "")
         {
           document.getElementById("to").style.borderColor = "#F00";
		   document.getElementById("t").innerHTML = "Name Required";	
		   document.getElementById("to").focus();
		   return false;		
		 }else 
           if(from =="")
           {
			document.getElementById("from").style.borderColor ="#F00";
		    document.getElementById("fro").innerHTML = "Name Required";
			document.getElementById("from").focus();
			return false;	
		   }else 
				if(feed =="")
               {
				 document.getElementById("feedback").style.borderColor = "#F00";
				 document.getElementById("fee").innerHTML  = "Please Give Feedback";
				 document.getElementById("feedback").focus();
				 return false;  			
               }

}
	</script>
<!-- End Javascript Here -->
</head>
	
<body>
<?php
    include '../includes/menu.php'; 
?>

   <!-- Start Of Container -->
	<div class="container" style="margin-top:80px;">
		<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">SEND FEEDBACK TO DEVELOPER</span>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label for="Send To">Send To</label>
						<input type="text" class="form-control" placeholder="Sunny Khurana" name="to" required="required" id="to" value="Sunny Khurana" readonly="">
						<span id="t" style="color:#F00;font-weight:bold;"></span>
					</div>
					
					<div class="form-group">
						<label for="Send From">Send From</label>
                        <?php
                              if($stmt = $conn->query("select * from admin_register_student where username  = '".$_SESSION['studentusername']."'")){
                                  while($s = $stmt->fetch_array(MYSQLI_ASSOC)){
                                      
                        ?>
						<input type="text" class="form-control" placeholder="Jagan Institute Of Technology" name="from" required="required" id="from" value="<?php echo $s['fullname']?>" readonly>
                        
                        <?php
                             
                                  }
                              }    
                        ?>
						<span id="fro" style="color:#F00;font-weight:bold;"></span> 
					</div>
					
					
					<div class="form-group">
						<label for ="give feedback">Give Feedback</label>
						<textarea class="form-control" placeholder="Feedback" style="resize:none;" name="feedback" required="required" id="feedback"></textarea>
					<span id="fee" style="color:#F00;font-weight:bold;"></span>
					</div>
					
					
					<div class="form-group text-center">
						<input type="submit" name="submit" value="SEND FEEDBACK" class="btn btn-primary btn-sm"  onClick="validation();">
					</div>
				
					<div class="form-group text-center" style="margin-top:25px;">
						<a href="#" style="text-decoration:none;text-transform:uppercase;">View Feedback</a>
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