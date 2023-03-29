<?php
    include '../../config/connect.php';
    $name = $_POST['name'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    $size = $_POST['size'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $errors = [];
    if(empty($name)){
        $errors['name'] = 'Name Required';
    }
    // code for image
    if(isset($_FILES['image'])){
        $filename = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name,'../../images/' . $filename);
    }
    if(empty($errors)){
    $insert = "INSERT INTO `houses`(`name`, `price`, `info`, `size`, `bedrooms`, `bathrooms`, `type`, `location`, `image`) 
    VALUES ('{$name}','{$price}','{$info}',{$size},{$bedrooms},{$bathrooms},'{$type}','{$location}','{$filename}')";
    $query = mysqli_query($connection,$insert);
    // display the flash message
    session_start();
    $_SESSION['message'] = 'House Inserted Successfully';
    header("Location: http://localhost/FYP/admin/views/add_house.php");
}

else{
    // header("Location: http://localhost/FYP/admin/views/add_house.php");
    foreach($errors as $key=> $error){
        echo $key . "=" . $error;
    }
}
    

?>