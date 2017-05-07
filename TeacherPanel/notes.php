<?php
    // include a connection
    include '../includes/conn.php';
?>

<?php
    if(!isset($_SESSION['teacherusername'])){
        header('location:index.php');
    }
?>

<?php 
    // php code to send the notes online
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $shift = $_POST['shift'];
        $subject = $_POST['subject'];
        $username = $_SESSION['teacherusername'];
        $date = date('d-m-y');
        $file = $_FILES['file']['name'];
        $time = time();  
        
       if($s = $conn->query("select * from admin_register_teacher where username = '".$_SESSION['teacherusername']."'")){
           while($p = $s->fetch_array(MYSQLI_ASSOC)){
               $name =$p['fullname'];
           
           }
       }         
        
        
        // code to send the notes online
        if($stmts = $conn->prepare("insert into teacher_notes set username=?,name=?,date=?,title=?,subject=?,course=?,semester=?,shift=?,attach=?,time=?,now")){
            $stmts->bind_param('ssssssssss',$username,$name,$date,$title,$subject,$course,$semester,$shift,$file,$time);
            $stmts->execute();
            if($stmts->affected_rows==1){
                header('location:notes.php?insert');
                move_uploaded_file($_FILES['file']['tmp_name'],'notes/'.$file);
            }else{
                header('location:notes.php?error');
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

<!-- Validation Starts Here -->
    <script type="text/javascript">
        function validation(){
         
        }
    </script>
<!-- Validation Ends Here-->

</head>
<body>
<!-- Header -->
<?php
    include '../includes/teachermenu.php';  
?>
<!-- End Of Navbar --> 

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method = "post" enctype="multipart/form-data">	
		  
		  
		  <div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">NOTES</span>
                    <p style="text-transform: uppercase;font-weight: bold;color: red;">Send Notes Online To Jims Student's</p>
				</div>
			</div>
		  
		  
			<div class="row">
				<div class="col-md-4">
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label for ="assignmenttitle">Notes Title</label>
						<input type="text" class="form-control" placeholder="Unit IV Notes" required="required" name="title" id="title">
						<span id="title"></span>
					</div>
					
                    <div class="form-group">
                        <label for ="assignmenttitle">Subject</label>
                        <input type="text" class="form-control" placeholder="Web Technology" required="required" name="subject" id="subject">
                        <span id="title"></span>
                    </div>
					
					
					<div class="form-group">
						<label for ="course"  style="text-transform:uppercase">Select Course</label><br>
						<select value="course" name="course" class="form-control">
							<option value="mca" style="text-transform:uppercase;" title="Master in Computer Applications">Master in Computer Applications</option>
							<option style="text-transform:uppercase;" value="bca" title="Bachelor Of Computer Applications">Bachelor Of Computer Applications</option>
							<option value="bba" style="text-transform:uppercase;" title="Bachelor 0f Business Administration">Bachelor Of Business Administration</option>
						</select>	
					</div>
					
					
					<div class="form-group">
					   <label for="semester" style="text-transform:uppercase">Select Semester</label><br>
						<select value="semester" name="semester" class="form-control">
							<option value="first semester">First Semester</option>
							<option value="second semester">Second Semester</option>
							<option value="third semester">Third Semester</option>
							<option value="fourth semester">Fourth Semester</option>
							<option value="fifth semester">Fifth Semester</option>
							<option value="sixth semester">Sixth Semester</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for ="shift" style="text-transform:uppercase">Select Shift</label><br>
						<select value="shift" name="shift" class="form-control">
							<option value="first shift">First Shift</option>
							<option value="second shift">Second Shift</option>
						</select>	
					</div>
					
					<div class="form-group">
						<label for="attach">Attach File</label>
						<input type="file"  name="file" required="required" class="form-control">
					</div>
					
					
					<div class="form-group text-center">
					    <!-- <button type="button" class="btn btn-lg btn-primary">Send Assignment</button> -->
						<input type="submit" class="btn btn-sm btn-primary" value="SEND NOTES" onclick="validation();" name="submit">		
					</div>
					
					
					<div class="">
					<a href = "viewassignments.php" target="_blank" title="CLICK" style="text-transform:uppercase;">View Assignment's That You Have send</a>
				</div>	
				</div>
					
				
				<div class="col-md-4">
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