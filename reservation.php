<?php

include_once("reserve.php");
/*
///include_once ("server.php");
//echo "page";
	$myname ="";
//echo "<script>window.alert('i am here')</script>";
	if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        echo "<script>window.alert('i am here')</script>";
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $password= $_POST['password'];
        $DOB= $_POST['birthday'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        
        echo "<script>window.alert('$fname $lname $password $DOB $email $phone');</script>";
        
        $sql = "INSERT INTO user (FirstName,LastName,pass,DOB,email,phonenumber) VALUES ('$fname','$lname','$password','$DOB','$email','$phone')";
        
        echo "<script>window.alert('$sql')</script>";
        
        //$db= 'easycafe';
      //mysqli_query($db,$sql);
        ///connect('easycafe',$sql);
        
        
        try{
            $conn=new PDO("mysql:host=localhost;dbname=easycafe", "root" ,"");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $no_of_rows=$conn->exec($sql);
            if($no_of_rows>0){
                echo "<script>window.alert('Insertion Success');</script>";
                header('Location:home.php');
            }
            else{
                echo "<script>window.alert('Insertion Error');</script>";
            }
            
        }
        
        catch(PDOException $ex){
            echo "<script>window.alert('DB Error');</script>";
        }
         
         
      } 
        else {
         //$error = "Your Login Name or Password is invalid";
            echo "<script>window.alert('get method');</script>";
   } 
//$servername = "localhost"; $username = "username"; $password = "password"; $dbname = "easycafe"; 

//if($_SERVER['REQUEST_METHOD'] == "GET"){
//               
//            }
//            elseif($_SERVER['REQUEST_METHOD'] == "POST"){
//                $id=$name=$dob=$email=$address="";
//                if(isset($_POST['first_name'])) $fname = $_POST['first_name'];
//                if(isset($_POST['last_name'])) $lname = $_POST['last_name'];
//                if(isset($_POST['password'])) $password = $_POST['password'];
//                if(isset($_POST['birthday'])) $DOB = $_POST['birthday'];
//                if(isset($_POST['email'])) $email = $_POST['email'];
//             if(isset($_POST['phone'])) $phone = $_POST['phone'];
//             
//                try{ 
//                     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);         
//                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
//                    $sqlQuery = "INSERT INTO user (FirstName,LastName,pass,DOB,email,phonenumber) VALUES ('$fname','$lname','$password','$DOB','$email','$phone')";
//                    $conn->exec($sqlQuery);
//                    //echo "<script>window.alert('Data insert successful'); </script>";
//                }catch(PDOException $exception){
//                    //echo "<script>window.alert('Database connection error'); </script>";
//                }
//            }
*/
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
     <!--<link rel="stylesheet" href="css/reserve.css">-->
     <!--<link href="css/signup.css" rel="stylesheet">-->
    <link href="css/res.css" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    
   
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
 <script src="js/modernizer.js"></script>-->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
     <link href="css/signup.css" rel="stylesheet">
     <link href="css/res.css" rel="stylesheet">
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
                                    <li class="active"><a href="home.php">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    
                                    <li><a href="#reservation">Reservation</a></li>
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
    
   
    
    
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Booking Form</h2>
                    <form action="reserve.php" method="post">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First name</label>
                                    <input class="input--style-4" id="first_name" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last name</label>
                                    <input class="input--style-4" id="last_name" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" id="birthday" type="date" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" id= "email" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" id= "phone" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                       
                        <div class="p-t-15">
                            <input type="submit" name="signup" id="submit" value="Book Now" class="btn btn--radius-2 btn--blue">
<!--                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

   
    
    
     <div class="footer-box pad-top-70">
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
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

</html> 