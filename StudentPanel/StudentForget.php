<?php
    // connection include
    include '../includes/conn.php';
?>





<?php
    // Code To Update The Details
    if(isset($_POST['Submit'])){
        $email = $_POST['email'];
        $number = rand(0000,9999);
        
        if($stmt = $conn->query("update admin_register_student set password ='".$number."' where email = '".$email."'")){
            echo 'password is update successfully';
            exit;
            
        }
        
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JIMS MANAGEMENT SYSTEM</title>
<link href="css/StudentForget.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="container"> 
 <div class="main-container">
	<div class="heading">
		Jims Management System
	</div>
      <form name="#" enctype="multipart/form-data" role="form" class="form1" method="post">
 			<span>Forgot Your Password?</span>		

 
		     <div class="form-group">
		       <input type="text" class="form-control"  placeholder="E-Mail Id" name="email"  />
			 </div>	
         
		 
		    	
	      
             <div class="form-group">
				<input type="submit" name="Submit"  value="Send Password"/>
			 </div>
        <a href="index.php" style="text-decoration:none;">Login </a>
    

		</div>
	  </form>
            <!-- Name Of the Developer -->
      <div class="container text-center" style="margin-top: 25px;">
        <span style="text-align: center;color: white;padding-top:25px;margin-left: 0px;">DEVELOPED BY:-SUNNY KHURANA</span>
       </div> 
 	
 </div>	

</div>
<script src="js/bootstrap.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
