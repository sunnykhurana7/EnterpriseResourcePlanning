<?php
    // code to include the connection
    include '../includes/conn.php';
?>

<?php
  session_start();
  $conn = new mysqli('localhost','root','','jaganinstituteofmanagementstudies');
  if($conn->connect_errno){
      echo 'not connected properly with database';
      
  }
?>


<?php
    if(isset($_POST['push'])){
        $name = $_POST['username'];
        $pass = $_POST['password'];
       
        
        if($stmt = $conn->query("select * from admin_register_coordinators where username = '".$name."' and password = '".$pass."'")){ 
          if($stmt->num_rows>0){       
            $_SESSION['coordinatorsusername'] = $name;
            header('location:home.php');
          }           
        }else
        {
            header('location:abc.php');
        }
        
    }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JIMS MANAGEMENT SYSTEM</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
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
      <form  enctype="multipart/form-data" role="form" class="form1" method="post" action="#">
		
		     <div class="form-group">
		       <input type="text" class="form-control"  placeholder="Username" name="username" required= "required"/>
			 </div>	
         
		 
		     <div class="form-group">
		       <input type="password" class="form-control" style="" placeholder="Password" name="password" required="required"/>
			 </div>	
	      
             <div class="form-group">
				<input type="submit" name="push"  />
                
			 </div>
        <a href="StudentForget.html" style="text-decoration:none;">Forgot Password ?</a>
    

		</div>
	  </form> 	
 </div>	

</div>
<script src="js/bootstrap.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
