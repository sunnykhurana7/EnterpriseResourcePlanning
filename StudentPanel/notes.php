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
					<span style="font-size:25px;font-weight:bold;color:blue;">NOTES</span>
				</div>
			</div>
            
            
            
            
            <div class="container">
                <table class="table table-hover">
         <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Attachment</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    
                    <tbody>
     
     
     
     <?php  
        if($stmt = $conn->query("select * from admin_register_student where username = '".$_SESSION['studentusername']."'")){
            while($r = $stmt->fetch_array(MYSQLI_ASSOC)){
                $course = $r['course'];
                $semester = $r['semester'];
                $shift = $r['shift'];
                 
            }
        }
     ?>
     
   
     
     <?php 
     $counter ="";
          if($stmt = $conn->query("select * from teacher_notes where course = '".$course."'")){
            while($p = $stmt->fetch_array(MYSQLI_ASSOC)){
                
                $counter++;
     ?>   
                        <tr style="cursor: pointer;">
                             <td><?php echo $counter; ?></td>
                            <td><?php echo $p['name']?></td>
                            <td><?php echo $p['title'] ?>(<?php echo $p['subject'];?>)</td>
                            <td>Link</td>
                            <td><?php echo $p['date'] ?></td>
                        </tr>
          
          <?php
          
            }
        }
?>
          
          
                    </tbody>
                </table>
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