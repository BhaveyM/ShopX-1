<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$err=false;
  include './db_connect.php';
  $name=$_POST["name"];
  $email=$_POST["email"];
  if(isset($_POST['radio'])){
    $acc_type= $_POST ['radio'];
  } else {
    $acc_type= "1102";
  }
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $exists=false;
  if(($password==$cpassword)&&$exists==false){
    $sql="INSERT INTO `users` (`user_name`, `email`, `name`, `password`, `cpassword`, `acc_type`, `time`) VALUES ('$username', '$email', '$name', '$password', '$cpassword', '$acc_type', current_timestamp())  ";
     $result=mysqli_query($conn,$sql);
    if($result){
      echo "success";
      }
      else{
        echo "failedd";
      }

  }
}




?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopX</title>
    <link rel="stylesheet" href="../home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="box">
        <!-- <div class="bar">

        </div> -->
        <div class="block">
            <div class="cont3">
                <div class="signup">
                    <div class="box2">
                      <form action="../login/signup.php"  method="post"  id="loginForm">
                        <h2>SignUp</h2>
                        <div class="txt_field mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name</label>
                          <input type="text" name="name" placeholder="Name" class="form-control" id="exampleInputName"
                            aria-describedby="emailHelp">
                        </div>
                        <div>
                          <label for="exampleInputEmail1" class="form-label">Account Type</label>
                        </div>
                        <div class="form-check-inline">
                
                          <input class="form-check-input" type="radio" name="radio" value="1101" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Seller
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <input class="form-check-input" type="radio" name="radio" value="1102" id="flexRadioDefault2">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Customer
                          </label>
                        </div>
                        
                        <div class=" txt_field mb-3 mt-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="text" placeholder="Email address" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        </div>
                        <div class=" txt_field mb-3 mt-3">
                            <label for="exampleInputEmail1" class="form-label">UserName</label>
                            <input type="text" placeholder="User Name" name="username" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp">
                          </div>
                        <div class="txt_field mb-3">
                          <label for="exampleInputPassword1" class="form-label"> Create a password (min 6 characters)</label>
                          <input type="password" placeholder="Password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class=" txt_field mb-3">
                          <label for="exampleInputPassword1" class="form-label"> Confirm password</label>
                          <input type="password" placeholder="Confirm Password" name="cpassword" class="form-control" id="exampleInputPassword2">
                        </div>
                
                        <button type="submit" class="btn"> SignUp</button>
                      </form>
                      <div class="sign mt-4">
                      <a class="sign"href="../login/login.php">
                        <h6>Already have an account?</h6>
                      </a>
                    </div>
                    </div>
                  </div>
                  </div>
                  
            <div class="cont2">
                <img src="../img/landin page vector.png" alt="" width="660px" height="630px">
            </div>
        </div>
    </div>
</body>

</html>