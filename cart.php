<?php

session_start();
//require_once 'server.php';
//include 'addtocart.php';
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'easycafe');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Easy Cafe Delivery</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/cart.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li ><a href="home.php">Home</a></li>
                                    <li><a href="#footer">About us</a></li>
                                    <li class="active"><a href="#section2">Food Cart</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav> 
                        <!-- end navbar -->
                        
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header --> 
    
    <div id="section2"> 
        <link rel="stylesheet" href="css/cart.css">
                <div id="desc2">
                    <!--<h4> &gt; &gt; &gt; Ultimate Burger Experience &lt; &lt; &lt; </h4>-->
                    
                </div>
            </div> 
    
     <div id="section3">
        <link rel="stylesheet" href="css/cart.css">
                <div id="desc3">
                    <h3>CART</h3>
                    <div id="d">
                        <table id="dtable">
                            <thead>
                           	<tr>
	  		<th>S.NO</th>
	  		<th>Item Name</th>
	  		<th>Price</th>
                                </tr>       </thead>
                            <tbody>
                        <?php
                        if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
                                $items = $_SESSION['cart'];
                                $items .= "," . $_GET['id'];
                                $_SESSION['cart'] = $items;                        
                                $cartitems = explode(",", $items);
                            $total = 0;
                            $i=1;
                             foreach ($cartitems as $key=>$id) {
                                $sql = "SELECT product_id, Name, cost FROM product_info WHERE product_id = $id";
                                $res=mysqli_query($connection, $sql);
                                if($res->num_rows>0){ 
                                    while($row = $res->fetch_assoc()){
                          ?>	  	
                        
	<tr>
		<td><?php echo $i; ?></td>
        <td><?php echo $row['Name']; ?><a href="delcart.php?remove=<?php echo $key; ?>"><font size="1" color="red"> Remove</font></a> </td>
		<td>$<?php echo $row['cost']; ?></td>
	</tr>
<?php 
	$total+= $row['cost'];
	$i++; 
	} 
   }
 }
}
?>

<tr>
	<td><strong>Total Price</strong></td>
	<td><strong>$<?php echo $total; ?></strong></td>
	<td><a href="checkout.php" class="btn btn-info">Checkout</a></td>
</tr>
                                </tbody>
                            </table>
                        
                    </div>
                </div>
     </div>
    
     <div id="footer" class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>Bringing Food to your doorstep</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/Twitter">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://aboutme.google.com/u/0/?referer=gplus">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://bd.linkedin.com/">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>New Menu</h3>
                                <ul>
                                    <li><a href="#">To Be Announced</a></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>United City, Madani Avenue, Dhaka 1212</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									01683669728,01627306353 
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">support@easycafe.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Monday - Thursday </p>
                                        <span> 11:00 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Friday - Saturday </p>
                                        <span>  11:00 AM - 5:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html> 