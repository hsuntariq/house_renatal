<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot.php';
    ?>
    <title>Document</title>
    <style>
        .bod {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .row{
                height:60% !important
            }
    </style>
</head>
<body>
    <?php
        $id = $_GET['id'];
        include '../../config/connect.php';
        $select = "SELECT * FROM houses WHERE id = {$id}";
        $result = mysqli_query($connection,$select);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="container bod ">
            <div class="row shadow p-4 ">
                <div class="col-lg-6">
                    <img width="100%" height="100%" src="../../images/<?php echo $row ['image'] ?>" alt="">
                </div>
                <div class="col-lg-6 text-capitalize justify-content-center  d-flex flex-column">
                    <h1 style=""><span class="text-info"> <?php echo $row['name']?></span></h1>
                    <h4 class="text-secondary">
                        Price: <span class="text-info"> Rs.<?php echo $row['price'] ?></span>
                    </h4>
                    <h5 class="text-secondary">
                        Total Bedrooms: <span class="text-info">
                            <?php echo $row['bedrooms'] ?>
                        </span>
                    </h5>
                    <h5 class="text-secondary">
                        Total Bathrooms: <span class="text-info">
                            <?php echo $row['bathrooms'] ?>
                        </span>
                    </h5>
                    <h5 class="text-secondary">
                        Info: <span class="text-info">
                            <?php echo $row['info'] ?>
                        </span>
                    </h5>
                    
                </div>
            </div>
        </div>
    <?php }}?>
</body>
</html>