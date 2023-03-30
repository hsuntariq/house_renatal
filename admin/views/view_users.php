<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <?php include '../../assets/boot.php' ; ?>
        <title>Houses</title>
      <style>
            /*  */
            body {
                display: flex;
            }


            label {
                text-transform: capitalize;
            }

            .sidebar {
                height: 100vh;
                width: 9vw;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
            }

            .sidebar .bi {
                font-size: 1.5rem;
                display: flex;
                flex-direction: column;
                font-style: none;
                justify-content: center;
                align-items: center;
            }

            .sidebar h6 {
                font-size: 0.6rem;
                text-align: center;
            }
        </style>
    </head>

    <body>
     
        <!-- <a href="../../index.php">Home</a> -->
        <div class="sidebar">
   <a href="http://localhost/FYP/">
                <i class="bi bi-house">
                    <h6> Add House</h6>
                </i>
            </a>
            <a href="./view_users.php">
                <i class="bi bi-people">
                    <h6> View Users</h6>
                </i>
            </a>
            <a href="./all_houses.php">
                <i class="bi bi-houses">
                    <h6> View Houses</h6>
                </i>
            </a>
            <a href="./rent_houses.php">
                <i class="bi bi-truck-flatbed">
                    <h6> View houses on rent</h6>
                </i>
            </a>
            <a href="./property_sale.php">
                <i class="bi bi-building">
                    <h6>Property on Sale</h6>
                </i>
            </a>


        </div>
        <div class="container">
            <div class="row gap-3">
                <?php
        include '../../config/connect.php';
        $select = "SELECT * FROM user";
        $result = mysqli_query($connection,$select);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
                <div class="col-lg-4 my-3 p-3 shadow">
                    <h5 class="text-secondary">Name: <?php echo $row['name'] ?> </h5>
                    <h5 class="text-secondary">Email: <?php echo $row['email'] ?> </h5>
                    <?php
                        if($row['role'] == 1){
                            echo "<h5 class='text-secondary'>Role: Admin</h5>";
                        }else{
                            echo "<h5 class='text-secondary'>Role: Simple User</h5>";
                        }
                    ?>
                </div>
                
        <?php }}?>
            </div>
        </div>
    </body>

</html>