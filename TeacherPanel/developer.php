
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DEVELOPER PAGE</title>
  <link href="css/developer.css" type="text/css" rel="stylesheet">
  <link href="images/logo1.png" rel="shortcut icon" type="image/icon" />
</head>

<body>
 
<!-- Header -->
<?php
    include '../includes/teachermenu.php';
?>
<!-- End Of Navbar --> 
        
    <div class="message" style="font:24px   ;">
      <div class="container">
      <?php
        if(isset($_GET['contact'])){
            
            echo '<span style=color:black;font-size:18px;text-transform:uppercase;margin-top:40px;font-weight:bold;>Thank You For Contact us...</span>'; 
            echo '<span style=color:black;font-size:18px;text-transform:uppercase;margin-top:40px;font-weight:bold;>we come back to you shortly..</span>';        
        } 
    ?>
    </div>
   </div> 
    <div class="box">
      <div class="container">
         <div class="contact">
            <div class="con">
              feel free to call me or contact me
                <div class="number">+91-9871727979</div>
                <div class="gmail" style="color: black;">researchpapercenter@gmail.com</div>    
                </div>
                   <form method="post" action="#" name="form1" enctype="multipart/form-data">
                      <input type="text" name="name" placeholder="NAME" required="required"><br>
                      <input type="text" name="email" placeholder="EMAIL" required="required"><br>
                      <input type="text" name="subject" placeholder="SUBJECT" required="required"><br>
                      <textarea placeholder="MESSAGE" name="message" required="required"></textarea><br><br><br>
                      <input type="submit" name="submit" value="Contact" style="">
                   </form>
            </div>
         </div>    
         <div class="information">
           <span>hello</span><br>
                   <div class="name">I am Sunny Khurana</div>
                  <p style="text-transform: capitalize;">I Am Graduate In Bca.. i am pursuing mca from jagan institute of management studies... I have little bit knowledge on different technologies like c , c++ , photoshop , php ,bootstrap, java n dreamweaver....
                  <br>
                  LiveWebsites:-<br>
                 <a href="http://www.issacitlabs.com/" style="text-decoration: none;color: #ea604b" target="_blank">1.www.IssacItLabs.com</a><br>
                 <a href="http://www.Solutions4you.in" style="text-decoration: none;color:#ea604b;" target="_blank">2.www.solutions4you.in</a><br>
                 <a href="http://www.ResearchPaperCenter.in" style="text-decoration: none;color:#ea604b;" target="_blank">3.www.ResearchPaperCenter.com</a><br>
                <a href="http://www.harshitwedspreeti.in" style="text-decoration: none;color:#ea604b;" target="_blank">4.www.harshitwedspreeti.in</a><br>
                

                  </p><br>
                  
           
         </div>
      </div>
       <img src="images/sunny.jpg" style="width:300px;height:300px;border-radius:50%;margin-left:860px;
    margin-top: -104px;border:4px solid #ea604b;">
    </div><!-- End Box -->
    
<!-- Starting Of Foooter  -->
<footer class="container-fluid " style="background-color:#000;">
    <div class="container" style="margin-top:15px;margin-bottom:15px;">
        <span style="color:#FFF;padding-top:20px;">&copy; Jagan Institute Of Management Studies</span>
        <span style="float: right;color: white;"><a href="developer.php" style="text-decoration:none;color: white;">Developed By:- Sunny Khurana</a></span>
    </div>
</footer>    

<!-- End Foooter  -->
   
 </div>
</body>
</html>
