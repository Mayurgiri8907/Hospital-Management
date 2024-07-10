<?php 
    @session_start();
    if(!isset($_SESSION['name']) && $_SESSION['name'] == ""){
      header("location:login.php");
    }
    include("header.php"); 
?>
<?php include("appointment_block.php"); ?>
<?php include("footer.php"); ?>
<?php include("jslink.php"); ?>
