<?php
    include '../../config/connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $select = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'";
    $check = mysqli_query($connection,$select);
    if(mysqli_num_rows($check) > 0){
        while($row = mysqli_fetch_assoc($check)){
            session_start();
            $_SESSION['username'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['reg_error'] = "Welcome Back " . $row['name'];
        }
        header("Location: http://localhost/FYP/index.php");
    }else{
        session_start();
        $_SESSION['reg_error'] = "Invalid Credentials";
        header('Location: http://localhost/FYP/');
    }
?>