<!--CODE OF PHO COMES HERE -->
<?php
    include '../includes/conn.php';
?>

<?php
    if(!isset($_SESSION['teacherusername'])){
        header('location:conn.php');
    }
?>

<?php
//    code of insert the data to the database
    if(isset($_POST['submit'])){
       $username = $_SESSION['teacherusername'];
       $name = $_POST['name'];
       $subject = $_POST['subject'];
       $course = $_POST['course'];
       $semester = $_POST['semester'];
       $shift = $_POST['shift'];
       $date = date('Y-m-d');
       $id = $_GET['id'];

      // echo $username;
//       echo $name;
//       echo $subject;
//       echo $course;
//       echo $semester;
//       echo $shift;
//       echo $date;
//       echo $id;

        if($stmt=$conn->query("update  teacher_add_subject set username = '".$username."',name='".$name."',subject='".$subject."',course='".$course."',shift='".$shift."',semester='".$semester."',date='".$date."' where id = '".$_GET['id']."' and username='".$_SESSION['teacherusername']."'")){
            header('location:subject.php');
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


<!-- js code starts here -->
	<script>
		function validation(){
			var sub = document.getElementById("subject").value;
			if(sub==""){
				document.getElementById("subject").style.borderColor = "#F00";
				document.getElementById("sub").innerHTML = "Please Enter The Name Of Subject";
				document.getElementById("subject").focus();
				return false;
			}
		}
	</script>
<!-- js code ends here -->

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
					<span style="font-size:25px;font-weight:bold;color:blue;">ADD SUBJECTS WHAT YOU TEACH</span>
				</div>
                
                <?php
                    if(isset($_GET['insert'])){
                            '<span>PASSWORD IS UPDATED SUCCESSFULLY.. PLEASE LOGIN</span>';                       
                    }
                ?>

                
                
                
			</div>	
			
			
			<div class="row">
			   <div class="col-md-4 col-xs-12 col-lg-4">
			   </div>
			   
			   <div class="col-md-4 col-xs-12 col-lg-4">
				 <div class="form-group">
					<label for ="name">Name</label>
                    <?php
                        if($stmt = $conn->query("select * from admin_register_teacher where username='".$_SESSION['teacherusername']."'")){
                            while($r=$stmt->fetch_array(MYSQLI_ASSOC)){
                                
                            
                    ?>
					<input type="text" class="form-control" name="name" placeholder = "Name Of The Teacher" readonly value="<?php echo $r['fullname']; ?>">
                    
                    <?php
                            }
                        }
                    ?>
                    
				 </div>
				 
                 
                 <?php
                    if(isset($_GET['id'])){
                        if($stmt = $conn->query("select * from  teacher_add_subject where id='".$_GET['id']."' and username = '".$_SESSION['teacherusername']."'")){
                            while($p = $stmt->fetch_array(MYSQLI_ASSOC)){
                                
                 ?>
                 
				 <div class="form-group">
					<label for ="subject name">Subject Name</label>
					<input type="text" class="form-control" placeholder="Data Structure"  name="subject" id="subject" value="<?php echo $p['subject']; ?>">
						<span id="sub"></span>
				 </div>
                 
                 
                 
                 <?php
                    
                            }
                        }
                    }
                 ?>
                 
				 
				 <div class="form-group">
					<label for = "select course">Select Cousrse</label><br>
					<select value="course" name="course" class="form-control">
						<option value="mca" title="Master In Computer Applications">Master In Computer Applications</option>
						<option value="bca" title="Bachelor Of Computer Applications">Bachelor Of Computer Applications</option>
						<option value="bba" title="Bachelor Of Business Administration">Bachelor Of Business Administration</option>
					</select>
				 </div>
				 
				 <div class="form-group">
					<label for ="Select Shift">Select Shift</label><br>
					<select value="shift" name="shift" class="form-control">
						<option value="firstshift">First Shift</option>
						<option value="secondshift">Second Shift</option>	
					</select>
				 </div>
				 
				 <div class="form-group">
					<label for="select semester">Select Semester</label><br>
					<select name="semester" class="form-control">
						<option>First Semester</option>
						<option>Second Semester</option>
						<option>Third Semester</option>
						<option>Fourth Semester</option>
						<option>Fifth Semester</option>
						<option>Sixth Semester</option>
					</select> 		
				 </div>
				 
				 <div class="form-group">
					<!-- <input type="submit" class="btn btn-primary btn-sm" value="Submit" onclick="validation()"> -->
					<button type="submit" name="submit" class="btn btn-primary btn-sm text-center" onclick="validation()">Update</button>
				 </div>
                 
                				 
			   </div>
			   
			   <div class="col-md-4 col-xs-12 col-lg-4">
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