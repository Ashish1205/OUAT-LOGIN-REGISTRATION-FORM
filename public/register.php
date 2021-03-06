<?php
include('dbcon.php');
if(isset($_POST['register']))
{
    $fname = $_POST['register_first_name'];
    $lname = $_POST['register_last_name'];
    $email = $_POST['register_email'];
    $number = $_POST['register_phonenumber'];
    $department = $_POST['register_department'];
    $pyear = $_POST['register_passing_year'];
    $pass = $_POST['register_password'];
    $gender = $_POST['register_gender'];


    
   $sql = "INSERT INTO `alumni` (`first_name`, `last_name`, `email`, `phone_number`, `department`, `passing_year`, `password`, `gender`) VALUES ('$fname','$lname ','$email','$number', '$department', '$pyear', '$pass', '$gender')";
   
   $run=mysqli_query($con,$sql);
		if($run==true)
		{
			?>
			<script>
		  		alert('Registered Successfully.');
			</script>
			<?php
		}
}

elseif(isset($_POST['login'])){
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		$qry="SELECT * FROM `alumni` WHERE `email`='$username' AND `password`='$password'";
		$run=mysqli_query($con,$qry);
		$row=mysqli_num_rows($run);
		if($row<1)
		{
			?>
			<script>
				alert('Username or Password not match .!!!');
				window.open('register.php','_self');
			</script>
			<?php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			header('location:dashboard.php');
		}
	}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Alumni Association - OUAT</title>

    <meta name="description" content="simple description for your site" />
    <meta name="keywords" content="keyword1, keyword2" />
    <meta name="author" content="Jobz" />

    <!-- twitter card starts from here, if you don't need remove this section -->
    <!-- <meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@yourtwitterusername"/>
<meta name="twitter:creator" content="@yourtwitterusername"/>
<meta name="twitter:url" content="http://twitter.com/"/> -->
    <!-- <meta name="twitter:title" content="Your home page title, max 140 char"/> maximum 140 char -->
    <!-- <meta name="twitter:description" content="Your site description, maximum 140 char "/> maximum 140 char -->
    <!-- <meta name="twitter:image" -->
    <!-- content="assets/img/twittercardimg/twittercard-144-144.png"/>  when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title" />
    <meta property="og:url" content="http://your domain here.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Your site name here" />
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website" /> <!-- 'article' for single page  -->
    <meta property="og:image" content="assets/img/opengraph/fbphoto-476-476.png" />
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends here -->

    <!-- desktop bookmark -->
    <!-- <meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff"> -->

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
<script src="assets/vendor/css3-mediaqueries-js/css3-mediaqueries.js"></script>
<![endif]-->

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendor/navbar/bootstrap-4-navbar.css" />

    <!--Animate css -->
    <link rel="stylesheet" href="assets/vendor/animate/animate.css" media="all" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css" />

    <!--owl carousel css -->
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" media="all" />

    <!--Magnific Popup css -->
    <link rel="stylesheet" href="assets/vendor/magnific/magnific-popup.css" media="all" />

    <!--Nice Select css -->
    <link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css" media="all" />

    <!--Offcanvas css -->
    <link rel="stylesheet" href="assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

    <!-- MODERNIZER  -->
    <script src="assets/vendor/modernizr/modernizr-custom.js"></script>

    <!-- Main Master Style  CSS  -->
    <link id="cbx-style" data-layout="1" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />

</head>

