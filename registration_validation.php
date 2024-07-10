<?php
    include("conn.php");

    
    if(isset($_POST['rsubmit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $name_query = "select email from registration where email = '$email'";
        $nameresult = mysqli_query($conn,$name_query);

        if(mysqli_num_rows($nameresult) != 0){
            echo "<script>alert('name is already created...'); window.location.href='registration.php'</script>"; 
        }else{
            if($password == $cpassword){
                $conformpassword = password_hash($password, PASSWORD_DEFAULT);
                $insert = "INSERT INTO `registration` (`name`, `email`, `password`, `created_at`) VALUES ('$name', '$email', '$conformpassword', CURRENT_TIMESTAMP)";
                $result = mysqli_query($conn,$insert);
                echo "<script>alert('registration successfully...'); window.location.href='login.php'</script>";
            }
            else{
                echo "<script>alert('password is not match...'); window.location.href='registration.php'</script>";
            }

        }
        
    }

?>
