<!-- PHP CODE COMES HERE -->

<?php
    // code to include the connection
    include '../includes/conn.php';
?>   

<?php
    if(!isset($_SESSION['studentusername'])){
        header('location:index.php');
    }
?>

<?php
//    code to send the messages 
    if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];
       
       
       if($stt = $conn->query("select * from admin_register_student where username='".$_SESSION['studentusername']."'"))
       {
           while($r=$stt->fetch_array(MYSQLI_ASSOC)){
               $fromusername = $_SESSION['studentusername'];
               $from = $r['fullname'];
               
               }
       }
       
       
       if($st = $conn->query("select * from admin_register_student where "))
       
       
       if($stmt = $conn->prepare("insert into  jims_messages_panel set from=?,fromusername=?,to=?,tousername=?,subject=?,message=?,date=?"))
        $stmt->bind_param('sssssss');
        $stmt->execute();
       
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

<!-- All Javascript Code Comes Here-->
	<script type="text/javascript">
		function validation()
			{	
				var to =  document.getElementById("to").value;
			    var subject =  document.getElementById("subject").value;
				var message = document.getElementById("message").value;
				var attach = document.getElementById("attach").value;
				
				if(to=="")
				{
					document.getElementById("to").style.borderColor = "#F00";
					document.getElementById("t").innerHTML = "Username Required";
					document.getElementById("to").focus();
					return false;   	
				}else
                if(subject =="")
      			{
					document.getElementById("subject").style.borderColor  = "#F00";
				    document.getElementById("subj").innerHTML = "Subject Required";
					document.getElementById("subject").focus();
					return false;		
				}else
                  if(message =="")
					{	
						document.getElementById("message").style.borderColor = "#F00";
						document.getElementById("mess").innerHTML = "Please Enter Message";
					    document.getElementById("message").focus();
						return false;
					}else
                if(attach =="")
					{
						document.getElementById("attach").style.borderColor ="#F00";
						document.getElementById("att").innerHTML = "Please Attach File";
						document.getElementById("attach").focus();
					    return false;
					}				
					
			}
	</script>
<!-- End Javascript -->


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
					<span style="font-size:25px;font-weight:bold;color:blue;">SEND MESSAGES</span>
				</div>
			</div>


		  
			<div class="row">
				<div class="col-md-4">
				</div>
				
				
				<div class="col-md-4">
					<a href="inbox.html" class="" style="text-decoration:none;text-transform:uppercase;font-weight:bold;margin-bottom:15px;" title="Click Here To Check Your Inbox" target="_blank">Inbox</a>
					
					<a href="outbox.html" class="pull-right" style="text-decoration:none;text-transform:uppercase;font-weight:bold;margin-bottom:15px;"title="Click Here To Check Your Inbox" target="_blank" >outbox</a>		
						
					<div class="form-group" style="margin-top:15px;">
						<label for ="to">To(Username)</label>
						<!--<input type="text" class="form-control" placeholder="Sunny Khurana" required id="to" name="to">-->
                        <select class="form-control" name="username">
                        
                           <?php
                           if($stmt = $conn->query("select * from  admin_register_student  ")){
                               while($s=$stmt->fetch_array(MYSQLI_ASSOC)){
                                   
                               ?> 
                            <option name="username" style="text-transform: uppercase;" value="<?php echo $s['fullname'] ?> "><?php echo $s['fullname'] ?> (<?php echo $s['username'] ?>)</option>
                        <?php
                            }
                           }

?>
                        
                        </select>
					    <span id="t" style="color:#F00;font-weight:bold;"></span>
					</div>
					
					<div class="form-group">
						<label for ="subject">Subject</label>
						<input type="text" class="form-control" placeholder="Rahul Tayagi" required id="subject" name="subject">
						<span id="subj" style="color:#F00;font-weight:bold"></span>
					</div>
					
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" style="resize:none;" placeholder="I Want A Help From You" required id="message" name="message"></textarea>
						<span id="mess" style="color:#F00;font-weight:bold;"></span>
					</div>
					
					
					
					<div class="form-group text-center" style="margin-bottom:48px;">
					    <input name="submit" type="submit" class="btn btn-primary btn-sm" title="Click Here" value="Send Message" onClick="validation();">
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