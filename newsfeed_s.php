<?php
require('./login/db_connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="styleCustomerview.css" />
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="box1">
        <nav>
            <div class="nav-center">
                <div class="nav-header">
                    <h1>ShopX</h1>
                    <button class="nav-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="toogle__items">
                    <ul class="links">
                        <li>
                            <a href="./newsfeed_s.php">News feed</a>
                        </li>
                        <li>
                            <a href="./myproducts.php">My Products</a>
                        </li>
                        <li>
                            <a href="./login/logout.php">Logout</a>
                        </li>
                    </ul>
                    <a href="./profile.php">
                        <div class="profile">
                            <p><?php echo $_SESSION['username']; ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </nav>

        <div class="box2">
            <h4>NEWS FEED</h4>
        </div>

        <div class="newsfeeds">

            <?php
            // include './login/db_connect.php';
            // session_start();
            $sid = $_SESSION["shopid"];

            $sql = "SELECT photo, caption, timestamp FROM `posts` ORDER BY timestamp DESC ";
            $res = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($res);

            if ($num <= 0) {
                echo "no posts";
            }
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="newscard">
                    <h6><b>Classic Fashion Store</b></h6>
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