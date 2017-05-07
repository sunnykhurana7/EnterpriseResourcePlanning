<?php
    include 'conn.php'; 
?>

<!-- Header -->
<nav class="navbar navbar-fixed-top navbar-inverse header">
  <div class="container"> <a href="home.php" class="navbar-brand" style="color:#FFF;">Jagan Institute Of Management Studies</a>
   <a href="" style="float: right;text-decoration: none;color: white;padding: 15px;text-transform: uppercase;"><?php echo $_SESSION['studentusername'];  ?></a>
   <a href="changephoto.php"><span style="color: white;float: right;;">
   <?php 
    if($stmt = $conn->query("select * from  admin_register_student where username = '".$_SESSION['studentusername']."'")){
        while($s = $stmt->fetch_array(MYSQLI_ASSOC)){
            
   ?>
   <img src="../studentpanel/photos/<?php echo $s['image']?>" style="width: 30px;height: 30px;margin-top: 12px;border-radius:50%" >
   
   
   <?php
    
        }
    }
   ?>
   </span></a> 
   </div>
</nav>
<!-- End Of Navbar --> 
