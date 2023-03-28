<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include '../../assets/boot.php' ; ?>
        <title>Houses</title>
    </head>

    <body>
        <div class="container">
            <div class="row gap-3">
                <?php
        include '../../config/connect.php';
        $select = "SELECT * FROM houses";
        $result = mysqli_query($connection,$select);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
                <div class="col-lg-4 my-3 p-3 shadow">
                    <img width="100%" height="200px" src="../../images/<?php echo $row['image'] ?>" alt="">
                    <h2 class="text-info"> <?php echo $row['name'] ?> </h2>
                    <h4>Price:Rs. <span class="text-info"><?php echo $row['price'] ?></span></h4>
                    <h6 class="">
                        info <span class="text-info"><?php echo $row['info'] ?></span>
                    </h6>
                    <h6>Bedrooms: <span class="text-info">
                        <?php echo $row['bedrooms'] ?>
                    </span></h6>
                    <h6>Bedrooms: <span class="text-info">
                        <?php echo $row['bathrooms'] ?>
                    </span></h6>
                    <a href="./single_house.php?id=<?php echo $row['id'] ?>" class="btn btn-info w-100">
                    View More Info
                </a>
                </div>
                
        <?php }}?>
            </div>
        </div>
    </body>

</html>