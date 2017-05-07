<?php
    include 'conn.php'; 
?>



<!-- Header -->
<nav class="navbar navbar-fixed-top navbar-inverse header">
  <div class="container"> <a href="home.php" class="navbar-brand" style="color:#FFF;">Jagan Institute Of Management Studies</a>
   <a href="" style="float: right;text-decoration: none;color: white;padding: 15px;text-transform: uppercase;"><?php echo $_SESSION['teacherusername'];  ?></a>
   <a href="changephoto.php"><span style="color: white;float: right;">
   <?php
    if($stmt = $conn->query("select * from admin_register_teacher where username = '".$_SESSION['teacherusername']."'")){
        while($r = $stmt->fetch_array(MYSQLI_ASSOC)){   
   ?>   
   <img src="../TeacherPanel/photos/<?php echo $r['image']; ?>" style="width: 30px;height: 30px;margin-top: 15px;border-radius:50%" >
   <?php 
        }
    }  
   ?>
   </span></a> 
   </div>
</nav>
<!-- End Of Navbar --> 
