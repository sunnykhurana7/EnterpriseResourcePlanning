<!-- PHP CODE COMES HERE -->

<?php
    // code to include the connection
    include '../includes/conn.php';
?>   

<?php
    if(!isset($_SESSION['studentusername'])){
        header('location:index.php');
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


<!-- End Javascript Code -->
</head>
<body>
<!-- Header -->
<?php include '../includes/menu.php' ?>
<!-- End Of Navbar --> 

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <div class="col-md-4 col-lg-4 col-xs-12 ">
          <?php
            if(isset($_GET['id'])){
                
                if($stmt = $conn->query("select * from  admin_register_teacher where id='".$_GET['id']."'")){
                    while($s=$stmt->fetch_array(MYSQLI_ASSOC)){
                        
                    
          ?>
          
          <p style="font-weight: bold;text-transform: uppercase;color: red;font-size:25px;">Faculty Details</p>
            <img src="../TeacherPanel/photos/<?php echo $s['image'];?>" style="margin-bottom: 25px;margin-left: 25px;"><br>
            <b style="margin-left: 25px;text-transform: uppercase;">Mr. Sunny Khurana</b>
          </div>
          <div class="col-md-8 col-lg-8 col-xs-12" style="margin-top: 93px;">
           <b>Name:</b> Mr. <?php echo $s['fullname']; ?><br>
           <b>Designation:</b><?php echo $s['designation'] ?><br>
           <b>Area:</b> <?php echo $s['area'] ?><br> 
           <b>E-mail:</b><?php echo $s['email'] ?><br>
           <b>Educational Qualifications:</b><?php echo $s['qualification']; ?><br>
          </div>
		</div>
        
        
        <?php 
            }
                }
                
            }
        ?>
	
	<!-- End Of Profile -->
	
	
	
	<!-- Starting Of Foooter  -->
<footer class="container-fluid navbar-fixed-bottom" style="background-color:#000;">
	<div class="container" style="margin-top:15px;margin-bottom:15px;">
		<span style="color:#FFF;padding-top:20px;">&copy; Jagan Institute Of Management Studies</span>
        <span style="float: right;color: white;"><a href="#" style="text-decoration:none;color: white;">Developed By:- Sunny Khurana</a></span>
	</div>
</footer>	

<!-- End Foooter  -->
</body>

<!-- All Scripts Are Come Here -->
<script type="text/javascript" src ="bootstrap.js"></script>
<script type="text/javascript" src ="bootstrap.min.js"></script>

<!-- End Of Scripts -->
</html>