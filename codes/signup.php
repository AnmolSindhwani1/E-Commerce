<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | SUPERSTORE</title>
        <link rel="shortcut icon" href="./img/srtcticon.png" type="image/png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            footer {
    position: relative;
    background-color: #3d3d3d;
    color:white;
    width: 100%;
    bottom: 0;
    font-weight: 300;
}
.columnf{
  float: left;
  width: 33.33%;
  padding: 5px;

        </style>
</head>

<body>
    <?php include "includes/header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="yoo" style="padding-top:80px;">
                <img src="./img/6.jpg">
                </div>
            </div>
<div class="yo" style="padding-top:100px;">
            <div class="col-sm-5">
<div class="no" style="padding-top: 10px;">
                <h2 style="color:green">SIGN UP</h2>

                    <form  action="signup_script.php" method="POST">
         

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        <div class="col-sm-10">
                                  Already have an account ?<a href="login.php"> Login</a>
                        </div>

                </form>
        </div>
    </div>
</div>
    </div>
    </div>
      <?php include "includes/footer.php"; ?>
    </body>
</html>
