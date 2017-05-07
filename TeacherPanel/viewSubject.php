<!--CODE OF PHO COMES HERE -->
<?php
    include '../includes/conn.php';
?>

<?php
    if(!isset($_SESSION['teacherusername'])){
        header('location:conn.php');
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
			<div class="row" style="margin-bottom:20px;">
				<div class="col-xs-12 col-md-12 col-lg-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">SUBJECTS THAT YOU TEACH</span>
				</div>
			</div>	
			
			
			<div class="row text-center">
			   <div class="col-md-4 col-lg-12 col-xs-4">
                    <table class="table">
                        <thead>
                            <tr>
                               <th>Subject</th>
                               <th>Course</th> 
                               <th>Shift</th>
                               <th>Semester</th>
                               <th>Delete</th>
                               <th>Update</th>
                            </tr>
                        </thead>    
                        <tbody>
                        
                        <?php
                            if($stmt = $conn->query("select * from  teacher_add_subject where username = '".$_SESSION['teacherusername']."'")){
                                while($s = $stmt->fetch_array(MYSQLI_ASSOC)){
                                    
                        ?>
                        
                            <tr style="cursor: pointer;">
                                <td style="text-transform: uppercase;color: red;font-weight: bold;"><?php  echo $s['subject'] ?></td>
                                <td style="text-transform: uppercase;"><?php echo $s['course']; ?></td>
                                <td style="text-transform: uppercase;"><?php echo $s['shift']; ?></td>
                                <td style="text-transform: uppercase;"><?php echo $s['semester']; ?></td>
                                <td style="text-transform: uppercase;"><a href="deletesubject.php?id=<?php echo $s['id']; ?>"><img src="photos/images (1).jpe" style="width: 48px;height: 30px;"></a></td>
                                <td style="text-transform: uppercase;"><a href="updatesubject.php?id=<?php echo $s['id']; ?>">Update</a></td>
                            </tr>
                            
                            <?php
                                
                                }
                            }
                            ?>
                        </tbody>
                        
                    </table>
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