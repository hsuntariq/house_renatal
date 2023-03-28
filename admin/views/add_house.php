<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
    include '../../assets/boot.php';
    ?>
        <title>Add A house</title>
        <style>
            body {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .bod {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }


            label {
                text-transform: capitalize;
            }
        </style>
    </head>

    <body>
        <?php
            session_start();
            if(isset($_SESSION['message'])){
                echo "<div class='fixed-top bg-dark m-auto
                text-light text-center  w-25 p-3 font-weight-bolder flash'>"
                . $_SESSION['message'] ."</div>";
            }
            session_destroy();
            unset($_SESSION['flash']);
        ?>
            <a href="../../index.php">Home</a>
        <div class="container bod">
            <div class="row p-4 border bg-light shadow rounded">
                <div class="col-lg-6">
                    <img width="100%" height="100%" style="object-fit: cover;"
                        src="https://cdn.wallpapersafari.com/77/32/FQvRkg.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <form action="../controller/add-house.php" method="post" enctype="multipart/form-data">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                        <?php if (!empty($errors['name'])): ?>
                        <span class="text-danger"><?php echo $errors['name']; ?></span>
                        <?php endif; ?>
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price" required>
                        <label for="">Info</label>
                        <input type="text" class="form-control" name="info" required>
                        <label for="">size</label>
                        <input type="number" class="form-control" name="size" required>
                        <label for="">bedrooms</label>
                        <input type="number" class="form-control" name="bedrooms" required>
                        <label for="">bathrooms</label>
                        <input type="number" class="form-control" name="bathrooms" required>
                        <input type="file" class="form-control mt-2" name="image" id="" required>
                        <input type="submit" class="form-control mt-2 btn btn-success" value="Add House">
                    </form>
                </div>
            </div>
        </div>
        <script>
            const flash = document.querySelector('.flash');
            setTimeout(() => {
                flash.style.transition = 'all .5s';
                flash.style.transform = "translateY(-100%)";
            }, 2000)
        </script>
    </body>

</html>