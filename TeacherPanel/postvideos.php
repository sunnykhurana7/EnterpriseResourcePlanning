<?php
    // code to include the connection
    include '../includes/conn.php';
?>


<?php
    // code to insert the data
    if(isset($_POST['submit'])){
        
        $title = $_POST['title'];
        $description = $_POST['description'];
        $file = $_FILES['file']['name'];
        $username = $_SESSION['studentusername'];
        
        if($stmt = $conn->prepare("insert into student_video_gallery set username = ?,title=?,description=?,file=?")){
            $stmt->bind_param('ssss',$username,$title,$description,$file);
            $stmt->execute();
            if($stmt->affected_rows==1){
                move_uploaded_file($_FILES['file']['tmp_name'],'videos/'.$file);
                header('location:postvideos.php?insert');
            }else
            {
                header('location:postvideos.php?error');
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


<!-- Start Javascript Code -->
 <script type="text/javascript">
	function validation()
     {
       var title = document.getElementById("title").value;
	   var description = document.getElementById("descriptiion").value;
	   var attach = document.getElementById("file").value;
		
      if(title == "")
       {
         document.getElementById("title").style.borderColor = "#E34234";
		 document.getElementById("tit").innerHTML = "Please Give Title";
		 document.getElementById("title").focus();
		 return false; 
       }else
		if(description == "")
       {
         document.getElementById("descriptiion").style.borderColor = "#E34234";
		 document.getElementById("des").innerHTML = "Please Give Description";
		 document.getElementById("title").focus();
		 return false; 
       }else
		if(attach == "")
       {
         document.getElementById("file").style.borderColor = "#E34234";
		 document.getElementById("file").innerHTML = "Please Attach File";
		 document.getElementById("file").focus();
		 return false; 
       }
		
         
			 
     }
 </script>	

<!-- End Javascript Code -->
</head>
<body>
<?php
  // include a menu
    include '../includes/menu.php';  
?>

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method = "post" enctype="multipart/form-data">

			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">POST VIDEOS</span>
				</div>
			</div>


		  
			<div class="row">
				<div class="col-md-4">
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label for ="assignmenttitle">Video Title</label>
						<input type="text" class="form-control" placeholder="Sunny Khurana" name="title" id="title" required="required">
						<span id="tit" style="color:#F00;font-weight:bold;"></span>	
					</div>
					
					<div class="form-group">
						<label for ="assignmentdescription">Video Description</label>
						<textarea class="form-control" placeholder="Description" style="resize:none;" required="required" id="descriptiion" name="description"></textarea>
						<span id="des" style="color:#F00;font-weight:bold;"></span>
					</div>
					
					<div class="form-group">
						<label for="attach">Attach File</label>
						 <input type="file" class="form-control" name="file" id="file" required="required">
                        
						<span id="att" style="color:#F00;font-weight:bold;"></span>	
					</div>
					
					
					<div class="form-group text-center">
					    <input type="submit" name="submit" class="btn btn-sm btn-primary" value="POST" onClick="validation();">		
					</div>
					
					
						<div class="form-group text-center" style="margin-top:42px;margin-bottom:95px;text-transform:uppercase;" >
						<a href="viewvideos.html" title="Click Here To View News Uploaded By You" target="_blank">View Video Gallery</a>
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