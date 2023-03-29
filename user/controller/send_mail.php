<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot.php'; ?>
    <title>Document</title>
</head>
<body>
    <?php 
        $id = $_GET['id'];
        include '../../config/connect.php';
        $select = "SELECT * FROM houses WHERE id={$id}";
        $result = mysqli_query($connection,$select);
        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="container">

            <h1 class="text-center">Contact owner</h1>
            <div class="row">
                <div class="col-lg-6">
                        <img width="100%" height="100%" src="../../images/<?php echo $row['image']?>" alt="">
                    </div>
                    <div class="col-lg-6">
                        <form action="./send_message.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
                            <label for="">Asset Name</label>
                            <input class="form-control" type="text" name="name" value="<?php echo $row['name'] ?>">
                            <label for="">Asset Price</label>
                            <input class="form-control" type="text" name="price" value="<?php echo $row['price'] ?>">
                            <label for="">Asset Info</label>
                        <input class="form-control" type="text" value="<?php echo $row['info'] ?>">
                        <textarea name="message" class="from-control w-100 mt-3" id="" cols="30" rows="5"></textarea>
                        <input type="submit" value="Send Message" class="form-control btn btn-info">
                    </form>
                    </div>
                </div>
            </div>
    <?php }}?>
</body>
</html>