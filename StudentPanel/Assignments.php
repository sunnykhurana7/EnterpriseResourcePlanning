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


<!-- Javascript -->
<script type="text/javascript">
	function validation()
	{
		var title = document.getElementById("title").value;
		var description = document.getElementById("description").value;
		var send = document.getElementById("send").value;
		var attach = document.getElementById("attach").value;

		if(title=="")
	{
		document.getElementById("title").style.border = "4px solid #E34234";
		document.getElementById("tit").innerHTML = "Please Give Title";
		document.getElementById("title").focus();
		return false;
	}else
      if(description == "")
	{
			document.getElementById("description").style.border = "4px solid #E34234";
			document.getElementById("des").innerHTML = "Please Give Description";
			document.getElementById("description").focus();
			return false;
	}else
      if(send == "")
	{
			document.getElementById("send").style.borderColor = "#E34234";
			document.getElementById("sen").innerHTML = "Please Give Description";
			document.getElementById("send").focus();
			return false;
	}else 
		if(attach =="")
	{
			document.getElementById("attach").style.borderColor = "#E34234";
			document.getElementById("att").innerHTML = "Attach File";
			document.getElementById("attach").focus();
			return false;
	}
		
	}
</script>

</head>
<body>
<!-- Header -->
<?php include '../includes/menu.php' ?>
<!-- End Of Navbar --> 
 

	<!-- Area Of Profile -->
	
		<div class="container" style="margin-top:100px;">
		  <form method = "post" enctype="application/form-data">	
		  
		  
		  <div class="row" style="margin-bottom:15px;">
				<div class="col-md-12 col-lg-12 col-xs-12 text-center">
					<span style="font-size:25px;font-weight:bold;color:blue;">SEND ASSIGNMENT'S</span>
				</div>
			</div>
		  
		  
			<div class="row">
				<div class="col-md-4">
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label for ="assignmenttitle">Assignment Title</label>
						<input type="text" class="form-control" placeholder="Sunny Khurana" required name="title" id="title">
							<span id="tit" style="color:red;font-weight:bold;"></span>
					</div>
					
					<div class="form-group">
						<label for ="assignmentdescription">Assignment Description</label>
						<textarea class="form-control" placeholder="Description" required name="description" style="resize:none;"  id="description"></textarea>
						<span id="des" style="color:red;font-weight:bold;"></span>
					</div>
					
					<div class="form-group">
						<label for="whomyousend">Whom You Want To Send?</label>
						<select class="form-control">
                            <option>Select</option>
                                <option>Mr.JP Singh</option>
                                <option>Mr. Brajesh Kochar</option>
                                <option>Mrs.Deepti Sharma</option>
                                <option>Mrs.Komal</option>
                        </select>
						<span id="sen" style="color:red;font-weight:bold;"></span>
					</div>
					
					<div class="form-group">
						<label for="attach">Attach File</label>
						<input type="file" class="form-control" name="attach" id="attach">
						<span id="att"></span>
					</div>
					
					
					<div class="form-group text-center">
					    <input type="submit" name="submit" value="SEND" class="btn btn-sm btn-primary" onClick="validation()">		
					</div>
					
					<div class="form-group text-center">
						<a href="viewassignments.html" target="_blank" style="text-decoration:none;text-transform:uppercase">View assignmnet that you send</a>
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