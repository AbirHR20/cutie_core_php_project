<?php
require_once("../backend/db_connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="keendevs">
    <!-- ======== Page title ============ -->
    <title>SPRUCE - Portfolio HTML Template</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="assets/css/icons.css"> -->
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- metisMenu css file -->
    <link rel="stylesheet" href="assets/css/metismenu.css">
    <!-- progresscircle css file -->
    <link rel="stylesheet" href="assets/css/progresscircle.css">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--  main style css file -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="P" class="letters-loading">
                    P
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="U" class="letters-loading">
                    U
                </span>
                <span data-text-preloader="C" class="letters-loading">
                    C
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-section header-style-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.html">Spruce</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 d-none d-lg-block text-right">
                    <div class="main-menu">
                        <ul>
                            <li><a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="index.html">Homepage 1</a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Homepage 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">services</a></li>
                            <li><a href="#resume">Resume</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#blog">blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="../backend/auth/login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 d-block d-lg-none">
                    <div class="menu-toggle text-right">
                        <div id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- mobile menu - responisve menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fal fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <ul class="metismenu" id="mobile-menu">
                                <li>
                                    <a class="has-arrow" href="#">Home</a>
                                    <ul>
                                        <li>
                                            <a href="index.html">Homepage 1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Homepage 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#about">about</a>
                                </li>
                                <li>
                                    <a href="#services">services</a>
                                </li>
                                <li>
                                    <a href="#portfolio">portfolio</a>
                                </li>
                                <li>
                                    <a href="#blog">blog</a>
                                </li>
                                <li>
                                    <a href="#contact">contact</a>
                                </li>
                            </ul>
                        </nav>

                        <a href="#" class="theme-btn mt-4">+ Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero-section hero-1" style="background-image: url('assets/img/hero_bg_element.png')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 text-center text-lg-left">
                    <div class="hero-content overflow-hidden">
                        <span class="hello-tooltip wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Hi! There</span>
                        <h1 class="wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".9s">John William</h1>
                        <div class="typed">
                            <h3 class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.3s">I'm a <span class="profession"></span></h3>
                        </div>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.6s">Maborisum ipsum dolor seat ameat consecteturetel seat more be elite consecteture.</p>
                        <a href="#" class="theme-btn wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.9s">+ Download CV</a>

                        <div class="social-profile">
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.2s"><i class="fal fa-plus"></i>facebook</a>
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.5s"><i class="fal fa-plus"></i>twitter</a>
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.7s"><i class="fal fa-plus"></i>linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-sm-12 text-center overflow-hidden">
                    <div class="hero-profile-img wow fadeInUp" data-wow-duration="2s" data-wow-delay=".9s">
                        <img src="assets/img/profile.png" alt="Spruce" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service section -->
    <section class="services-section section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one wow fadeInDown" data-wow-duration="1.2s">
                        <span>my services</span>
                        <!-- <h2>I’m Graphic & Web Design , Developer and Check What’s Services I’ll Provide my Clients.</h2> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $service_list = "SELECT * FROM services";
                $service_list_query = mysqli_query($db_connect, $service_list);
                foreach ($service_list_query as $value) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="icon">
                                <i class="<?= $value["icon"] ?>"></i>
                            </div>
                            <h3><?= $value["title"] ?></h3>
                            <p><?= $value["short_description"] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- /.single-service -->
            </div>
            <div class="contact-promo text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                Have any Work? Fell Free to - <a href="#contact">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- about-me section -->
    <section class="about-section section-padding theme-bg-gray" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 achivements-area">
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/start-up.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>Top Rated</h3>
                            <span>Worldcalss UI-UX</span>
                        </div>
                    </div> <!-- single-achivement -->
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/client.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>500+</h3>
                            <span>Satisfied Clients</span>
                        </div>
                    </div> <!-- single-achivement -->
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/career.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>10 YEARS</h3>
                            <span>Experienced Designer</span>
                        </div>
                    </div> <!-- single-achivement -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <div class="main-profile-img">
                        <img src="assets/img/main_profile.png" alt="profile image">
                        <span>+</span>
                        <div class="dots_animate"></div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12 wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                    <div class="about-content">
                        <h1>Hello! I,m Spruce Springlane Graphic & Web Design and Web Developer.</h1>
                        <h3>Have 6 Years Experienced</h3>
                        <p>Maborisum ipsum dolor seat ameconsecteturers seat more be elite consecteture. ContrarpopulabelLoreIpsum is notili more consecteture elite.</p>

                        <div class="row mt-4">
                            <div class="col-sm-6 col-12">
                                <div class="single-info">
                                    <h4>Phone :</h4>
                                    <p>+123- 4567- 8901</p>
                                </div>
                                <div class="single-info">
                                    <h4>Freelance :</h4>
                                    <p>Avialable For You</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="single-info">
                                    <h4>Email :</h4>
                                    <p>Springlane@mail.com</p>
                                </div>
                                <div class="single-info">
                                    <h4>Address :</h4>
                                    <p>House 201 Torento, Canada</p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="theme-btn">+ Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills-experiance-resume section-padding" id="resume">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>My resume</span>
                        <h2>High Skilled Provide High Quality </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="resume-timeline-wraper mt-5">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-edu-tab" data-toggle="pill" href="#v-pills-edu" role="tab" aria-controls="v-pills-edu" aria-selected="true">Education</a>
                                    <a class="nav-link" id="v-pills-job-tab" data-toggle="pill" href="#v-pills-job" role="tab" aria-controls="v-pills-job" aria-selected="false">Experience</a>
                                    <a class="nav-link" id="v-pills-awards-tab" data-toggle="pill" href="#v-pills-awards" role="tab" aria-controls="v-pills-awards" aria-selected="false">Awards</a>
                                </div>
                            </div>

                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-edu" role="tabpanel" aria-labelledby="v-pills-edu-tab">
                                        <?php
                                        $education = "SELECT * FROM education LIMIT 3";
                                        $education_query = mysqli_query($db_connect, $education);
                                        foreach ($education_query as $value) { ?>
                                            <div class="single-resume-item">
                                                <div class="year">
                                                    <span><?= $value["start_date"] ?>-<?= $value["end_date"] ?></span>
                                                </div>
                                                <h3><?= $value["edu_title"] ?></h3>
                                                <h5><?= $value["edu_academy"] ?></h5>
                                                <p><?= $value["edu_description"] ?></p>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>

                                    <div class="tab-pane fade" id="v-pills-job" role="tabpanel" aria-labelledby="v-pills-job-tab">
                                        <?php
                                        $experience = "SELECT * FROM experience LIMIT 3";
                                        $experience_query = mysqli_query($db_connect, $experience);
                                        foreach ($experience_query as $value) { ?>
                                            <div class="single-resume-item">
                                                <div class="year">
                                                    <span><?= $value["start_date"] ?>-<?= $value["end_date"] ?></span>
                                                </div>
                                                <h3><?= $value["ex_title"] ?></h3>
                                                <h5><?= $value["ex_academy"] ?></h5>
                                                <p><?= $value["ex_description"] ?></p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-awards" role="tabpanel" aria-labelledby="v-pills-awards-tab">
                                        <?php
                                        $awards = "SELECT * FROM awards LIMIT 3";
                                        $awards_query = mysqli_query($db_connect, $awards);
                                        foreach ($awards_query as $value) { ?>
                                            <div class="single-resume-item">
                                                <div class="year">
                                                    <span><?= $value["start_date"] ?>-<?= $value["end_date"] ?></span>
                                                </div>
                                                <h3><?= $value["aw_title"] ?></h3>
                                                <h5><?= $value["aw_academy"] ?></h5>
                                                <p><?= $value["aw_description"] ?></p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="programming-skill mt-5">
                        <h3>Coding Skills</h3>
                        <?php
                        $skills = "SELECT * FROM skills LIMIT 4";
                        $skills_query = mysqli_query($db_connect, $skills);
                        $serial = 1;
                        foreach ($skills_query as $value) { ?>
                            <div class="single-progress-bar">
                                <p><?= $value["skills name"] ?></p>
                                <div class="progress-bar barfiller" id='bar<?= $serial++ ?>'>
                                    <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                                        <span class="tip"><?= $value["skills percentage"] ?>%</span>
                                    </div>
                                    <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s" data-percentage="<?= $value["skills percentage"] ?>"></span>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                    <div class="design-skills mt-45">
                        <h3>Design Skills</h3>
                        <div class="row">
                            <?php
                            $d_skills = "SELECT * FROM d_skills LIMIT 3";
                            $d_skills_query = mysqli_query($db_connect, $d_skills);
                            foreach ($d_skills_query as $value) { ?>
                                <div class="single-design-skill text-center col-sm-4 col-12">
                                    <div class="circlechart" data-percentage="<?= $value["d_skills percentage"] ?>"></div>
                                    <p><?= $value["d_skills name"] ?></p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-showcase section-padding pt-0" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>My portfolio</span>
                        <h2>I’m Graphic & Web Design , Developer and Check my Recent Work I’ll Provide my Clients.</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="portfolio-filter mt-4 mt-sm-5">
                        <button data-filter="*" class="active">All</button>
                        <?php
                        $portfolio = "SELECT * FROM portfolio";
                        $portfolio_query = mysqli_query($db_connect, $portfolio);
                        foreach ($portfolio_query as $value) { ?>
                            <button data-filter=".<?= $value["portfolio category"] ?>" class="active"><?= $value["portfolio category"] ?></button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row grid p-0">
                <?php
                $portfolio = "SELECT * FROM portfolio";
                $portfolio_query = mysqli_query($db_connect, $portfolio);
                foreach ($portfolio_query as $value) { ?>
                    <div class="col-lg-4 col-md-6 col-12 grid-item <?= $value["portfolio category"] ?>">
                        <div class="single-portfolio-item">
                            <a href="../uploads/portfolio/<?= $value["portfolio image"] ?>">
                                <img class="img-fluid" src="../uploads/portfolio/<?= $value["portfolio image"] ?>" alt="">
                                <span class="zoom-icon">+</span>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- testimonial section -->
    <section id="testimonial" class="testimonial-section section-padding theme-bg-gray" style="background-image: url('assets/img/testimonial_bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-carousel-active text-center owl-carousel owl-theme">
                        <?php
                        $team = "SELECT * FROM team";
                        $team_query = mysqli_query($db_connect, $team);
                        foreach ($team_query as $value) { ?>
                            <div class="single-testimonial-box">
                                <div class="client-img" style="background-image: url('../uploads/team/<?= $value["t_img"] ?>');"></div>
                                <div class="client-info">
                                    <h3><?= $value["t_name"] ?></h3>
                                    <span><?= $value["t_role"] ?></span>
                                </div>
                                <p><?= $value["t_description"] ?></p>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog section -->
    <section class="blog-section section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-8 offset-lg-2">
                    <div class="section-title-one">
                        <span>blog news</span>
                        <h2>Here I’ll Share Some of My Work Experience and also Some Tips&Tricks</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $blog = "SELECT * FROM blog";
                $blog_query = mysqli_query($db_connect, $blog);
                foreach ($blog_query as $value) { ?>
                    <div class="single-blog blog-one">
                        <div class="featured-img" style="background-image: url('../uploads/blog/<?= $value["b_img"] ?>');"></div>
                        <div class="blog-content-box">
                            <div class="post-date"><?= $value["b_date"] ?></div>
                            <h3><a href="single-blog.html"><?= $value["b_title"] ?></a></h3>

                            <a href="single-blog.html" class="read-more-btn">+ Read More</a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>

    <!-- blog section -->
    <section id="contact" class="contact-section section-padding theme-bg-gray" style="background-image: url('assets/img/testimonial_bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>Contact us</span>
                        <h2>Feel Free Message OR Call Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="contact-form-wraper">
                        <?php
                        if (isset($_SESSION["mail_sent"])) : ?>
                            <small class="text-success"><?= $_SESSION["mail_sent"] ?></small>

                        <?php
                        endif;
                        unset($_SESSION["mail_sent"]);
                        ?>
                        <form action="../backend/mail/client_mail.php" method="POST" class="row">
                            <div class="col-md-6 col-12">
                                <div class="single-input">
                                    <input type="text" name="name" id="name" placeholder="Spruce Springlane">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-input">
                                    <input type="email" name="email" id="email" placeholder="Type Email Here">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="single-input">
                                    <textarea placeholder="Message" name="message" id="message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="theme-btn">+ Mesage Me</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- col-12 col-lg-8 -->
                <div class="col-lg-4 col-12 offset-lg-1">
                    <div class="contact-info">
                        <div class="single-info">
                            <h4>eMail :</h4>
                            <span>example@email.com</span>
                        </div>
                        <div class="single-info">
                            <h4>Phone :</h4>
                            <span>+888- 1234- 5678- 00</span>
                        </div>
                        <div class="single-info">
                            <h4>Address :</h4>
                            <span>201 House Road, Torento Canada</span>
                        </div>
                    </div>
                </div><!-- col-lg-4 col-12 -->
            </div>
        </div>
    </section>

    <footer class="footer-one text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    &copy; 2020 Copyright Reserved - <a href="#">Modina Theme</a>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/typed.min.js"></script>
    <script src="assets/js/metismenu.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progresscircle.js"></script>
    <script src="assets/js/barfiller.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script>
        let typed = new Typed('.profession', {
            strings: ["Freelance Developer", "UI Designer"],
            typeSpeed: 80,
            loop: true,
            startDelay: 200,
            backSpeed: 50,
        });
    </script>
    <script src="assets/js/active.js"></script>
</body>

</html>