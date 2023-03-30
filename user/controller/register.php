<?php
    include '../../config/connect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $insert = "INSERT INTO `user`(`name`, `email`, `password`, `confirm_password`) VALUES ('{$name}','{$email}','{$password}','{$c_password}')";
    if($password == $c_password){
        session_start();
        mysqli_query($connection,$insert);
        $_SESSION['username'] = $name;
        header('Location: http://localhost/FYP/');
        unset($_SESSION['reg_error']);
    }else{
        session_start();
        $_SESSION['reg_error'] = "Passwords do not match";
        header('Location: http://localhost/FYP/');
    }
?>