<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | SUPERSTORE.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
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
    
  
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
          
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/yo2.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Info</h2>
	               <address>
				    <p>162 Narendra Tower,</p>
				    <p>East boriwali,Gurgaon</p>
				    <p>Delhi,INDIA</p>
				    <p>Phone:+91-9981100458</p>
				    <p>Fax:5584621</p>
				    <p>Email: info@grocerystore.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On&#58;</h2>
                   <a href="http://www.facebook.com/superstore" target="_blank"><img src="./img/yo3.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href="http://www.twitter.com/superstore" target="_blank"><img src="./img/yo4.png" alt="twitter logo" style="width:30px; height:30px; border:0 ;padding-left:10px;"></a>
               </div>
            </div>
        </div>
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    </body>
</html>
