<?php
require('./login/db_connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="styleSellerview.css" />
    <!-- <script src="script.js"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="box1">
        <div id="menu">
            <?php
            include('nav_s.php');
            echo addMenu("mp");
            ?>
        </div>
        <div class="box2">
            <h4>ADD PRODUCTS</h4>
        </div>
        <form action="./add_prod.php" method="post" enctype="multipart/form-data">
            <div class="addproduct">
                <div class="vector">
                    <img src="./img/4025692.jpg" alt="" width="370px" height="370px">
                </div>
                <div class="productform">
                    <div class="txtfield">
                        <input class="form-control" type="text" name="prod_name" placeholder="Product name" required>
                        <br>
                    </div>

                    <div class="txtfield">
                        <input class="form-control" type="text" name="prod_desc" placeholder="Description" required>
                        <br>
                    </div>
                    <div class="txtfield">
                        <input class="form-control" type="number" name="price" placeholder="Price" required>
                        <br>
                    </div>
                    <div class="txtfield">

                        <input type="file" id="image" name="image" accept="image/*" required>

                    </div>

                    <button class="btn">Add</button>
                </div>
            </div>


    </div>
    </form>

</body>

</html>