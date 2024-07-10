<?php
    session_start();
    include("conn.php");

    
    if(isset($_POST['loginsubmit'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $check = "select * from registration where name = '$email' or email = '$email'";
        $result = mysqli_query($conn,$check);

        if(mysqli_num_rows($result) == 0){
            echo "<script>alert('user not found...'); window.location.href='registration.php'</script>"; 
        }else{
            while($row = mysqli_fetch_assoc($result)){
              echo $row['password'];
              if(password_verify($password,$row['password'])){
                echo "<script>alert('login successfully...'); window.location.href='index.php'</script>";
                $_SESSION['name'] = $email;
              }
              else{
                echo "<script>alert('password is not match...'); window.location.href='login.php'</script>";
              }
            }

        }
        
    }

?>
