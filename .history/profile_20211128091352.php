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
                            <a href="./seller.php">Add Products</a>
                        </li>
                        <li>
                            <a href="./myproducts.php">My Products</a>
                        </li>
                        <li>
                            <a href="./login/logout.php">Logout</a>
                        </li>
                    </ul>
                    <div class="profile">
                        <p>Classic Fashion Store</p>
                    </div>
                </div>
            </div>
        </nav>
        <div class="box2">
            <h4>PRODUCTS</h4>
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
        <!-- <div class="postbox">
            <div class="post">
                <img src="" alt="post" style="width:80%" style="align-items: center;">
                <div class="caption">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>
            <div class="post">
                <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="caption">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>
            <div class="post">
                <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="caption">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>
            <div class="post">
                <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="caption">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>
            <div class="post">
                <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="caption">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>
            <div class="post">
                <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="caption">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>
        </div>
 -->



</body>

</html>