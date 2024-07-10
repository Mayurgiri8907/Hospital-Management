<?php  
    @session_start();
    if(!isset($_SESSION['name']) && $_SESSION['name'] == ""){
      header("location:login.php");
    }
    $conn = mysqli_connect("localhost","root","","hospital");

    if(!$conn){
        die("error");
    }
?>