<!-- PHP CODE COMES HERE-->
<?php
    
    include '../includes/conn.php'; 
?>

<?php 
    if(!isset($_SESSION['teacherusername'])){
        header('location:index.php');
    }
?>

<?php
        if(isset($_POST['submit'])){
            
          $username = $_SESSION['teacherusername'];  
          $title = $_POST['title'];
          $description = $_POST['description'];
          $file = $_FILES['file']['name'];
          $date = date('Y-m-d');
          
         
         if($stmt=$conn->prepare("insert into teacher_events set username=?,title=?,description=?,file=?,date=?")){
             
             $stmt->bind_param('sssss',$username,$title,$description,$file,$date);
             $stmt->execute();
             if($stmt->affected_rows==1){
                 move_uploaded_file($_FILES['file']['name'],'../Notice/'.$file);
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
</head>
<body>
<!-- Header -->
<?php
    include '../includes/teachermenu.php';
?>
<!-- End Of Navbar --> 

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method = "post" enctype="application/form-data">

			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">POST EVENTS</span>
				</div>
			</div>


		  
			<div class="row">
				<div class="col-md-4">
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label for ="assignmenttitle">Events Title</label>
						<input type="text" class="form-control" placeholder="Sunny Khurana" name="title">
					</div>
					
					<div class="form-group">
						<label for ="assignmentdescription">Events Description</label>
						<textarea class="form-control" name="description" placeholder="Description" style="resize:none;" required></textarea>
					</div>
					
					<div class="form-group">
						<label for="attach">Attach File</label>
						<input type="file" class="form-control" name="file">
					</div>
					
					
					<div class="col-md-4">
					    <button type="submit" class="btn btn-lg btn-primary" name="submit">Post Events</button>		
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