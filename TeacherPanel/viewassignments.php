<!--CODE OF PHP COMES HERE THAT INLUDE THE CONNECTION-->
<?php
    // include a connection
    include '../includes/conn.php';
?>

<?php
    if(!isset($_SESSION['teacherusername'])){
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
					<span style="font-size:25px;font-weight:bold;color:blue;">ASSIGNMENTS SEND BY YOU</span>
				</div>
			</div>

				<div class="row text-center">
				  	<!-- just We have to create a table -->
						<table class="table table-bordered table-hover">
						  <thead>
							<tr style="text-align:center;">
							 <td>S.no</td>
							 <td>Assignment Title</td>
							 <td>Subject</td>
							 <td>Course</td>
							 <td>Semester</td>
							 <td>Shift</td>
							 <td>Assignment Attachment</td>
							 <td>Date</td>
							</tr>
						  </thead>
						  
						  <!-- Body Of The Table -->
							<tbody style="cursor:pointer;">
                            
                            <?php
                                $counter = 0;
                                if($stmt=$conn->query("select * from  teacher_notes where username = '".$_SESSION['teacherusername']."'")){
                                    while($s=$stmt->fetch_array(MYSQLI_ASSOC)){
                                        $counter++;
                            ?>
							 <tr>
							  <td><?php echo $counter; ?></td>	
							  <td><?php echo $s['title']; ?></td>
							  <td><?php echo $s['subject'] ?></td>
                               <?php
                                if($s['course']=='mca'){
                                    $p = "Master in Computer Application";
                                }else
                                  if($s['course']=='bca'){
                                    $p = "Bachelor Of Computer Application";
                                }else
                                     if($s['course']=='bba'){
                                    $p = "Bahcelor Of Business Administration";
                                }     
                               ?> 
                              
							  <td><?php echo $p; ?></td>
							  <td style="text-transform: uppercase;"><?php echo $s['semester'] ?></td>
                              <td style="text-transform: uppercase;"><?php echo $s['shift'] ?></td>
							  <td><a href="notes/<?php echo $s['attach'] ?>"  target="_blank">Attachment</a></td>
							  <td>24-03-2016</td>
							 </tr>	

                             <?php
                                
                                    }
                                }
                             ?>
                        
							</tbody>
						  <!-- End Of The Body -->
						</table>
					<!-- End A Table -->
						
						<!-- Start pagination -->
							<div class="container">
								<ul class="pagination">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">6</a></li>
								</ul>
							</div>
						<!-- End pagination -->
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