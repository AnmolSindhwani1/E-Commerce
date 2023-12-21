<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home |SUPERSTORE</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body,
html {
    width: 100%;
    height: 100%;
}

body{
    padding-top:100px;
}

body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 550;
}

#content{
    min-height: 600px;
}

.rmvb{
    list-style: none;
    padding-left: 50px;
}

.color{
    text-align: center;
    text-transform: uppercase;
}

.thumbnail1{
    overflow: auto;
    padding: 10px 0 0 10px;
}

#banner_image {
    padding-bottom: 50px;
    margin-bottom: 20px;
    text-align: center;
    color: #f8f8f8;
    background: url("img/yo.jpg") no-repeat center center;
    background-size: cover;
}

#banner_content {
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    margin-top: 12%;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.5);
    max-width: 600px;
    border-radius: 25px;
}


.modal-header, .close{
    background-color:orange;
    color: white !important;
    text-align: center;
    font-size: 50px;
}

.modal-footer{
    background-color:green;
}

#item_list {
    padding-top: 50px;
}




#login-panel .panel-footer{
    font-weight:normal;
}

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

}

.row:after{
  content: "";
  display: table;
  clear: both;
}


#thmb{
    float: left;
    padding: 0 20px 0 30px;
}

#bdy{
    padding-top: 80px;
    padding-bottom: 20px;
}

.thumbnail1{
    overflow: auto;
    padding: 10px 0 0 10px;
}

.red{
    color:red;
}

#settings-container{
    margin-bottom:10px;
}

.navbar-brand{
    font-size:20px;
}

@media(max-width:768px) {
    #banner_content {
        padding-bottom: 15%;
    }
    footer{
        text-align:left;
    }
}

.remove_item_link{
    color:#0000ff;
}
</style>
    </head>
    <body style="padding-top: 50px;">

     
        <?php
        include 'includes/header.php';
        ?>
       

        <div id="content">
            
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Biggest Online Grocery Store</h1>
                            <h4><p>Flat 20% OFF on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
         
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h2 style="color:GREEN">Hygienically Packed</h2><h3 style="color:green">Safely Delivered</h2>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="./img/1.jpg" alt="" >
                                        <div class="caption">
                                            <h3>Grocery & Staples</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="./img/2.jpg" alt="" >
                                        <div class="caption">
                                            <h3>Vegetables & Fruits</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                   <img src="./img/3.jfif" alt="" >
                                        <div class="caption">
                                            <h3>Personal care </h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php
                               ">
                               <div class="thumbnail">
                                   <img src="./img/4.jfif" alt="" >
                                        <div class="caption">
                                            <h3>Beverages</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>

         
        </div>

       
        <?php
        include 'includes/footer.php';
        ?>
        

    </body>
</html>

