<?php
include 'Backend/dbconnection.php';

$sql = "SELECT * FROM promotion";
$result = mysqli_query($db, $sql);

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Green View Holiday Resort | Promotions</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Green View Holiday</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo-img.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="services.php">Service</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="rooms.php">Rooms</a></li>
                                                <li><a href="###">Halls</a></li>
                                                <li><a href="Promotion.php">Promotions</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="###">Login</a>
                                            <ul class="submenu">
                                                <li><a href="login.php">Login</a></li>
                                                <li><a href="register.php">SignUp</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="#" class="btn btn1 d-none d-lg-block ">Book Online</a>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <br>
  
 
    <div class="blog-area blog-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!-- Seciton Tittle  -->
                    <div class="font-back-tittle mb-5">
                        <div class="archivment-front">
                            <h3>Promotions</h3>
                        </div>
                        <h3 class="archivment-back">Promotions</h3>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                   
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="###"><img src="assets/img/our_blog/blog-img1.jpg" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <tr>
                                    <td>01</td>
                                    <td>
                                        <span>Code - </span>
                                    </td>
                                </tr>
                            </div>
                            <div class="blog-cap-mid">
                                <tr>
                                    <p><a href="###">
                                            <td></td>
                                        </a></p>
                                </tr>
                            </div>
                          
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <tr>
                                    <span> Valid till - <td></td>to <td></td></span>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="###"> <img src="assets/img/our_blog/blog-img2.jpg" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <tr>
                                    <td>02</td>

                                    <span>Code - <td></td> </span>

                                </tr>
                            </div>
                            <div class="blog-cap-mid">
                                <tr>
                                    <p><a href="###">
                                            <td></td>
                                        </a></p>
                                </tr>
                            </div>
                           
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <tr>
                                    <span> Valid till - <td></td>to <td></td></span>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                  
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="###"><img src="assets/img/our_blog/blog-img3.jpg" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <tr>
                                    <td>03</td>

                                    <span>Code - <td></td></span>

                                </tr>
                            </div>
                            <div class="blog-cap-mid">
                                <tr>
                                    <p><a href="###">
                                            <td></td>
                                        </a></p>
                                </tr>
                            </div>
                           
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <tr>
                                    <span> Valid till - <td></td>to <td></td></span>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"> Promotion List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Promotion Name</th>
                                    <th>Promotion Title</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $pname = $row['pname'];
                                    $ptitle = $row['pTitle'];
                                    $startdate = $row['pStartDate'];
                                    $enddate = $row['pEndDate'];
                                    $description = $row['Descrip'];
                                ?>

                                    <tr>
                                        <td><?php echo $pname ?></td>
                                        <td><?php echo $ptitle ?></td>
                                        <td><?php echo $startdate ?></td>
                                        <td><?php echo $enddate ?></td>
                                        <td><?php echo $description ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <br>
    <br>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area black-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.php"><img src="assets/img/logo/footer-img.png" alt=""></a>
                            </div>
                            <div class="footer-social footer-social2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                            <div class="footer-pera">
                                <p>
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved by <a href="###" target="_blank">Green View Holiday Resort</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="rooms.php">Our Best Rooms</a></li>
                                    <li><a href="#">Our Photo Gellary</a></li>
                                    <li><a href="services.php">Pool Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Reservations</h4>
                                <ul>
                                    <li><a href="#">Tel: +9478 893 38 67</a></li>
                                    <li><a href="#">Skype: Green View Holiday</a></li>
                                    <li><a href="#">Reservations@greenviewholiday.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Our Location</h4>
                                <ul>
                                    <li><a href="#">221/3,Ranala Road,Hoabarakada,</a></li>
                                    <li><a href="#">Homagama,Sri Lanka SL 10204</a></li>
                                </ul>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>