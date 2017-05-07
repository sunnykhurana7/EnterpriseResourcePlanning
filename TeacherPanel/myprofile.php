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
     $username = $_POST['username'];
     $name = $_POST['name'];
     $designation = $_POST['designation'];
     $area = $_POST['area'];
     $qualification = $_POST['qualification'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     
     if($stmt=$conn->query("update  admin_register_teacher set designation='".$designation."',area='".$area."',qualification='".$qualification."',email='".$email."',phone='".$phone."' where username='".$_SESSION['teacherusername']."'")){
         
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
<!-- End Of Header --> 


	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method = "post" enctype="application/form-data">	
					
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">MY PROFILE</span>
				</div>
			</div>	
					
					
			<div class="container text-center">
              <div class="row">
                <div class="col-md-4 visible-lg">
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                    
                    
                    <?php
    if($stmt=$conn->query("select * from admin_register_teacher where username = '".$_SESSION['teacherusername']."'")){
        while($r=$stmt->fetch_array(MYSQLI_ASSOC)){
            
?>
                        <label for="username" class="pull-left">Username</label>
                        <input type="text" class="form-control" placeholder="jims_teahcer_mrs.prerna" style="text-transform:uppercase ;" name="username" value="<?php echo  $_SESSION['teacherusername'] ?>" readonly="readonly">
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="pull-left">Name</label>
                        <input type="text" class="form-control" placeholder="Prerna" style="text-transform: uppercase;" value="<?php echo $r['fullname']; ?>">
                    </div>
            
          
                    <div class="form-group">
                        <label for="designation" class="pull-left">Designation</label>
                        <select class="form-control" name="designation">  
                            <option>Associate Professor</option>
                            <option>Professor</option>   
                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="area" class="pull-left">Area</label>
                        <select class="form-control" name="area">  
                            <option>Information Technology</option>
                            
                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="qualification" class="pull-left">Qualification</label>
                        <input type="text" class="form-control" placeholder="Qualification" value="<?php echo $r['qualification']; ?>" name="qualification">
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="pull-left">E-mail</label>
                        <input type="text" class="form-control" placeholder="Prerna@gmail.com" style="text-transform: uppercase;" name="email" value="<?php echo $r['email'] ?>">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="phone" class="pull-left">Phone</label>
                        <input type="text" class="form-control" placeholder="+91-9871727979" style="text-transform: uppercase;" name="phone" value="<?php echo $r['phone']; ?>">
                    </div>
        
            
            <?php
    
        }
    }
?>      
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary pull-left" name="submit">UPDATE</button>
                    </div>
                    
                     </div>   
                    
                    
                </div>
                
                <div class="col-md-4 visible-lg">
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