<?php
    include("conn.php");

    if(isset($_POST['singup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $check_name = "select * from registration where email = '$email'";
        $result = mysqli_query($conn, $check_name);

        if(mysqli_num_rows($result) >= 1){
            echo "<script>alert('email already created...'); window.location.href='registration.php';</script>";
        }
        else{
            if($password == $cpassword){
                $conformpassword = password_hash($password, PASSWORD_DEFAULT);
                $insert = "INSERT INTO `registration` (`name`, `email`, `password`, `created_at`) VALUES ('$name', '$email', '$conformpassword', CURRENT_TIMESTAMP)";
                $result = mysqli_query($conn, $insert);
                echo "<script>alert('record inserted successfully...'); window.location.href='index.php';</script>";
            }
            else{
                echo "<script>alert('password not match...'); window.location.href='registration.php';</script>";
            }
        }
    }
?>