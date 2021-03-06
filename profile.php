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
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>

    <div class="box11">
        <div id="menu">
            <?php
            include('nav_s.php');
            echo addMenu("");
            ?>
        </div>
        <div class="box22">
            <h4>PROFILE</h4>
        </div>
        <form action="./add_post.php" method="post" enctype="multipart/form-data">
            <div class="addproduct1">
                <!-- <div class="vector1">
                    <img src="./img/4025692.jpg" alt="" width="370px" height="370px">
                </div> -->
                <div class="productform1">

                    <div class="txtfield">
                        <input type="file" id="image-input" name="post_image" accept="image/*" required>
                    </div>

                    <div>
                        <br>
                        <input class="form-control" name="caption" type="text" placeholder="caption" required maxlength="20">
                    </div>

                    <button class="btn">Add</button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <br>
        <div class="newsfeeds">

            <?php
            // include './login/db_connect.php';
            // session_start();
            $sid = $_SESSION["shopid"];

            $sql = "SELECT * FROM `posts` where user_id ='$sid'";
            $res = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($res);

            if ($num <= 0) {
                echo "no posts";
            }
            while ($row = mysqli_fetch_assoc($res)) {
                $shopid_post = $row['user_id'];
            ?>
                <div class="newscard">
                    <h6>
                        <img src="./img/user.png" width="30px" height="30px">
                        <b>
                            <?php
                            $sql1 = "SELECT * FROM shop WHERE shop_id='$shopid_post'";
                            $res1 = mysqli_query($conn, $sql1);
                            $shopname = mysqli_fetch_assoc($res1);
                            echo $shopname['shop_name'];
                            ?>
                        </b>
                    </h6>
                    <img src="<?php echo "posts/" . $row['photo']; ?>" alt="post" width="260px">
                    <div class="Caption">
                        <p><?php echo $row['caption']; ?> </p>
                    </div>
                </div>
            <?php
            }

            ?>
        </div>
</body>

</html>