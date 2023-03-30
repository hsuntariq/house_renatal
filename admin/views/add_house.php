<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" rel="stylesheet" />

        <?php
    include '../../assets/boot.php';
    ?>
        <title>Add A house</title>
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
        <?php
 
            session_start();
            if(isset($_SESSION['message'])){
                echo "<div class='fixed-top bg-dark m-auto
                text-light text-center  w-25 p-3 font-weight-bolder flash'>"
                . $_SESSION['message'] ."</div>";
            }
        ?>
        <!-- <a href="../../index.php">Home</a> -->
        <div class="sidebar">
            <a href="http://localhost/FYP/">
                <i class="bi bi-house">
                    <h6> Add House</h6>
                </i>
            </a>
            <a href="../../index.php">
                <i class="bi bi-people">
                    <h6> View Users</h6>
                </i>
            </a>
            <a href="../../user/views/all_houses.php">
                <i class="bi bi-houses">
                    <h6> View Houses</h6>
                </i>
            </a>
            <a href="../../index.php">
                <i class="bi bi-truck-flatbed">
                    <h6> View houses on rent</h6>
                </i>
            </a>
            <a href="../../index.php">
                <i class="bi bi-building">
                    <h6>Property on Sale</h6>
                </i>
            </a>


        </div>
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
                        <label for="">location</label>
                        <input type="text" class="form-control" name="location" required>
                        <label for="">Type</label>
                        <select class="form-control" name="type" id="">
                            <option value="1">House Sale</option>
                            <option value="2">House Rent</option>
                            <option value="3">Property Sale</option>
                        </select>
                        <label for="">Image</label>
                        <input type="file" class="form-control mt-2" name="image" id="" required>
                        <label for="">Add A video</label>
                        <input type="file" class="form-control mt-2" name="video" id="" required>
                        <input type="submit" class="form-control mt-2 btn btn-success" value="Add House">
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>
        <script>
            const flash = document.querySelector('.flash');
            setTimeout(() => {
                flash.style.transition = 'all .5s';
                flash.style.transform = "translateY(-100%)";
            }, 2000)
        </script>
    </body>

</html>