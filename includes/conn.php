<?php
  session_start();
  $conn = new mysqli('localhost','root','','jaganinstituteofmanagementstudies');
  if($conn->connect_errno){
      echo 'not connected properly with database';
      
  }
?>
