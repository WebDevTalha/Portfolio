<?php


if(isset($_POST['submit_btn'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $manager = $_POST['manager'];
    $budget = $_POST['budget'];
    $message = $_POST['message'];


    if(empty($email)){
        echo "<script>alert('Email Is Requird!');</script>";
    }
    elseif(empty($name)){
        echo "<script>alert('Name Is Requird!');</script>";
    }
    elseif(empty($phone)){
        echo "<script>alert('Phone Is Requird!');</script>";
    }
    elseif(empty($manager)){
        echo "<script>alert('Manager Name Is Requird!');</script>";
    }
    elseif(empty($budget)){
        echo "<script>alert('Budget Is Requird!');</script>";
    }
    elseif(empty($message)){
        echo "<script>alert('Message Is Requird!');</script>";
    }
    else {

        $to = "mdfarhantanvirtalha@gmail.com";
        $subject = "HTML email";

        $message = "
        <html>
            <head>
                <title>Form portfolio</title>
            </head>
        <body>
        <p>This email contains HTML Tags!</p>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Company</th>
                    <th>Manager</th>
                    <th>Budget</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>".$name."</th>
                    <th>".$email."</th>
                    <th>".$phone."</th>
                    <th>".$company."</th>
                    <th>".$manager."</th>
                    <th>".$budget."</th>
                    <th>".$message."</th>
                </tr>
            </tbody>
        </table>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $mailSend = mail($to,$subject,$message,$headers);

        if($mailSend == true){            
            header("location:send_mail.php");
        }
        else{
            echo "<script>alert('Mail send failed!');</script>";
        }
        
    }
}



?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Talha - Build Your Next level Website</title>  
        <meta name="author" content="Talha" />
        <meta name="description" content="Talha - Portfolio website">

        <meta name="robots" content= "index, follow" />


        <meta property="og:title" content="Talha - Build Your Next level Website" />
        <meta property="og:type" content="portfolio" />
        <meta property="og:url" content="http://www.talhaweb.com/" />
        <meta property="og:image" content="http://www.talhaweb.com/assets/images/thumbnail.png" />


        <meta name="twitter:title" content="Talha - Build Your Next level Website">
        <meta name="twitter:description" content="Talha - Portfolio website">
        <meta name="twitter:image" content="http://www.talhaweb.com/assets/images/thumbnail.png">
        <meta name="twitter:card" content="summary_large_image">

        

        
        

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon.png">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/slider.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/vendor/icons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animation.min.css">
        <link rel="stylesheet" href="assets/css/vendor/gallery.min.css">
        <link rel="stylesheet" href="assets/css/vendor/cookie-notice.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/theme-indigo.css">

        <!-- ==============================================
        Theme Settings
        =============================================== -->
        <style>
            :root {
                --header-bg-color: #f5f5f5;
                --nav-item-color: #2f323a;
                --top-nav-item-color: #2f323a;
                --hero-bg-color: #f5f5f5;
                
                --section-1-bg-color: #f5f5f5;
                --section-2-bg-color: #f5f5f5;
                --section-3-bg-color: #f5f5f5;
                --section-4-bg-color: #f5f5f5;
                --section-5-bg-color: #f5f5f5;
                --section-6-bg-color: #f5f5f5;
                
                --footer-bg-color: #f5f5f5;
            }
            
        </style>
        
    </head>

    <body>

        <!-- Header -->
        <header id="header">

            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="index.html">
                        <!-- Talha<i class="version-number">Dev.</i> -->
                        
                            <!-- Custom Logo -->
                            <img src="assets/images/logo.png" alt="Talha">
                       
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a href="#home-section" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#about-section" class="nav-link">About Me</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#features-section" class="nav-link">features</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#skills-section" class="nav-link">Skills</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#hire-me" class="nav-link">Hire Me</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                        <li class="nav-item social">
                            <a href="https://twitter.com/AbuTalh0" target="_blank" class="nav-link"><i class="icon-social-twitter"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="https://www.instagram.com/web_dev_talha/" target="_blank" class="nav-link"><i class="icon-social-instagram"></i></a>
                        </li>
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>

        <!-- Hero -->
        <section id="home-section" class="hero p-0 featured left">
            <div class="swiper-container no-slider animation slider-h-100">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="assets/images/hero-11.png" class="hero-image" alt="Hero Image">
                        <div class="slide-content row" data-mask-768="80">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Build Your Next Level Website.</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">I'm driven by creativity. I create innovative things to help you achieve better results.</p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i class="icon-cup"></i>GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- About -->
        <section id="about-section" class="section-1 highlights image-left featured right">
            <div class="container">
                <div class="row">
                    <div data-aos="zoom-out-right" class="gallery col-12 col-md-6">
                        <a href="assets/images/web_dev_talha.jpg"><img src="assets/images/web_dev_talha.jpg" class="fit-image" alt="Talha"></a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div data-aos="zoom-out-down" data-aos-delay="400" class="col-12 p-0">
                                <h2>About Me</h2>
                                <p>Hi there! I'm Talha. I'm a professional Front-end and Back-end Developer. I have 3+ years of experience. I am strongly experienced in HTML5, CSS3, Bootstrap, JavaScript, jQuery, JQuery UI, PHP, MYSQL & other js plugins. My code is fully Responsive, Cross Browser Supported and 100% W3C Validated. So if you need my services just contact me! I would love to work with you and make modifications until you satisfy. I assure you that you will like my service and I always care about quality and client satisfaction. Thank you.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features-section" class="section-2 offers featured featured left">
            <div class="container">
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div data-aos="flip-left" data-aos-delay="200" class="card no-hover">
                            <i class="icon icon-globe"></i>
                            <h4>Website Pro</h4>
                            <p>I build professional responsive websites optimized for the most popular search engines.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div data-aos="flip-left" data-aos-delay="300" class="card no-hover">
                            <i class="icon icon-basket"></i>
                            <h4>E-Commerce</h4>
                            <p>Increase your sales with an incredible online store, full of features and functionality.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div data-aos="flip-left" data-aos-delay="400" class="card no-hover">
                            <i class="icon icon-book-open"></i>
                            <h4>Educational</h4>
                            <p>Follow the global trend and create your revolutionary educational web, full of features and functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section id="skills-section" class="section-3 counter skills featured right">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Main Skills</h2>
                        <p class="text-max-800">I see all types of projects as if they were mine. This brings us closer, projects bringing much more confidence and commitment.</p>
                    </div>
                </div>
                <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200" class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="94" class="radial">
                            <span></span>
                        </div>
                        <h4>Web Design</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="90" class="radial">
                            <span></span>
                        </div>
                        <h4>Problem solving</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="87" class="radial">
                            <span></span>
                        </div>
                        <h4>Development</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="98" class="radial">
                            <span></span>
                        </div>
                        <h4>WordPress</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hire me -->
        <section id="hire-me" class="section-4 plans featured left">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>I Am Available For Your Next Project..</h2>
                        <p class="text-max-800 mb-5">Choose the ideal plan for what you need. I work at affordable prices for all types of pockets.</p>
                        <a href="https://www.fiverr.com/web_dev_talha" target="_blank" class="btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>Hire Me On Fiverr!</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners -->
        <section id="partner" class="section-5 logos featured right">
            <div class="overflow-holder">
                <div class="container">
                    <div class="swiper-container min-slider">
                        <div class="swiper-wrapper">                            
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/logo-2.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/logo-3.png" class="fit-image w-85" alt="Fit Image">
                            </div>                            
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/php.png" class="fit-image w-85" alt="Php">
                            </div>                            
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/logo-5.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/mysql.png" class="fit-image w-85" alt="Mysql">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/logo-7.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/js.png" class="fit-image w-85" alt="javascript">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/logo-8.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="assets/images/bootstrap.png" class="fit-image w-85" alt="Bootstrap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="section-6 form featured left">
            <div class="container">
                <form name="myForm" action="" id="leverage-form" method="POST">
                    <input type="hidden" name="section" value="leverage_form">

                    <div class="row">
                        <div class="col-12 col-md-6 align-self-start text-center text-md-left">

                            <!-- Success Message -->
                            <div class="row success message">
                                <div class="col-12 p-0">
                                    <div class="wait">
                                        <div class="spinner-grow" role="status">
                                            <span class="sr-only">Loading</span>
                                        </div>
                                        <h3 class="sending">SENDING</h3>
                                    </div>
                                    <div class="done">
                                        <i class="icon bigger icon-check"></i>
                                        <h3>Your message was sent successful. Thanks.</h3>						
                                        <a href="" class="btn mx-auto primary-button">
                                            <i class="icon-refresh"></i>
                                            REFRESH
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Steps Message -->
                            <div class="row intro form-content">
                                <div class="col-12 p-0">

                                    <!-- Step Title -->
                                    <div class="step-title stepTitle1">
                                        <h2 class="featured alt">Let's Talk?</h2>
                                        <p>Don't wait until tomorrow. Talk to me today and start your business.</p>
                                    </div>

                                    <!-- Step Title -->
                                    <div class="step-title stepTitle2 hide">
                                        <h2 class="featured alt">Almost There</h2>
                                        <p>I need some more important information to better understand how i can help you in the best possible way.</p>
                                    </div>

                                    <!-- Step Title -->
                                    <div class="step-title stepTitle3 hide">
                                        <h2 class="featured alt">Are you Ready?</h2>
                                        <p>Tell me a little about the project you need to create. This is valuable so I can help you in the best possible way.</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Steps Group -->
                            <div class="row text-center form-content">
                                <div class="col-12 p-0">
                                    <ul class="progressbar">
                                        <li class="active">Personal Details</li>
                                        <li class="ProLi2">Company Budget</li>
                                        <li class="ProLi3">Service Setup</li>
                                    </ul>

                                    <!-- Group 1 -->
                                    <fieldset class="step-group step1">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input id="emailNext" type="email" name="email" data-minlength="3" class="form-control field-email inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="name" data-minlength="3" class="form-control field-name inputName" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="phone" data-minlength="3" class="form-control field-phone inputPhone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0">
                                            <a class="step-next btn primary-button" onclick="nextStep()">NEXT<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                    <!-- Group 2 -->
                                    <fieldset class="step-group step2 hide">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="company" data-minlength="3" class="form-control field-company inputCompany" placeholder="Company">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="manager" data-minlength="3" class="form-control field-manager inputManager" placeholder="Manager">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget inputBudget">
                                                    <option value="" selected disabled>What's your budget range?</option>
                                                    <option value="Less than $2.000">Less than $2.000</option>
                                                    <option value="$2.000 — $5.000">$2.000 — $5.000</option>
                                                    <option value="$5.000 — $10.000">$5.000 — $10.000</option>
                                                    <option value="$10,000+">$10,000+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0 d-flex justify-content-between justify-content-md-start">
                                            <a class="step-prev btn primary-button mr-4"><i class="icon-arrow-left-circle"></i>PREV</a>
                                            <a class="step-next btn primary-button" onclick="nextStep2()">NEXT<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                    <!-- Group 3 -->
                                    <fieldset class="step-group step3 hide">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <textarea name="message" data-minlength="3" class="form-control field-message" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0 d-flex justify-content-between justify-content-md-start">
                                            <a class="step-prev btn primary-button mr-4"><i class="icon-arrow-left-circle"></i>PREV</a>
                                            <button type="submit" name="submit_btn" class="step-next btn primary-button">SEND<i class="icon-arrow-right-circle left"></i></button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in-left" data-aos-delay="300" class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block">

							<div class="gallery">  
                                <a href="assets/images/about-8.jpg">                              
                                    <img src="assets/images/about-8.jpg" class="fit-image" alt="Contact Us">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer>

            <!-- Footer [links] -->
            <section id="footer" class="footer">
                <div class="container">
                    <div class="row items footer-widget">
                        <div class="col-12 col-lg-3 p-0">
                            <div class="row">
                                <div class="branding col-12 p-3 text-center text-lg-left item">
                                    <div class="brand">
                                        <a href="index.html" class="logo">     
                                                <img src="assets/images/logo.png" alt="Talha">
                                        </a>
                                    </div>
                                    <p>Authentic and innovative.<br>Built to the smallest detail<br>with a focus on usability<br>and performance.</p>
                                    <ul class="navbar-nav social share-list mt-0 ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 p-0">                            
                            <div class="row">
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Get in Touch</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="tel:+8801575-561781" class="nav-link footer-link-details">
                                                <i class="icon-phone mr-2"></i>
                                                <span>+880 1575-561781</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="mailto:mdfarhantanvirtalha@gmail.com" class="nav-link footer-link-details">
                                                <i class="icon-envelope mr-2"></i>
                                                <span>mdfarhantanvirtalha@gmail.com</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link footer-link-details">
                                                <i class="icon-location-pin mr-2"></i>
                                                <span>Phulbari-5260, Dinajpur | <br> Bangladesh.</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#contact" class="mt-4 mr-auto ml-auto ml-lg-0 btn primary-button smooth-anchor"><i class="icon-speech"></i>SEND A MESSAGE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Our Services</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Front-end Development</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Back-end Development</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">SEO & Digital Marketing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Education Website</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Design To HTML conversion</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Popular Tags</h4>
                                    <a href="#" class="badge tag">Mobile</a>
                                    <a href="#" class="badge tag">Development</a>
                                    <a href="#" class="badge tag">Technology</a>
                                    <a href="#" class="badge tag">App</a>
                                    <a href="#" class="badge tag">Education</a>
                                    <a href="#" class="badge tag">Business</a>
                                    <a href="#" class="badge tag">Health</a>
                                    <a href="#" class="badge tag">Industry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <section id="copyright" class="p-3 copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                            <p>Enjoy the low price. Choose the ideal plan for your website.</p>
                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© 2022 All Rights Reserved | Powered by <a href="index.html">Web Dev Talha</a>.</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

        <!-- #region Global ============================ -->

        <!-- Modal [search] -->
        <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>What are you looking for?</h2>
                                        <p>Search for services and news about the best that happens in the world.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Enter Keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button"><i class="icon-magnifier"></i>SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <ul class="navbar-nav items">
                                    <li class="nav-item dropdown">
                                        <a href="#home-section" class="nav-link prevent">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#about-section" class="nav-link prevent">About Me</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#features-section" class="nav-link prevent">features</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#skills-section" class="nav-link prevent">Skills</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#hire-me" class="nav-link prevent">Hire Me</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#contact" class="nav-link prevent">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="icon-arrow-up"></i>
            </a>
        </div>                
        

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="assets/js/vendor/jquery.min.js"></script>
        <script src="assets/js/vendor/jquery.easing.min.js"></script>
        <script src="assets/js/vendor/jquery.inview.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/ponyfill.min.js"></script>
        <script src="assets/js/vendor/slider.min.js"></script>
        <script src="assets/js/vendor/animation.min.js"></script>
        <script src="assets/js/vendor/progress-radial.min.js"></script>
        <script src="assets/js/vendor/bricklayer.min.js"></script>
        <script src="assets/js/vendor/gallery.min.js"></script>
        <script src="assets/js/vendor/shuffle.min.js"></script>
        <script src="assets/js/vendor/cookie-notice.min.js"></script>
        <script src="assets/js/vendor/particles.min.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>