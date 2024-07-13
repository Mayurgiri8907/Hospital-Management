<?php 
    @session_start();
    if(!isset($_SESSION['name']) && $_SESSION['name'] == ""){
        header("location:registration.php");
    }

    include("header.php"); 
?>
<?php include("about_block.php"); ?>
<?php include("footer.php"); ?>
<?php include("jslink.php"); ?>
