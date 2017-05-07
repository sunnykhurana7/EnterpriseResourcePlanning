<?php
    // code to include the connection
    include '../includes/conn.php';
?>      

<?php
    if(!isset($_SESSION['studentusername'])){
        header('location:index.php');
    }
?>

<?php
  if(isset($_POST['change'])){
          $file = $_FILES['fil']['name'];
         
      if($stmt = $conn->query("update admin_register_student set image = '".$file."' where username = '".$_SESSION['studentusername']."'")){
          move_uploaded_file($_FILES['fil']['tmp_name'],'photos/'.$file);
        header('location:home.php'); 
         
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
<!-- Head
er -->
<nav class="navbar navbar-fixed-top navbar-inverse header">
  <div class="container"> <a href="home.php" class="navbar-brand" style="color:#FFF;">Jagan Institute Of Management Studies</a> </div>
</nav>
<!-- End Of Navbar --> 

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method="post" enctype="multipart/form-data">	
			<div class="row">
				<div class="col-md-12 col-xs-12 col-lg-12 text-center">
					<span class="text-center" style="font-size:25px;font-weight:bold;color:blue;">CHANGE PHOTO</span>
				</div>
			</div>
			
			
			<div class="row" style="margin-top:15px;">
				<div class="col-md-4">
				</div>
				
                <div class="col-md-4">
				<div class="form-group ">
                
                <?php 
                    if($stmt = $conn->query("select * from admin_register_student where username = '".$_SESSION['studentusername']."'")){
                        while($r= $stmt->fetch_array(MYSQLI_ASSOC)){
                            
                ?>
			        <img src="photos/<?php echo $r['image']?>" style="width: 250px;height: 250px;margin-left: 53px;border:2px solid #fff;" >
                    
                    <?php
                        }
                    } 
                    ?>
                </div> 
                    
                  <div class="form-group">
                    <input type="file" class="form-control" name="fil" required="required" id="fil">
                  </div>
                  
                  <div class="form-group">
                    <button type="button btn-sm btn-primary" name="change">UPDATE</button>
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