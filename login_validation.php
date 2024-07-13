<?php
    session_start();

    include("conn.php");

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        
        $check_account = "select * from registration where email = '$email'";
        $result = mysqli_query($conn,$check_account);
        
        if(mysqli_num_rows($result) <= 0){
            echo "<script>alert('email or name not fount'); window.location.href='registration.php';</script>";
        }
        else{
            while($row = mysqli_fetch_assoc($result)){
                if(password_verify($_POST['password'],$row['password'])){

                    echo "<script>alert('login successfully...'); window.location.href='index.php';</script>";
                    $_SESSION['name'] = $row['name'];
                }
                else{
                    echo "<script>alert('wrong password...'); window.location.href='registration.php';</script>";

                }

            }
            
        }
    }
?>