<?php
    // To Destroy The Session
    session_start();
    session_destroy();
    header('location:index.php');
?>