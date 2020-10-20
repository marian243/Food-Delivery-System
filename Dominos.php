<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Easy Cafe</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
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
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/dominos.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li ><a href="home.php">Home</a></li>
                                    <li><a href="#footer">About us</a></li>
                                    <li><a href="review.php">Review</a></li>
                                    
                                    <li class="active"><a href="#section2">Order</a></li>
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
        <link rel="stylesheet" href="css/menu.css">
                <div id="desc2">
                    <!--<h4> &gt; &gt; &gt; Ultimate Burger Experience &lt; &lt; &lt; </h4>-->
                    
                </div>
            </div> 
    
     <div id="section3">
        <link rel="stylesheet" href="css/menu.css">
                <div id="desc3">
                    <h3> &gt; &gt; &gt; MENU &lt; &lt; &lt; </h3>
    <table id="menutable">
                        
                    </table>
                    <div id="items">
                        <table id="itemtable">
                            <thead>
                                <tr>
                                    <th>Food name</th>
                                    <th>Price</th>
                                    <th>Select</th>
                                </tr>
                            </thead>
                            <tbody id="tablebody">
                                
                            </tbody>
                        </table>
                       <script>
                            
                            var xmlhttp = new XMLHttpRequest();
                            var url = "http://localhost/web/d.php";
                            
                            xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    var myArr = JSON.parse(this.responseText);
                                    myFunction(myArr);
                                }
                            };
                            
                            xmlhttp.open("GET", url, true);
                            xmlhttp.send();
                            
                            function myFunction(arr) {
                                var out = "";
                                var i;
                                for(i = 0; i < arr.length; i++) {
                                    out += '<tr><td>' + arr[i].Name + '</td><td>Tk. ' + 
                                        arr[i].cost + '</td><td><a href="addtocart.php?id=' + arr[i].product_id + '"><button style="background-color: #008CBA;border: none;color: white;padding: 10px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;border-radius: 20px;">Select</button></a></td></tr>';
                                }
                                document.getElementById("tablebody").innerHTML = out;
                            }
                            
                       </script>
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
                                <p>Domino’s Pizza offers customers a full menu to choose from, including four types of pizza crust (Hand Tossed, Handmade Pan, Thin Crust and Brooklyn Style), Domino’s American Legends®, BreadBowl Pasta, Oven Baked Sandwiches, Stuffed Cheesy Bread, Breadsticks, Chicken Wings, Boneless Chicken, Chocolate Lava Crunch Cakes, CinnaStix® and Coca-Cola® products.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <div>
                                    <li>
                                        Join Us on Facebook
                                    </li>
                                    </div>
                                    <li>
                                        <a href="https://www.facebook.com/dominospizzabn/">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        Bangladesh
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/Dominos/">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        International
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
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