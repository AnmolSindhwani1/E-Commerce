<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>Products | SUPERSTORE</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
   
<body style="padding-top: 50px;">
           
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
    <br>
    <br>
    
    <div class="container">
       
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1>Welcome to our Store</h1>
                <p>YOUR GROCERY IS IN SAFE HANDS.FIND IT CHEAPER AND GET YOUR MONEY BACK.</p>
              </center>
            </div>
            <hr>
            <br>
            
        <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:green">CATEGORIES</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><span style="color:black">HOUSEHOLD ITEMS</span></p>
                           <p><span style="color:black">HOME & KITCHEN</span></p>
                           <p><span style="color:black">BABY CARE</span></p>
                            <p><span style="color:black">BEVERAGES</span></p>
                            <p><span style="color:black">PERSONAL CARE</span></p>
                            <p><span style="color:black">VEGETABLES & FRUITS</span></p>
                            <p><span style="color:black">BEST VALUE</span></p>
                        </div>
                    </div>
                </div>
               <br>
                <div class="panel panel-default">
                    <div class="panel-heading  color">
                        <h3 style="color:green">PRICE</h3>
                    </div>
                    
                    <div class="panel-body">
                       <div class="rmvb">
                            <p><span style="color:black">Low to high</span></p>
                            <p><span style="color:black">High to low</span></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
               
                
               <div class="panel-group">
                  
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:green">Vegetables & Fruits</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/7.jpg " alt="" >
                                    <div class="caption">
                                        <h3>Potato</h3>
                                        <p>1kg</p>
                                        <p>Rs.35</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/8.jpg" alt="">
                                    <div class="caption">
                                        <h3>Onion</h3>
                                        <p>1kg</p>
                                            <p>Rs.20</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                           
                                            if (check_if_added_to_cart(6)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/9.jpg" alt="">
                                <div class="caption">
                                    <h3>Hybrid tomato</h3>
                                    <p>1kg</p>
                                        <p>Rs.28</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                           
                                            if (check_if_added_to_cart(12)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Impoted Orange</h3>
                                    <p>4 units(400-600g)</p>
                                        <p>Rs.135</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(16)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php? id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------iphone----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="ios" style="color:green">Personal care</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/11.jpg" alt="" >
                                    <div class="caption">
                                        <h3>Closeup everfresh toothpaste</h3>
                                        <p>2*150<p>
                                        <p>Rs.150</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/12 .jpg" alt="">
                                    <div class="caption">
                                        <h3>Parachute coconut oil</h3>
                                        <p>600ml</p>
                                            <p>Rs.250</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(3)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Dove bathing bar soap</h3>
                                    <p>100g</p>
                                        <p>Rs.136 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                          
                                            if (check_if_added_to_cart(2)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/14.jpg" alt="">
                                <div class="caption">
                                    <h3>Dettol Handwash</h3>
                                    <p>200ml</p>
                                        <p> Rs.79</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(1)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------samsung----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="samsung" style="color:green">Beverages</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/15.jpg" alt="" >
                                    <div class="caption">
                                        <h3>Pepsi soft drink</h3>
                                        <P>2*600ml</P>
                                        <p>Rs.98</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                           
                                            if (check_if_added_to_cart(6)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> 
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/16.jpg" alt="">
                                    <div class="caption">
                                        <h3>Horlick's powder</h3>
                                        <p>1kg</p>
                                            <p>Rs.454</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                           
                                            if (check_if_added_to_cart(7)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/17.jpg" alt="">
                                <div class="caption">
                                    <h3>Real friut mix juice</h3>
                                    <p>2*1L</p>
                                        <p>Rs.184</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(5)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/18.jpg" alt="">
                                <div class="caption">
                                    <h3>Red label tea</h3>
                                    <p>500g</p>
                                        <p>Rs.199</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                           
                                            if (check_if_added_to_cart(8)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   

                
                   
                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
    
   