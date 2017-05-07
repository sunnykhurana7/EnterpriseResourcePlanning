<?php
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

<!-- Starting Of Main Container -->
 <div class="container-fluid main img-responsive" style="background-image:url(images/about_education_above_all.jpg)">
	
   <div class="container">
		<span style="color:white;text-transform:uppercase;text-align:center;font-size:20px;margin-top:15px;" class="visible-lg text-center" >Help Other's To Make Them Successfull..</span>
		
		
		
		
    <div class="row">
	<a href="#" style="text-decoration:none" title="CHECK YOUR PROFILE">
      <div class="col-lg-3 col-md-12 col-xs-4 " style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> 
      
       <?php
        if($stmt = $conn->query("select * from admin_register_teacher where username = '".$_SESSION['teacherusername']."'")){
            while($r = $stmt->fetch_array(MYSQLI_ASSOC)){
                
      ?>
      <img src="../TeacherPanel/photos/<?php echo $r['image'] ?>" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;height:106px;width:75px;text-align:center;border-radius:50%">
      
      <?php
            }
        }  
      ?>
        <h5 style="color:#ff9a00;text-transform: uppercase;" class="text-center"><?php echo $_SESSION['teacherusername'];  ?></h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">MASTER OF COMPUTER APPLICATION</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" ></a> </div>
	</a>

	
	<a href="myprofile.php" style="text-decoration:none" title="CHECK YOUR PROFILE">
      <div class="col-lg-3 col-md-12 col-xs-4 " style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> 
      <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
      
        <h5 style="color:#ff9a00;">MY PROFILE</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Edit Profile, See Profile n Much More</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>

	
	<!-- 
	<a href="messages.html" style="text-decoration:none" title="SEND MESSSAGES">
	<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;float:left;">
			<span style="float:right;color:white;font-weight:bold" title="Incoming Messages">10</span><br>
        <h5 style="color:#ff9a00;clear:both;">MESSAGES</h5>
			
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Send Messages To Anyone Online</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a> -->
	
		<a href="Assignments.php" style="text-decoration:none" title="SEND YOUR ASSIGNMENTS ONLINE">
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">ASSIGNMENTS</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Send Work To Students Online Like Assignments </span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>

		<a href="notice.php" style="text-decoration:none"; title="SEND N POST NOTICE">
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">NOTICE</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Post Notice Details, See Latest Notice</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>

     
    </div>


	 <div class="row">
	 
	 <a href="news.php" style="text-decoration:none"; title="SEND N POST NEWS">
      <div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">NEWS</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Post News Details, See Latest News</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	 </a>	

	 <a href="events.php" style="text-decoration:none"; title="SEND N POST EVENTS">
	<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">EVENTS</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Post Events Details,See Latest Events</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>	


	  <a href="subject.php" style="text-decoration:none"; title="SEE FACULTY">	
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">ADD SUBJECT</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Add Subject What You Teach  To Students</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
			</a>
		

		<a href="timetable.php" style="text-decoration:none;" title="CHECK YOUR SCHEDULE">
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">TIME TABLE</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Choose Bunk or Take The Class.. </span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>

     
    </div>


	 <div class="row">
	<a href="attendanceegisters.php" style="text-decoration:none" title="ACCESS THE SYLLABUS">
      <div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">ATTENDANCE REGISTERS</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Check Attendance Register For Your All Subjects That You Teach</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>

	<a href="academiccalendar.php" style="text-decoration:none" title="CHECK ACADEMIC CALENDAR">
	<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">ACADEMIC CALENDAR</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">See Academic Year.. Plan Your Trip For Next Holidays</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>
	
		<a href="#" style="text-decoration:none" title="GIVE FEEDBACK">
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">FEEDBACK FOR DEVELOPER</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Give Your Feedback  So That We Can Improve It</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>
		
	<a href="#" style="text-decoration:none" title="SUGGEST YOUR IDEAS N PROBLEMS">	
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">SUGGESTION BOX</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Please Give Your Suggestion Related To College... </span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>

     
    </div>

	<a href="notes.php" style="text-decoration:none;" title="CLICK HERE TO SEND NOTES ONLINE" target="_blank">
	 <div class="row" style="margin-bottom:40px;">
      <div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">NOTES</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Send Notes Online To Group Of Students </span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>

	<a href="#" style="text-decoration:none;" title="CLICK HERE FOR LIBRARY">
	<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">E-LIBRARY</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Read Books n Search Books Online</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
</a>

		<a href="news.php" style="text-decoration:none" title="CLICK HERE FOR 	QUALIFICATION">
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">EDUCATIONAL DETAILS</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Please Enter The Details Of Your Qualiication</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
		</a>

		<a href="#" style="text-decoration:none;" title="CLICK HERE FOR PAPER BANK">
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">PAPER BANK</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Full Access To All Internal And External Previous Papers</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
		</a>
		
		</div>
		<a href="postphotos.php" style="text-decoration:none;" title="CLICK HERE FOR PHOTOS" target="_blank">
	 <div class="row" style="margin-bottom:40px;">
      <div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">PHOTOS</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Just See N Share Jims Related Photos </span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
	</a>

	<a href="#" style="text-decoration:none;" title="CLICK HERE FOR VIDEOS">
	<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">VIDEOS</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Just See N Share Jims Related Videos</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
</a>

		<a href="changepassword.html" style="text-decoration:none" title="CLICK HERE FOR CHANGE PASSWORD">
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">CHANGE PASSWORD</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Just Create Your Unique Password</span><br>
        <a href="#" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
		</a>

		<a href="logout.php" style="text-decoration:none;" title="CLICK HERE FOR LOGOUT">
		<div class="col-lg-3 col-md-12 col-xs-4" style="width:260px;margin-top:70px;border:2px solid #ff9a00;margin-right:25px;"> <img src="images/Untitled-2.png" class="img-responsive" alt="No Image"; style="padding-top:20px;padding-bottom:15px;">
        <h5 style="color:#ff9a00;">LOGOUT</h5>
        <span style="color:#FFF;font-size:18px;font-family:'Times New Roman', Times, serif;padding-bottom:15px;">Click Here For Logout..,<br>WELCOME AGAIN</span><br>
        <a href="logout.php" style="text-decoration:none;color:#ff9a00;font:'Times New Roman', Times, serif;font-size:18px;margin-bottom:15px;" >LEARN MORE</a> </div>
		</a>
		
		
		
    </div>

  </div>
</div>
<!-- End Of Main Container -->

<!-- Starting Of Foooter  -->
<footer class="container-fluid " style="background-color:#000;">
	<div class="container" style="margin-top:15px;margin-bottom:15px;">
		<span style="color:#FFF;padding-top:20px;">&copy; Jagan Institute Of Management Studies</span>
        <span style="float: right;color: white;"><a href="developer.php" style="text-decoration:none;color: white;">Developed By:- Sunny Khurana</a></span>
	</div>
</footer>	

<!-- End Foooter  -->


</body>

<!-- All Scripts Are Come Here -->
<script type="text/javascript" src ="bootstrap.js"></script>
<script type="text/javascript" src ="bootstrap.min.js"></script>

<!-- End Of Scripts -->
</html>
