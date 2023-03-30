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
        $type = $_FILES['image']['type'];
        move_uploaded_file($tmp_name,'../../images/' . $filename);
    }
    if(isset($_FILES['video'])){
        $videoname = $_FILES['video']['name'];
        $video_tmp_name = $_FILES['video']['tmp_name'];
        $type = $_FILES['video']['type'];
        move_uploaded_file($video_tmp_name,'../../videos/' . $videoname);
    }
    if(empty($errors)){
    $insert = "INSERT INTO `houses`(`name`, `price`, `info`, `size`, `bedrooms`, `bathrooms`, `type`, `location`, `image`,`video`) 
    VALUES ('{$name}','{$price}','{$info}',{$size},{$bedrooms},{$bathrooms},'{$type}','{$location}','{$filename}','{$videoname}')";
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