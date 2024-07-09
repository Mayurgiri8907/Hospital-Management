<?php

    include("conn.php");

    if(isset($_POST['loginsubmit'])){
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $check = "select email,password from registration where email = $email and password = $password";
        $result = mysqli_query($conn,$check);

        if(mysqli_num_rows($result) != 0){
            echo "<script>alert('user not register...'); window.location.href='registration.php'</script>";
        }else{
            echo $email,$password;
        }
    }
?>