<body>

    <div class="preloader">
        <div class="preloader_image pulse"></div>
    </div>

    <!--[if lt IE 7]>
    <p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started.
        Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
    <![endif]-->

    <!--== Header Area Start ==-->
    <header id="header-area">
        <div class="preheader-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-7 col-7">
                        <div class="preheader-left">
                            <a href="mailto:alumniassociation.ouat@gmail.com"><strong>Email:</strong>
                                alumniassociation.ouat@gmail.com</a>
                            <!-- <a href="mailto:info@construc.com"><strong>Hotline:</strong> 880 454 5477</a> -->
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-5 col-5 text-right">
                        <div class="preheader-right">
                            <!-- <a title="Login" class="btn-auth btn-auth-rev" href="register.html">Login</a> -->
                            <!-- <a title="Register" class="login-btn btn-auth btn-auth" href="register.html">Login/Sign Up</a> -->
                            <div class="dropdown">
                                <button onclick="myFunction()" class="login-btn dropbtn">Welcome</button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a class="dropbtn-login">Login/Sign Up</a>
                                    <a class="dropbtn-profile">Profile</a>
                                    <a class="dropbtn-logout">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-area" id="fixheader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menu navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="menucontent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                                    <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="about.html" data-toggle="dropdown" role="button">About</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="committee.html">Committee</a></li>
                                    </ul>
                                </li> -->
                                    <!-- <a class="nav-link" href="about.html"  role="button">About</a> -->
                                    <li class="nav-item"><a class="nav-link" href="about.html">About</a> </li>
                                    <li class="nav-item"><a class="nav-link" href="event.html">Event</a></li>
                                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                    <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" role="button">Blog</a>
                                    <ul class="dropdown-menu"> -->
                                    <li class="nav-item"><a class="nav-link" href="blog.html">News</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="single-blog.html">Single Blog Right Sidebar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog-leftsidebar.html">Single Blog left Sidebar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog-withoutsidebar.html">Single Blog No Sidebar</a></li>
                                    </ul> -->
                                    <!-- </li> -->
                                    <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link dropdown-toggle" href="gallery.html" role="button">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                                <li class="nav-item"><a class="nav-link" href="single-album.html">Single Album</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="committee.html">Committee</a></li>
                                        <li class="nav-item"><a class="nav-link" href="directory.html">Directory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="career.html">Career</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-offcanvas.html">Off Canvas Menu</a></li>
                                        <li class="nav-item"><a class="nav-link" href="typography.html">Typography</a></li>
                                    </ul>
                                </li> -->
                                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <!-- <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">Membership Form</h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need</p>
                         <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a> -->
    <!-- </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--== Page Title Area End ==-->

    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="register-page-inner">
                            <div class="col-lg-10 m-auto">
                                <div class="register-form-content">
                                    <div class="row">
                                        <!-- Signin Area Content Start-->
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">
                                                        <h4>Already a Member?</h4>
                                                        <div class="sign-form">
                                                            <form action="register.php" method="post" id="user_login">
                                                                <input type="text" name="uname" placeholder="Enter your Email ID"
                                                                    id="email_id">
                                                                <input type="password" name="pass" placeholder="Password"
                                                                    id="password">
                                                                <button type="submit" name="login" id="login"
                                                                    class="btn btn-reg">Login</button><br>
                                                                <a type="forget-password"
                                                                    href="forgot-password.html">Forgotten Password?</a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-7 col-md-6 ml-auto">
                                            <div class="register-form-wrap">
                                                <h3>Registration Form</h3>
                                                <div class="register-form">
                                                    <!-- <form action="./payment-details.html" id = "signup_form">-->
                                                    <form action="register.php" method="post" id="signup_form">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_email">First Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="register_firstname"
                                                                        name="register_first_name" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_password">Last Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="register_lastname" name="register_last_name"
                                                                        required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_name">Email</label>
                                                                    <input type="email" class="form-control"
                                                                        id="register_email" name="register_email" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_stuid">Phone Number</label>
                                                                    <input type="text" pattern="[6-9]{1}[0-9]{9}"
                                                                        class="form-control" id="register_phonenumber"
                                                                        name="register_phonenumber" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_year">Department</label><br>
                                                                    <!-- <class="form-control" id="register_Department" name="register_department" />-->
                                                                    <input list="department" class="form-control"
                                                                        id="register_Department"
                                                                        name="register_department">
                                                                    <datalist id="department">
                                                                        <option value="Arts"></option>
                                                                        <option
                                                                            value="Analytical and Applied Economics">
                                                                        </option>
                                                                        <option
                                                                            value="Ancient Indian History, Culture and Archaeology">
                                                                        </option>
                                                                        <option value="Anthropology"></option>
                                                                        <option value="English"></option>
                                                                        <option value="History"></option>
                                                                        <option value="Law"></option>
                                                                        <option value="Library and Information Science">
                                                                        </option>
                                                                        <option value="Odia"></option>
                                                                        <option value="Philosophy"></option>
                                                                        <option value="Political Science"></option>
                                                                        <option value="Psychology"></option>
                                                                        <option value="Public Administration"></option>
                                                                        <option value="Sanskrit"></option>
                                                                        <option value="Sociology"></option>
                                                                        <option value="Women Studies"></option>
                                                                        <option value="Science"></option>
                                                                        <option value="Biotechnology"></option>
                                                                        <option value="Botany"></option>
                                                                        <option value="Chemistry"></option>
                                                                        <option value="Computer Science & Applications">
                                                                        </option>
                                                                        <option value="Geography"></option>
                                                                        <option value="Geology"></option>
                                                                        <option value="Mathematics"></option>
                                                                        <option value="Physics"></option>
                                                                        <option value="Pharmacy"></option>
                                                                        <option value="Statistics"></option>
                                                                        <option value="Zoology"></option>
                                                                        <option value="Business Studies & Management">
                                                                        </option>
                                                                        <option value="Business Administration">
                                                                        </option>
                                                                        <option value="Commerce"></option>
                                                                        <option
                                                                            value="Personnel Management and Industrial Relations">
                                                                        </option>
                                                                        <option value="National Service Scheme">
                                                                        </option>
                                                                        <option
                                                                            value="University Department Teacher Education">
                                                                        </option>
                                                                        <option
                                                                            value="Self Financing Courses of Main Campus">
                                                                        </option>
                                                                        <option
                                                                            value="5 Years Integrated Master in Computer Application">
                                                                        </option>
                                                                        <option
                                                                            value="M.Tech in Computer Science & Engineering">
                                                                        </option>
                                                                        <option value="M.Tech. in Computer Science">
                                                                        </option>
                                                                        <option value="M.Sc. in Computer Science">
                                                                        </option>
                                                                        <option
                                                                            value="M. Tech. in Information Technology">
                                                                        </option>
                                                                        <option
                                                                            value="5 Years Integrated Course in M.B.A.">
                                                                        </option>
                                                                        <option value="3 Year Part Time M.B.A.">
                                                                        </option>
                                                                        <option value="MBA in Financial Management">
                                                                        </option>
                                                                        <option value="MBA (Agribusiness)"></option>
                                                                        <option value="Master in Pharmacy"></option>
                                                                        <option value="M.A. in Women Studies"></option>
                                                                        <option
                                                                            value="M.Sc. in Fisheries and Aquaculture">
                                                                        </option>
                                                                        <option value="M.Sc. in Environmental Science">
                                                                        </option>
                                                                        <option value="M.Sc. in Applied Microbiology">
                                                                        </option>
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_deptno">Passing Year </label>
                                                                    <input type="text" placeholder="YYYY"
                                                                        class="form-control" id="register_passingyear"
                                                                        name="register_passing_year" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_deptno">Password </label>
                                                                    <input type="password"
                                                                        placeholder="Enter min 6 characters"
                                                                        class="form-control" id="Password"
                                                                        name="register_password" required />
                                                                    <!-- <i class="fa fa-eye" id ="togglePassword"></i>-->
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group file-input">
                                                            <input type="file" name="register_file" id="customfile" class="d-none" />
                                                            <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                        </div>-->

                                                        <div class="gender form-group">
                                                            <label class="g-name d-block">Gender</label>
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="register_gender_male"
                                                                    name="register_gender" value="male"
                                                                    class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                    for="register_gender_male">Male</label>
                                                            </div>
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="register_gender_female"
                                                                    name="register_gender" value="female"
                                                                    class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                    for="register_gender_female">Female</label>
                                                            </div>
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="register_gender_other"
                                                                    name="register_gender" value="other"
                                                                    class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                    for="register_gender_other">Other</label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox float-lg-right">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck1">
                                                                <!-- <label class="custom-control-label" for="customCheck1"> I have read and agree to the Alumni Terms of Service</label>-->
                                                            </div>
                                                            <!-- <input type="submit" class="btn btn-reg" value="Registration">-->
                                                            <input type="submit" name="register" id="register" value="Register" class="btn btn-reg">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Register Page Content End ==-->

    <!--== Footer Area Start ==-->
    <footer id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <!-- Single Widget Start -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-widget-wrap">
                            <div class="widgei-body">
                                <div class="footer-about">
                                    <!-- <img src="assets/img/footer-logo.png" alt="Logo" class="img-fluid" /> -->
                                    <h4>Alumni Association</h4>
                                    <a href="http://www.utkaluniversity.nic.in/">
                                        <h5>OUAT</h5>
                                    </a>
                                    <!-- <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed do eiusmod tempor incidunt ut  et do maga aliqua enim ad minim.</p> -->
                                    <!-- <a href="#">Phone: +8745 44 5444</a> <a href="#">Fax: +88474 156 362</a> <br> <a href="mailto:patnaiks.bijay.com">patnaiks.bijay.com</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <!-- <div class="col-lg-3 col-sm-6">
                            <div class="single-widget-wrap">
                                <div class="widget-title">Get In Touch<br><a href="contact.html"><h5><i>Click here</i></h5></a></div>
                                <div class="widgei-body">
                                     <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed</p> -->
                    <!-- <div class="newsletter-form">
                                        <form id="cbx-subscribe-form" role="search">
                                            <input type="email" placeholder="Enter Your Email"  id="subscribe" required>
                                            <button type="submit"><i class="fa fa-send"></i></button>
                                        </form>
                                    </div>

                                    <div class="footer-social-icons">
                                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h4 class="widget-title">Links</h4>
                            <!-- <div class="widgei-body"> -->
                            <ul class="double-list footer-list clearfix">
                                <li><a href="./index.html">Home</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./event.html">Event</a></li>
                                <li><a href="./gallery.html">Gallery</a></li>
                                <li><a href="./blog.html">News</a></li>
                                <!-- <li><a href="./contact.html">Contact</a></li> -->
                            </ul>
                            <!-- </div> -->
                        </div>
                    </div>
                    <!-- Single Widget End -->


                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <a class="btn-auth btn-auth" href="contact.html">Get In Touch</a>
                            <div class="widgei-body">
                                <!-- <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed</p>
                                        <div class="newsletter-form">
                                        <form id="cbx-subscribe-form" role="search">
                                            <input type="email" placeholder="Enter Your Email"  id="subscribe" required>
                                            <button type="submit"><i class="fa fa-send"></i></button>
                                        </form>
                                    </div> -->

                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-2 col-sm-6">
                        <div class="single-widget-wrap">
                            <h4 class="widget-title">Social Media</h4>
                            <div class="widgei-body">
                                <!-- <ul class="footer-list clearfix">
                                        <li><a href="#">Pricing Plan</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Populer Deal</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Support</a></li> -->

                                <div class="footer-social-icons">
                                    <a href="https://www.facebook.com/ouat.hello/" target="_blank"><i
                                            class="fa fa-facebook"></i></a>
                                    <!-- <a href="https://twitter.com/AlumniUtkal" target="_blank"><i class="fa fa-twitter"></i></a> -->
                                    <a href="https://www.linkedin.com/school/orissa-university-of-agriculture-and-technology/"
                                        target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <!-- <a href="https://www.instagram.com/utkal_university1944/" target="_blank"><i class="fa fa-instagram"></i></a> -->
                                    <a href="https://www.youtube.com/channel/UC3_OlaZKpl75-FEPgemaGnQ"
                                        target="_blank"><i class="fa fa-youtube"></i> </a>
                                </div>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Single Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer-bottom-text">
                            <p>?? 2021 Utkal University Alumni Association, All Rights Reserved. Designed by <a
                                    href="https://mosahay.info/contact2.html" target="_blank"> <i>MoSahay C Design
                                        School</i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!--== Footer Area End ==-->

    <!--== Scroll Top ==-->
    <a href="#" class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--== Scroll Top ==-->

    <!-- SITE SCRIPT  -->

    <!-- Jquery JS  -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>

    <!-- POPPER JS -->
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/navbar/bootstrap-4-navbar.js"></script>

    <!--owl-->
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>

    <!--Waypoint-->
    <script src="assets/vendor/waypoint/waypoints.min.js"></script>

    <!--CounterUp-->
    <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>

    <!--isotope-->
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <!--magnific-->
    <script src="assets/vendor/magnific/jquery.magnific-popup.min.js"></script>

    <!--Smooth Scroll-->
    <script src="assets/vendor/smooth-scroll/jquery.smooth-scroll.min.js"></script>

    <!--Jquery Easing-->
    <script src="assets/vendor/jquery-easing/jquery.easing.1.3.min.js"></script>

    <!--Nice Select -->
    <script src="assets/vendor/nice-select/jquery.nice-select.js"></script>

    <!--Jquery Valadation -->
    <script src="assets/vendor/validation/jquery.validate.min.js"></script>
    <script src="assets/vendor/validation/additional-methods.min.js"></script>

    <!--off-canvas js -->
    <script src="assets/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js"></script>

    <!-- Countdown -->
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

    <!-- custom js: main custom theme js file  -->
    <script src="assets/js/theme.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.2/firebase.js"></script>

    <!-- custom js: custom js file is added for easy custom js code  -->
    <script src="assets/js/custom.js"></script>

    <!-- custom js: custom scripts for theme style switcher for demo purpose  -->
    <script id="switcherhandle" src="assets/switcher/switcher.js"></script>


    <script src="assets/js/app.js"></script>



</body>

</html>