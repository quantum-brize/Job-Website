<?php
if (false) {
    echo "<pre>";
    print_r($products);
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Damiano</title>
    <meta name="description"
        content="South City International School is a premier international school in Kolkata, India. We offer a high-quality education that prepares students for success in college and beyond. Our curriculum is rigorous, our teachers are experienced, and our facilities are state-of-the-art. We are committed to providing our students with a well-rounded education that includes academics, sports, arts, and extracurricular activities." />
    <meta name="keywords"
        content="South City International School, Kolkata, international school, ICSE, ISC, education, school, students, parents, co-educational, day school, english medium, academic excellence, social service" />

    <meta name="author" content="South City International School" />
    <link rel="image_src" href="https://www.scis.co.in/images/scisbanner1.jpg">
    <meta name="page-topic" content="Best International School Kolkata" />
    <meta name="copyright" content="South City International School" />
    <meta name="Author" content="South City International School" />
    <link rel="canonical" href="https://www.scis.co.in" />
    <meta name="robots" content="index, follow" />
    <meta name="rating" content="safe for kids" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />
    <meta name="reply-to" content="info@scis.co.in">
    <meta name="allow-search" content="yes" />
    <meta name="revisit-after" content="daily" />
    <meta name="distribution" content="global" />
    <meta name="expires" content="never" />

    <meta property="og:title" content="South City International School | Kolkata's Premier International School" />
    <meta property="og:description"
        content="South City International School is a premier international school in Kolkata, India. We offer a high-quality education that prepares students for success in college and beyond. Our curriculum is rigorous, our teachers are experienced, and our facilities are state-of-the-art. We are committed to providing our students with a well-rounded education that includes academics, sports, arts, and extracurricular activities." />
    <meta property="og:url" content="https://www.scis.co.in" />
    <meta property="og:image" content="https://www.scis.co.in/images/scisbanner1.jpg" />
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="scis.co.in">
    <meta property="twitter:url" content="https://www.scis.co.in">
    <meta name="twitter:title" content="South City International School | Kolkata's Premier International School">
    <meta name="twitter:description"
        content="South City International School is a premier international school in Kolkata, India. We offer a high-quality education that prepares students for success in college and beyond. Our curriculum is rigorous, our teachers are experienced, and our facilities are state-of-the-art. We are committed to providing our students with a well-rounded education that includes academics, sports, arts, and extracurricular activities.">
    <meta name="twitter:image" content="https://www.scis.co.in/images/scisbanner1.jpg">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Glory:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.wizemen.net/fontawesome5-15-3/css/all.css" />
    <link rel="stylesheet" href="https://cdn.wizemen.net/fontawesome5-15-3/css/v4-shims.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <link href="https://cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css" rel="stylesheet">

    <style type="text/css">
        .error_message {
            color: red;
            font-weight: 500;
        }

        .success_message {
            color: green;
            font-weight: 500;
        }
    </style>
    <style>
        .fixbuttoninapplynowmain {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%) !important;
            z-index: 9999;
        }

        .fixbuttoninapplynow {
            background: var(--blue);
            z-index: 9999;
            text-align: center;
            width: 36px;
            padding: 11px;
            height: 110px;
            display: block;
            border: 1px solid #fff;
            transition: .3s;
        }

        /*.fixbuttoninapplynow:hover {
                background: var(--blue);
                transition: .3s;
            }*/

        .textrotateviewapplynow {
            webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-transform-origin: 0 0;
            -moz-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            -o-transform-origin: 0 0;
            transform-origin: 0 0;
            width: 87px;
            position: relative;
            left: 16px;
        }

        .textrotateviewapplynow a {
            display: block;
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1.2px;
        }

        .fixbuttoninapplynow.bookatour {
            height: 172px !important;
            background: var(--green);
        }

        /*.fixbuttoninapplynow.bookatour:hover {
                background: var(--green);
            }*/

        .fixbuttoninapplynow.bookatour .textrotateviewapplynow {
            width: 150px !important;
        }

        .fixbuttoninapplynow.applyadmissiontree .textrotateviewapplynow {
            width: 181px;
        }

        @media screen and (max-width:480px) {
            .fixbuttoninapplynow {
                top: 250px;
                transform: unset;
            }
        }
    </style>

    <style>
        .slider {
            overflow: hidden;
        }

        .slide {
            float: left;
            display: none;
        }

        img {
            width: 100%;
            height: auto;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- datepicker -->
    <script src="https://cdn.wizemen.net/plugins/datepicker/bootstrap-datepicker.js"></script>

    <style>

      /* banner CSS  */
    .carousel-item {
      height: 100vh;
      position: relative;
    }

    .carousel-item img {
      object-fit: cover;
      background-repeat: no-repeat;
      width: 100%;
      height: 100%;
    }

    .carousel_captions {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
      width: 80%; 
    }

    .carousel_captions h1 {
      font-size: 50px;
      font-weight: 400;
      color: #000;
    }

    .carousel_captions .p1 {
      font-size: 50px;
      font-weight: 700;
      color: #2734e3;
    }

    .carousel_captions .p2 {
      margin-top: 16px;
      font-size: 17px;
      font-weight: 700;
      color: #dadada;
    }

    .search-area {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
      width: 60%;
      margin-bottom: 50px;
    }

    .from_wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .search-area .form-control {
      border-radius: 20px 0 0 20px;
      width: 430px;
      height: 50px; 
      padding: 25px; 
    }

    .search-area .btn-primary {
      border-radius: 0 20px 20px 0;
      height: 50px;
      min-width: 80px; 
      padding: 10px 25px; 
      margin-bottom: 0;
    }
    /* ____________________________ */


    /* COMMON CSS FOR BELOW SECTION HEADING */
        .heading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        
        .heading-container .heading {
            font-size: 37px;
            font-weight: 500;
            white-space: nowrap;
        }
        
        .underline {
            width: 12%;
            margin-top: 5px;
            margin-bottom: 30px;
            height: 3px; 
            background-color: #f5f5f5;
        }
        /* ____________________________ */


    /* popular job categories css */
    .card {
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
        border-radius: 20px;
        background-color: #eeeeee;
        transition: transform 0.2s ease;
        cursor: pointer;
        
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .card-img-top {
      height: 150px;
      object-fit: cover;
    }

    .card-body {
      padding: 1.25rem;
    }

    .card-title {
      text-align: center;
      font-size: 25px;
      color: #000;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .card-text {
      text-align: center;
      font-size: 15px;
      font-weight: 500;
      color: #007bff;
    }

    .btn-browse-all {
      background-color: #007bff;
      color: #fff;
      border-color: #007bff;
      padding: 0.75rem 2rem;
      font-size: 1.25rem;
      border-radius: 30px;
      transition: background-color 0.3s ease;
    }

    .btn-browse-all:hover {
      background-color: #419bfa;
      color: #fff;
    }

    .user-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin-top: 15px;
        background-color: #61b7f1;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        border-bottom: 7px solid #61b7f1;
    }
  
    .inner-circle-big {
        bottom: -15px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
    
    }
    .inner-circle-small {
        top: 10px;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
    }
    /* ____________________________ */


    /* latest job */
    .latest-jobs {
        background-color: #f8f9fa;
        margin-bottom: 20px;
    }

    .latest-jobs .underline{
        background-color: #dfdfdf;
    }

    .job-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        padding: 20px;
        text-align: center;
        margin-bottom: 40px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .style{
        position: absolute;
        height: 200px;
        width: 200px;
        background: linear-gradient(45deg, rgba(254, 144, 144, 0.8), transparent);
        top: -8px;
        left: -70px;
        transform: rotate(60deg);

    }

    .job-icon img {
        width: 50px;
        height: 50px;
        margin-bottom: 15px;
    }

    .job-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .job-category, .job-location {
        font-size: 1rem;
        color: #666;
        margin-bottom: 10px;
    }

    .job-category i, .job-location i {
        margin-right: 5px;
        color: lightgrey;
    }

    .job-skill {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .job-skill span {
        background: #e9ecef;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9rem;
        color: #1967d3;
    }

    .save-icon {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 13px;
        color: #007bff;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
        padding: 0.75rem 2rem;
        font-size: 1.25rem;
        border-radius: 30px;
        transition: background-color 0.3s ease;
        margin-bottom: 50px;

    }

    .btn-browse-all:hover {
        background-color: #419bfa;
        color: #fff;
        }
    /* ____________________________ */


    /* responsiveness for mobile device */
    @media (max-width: 385px) {

        /* banner section */
        .banner_main {
            margin-top: 300px;  /* adjust this property after banner images shown*/
            padding: 10px;
        }

        .carousel-inner img {
            height: auto;
        }

        .carousel_captions{
            margin-top: -50px;
        }

        .carousel_captions h1 {
            font-size: 1.5rem;
            text-align: center;
        }

        .carousel_captions .p1,
        .carousel_captions .p2 {
            font-size: 0.9rem;
            text-align: center;
        }
        .search-area {
            width: 60%;
            margin-bottom: -70px;
        }

        .search-area .form-control {
            width: 170px;
            height: 20px; 
            padding: 12px;
            font-size: 13px; 
        }

        .search-area .btn-primary {
            font-size: 13px;
            height: 25.6px;
            padding: 0 6px; 
        }

        /* popular job categories */
        .job_categories .heading{
            margin-top: 50px;
            font-size: 32px;
        }
    }



  </style>
</head>

<body id="topview">

    <div class="fixbuttoninapplynowmain" data-aos="zoom-in" data-aos-duration="3000">
        <div class="fixbuttoninapplynow applynowsticky">
            <div class="textrotateviewapplynow">
                <a href="<?= $action_buttons['btn_link_1'] ?>" target="_blank"><?= $action_buttons['btn_title_1'] ?></a>
            </div>
        </div>

        <div class="fixbuttoninapplynow bookatour">
            <div class="textrotateviewapplynow">
                <a href="<?= $action_buttons['btn_link_2'] ?>" target="_blank"><?= $action_buttons['btn_title_2'] ?></a>
            </div>
        </div>
    </div>

    <!--header start-->

    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <header id="home">
        <!-- <div class="topheaderlogo">
            <a href="<?= base_url() ?>"><img data-aos="fade-up" data-aos-duration="1500"
                    src="<?= base_url() ?>assets/images/logo.png" alt="logo"></a>
        </div> -->
        <div class="headertop">
            <div class="headertop_left" onclick="menuopneview();" data-aos="fade-right" data-aos-duration="1500">
                <p>Menu</p>
                <div class="burger">
                    <span></span>
                </div>
            </div>
            <a href="<?= base_url('contact-us') ?>" onclick="activateGetInTouch();">
                <div class="headertop_right" data-aos="fade-left" data-aos-duration="1500">
                    <p>Contact</p>
                    <img src="<?= base_url() ?>assets/images/mail.png" alt="#">
                </div>
            </a>
        </div>
        <div class="intSchMenu">
            <div class="intSchMenu__overflow-area">
                <div class="intSchMenu__overflow-area-inner">
                    <div class="intSchMenu__menusWrapper">
                        <div class="first-level-navigation">
                            <ul>
                                <li><a href="<?= base_url('home') ?>">Home</a></li>
                                <li data-tab="aboutmenu"><a href="<?= base_url('about') ?>">About Us</a></li>
                                <!-- <li data-tab="academicsmenu">
                                    <a href="javascript:;">
                                        Products<span><i class="fa fa-angle-right"></i></span>
                                    </a>
                                </li> -->
                                <li data-tab="beyondclassroom"><a href="<?= base_url('updates') ?>">Updates</a></li>
                                <!-- <li data-tab="beyondclassroom"><a href="<?= base_url('quality') ?>">Quality</a></li> -->
                                <li data-tab="beyondclassroom"><a href="<?= base_url('job') ?>">Jobs</a></li>
                                <!-- <li data-tab="admissionmenu"><a href="<?= base_url('infrastructure') ?>">Infrastructure</a></li> -->
                                <li data-tab=""><a href="<?= base_url('contact-us') ?>">Contact us </a></li>
                                <li data-tab=""><a href="<?= base_url('account') ?>">Account </a></li>
                                <?php if(!empty($this->session->userdata(SES_USER_ID))){?>
                                    <li data-tab=""><a href="<?= base_url('Common/user_logout') ?>">Logout </a></li>
                                <?php } else {?>
                                    <li data-tab=""><a href="<?= base_url('login') ?>">Login </a></li>
                                <?php }?>
                            </ul>
                        </div>

                        <div class="second-level-navigation">


                            <div id="academicsmenu" class="tab-content">
                                <ul>
                                    <?php
                                    if ($products) {
                                        foreach ($products as $index => $item) {
                                            ?>
                                            <li>
                                                <a
                                                    href="<?= base_url('product?p_id=') . $item['uid'] ?>"><?= $item['name'] ?></a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div id="contact" class="tab-content">
                                <ul>
                                    <li><a href="/getintouch">Get In touch</a></li>
                                    <li><a href="https://maps.app.goo.gl/kWGu2T7zF4SM1oFw9" target="_blank">Driving
                                            Directions</a></li>
                                    <li><a href="/workwithus">Work with us</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="mobilemenuforthis">




                        <ul class="navmobile">
                            <li class="nav__item"><a href="<?= base_url('home') ?>" class="nav__link">Home</a></li>
                            <li class="nav__item"><a class="nav__link" href="<?= base_url('about') ?>">About Us</a></li>
                            <li class="nav__item">
                                <a class="nav__link" href="#">Products <i class="fas fa-chevron-right"></i></a>
                                <ul class="nav__sub">
                                    <?php
                                    if ($products) {
                                        foreach ($products as $index => $item) {
                                            ?>
                                            <li>
                                                <a
                                                    href="<?= base_url('product?p_id=') . $item['uid'] ?>"><?= $item['name'] ?></a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav__item"><a href="<?= base_url('updates') ?>" class="nav__link">Updates</a>
                            </li>
                            <li class="nav__item"><a href="<?= base_url('infrastructure') ?>"
                                    class="nav__link">Infrastructure</a></li>
                            <li class="nav__item"><a href="<?= base_url('quality') ?>" class="nav__link">quality</a></li>
                            <li class="nav__item"><a href="<?= base_url('career') ?>">Careers</a></li>

                            <li class="nav__item"><a href="<?= base_url('contact-us') ?>" class="nav__link">Contact
                                    us</a></li>
                        </ul>

                    </div>

                    <div class="intSchMenu__extraContent">
                        <div class="menulogo">
                            <a href="/"><img src="<?= base_url() ?>assets/images/logo.png" alt="#" /></a>
                        </div>
                        <div class="rightsideonmenuview">
                            <div class="latestnewsview">
                                <?php if (!empty($flyers)) {
                                    foreach ($flyers as $index => $item) {
                                        ?>
                                        <div class="samecolor">
                                            <div class="lower-content">
                                                <div class="newsname">
                                                    <i class="fa fa-newspaper-o"></i>
                                                </div>
                                                <div class="newsinnertext">
                                                    <img src="<?= base_url() . $item['img_path'] ?>" alt="#" />
                                                    <div class="hovertext">
                                                        <a href="<?= base_url() . $item['img_path'] ?>">
                                                            <div class="newsmoreview">
                                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->

    <!--banner start-->
    <section class="banner_main">
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                    if (!empty($banner_images)) {
                        foreach ($banner_images as $index => $item) {
                            $banner_active = "";
                            if($index == 0){
                                $banner_active = 'active';
                            }
                ?>
                <div class="carousel-item <?= $banner_active; ?>">
                    <img src="<?= base_url() . $item['img_path'] ?>" alt="SCIS-Banner" class="d-block w-100" alt="Image 1">
                </div>
                <?php
                    }
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="carousel_captions">
            <h1>It's Easy to Find Your</h1>
            <p class="p1">Join us & Explore Our of Jobs</p>
            <p class="p2">Find Jobs, Employment & Career Opportunities</p>  
        </div>

        <div class="search-area">
            <form action="#">
                <div class="from_wrapper">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Search for jobs...">
                    </div>
                    <button type="submit" class="btn btn-primary sm_screen_btn">Search</button>
                </div>
            </form>
        </div>
    </section>

    <!--Job categories start-->
    <section class="welcome_main job_categories" id="aboutus">
        <div class="container mt-5">
            <div class="row">
            <div class="col-12 text-center mb-4 heading-container">
                <h2 class="heading">Popular Job Categories</h2>
                <span class="underline"></span>
            </div>
            </div>
            <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="user-icon">
                                <div class="inner-circle-small"></div>
                                <div class="inner-circle-big"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Job Title 1</h5>
                                <p class="card-text">10 positions available</p>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="user-icon">
                                <div class="inner-circle-small"></div>
                                <div class="inner-circle-big"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Job Title 1</h5>
                                <p class="card-text">10 positions available</p>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="user-icon">
                                <div class="inner-circle-small"></div>
                                <div class="inner-circle-big"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Job Title 1</h5>
                                <p class="card-text">10 positions available</p>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="user-icon">
                                <div class="inner-circle-small"></div>
                                <div class="inner-circle-big"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Job Title 1</h5>
                                <p class="card-text">10 positions available</p>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="user-icon">
                                <div class="inner-circle-small"></div>
                                <div class="inner-circle-big"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Job Title 1</h5>
                                <p class="card-text">10 positions available</p>
                            </div>
                        </div>
                    </a>    
            </div>
        </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-browse-all mt-4">Browse All</button>
                </div>
            </div>
    </div>
    </section>
    <!--Job categories end-->


    <!--Latest job search-->
    <section class="latest-jobs py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="heading-container col text-center">
                    <h2 class="heading">Latest Jobs</h2>
                    <span class="underline"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <div class="job-card">
                            <div class="style"></div>
                            <div class="save-icon">
                                <i class="far fa-bookmark"></i>
                            </div>
                            <h3 class="job-title">Grafic designer</h3>
                            <p class="job-category"><i class="fas fa-briefcase"></i> Accountants</p>
                            <p class="job-location"><i class="fas fa-map-marker-alt"></i>Karabuk, Karabuk, Turkey</p>
                            <div class="job-skill">
                                <span>Computer Skill</span>
                                <span>4+</span>
                            </div>
                        </div>
                    </a>    
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="job-card">
                            <div class="style"></div>
                            <div class="save-icon">
                                <i class="far fa-bookmark"></i>
                            </div>
                            <h3 class="job-title">Graphic Designer</h3>
                            <p class="job-category"><i class="fas fa-briefcase"></i> Designer</p>
                            <p class="job-location"><i class="fas fa-map-marker-alt"></i>Ahmedabad, Gujarat, India</p>
                            <div class="job-skill">
                                <span>Computer Skill</span>
                                <span>6+</span>
                            </div>
                        </div>
                    </a>    
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="job-card">
                            <div class="style"></div>
                            <div class="save-icon">
                                <i class="far fa-bookmark"></i>
                            </div>
                            <h3 class="job-title">Soldador Mig MAG</h3>
                            <p class="job-category"><i class="fas fa-briefcase"></i> Education</p>
                            <p class="job-location"><i class="fas fa-map-marker-alt"></i>Krasnodar, Krasnodar, Russia</p>
                            <div class="job-skill">
                                <span>Communication Skill</span>
                                <span>1+</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary">Browse All</a>
                </div>
            </div>
        </div>
    </section>
    <!--Latest job search-->


    <!--achievement-->
    <section class="achievement">
        <div class="subheding" data-aos="fade-up" data-aos-duration="1500">Infrastructure</div>
        <div class="auto-container">
            <div class="toppers">

                <?php

                if (!empty($infrastructure)) {
                    foreach ($infrastructure as $index => $item) {
                        ?>
                        <div class="toppersbox" data-aos="fade-left" data-aos-duration="1600">
                            <div class="toppesrimgbox">
                                <img src="<?= base_url() . $item['img_path'] ?>" />
                            </div>
                            <div class="studentname"><?= $item['title'] ?></div>
                        </div>
                        <?php
                    }
                }

                ?>
            </div>
            <a href="#" class="arrowtopagetopper"></a>
            <!-- <div class="allnews" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                <a href="#" class="allbtnview"><span>VIEW ALL</span></a>
            </div> -->
        </div>
    </section>
    <!--achievement-->


    <!--Appreciation-->
    <section class="appreciationmain">
        <div class="auto-container">
            <div class="subheding" data-aos="fade-up" data-aos-duration="1000">Damiano Appreciation</div>
            <div class="appreciation owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="2000">

                <?php
                if (!empty($appreciation)) {
                    foreach ($appreciation as $index => $item) {
                        ?>
                        <div class="item">
                            <div class="lower-content">
                                <div class="border-layer"></div>
                                <a href="<?= base_url() . $item['img_path'] ?>" data-fancybox="">
                                    <img src="<?= base_url() . $item['img_path'] ?>" alt="#" />
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

                <!-- <div class="item">
                    <div class="lower-content">
                        <div class="border-layer"></div>
                        <a href="<?= base_url() ?>assets/images/awards/certificate2.jpg" data-fancybox="">
                            <img src="<?= base_url() ?>assets/images/awards/certificate2.jpg" alt="#" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="lower-content">
                        <div class="border-layer"></div>
                        <a href="<?= base_url() ?>assets/images/awards/certificate3.jpg" data-fancybox="">
                            <img src="<?= base_url() ?>assets/images/awards/certificate3.jpg" alt="#" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="lower-content">
                        <div class="border-layer"></div>
                        <a href="<?= base_url() ?>assets/images/awards/certificate4.jpg" data-fancybox="">
                            <img src="<?= base_url() ?>assets/images/awards/certificate4.jpg" alt="#" />
                        </a>
                    </div>
                </div> -->

            </div>
            <!-- <div class="allnews" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                <a href="" class="allbtnview"><span>View All</span></a>
            </div> -->
        </div>
    </section>
    <!--Appreciation-->

    <!--contact us-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet"
        media="screen">
    <link rel="stylesheet" href=https://cdn.wizemen.net/plugins/datepicker/datepicker3.css />
    <style>
        .intl-tel-input {
            display: block !important;
        }

        .contactus-right .form-control {
            height: 42px;
            resize: none;
        }

        .datepicker table tr td.disabled,
        .datepicker table tr td.disabled:hover {
            color: #e4e4e4;
        }

        ul.gitmainclass {
            display: flex;
            flex-wrap: wrap;
        }

        .contactus-left ul li {
            font-size: 16px !important;
        }

        li.gitleftbox {
            width: 50% !important;
            padding-right: 5px;
        }

        li.gitrightbox {
            width: 50% !important;
            padding-left: 15px;
        }

        li.gitleftbox img,
        li.gitrightbox img {
            width: 17px !important;
            top: 3px !important;
        }

        @media screen and (max-width:1124px) {
            .contactus-main .contactus-left {
                padding: 40px 24px;
            }
        }

        @media screen and (max-width:991px) {
            .contactus-left ul li {
                font-size: 18px !important;
                width: 100%;
            }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <section class="contactus" id="contactus">
        <div class="auto-container">
            <div class="row contactus-main">
                <div class="col-lg-6 contactus-left">
                    <div class="gettouch" data-aos="fade-up" data-aos-duration="2000">Connect with us</div>
                    <div class="gettouchtext" data-aos="fade-up" data-aos-duration="2200">We’d love to hear from you!
                    </div>
                    <ul class="gitmainclass" data-aos="fade-up" data-aos-duration="2000">
                        <li><a href="#" target="_blank"><img class="addressview"
                                    src="<?= base_url() ?>assets/images/location.png"
                                    alt="#"><?= $about_text['address'] ?></a></li>
                        <li class="gitleftbox">Admission Inquiry Number & Email<br />
                            <a href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/739/739247.png"
                                    alt="#"><?= $about_text['phone'] ?></a>
                            <a href="mailto: <?= $about_text['email'] ?>"><img
                                    src="<?= base_url() ?>assets/images/mail.png" alt="#">
                                <?= $about_text['email'] ?></a>
                        </li>
                    </ul>
                    <div class="locationmap" data-aos="fade-up" data-aos-duration="2400">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14743.02149300434!2d88.3490765!3d22.5133596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02765321b3ac7b%3A0x1368d3bf09f477ef!2sA%20Damiano%20%26%20Co!5e0!3m2!1sen!2sin!4v1715904413517!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
                <div class="col-lg-6 contactus-right">
                    <div class="gettouch" data-aos="fade-up" data-aos-duration="2000">Get In Touch</div>
                    <div class="gettouchtext" data-aos="fade-up" data-aos-duration="2200">Drop us your details for a
                        quick response.</div>
                    <form class="form" data-aos="fade-up" data-aos-duration="2400"
                        action="<?= base_url('admin/pages/save_user_message') ?>" method="POST">
                        <div class="mb-3">
                            <label class="form-label">First Name*</label>
                            <div>
                                <input type="text" class="form-control" placeholder="" maxlength="100"
                                    id="txtstudentname" name="f_name">
                                <div class="icon">
                                    <img src="https://cdn-icons-png.flaticon.com/512/9187/9187475.png" alt="#" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name*</label>
                            <div>
                                <input type="text" class="form-control" placeholder="" maxlength="100"
                                    id="txtparentname" name="l_name">
                                <div class="icon">
                                    <img src="https://cdn-icons-png.flaticon.com/512/547/547551.png" alt="#" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number*</label>
                            <div>
                                <input type="tel" class="form-control" maxlength="10" id="txtmobile"
                                    onkeypress="return isNumberKey(event)" name="mobile">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email*</label>
                            <div>
                                <input type="email" class="form-control" placeholder="" maxlength="100" id="txtemail"
                                    name="email">
                                <div class="icon">
                                    <img style="width:27px;"
                                        src="https://cdn-icons-png.flaticon.com/512/2549/2549872.png" alt="#" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your Inquiry*</label>
                            <div>
                                <input type="subject" class="form-control" placeholder="" maxlength="100" id="txtemail"
                                    style="height: 150px;" name="msg">
                                <div class="icon">
                                    <img style="width:27px;"
                                        src="https://cdn-icons-png.flaticon.com/512/9987/9987254.png" alt="#" />
                                </div>
                            </div>
                        </div>


                        <div class="mb-3 fullviewpart text-center">
                            <button type="submit" class="allbtnview" onclick="getintouchValidate(this);">
                                <span>Submit</span>
                            </button>
                        </div>

                        <div class="mb-3 fullviewpart d-none" id="div_message">
                            <!--append validation message-->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
    <script>
        $(() => {
            var disabledDates = [];


            disabledDates.push("2024-04-25");




            disabledDates.push("2024-04-27");




            disabledDates.push("2024-04-28");




            disabledDates.push("2024-04-29");




            disabledDates.push("2024-04-30");




            disabledDates.push("2024-05-02");




            disabledDates.push("2024-05-04");




            disabledDates.push("2024-05-05");




            disabledDates.push("2024-05-06");




            disabledDates.push("2024-05-07");




            disabledDates.push("2024-05-09");




            disabledDates.push("2024-05-11");




            disabledDates.push("2024-05-12");




            disabledDates.push("2024-05-13");




            disabledDates.push("2024-05-14");




            disabledDates.push("2024-05-16");




            disabledDates.push("2024-05-18");




            disabledDates.push("2024-05-19");




            disabledDates.push("2024-05-20");




            disabledDates.push("2024-05-21");




            disabledDates.push("2024-05-23");




            disabledDates.push("2024-05-25");




            disabledDates.push("2024-05-26");




            disabledDates.push("2024-05-27");




            disabledDates.push("2024-05-28");




            disabledDates.push("2024-05-30");




            disabledDates.push("2024-06-01");




            disabledDates.push("2024-06-02");




            disabledDates.push("2024-06-03");




            disabledDates.push("2024-06-04");




            disabledDates.push("2024-06-06");




            disabledDates.push("2024-06-08");




            disabledDates.push("2024-06-09");




            disabledDates.push("2024-06-10");




            disabledDates.push("2024-06-11");




            disabledDates.push("2024-06-13");




            disabledDates.push("2024-06-15");




            disabledDates.push("2024-06-16");




            disabledDates.push("2024-06-17");




            disabledDates.push("2024-06-18");




            disabledDates.push("2024-06-20");




            disabledDates.push("2024-06-22");




            disabledDates.push("2024-06-23");




            disabledDates.push("2024-06-24");




            disabledDates.push("2024-06-25");




            disabledDates.push("2024-06-27");




            disabledDates.push("2024-06-29");




            disabledDates.push("2024-06-30");




            disabledDates.push("2024-07-01");




            disabledDates.push("2024-07-02");




            disabledDates.push("2024-07-04");




            disabledDates.push("2024-07-06");




            disabledDates.push("2024-07-07");




            disabledDates.push("2024-07-08");




            disabledDates.push("2024-07-09");




            disabledDates.push("2024-07-11");




            disabledDates.push("2024-07-13");




            disabledDates.push("2024-07-14");




            disabledDates.push("2024-07-15");




            disabledDates.push("2024-07-16");




            disabledDates.push("2024-07-18");




            disabledDates.push("2024-07-20");




            disabledDates.push("2024-07-21");




            disabledDates.push("2024-07-22");




            disabledDates.push("2024-07-23");




            disabledDates.push("2024-07-25");




            disabledDates.push("2024-07-27");




            disabledDates.push("2024-07-28");




            disabledDates.push("2024-07-29");




            disabledDates.push("2024-07-30");




            disabledDates.push("2024-08-01");




            disabledDates.push("2024-08-03");




            disabledDates.push("2024-08-04");




            disabledDates.push("2024-08-05");




            disabledDates.push("2024-08-06");




            disabledDates.push("2024-08-08");




            disabledDates.push("2024-08-10");




            disabledDates.push("2024-08-11");




            disabledDates.push("2024-08-12");




            disabledDates.push("2024-08-13");




            disabledDates.push("2024-08-15");




            disabledDates.push("2024-08-17");




            disabledDates.push("2024-08-18");




            disabledDates.push("2024-08-19");




            disabledDates.push("2024-08-20");




            disabledDates.push("2024-08-22");




            disabledDates.push("2024-08-24");




            disabledDates.push("2024-08-25");




            disabledDates.push("2024-08-26");




            disabledDates.push("2024-08-27");




            disabledDates.push("2024-08-29");




            disabledDates.push("2024-08-31");




            disabledDates.push("2024-09-01");




            disabledDates.push("2024-09-02");




            disabledDates.push("2024-09-03");




            disabledDates.push("2024-09-05");




            disabledDates.push("2024-09-07");




            disabledDates.push("2024-09-08");




            disabledDates.push("2024-09-09");




            disabledDates.push("2024-09-10");




            disabledDates.push("2024-09-12");




            disabledDates.push("2024-09-14");




            disabledDates.push("2024-09-15");




            disabledDates.push("2024-09-16");




            disabledDates.push("2024-09-17");




            disabledDates.push("2024-09-19");




            disabledDates.push("2024-09-21");




            disabledDates.push("2024-09-22");




            disabledDates.push("2024-09-23");




            disabledDates.push("2024-09-24");




            disabledDates.push("2024-09-26");




            disabledDates.push("2024-09-28");




            disabledDates.push("2024-09-29");




            disabledDates.push("2024-09-30");




            disabledDates.push("2024-10-01");




            disabledDates.push("2024-10-03");




            disabledDates.push("2024-10-05");




            disabledDates.push("2024-10-06");




            disabledDates.push("2024-10-07");




            disabledDates.push("2024-10-08");




            disabledDates.push("2024-10-10");




            disabledDates.push("2024-10-12");




            disabledDates.push("2024-10-13");




            disabledDates.push("2024-10-14");




            disabledDates.push("2024-10-15");




            disabledDates.push("2024-10-17");




            disabledDates.push("2024-10-19");




            disabledDates.push("2024-10-20");




            disabledDates.push("2024-10-21");




            disabledDates.push("2024-10-22");




            disabledDates.push("2024-10-24");




            disabledDates.push("2024-10-26");




            disabledDates.push("2024-10-27");




            disabledDates.push("2024-10-28");




            disabledDates.push("2024-10-29");




            disabledDates.push("2024-10-31");




            disabledDates.push("2024-11-02");




            disabledDates.push("2024-11-03");




            disabledDates.push("2024-11-04");




            disabledDates.push("2024-11-05");




            disabledDates.push("2024-11-07");




            disabledDates.push("2024-11-09");




            disabledDates.push("2024-11-10");




            disabledDates.push("2024-11-11");




            disabledDates.push("2024-11-12");




            disabledDates.push("2024-11-14");




            disabledDates.push("2024-11-16");




            disabledDates.push("2024-11-17");




            disabledDates.push("2024-11-18");




            disabledDates.push("2024-11-19");




            disabledDates.push("2024-11-21");




            disabledDates.push("2024-11-23");




            disabledDates.push("2024-11-24");




            disabledDates.push("2024-11-25");




            disabledDates.push("2024-11-26");




            disabledDates.push("2024-11-28");




            disabledDates.push("2024-11-30");




            disabledDates.push("2024-12-01");




            disabledDates.push("2024-12-02");




            disabledDates.push("2024-12-03");




            disabledDates.push("2024-12-05");




            disabledDates.push("2024-12-07");




            disabledDates.push("2024-12-08");




            disabledDates.push("2024-12-09");




            disabledDates.push("2024-12-10");




            disabledDates.push("2024-12-12");




            disabledDates.push("2024-12-14");




            disabledDates.push("2024-12-15");




            disabledDates.push("2024-12-16");




            disabledDates.push("2024-12-17");




            disabledDates.push("2024-12-19");




            disabledDates.push("2024-12-21");




            disabledDates.push("2024-12-22");




            disabledDates.push("2024-12-23");




            disabledDates.push("2024-12-24");




            disabledDates.push("2024-12-26");




            disabledDates.push("2024-12-28");




            disabledDates.push("2024-12-29");




            disabledDates.push("2024-12-30");




            disabledDates.push("2024-12-31");




            disabledDates.push("2025-01-02");




            disabledDates.push("2025-01-04");




            disabledDates.push("2025-01-05");




            disabledDates.push("2025-01-06");




            disabledDates.push("2025-01-07");




            disabledDates.push("2025-01-09");




            disabledDates.push("2025-01-11");




            disabledDates.push("2025-01-12");




            disabledDates.push("2025-01-13");




            disabledDates.push("2025-01-14");




            disabledDates.push("2025-01-16");




            disabledDates.push("2025-01-18");




            disabledDates.push("2025-01-19");




            disabledDates.push("2025-01-20");




            disabledDates.push("2025-01-21");




            disabledDates.push("2025-01-23");




            disabledDates.push("2025-01-25");




            disabledDates.push("2025-01-26");




            disabledDates.push("2025-01-27");




            disabledDates.push("2025-01-28");




            disabledDates.push("2025-01-30");




            disabledDates.push("2025-02-01");




            disabledDates.push("2025-02-02");




            disabledDates.push("2025-02-03");




            disabledDates.push("2025-02-04");




            disabledDates.push("2025-02-06");




            disabledDates.push("2025-02-08");




            disabledDates.push("2025-02-09");




            disabledDates.push("2025-02-10");




            disabledDates.push("2025-02-11");




            disabledDates.push("2025-02-13");




            disabledDates.push("2025-02-15");




            disabledDates.push("2025-02-16");




            disabledDates.push("2025-02-17");




            disabledDates.push("2025-02-18");




            disabledDates.push("2025-02-20");




            disabledDates.push("2025-02-22");




            disabledDates.push("2025-02-23");




            disabledDates.push("2025-02-24");




            disabledDates.push("2025-02-25");




            disabledDates.push("2025-02-27");




            disabledDates.push("2025-03-01");




            disabledDates.push("2025-03-02");




            disabledDates.push("2025-03-03");




            disabledDates.push("2025-03-04");




            disabledDates.push("2025-03-06");




            disabledDates.push("2025-03-08");




            disabledDates.push("2025-03-09");




            disabledDates.push("2025-03-10");




            disabledDates.push("2025-03-11");




            disabledDates.push("2025-03-13");




            disabledDates.push("2025-03-15");




            disabledDates.push("2025-03-16");




            disabledDates.push("2025-03-17");




            disabledDates.push("2025-03-18");




            disabledDates.push("2025-03-20");




            disabledDates.push("2025-03-22");




            disabledDates.push("2025-03-23");




            disabledDates.push("2025-03-24");




            disabledDates.push("2025-03-25");




            disabledDates.push("2025-03-27");




            disabledDates.push("2025-03-29");




            disabledDates.push("2025-03-30");




            disabledDates.push("2025-03-31");




            disabledDates.push("2025-04-01");




            disabledDates.push("2025-04-03");




            disabledDates.push("2025-04-05");




            disabledDates.push("2025-04-06");




            disabledDates.push("2025-04-07");




            disabledDates.push("2025-04-08");




            disabledDates.push("2025-04-10");




            disabledDates.push("2025-04-12");




            disabledDates.push("2025-04-13");




            disabledDates.push("2025-04-14");




            disabledDates.push("2025-04-15");




            disabledDates.push("2025-04-17");




            disabledDates.push("2025-04-19");




            disabledDates.push("2025-04-20");




            disabledDates.push("2025-04-21");




            disabledDates.push("2025-04-22");




            disabledDates.push("2025-04-24");



            $('.date_calender_custom').datepicker({
                startDate: new Date(),
                beforeShowDay: function (date) {
                    var dateString = date.getFullYear() + '-' + ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date.getDate()).slice(-2);
                    return disabledDates.indexOf(dateString) < 0;
                },
                format: 'dd/mm/yyyy',
                autoclose: true
            });

            $("#ddlschooltourrequired").val("No").trigger("change");
        });
    </script>

    <script>
        var telInput = $("#txtmobile,#txtwhatsapp"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({

            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "auto",
            ipinfoToken: "yolo",

            nationalMode: false,
            numberType: "MOBILE",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            //preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "in"


        });

        var reset = function () {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function () {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);
    </script>

    <script src="<?= base_url() ?>assets/js/getintouch.js?v=02122023"></script>

    <script>
        function formatDateInput(e) {
            var input = e.target;
            var value = input.value;
            var lastChar = value.slice(-1);

            if (e.inputType !== "deleteContentBackward") {
                if (value.length === 2 || value.length === 5) {
                    if (lastChar === '/') {
                        var parts = value.split('/');
                        if (parts[0].length === 1) {
                            parts[0] = '0' + parts[0];
                        }
                        if (parts[1] && parts[1].length === 1) {
                            parts[1] = '0' + parts[1];
                        }
                        input.value = parts.join('/');
                    }
                    if (lastChar !== '/') {
                        input.value += '/';
                    }
                }
                if (value.length > 10) {
                    input.value = value.slice(0, 10);
                }
            }
        }

        function changeschooltour(obj) {
            if ($(obj).val() == "Yes") {
                $("#txtscheduletour").removeAttr("disabled");
                $("#ddltimeslot").removeAttr("disabled");
            } else {
                $("#txtscheduletour").attr("disabled", "disabled");
                $("#ddltimeslot").attr("disabled", "disabled");
            }
            $('#txtscheduletour').datepicker('setDate', null);
            $("#ddltimeslot").val("");
        }

        function changeSOI(obj) {
            if ($(obj).val() == "Referral") {
                $("#divRefName").removeClass("d-none");
            } else {
                $("#divRefName").addClass("d-none");
            }
            $("#referringstudent").val("");
        }
    </script>


    <!--contactus-->
    <!--news-->
    <section class="stories">
        <div class="auto-container">
            <div class="subheding" data-aos="fade-up" data-aos-duration="2000">Latest News</div>
            <div class="row stories-main">
                <div class="col-lg-12 col-sm-12 stories-right" data-aos="fade-left" data-aos-duration="2000">
                    <div class="row">
                        <?php if (!empty($flyers)) {
                            foreach ($flyers as $index => $item) {
                                ?>
                                <div class="col-lg-4 col-sm-4 col-4 twonewsview">
                                    <div class="schoolnews facebooknews">
                                        <div class="lower-content">
                                            <div class="newsname">
                                                <i class="fa fa-newspaper-o"></i>
                                            </div>
                                            <div class="border-layer"></div>
                                            <div class="newsinnertext">
                                                <img src="<?= base_url() . $item['img_path'] ?>" />
                                                <div class="hovertext">
                                                    <a href="<?= base_url() . $item['img_path'] ?>">
                                                        <div class="newsmoreview">
                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } ?>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--news-->
    <!--small popup-->

    <!--footer-->
    <footer>
        <div class="auto-container">
            <div class="row footer_top">
                <div class="col-lg-4 col-sm-12" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
                    <div class="footerlogo">
                        <a href="/"><img src="<?= base_url() ?>assets/images/logo.png" alt="#" /></a>
                    </div>
                    <p><?= $about_text['about_text'] ?></p>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
                    <div class="quicklinks">
                        <div class="footerheading quicklinkview">Quick Links</div>
                        <ul>
                            <li><a href="<?= base_url('about') ?>">About</a></li>
                            <li><a href="<?= base_url('updates') ?>">Updates</a></li>
                            <li><a href="<?= base_url('quality') ?>">Quality</a></li>
                            <li><a href="<?= base_url('infrastructure') ?>">Infrastructure</a></li>
                            <li><a href="<?= base_url('contact-us') ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="connectus" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
                        <div class="footerheading">Connect with us</div>
                        <ul>

                            <li><a href="#" target="_blank"><img class="addressview"
                                        src="<?= base_url() ?>assets/images/location.png"
                                        alt="#"><?= $about_text['address'] ?></a></li>
                            <li>
                                <a href="#" target="_blank"><img
                                        src="https://cdn-icons-png.flaticon.com/512/739/739247.png" alt="#">
                                    <?= $about_text['phone'] ?></a>
                                <a href="mailto: <?= $about_text['email'] ?>"><img
                                        src="<?= base_url() ?>assets/images/mail.png" alt="#">
                                    <?= $about_text['email'] ?></a>
                            </li>


                        </ul>
                        <div class="footerheading">Follow Us On</div>
                        <ul class="socialmedia">
                            <li class="facebook_color"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="linkedin_color"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="instagram_color"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="youtube_color"><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerbottom">
            <a href="#topview">
                <div class="arrowtoptobottom">
                    <img src="<?= base_url() ?>assets/images/navigation.png" alt="#" />
                </div>
            </a>
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <p>© 2024 Damiano. All Rights Reserved. | Developed by <a href="#" target="_blank">Quantum
                                Brize</a></p>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <ul>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->

    <style>
        .overlay-main {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: rgb(0 0 0 /50%);
            z-index: 9999999;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay-main-content {
            z-index: 999;
        }

        .close-button {
            text-align: right;
        }

        .close-button i {
            position: relative;
            top: 0;
            right: 0;
            color: var(--yellow);
            background: #fff;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            font-size: 15px;
            line-height: 1.5;
            text-align: center;
            border: 2px solid var(--yellow);
            cursor: pointer;
        }

        .img-and-content {
            background-color: #fff;
            border-radius: 70px;
            display: flex;
            justify-content: center;
            cursor: pointer;
            align-items: center;
            padding: 10px;
            box-shadow: 0px 0px 11px 0px #ccc;
            text-decoration: none !important;
        }

        .img-and-content img {
            width: 115px;
            margin-right: 12px;
            padding: 0;
            border-radius: 50%;
        }

        span.content__popup {
            width: 290px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            margin-right: 10px;
        }

        .img-and-content .text-popup {
            font-size: 16px;
            font-family: 'Glory', sans-serif;
            text-align: center;
            margin-bottom: 0;
            margin-right: 10px;
            letter-spacing: 0px;
            font-style: normal;
            color: var(--textcolorblack);
            line-height: 22px;
        }

        .see_morew__btn {
            line-height: 1;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 2px 10px 3px 10px;
            font-weight: 600;
            text-shadow: 0 0 black;
            font-size: 14px;
            font-style: italic;
            width: auto;
            margin-top: 4px !important;
            margin: 0 auto;
            font-family: 'Glory', sans-serif;
            color: var(--textcolorblack);
            display: inline-block;
            white-space: nowrap;
            text-align: center;
            letter-spacing: 1px;
            transition: ease all 500ms;
        }

        span.see_morew__btn:hover {
            color: var(--green);
            transition: ease all 500ms;
        }

        .topheadingpopup {
            font-family: 'Glory', sans-serif;
            font-weight: 500;
            text-align: center;
            color: #333;
            font-size: 18px;
            line-height: 22px;
        }

        @media screen and (max-width:767px) {
            span.content__popup {
                width: 220px;
            }

            .topheadingpopup {
                font-size: 14px;
                line-height: 18px;
            }

            .img-and-content .text-popup {
                font-size: 13px;
                margin-right: 0px;
                line-height: 18px;
            }

            .see_morew__btn {
                font-size: 12px;
            }

            .img-and-content img {
                width: 98px;
            }
        }
    </style>




    <div class="overlay-main">
        <div class="overlay-main-content" data-aos="fade-down" data-aos-duration="2000">
            <div class="close-button" onclick="closePopup()">
                <i class="fa fa-close" style="color: #333;"></i>
            </div>
            <div class="img-and-content">
                <img src="<?= base_url() . $alerts['img_path'] ?>" alt="International School Gurgaon">
                <span class="content__popup">
                    <h4><?= $alerts['title'] ?></h4>
                    <span class="text-popup"><?= $alerts['message'] ?></span>
                    <a href="<?= $alerts['link'] ?>" class="btn-sm btn-success">see more</a>
                </span>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('.overlay-main-content').removeClass('display__none');
        });

        function closePopup() {
            $('.overlay-main').fadeOut(300);
        }
        $(document).ready(function () {
            $(".overlay-main").click(function () {
                $(this).css('display', 'none');
            });
        });
        $(document).keydown(function (e) {
            if (e.key === "Escape") {
                $(".overlay-main").css('display', 'none');
            }
        });

        new WOW().init()
    </script>
    <!--small popup-->
    <script>
        const expand = document.querySelector('.announcement');
        const makeClipPath = progress => {
            let size = Math.min(210 * progress, 100);
            let x = 50;
            let y = Math.min(100 + 0 * progress, 100);

            return `circle(${size}% at ${x}% ${y}%)`;
        };

        document.addEventListener('scroll', e => {
            const progress = window.scrollY / (document.body.clientHeight - window.innerHeight);
            const clipPath = makeClipPath(progress);

            expand.style.clipPath = clipPath;
            expand.style.opacity = Math.min(progress * 4, 1);
        });
    </script>
    <script>
        $(window).on('load', function () {
            let showFirst = true;
            if (showFirst) {
                $(".overlay-main").show();
                $(".applynowsticky").hide();
            }

            $(".overlay-main").click(function () {
                if (showFirst) {
                    $(".overlay-main").hide();
                    $(".applynowsticky").show();
                } else {
                    $(".overlay-main").show();
                    $(".applynowsticky").hide();
                }
                showFirst = !showFirst;
            });
        });
    </script>





    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
    <script>
        $.fn.circleType = function (options) {

            var settings = {
                dir: 1,
                position: 'relative'
            };
            if (typeof ($.fn.lettering) !== 'function') {
                console.log('Lettering.js is required');
                return;
            }
            return this.each(function () {

                if (options) {
                    $.extend(settings, options);
                }
                var elem = this,
                    delta = (180 / Math.PI),
                    ch = parseInt($(elem).css('line-height'), 10),
                    fs = parseInt($(elem).css('font-size'), 10),
                    txt = elem.innerHTML.replace(/^\s+|\s+$/g, '').replace(/\s/g, '&nbsp;'),
                    letters,
                    center;

                elem.innerHTML = txt
                $(elem).lettering();

                elem.style.position = settings.position;

                letters = elem.getElementsByTagName('span');
                center = Math.floor(letters.length / 2)

                var layout = function () {
                    var tw = 0,
                        i,
                        offset = 0,
                        minRadius,
                        origin,
                        innerRadius,
                        l, style, r, transform;

                    for (i = 0; i < letters.length; i++) {
                        tw += letters[i].offsetWidth;
                    }
                    minRadius = (tw / Math.PI) / 2 + ch;

                    if (settings.fluid && !settings.fitText) {
                        settings.radius = Math.max(elem.offsetWidth / 2, minRadius);
                    } else if (!settings.radius) {
                        settings.radius = minRadius;
                    }

                    if (settings.dir === -1) {
                        origin = 'center ' + (-settings.radius + ch) / fs + 'em';
                    } else {
                        origin = 'center ' + settings.radius / fs + 'em';
                    }

                    innerRadius = settings.radius - ch;

                    for (i = 0; i < letters.length; i++) {
                        l = letters[i];
                        offset += l.offsetWidth / 2 / innerRadius * delta;
                        l.rot = offset;
                        offset += l.offsetWidth / 2 / innerRadius * delta;
                    }
                    for (i = 0; i < letters.length; i++) {
                        l = letters[i]
                        style = l.style
                        r = (-offset * settings.dir / 2) + l.rot * settings.dir
                        transform = 'rotate(' + r + 'deg)';

                        style.position = 'absolute';
                        style.left = '50%';
                        style.marginLeft = -(l.offsetWidth / 2) / fs + 'em';

                        style.webkitTransform = transform;
                        style.MozTransform = transform;
                        style.OTransform = transform;
                        style.msTransform = transform;
                        style.transform = transform;

                        style.webkitTransformOrigin = origin;
                        style.MozTransformOrigin = origin;
                        style.OTransformOrigin = origin;
                        style.msTransformOrigin = origin;
                        style.transformOrigin = origin;
                        if (settings.dir === -1) {
                            style.bottom = 0;
                        }
                    }

                    if (settings.fitText) {
                        if (typeof ($.fn.fitText) !== 'function') {
                            console.log('FitText.js is required when using the fitText option');
                        } else {
                            $(elem).fitText();
                            $(window).resize(function () {
                                updateHeight();
                            });
                        }
                    }
                    updateHeight();
                };

                var getBounds = function (elem) {
                    var docElem = document.documentElement,
                        box = elem.getBoundingClientRect();
                    return {
                        top: box.top + window.pageYOffset - docElem.clientTop,
                        left: box.left + window.pageXOffset - docElem.clientLeft,
                        height: box.height
                    };
                };

                var updateHeight = function () {
                    var mid = getBounds(letters[center]),
                        first = getBounds(letters[0]),
                        h;
                    if (mid.top < first.top) {
                        h = first.top - mid.top + first.height;
                    } else {
                        h = mid.top - first.top + first.height;
                    }
                    elem.style.height = h + 'px';
                }

                if (settings.fluid && !settings.fitText) {
                    $(window).resize(function () {
                        layout();
                    });
                }

                if (document.readyState !== "complete") {
                    elem.style.visibility = 'hidden';
                    $(window).on("load", function () {
                        elem.style.visibility = 'visible';
                        layout();
                    });
                } else {
                    layout();
                }
            });
        };
        $('#curved1').circleType({
            position: 'absolute',
            dir: 1,
            radius: 650
        });
        $('#curved2').circleType({
            position: 'absolute',
            dir: 1,
            radius: 650
        });

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }

        function ValidateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    </script>


    <script type="text/javascript" src="<?= base_url() ?>assets/js/Carousel.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

    <script src="<?= base_url() ?>assets/js/fullcalendar/dist/index.global.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/aos.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/coustom.js?v=3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/common.js"></script>

    <script>
        $(document).ready(function () {
            $('.date_calender').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });
        });

        function activateBookATour() {
            $("#ddlschooltourrequired").val("Yes").change();
            window.location.href = "#contactus";
        }

        function activateGetInTouch() {
            $("#ddlschooltourrequired").val("No").change();
            window.location.href = "#contactus";
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sliders = document.querySelectorAll('.slider');

            sliders.forEach(slider => {
                let slideIndex = 0;
                const slides = slider.querySelectorAll('.slide');

                function showSlide(index) {
                    if (index >= slides.length) {
                        slideIndex = 0;
                    } else if (index < 0) {
                        slideIndex = slides.length - 1;
                    } else {
                        slideIndex = index;
                    }
                    slides.forEach(slide => {
                        slide.style.display = "none";
                    });
                    slides[slideIndex].style.display = "block";
                }

                function changeSlide(n) {
                    showSlide(slideIndex += n);
                }

                showSlide(slideIndex);
            });
        });


    </script>

</body>

</html>