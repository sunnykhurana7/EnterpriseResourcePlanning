<?php
    // code to include the connection
    include '../includes/conn.php';
?>      

<?php
    if(!isset($_SESSION['teacherusername'])){
        header('location:index.php');
    }
?>

<?php
    if(isset($_GET['id'])){
        if($stmt = $conn->query("delete from  teacher_add_subject where id = '".$_GET['id']."'")){
            header('location:viewSubject.php');
        }
    }
?>
