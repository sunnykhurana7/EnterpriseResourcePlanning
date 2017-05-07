<?php
    include '../includes/conn.php';
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
<nav class="navbar navbar-fixed-top navbar-inverse header">
  <div class="container"> <a href="#" class="navbar-brand" style="color:#FFF;">Jagan Institute Of Management Studies</a> </div>
</nav>
<!-- End Of Navbar --> 

<!-- Starting Of Main Container -->
	<div class="container" style="margin-top:80px;">
		<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;text-transform:uppercase;">details of register coordinators</span>
				</div>
			</div>
				
				
			<!-- Table Start -->
				<div class="container text-center">
					<table class="table table-hover table-bordered">
						<!-- Heading Of Tables -->
     							
                        <thead>
							<tr>
								<th>S.No</th>
								<th>Username</th>
							    <th>E-mail Address</th>
								<th>Mobile Number</th>
								<th>Course</th>
								<th>Year</th> 	
							</tr>
							
						</thead>
						<!-- Body  of the table-->
							<tbody>
								<tr style="cursor:pointer;">
                                
                                <?php 
                                   $count = 0;
                                    if($stmt = $conn->query("select * from  admin_register_coordinators")){
                                        while ($p = $stmt->fetch_array(MYSQLI_ASSOC)){
                                            $count++;
                                ?>
                                
                                	<td><?php echo $count; ?></td>
									<td><?php echo $p['username'];  ?></td>
									<td><?php echo $p['emailaddress'] ?></td>
									<td><?php  echo $p['mobilenumber']; ?></td>
									<td><?php  echo $p['course']; ?></td>
									<td><?php echo $p['year']; ?></td>
								</tr>
                                
                                <?php
                                
                                    
                                        }
                                    }
                                ?>
                                
							</tbody>
						<!-- -->
							
					</table>
				</div>
			<!-- End Table -->	
						
			</form>
			</div>
			
			
			<!-- Start pagination -->
				<div class="container text-center">
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