
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Kula Kingdom</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animated-headline.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loader.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent pt-20">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/Kula kingdom.png" alt="" width="250"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="active"><a href="index.html">Home</a></li>
                                           <!-- <li><a href="about.html">About</a></li>-->
                                            <!--<li><a href="">Heritage</a></li>-->
                                            
                                             <li class="">
                                                <a href="">Heritage</a>
                                            <ul class="submenu">
                                                    <li><a href="our-history">History</a></li>
                                                    <li><a href="autonomous-communities">14 autonomous communities</a></li>
                                                    <li><a href="communities-settlements">100 Communities Settlements</a>
                                                     </li>
                                                    
                                                </ul>
                                                
                                           <!-- <li><a href="services.html">Services</a></li>-->
                                            <li class="">
                                                <a href="">Culture</a>
                                            <ul class="submenu">
                                                    <li><a href="food-fruits">Kula Foods  & Fruits</a></li>
                                                    <li><a href="wrestling">Wrestling</a></li>
                                                    <li><a href="masquerades">Masquerades</a>
                                                     </li>
                                                     
                                                    
                                                </ul>
                                              <li><a href="bpl.html">Belemaoil</a></li>
                                            
                                            <li><a href="portfolio.html">Gallery</a></li>
                                            <li class="">
                                                <a href="">Companies</a>
                                            <ul class="submenu">
                                                    <li><a href="https://www.shell.com.ng/">Royal Dutch Shell</a></li>
                                                    <li><a href="https://belemaoil.com/">Belemaoil Producing Limited</a></li>
                                                    <li><a href="https://www.aiteogroup.com/">Aiteo Group</a>
                                                    <li><a href="https://newcross.com/">Newcross Exploration & Production Limited</a>
                                                     </li>
                                                     
                                                      <li><a href="https://www.saraplusenergy.com/">Sara Plus Integrated Energy Limited</a>
                                                     </li>
                                                    
                                                </ul>
                                          
                                            <!--li><a href="">News</a></li>
                                            <li><a href="">Media</a></li-->
                                           <!-- <li><a href="">NGO's</a></li>-->
                                            <li class="">
                                                <a href="">NGO's</a>
                                            <ul class="submenu">
                                                    <li><a href="kkga.html">KKGA</a></li>
                                                    <li><a href="nukks.html">NUKKS</a></li>
                                                    <li><a href="kyo.html">K Y O</a></li>
                                                </ul>
                                            
                                            <li><a href="agegrades.html">Age Grades</a></li>
                                          <!--  <li><a href="blog.html">Blog</a></li>-->
                                            <li><a href="https://www.gofundme.com/f/kula-community-fund">Donate</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                             <!--   </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>-->
                                    </nav>
                                </div>
                                <!--<div class="header-right-btn f-right d-none d-lg-block ml-30">
                                	 <a href="from.html" class="btn header-btn">donate</a>
                                </div>-->
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
    @yield('content')

    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="{{asset('img/gallery/footer_bg.png')}}">
            <div class="container">
                
                
                
				
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/loader.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Receive updates and latest news direct from Simply enter.</p>
                                    </div>
                                </div>
                                <div class="footer-number">
                                    <h4><span>+234 </span>708 381 6040</h4>
                                    <h4><span>+234 </span>803 508 1118</h4>
                                    <p>info@kulakingdom.org</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Location </h4>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">NGO's</a></li>
                                        <li><a href="#">Age Grades</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Explore</h4>
                                    <ul>
                                        <li><a href="#">Cookies</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Proparties</a></li>
                                        <li><a href="#">Licenses</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Location</h4>
                                    <div class="footer-pera">
                                        <p class="info1">Subscribe now to get daily updates</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate>
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">Send</button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/animated.headline.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    
    </body>
</html>