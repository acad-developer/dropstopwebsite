
<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from autohive-html.themetags.com/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Dec 2023 12:42:49 GMT -->
    <head>
        <!--required meta tags-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--twitter og-->
        <meta name="twitter:site" content="@themetags" />
        <meta name="twitter:creator" content="@themetags" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="DropStop - The Van Life App Built by Van Lifers " />
        <meta name="twitter:description" content="Drop Stop is your one-stop app to find these places local to wherever you happen to be in the UK, and you can join our community for free today. " />
        <meta name="twitter:image" content="#" />

        <!--facebook og-->
        <meta property="og:url" content="#" />
        <meta name="twitter:title" content="DropStop - The Van Life App Built by Van Lifers " />
        <meta property="og:description" content="Drop Stop is your one-stop app to find these places local to wherever you happen to be in the UK, and you can join our community for free today. " />
        <meta property="og:image" content="#" />
        <meta property="og:image:secure_url" content="#" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="600" />

        <!--meta-->
        <meta name="description" content="Drop Stop is your one-stop app to find these places local to wherever you happen to be in the UK, and you can join our community for free today. " />
        <meta name="author" content="ThemeTags" />

        <!--favicon icon-->
        <link rel="icon" href="<?php echo base_url("public/assets/img/favicon.png"); ?>" type="image/png" sizes="16x16" />

        <!--title-->
        <title>DropStop - The Van Life App Built by Van Lifers </title>

        <!--build:css-->
        <link rel="stylesheet" href="<?php echo base_url("public/assets/css/main.css"); ?>" />
        <!-- endbuild -->

        <!--custom css-->
        <link rel="stylesheet" href="<?php echo base_url("public/assets/css/custom.css"); ?>" />

    </head>
    <?php
    $mainMenu = [
        array("title" => "Home", "link" => site_url("/")),
        array("title" => "About Us", "link" => site_url("/")),
        array("title" => "Business", "link" => site_url("/")),
        array("title" => "FAQ's", "link" => site_url("/")),
    ];
    ?>
    <body>

        <div class="ring-preloader w-100 h-100 position-fixed start-0 top-0">
            <div class="lds-dual-ring"></div>
        </div>

        <!--main content wrapper start-->
        <div class="main-wrapper">

            <!--header area start-->
            <header class="header-4 bg-white py-1 header-shadow position-relative z-2 header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-5">
                            <div class="logo-wrapper">
                                <a href="#" class="img-fluid home-page-logo"><img src="<?php echo base_url("public/assets/img/logo-color-2.png"); ?>" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-7">
                            <div class="md-nav-wrapper d-flex align-items-center justify-content-end">
                                <nav class="at_nav_menu d-none d-xl-block el_menu_list">
                                    <ul>
                                        <?php
                                        foreach ($mainMenu as $key => $value) {
                                            ?>
                                            <li class = ""><a href = "#"><?php echo $value["title"]; ?></a> </li>
                                            <?php
                                        }
                                        ?>

                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--header area end-->

            <!--mobile menu start-->
            <div class="mobile-menu position-fixed bg-white deep-shadow">
                <button class="close-menu position-absolute"><i class="fa-solid fa-xmark"></i></button>
                <a href="#" class="logo-wrapper bg-secondary d-block mt-4 p-3 rounded-1 text-center"><img src="<?php echo base_url("public/assets/img/logo.png"); ?>" alt="logo" class="img-fluid"></a>
                <nav class="mobile-menu-wrapper mt-40">
                    <ul>
                        <?php
                        foreach ($mainMenu as $key => $value) {
                            ?>
                            <li class = ""><a href = "#"><?php echo $value["title"]; ?></a> </li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
                <div class="contact-info mt-60">
                    <h4 class="mb-20">Contact Info</h4>
             
                    <p>+1 0000 0000</p>
                    <p>info@dropstop.com</p>
                    <div class="social-contact">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <!--mobile menu end-->

            <!--electric hero start-->
            <section class="el-hero-section position-relative z-1 overflow-hidden bg-light">
                <img src="<?php echo base_url("public/assets/img/shapes/socket.png"); ?>" alt="socket" class="position-absolute start-0 top-0 z--1 socket">
                <img src="<?php echo base_url("public/assets/img/shapes/green-hero-shape.png"); ?>" alt="hero shape" class="position-absolute end-0 top-0 z--1">
                <img src="<?php echo base_url("public/assets/img/shapes/leaf.png"); ?>" alt="leaf" class="position-absolute end-0 leaf z--1">
                <img src="<?php echo base_url("public/assets/img/shapes/blur-part-1.png"); ?>" alt="blur" class="position-absolute start-0 bottom-0 z--1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5">
                            <div class="el-hero-content">
                                <h6 class="text-el-primary mb-2">Electric Dealership
                                    <span class="ms-2">
                                        <svg width="80" height="12" viewBox="0 0 80 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 6L74 6.00001" stroke="#5CAD2F" stroke-width="1.5"/>
                                        <path d="M79.5 6L70.5 11.1962L70.5 0.803847L79.5 6Z" fill="#5CAD2F"/>
                                        </svg>
                                    </span>
                                </h6>
                                <h1 class="display-4 fw-bold el-heading mb-3">The Beginnings of the <mark class="bg-transparent p-0 text-el-primary">DropStop</mark>  Van Life App </h1>
                                <h5 class="fw-500 mb-5">The Van Life App Built by<strong> Van Lifers</strong></h4>
                                    <div class="apps-btn-group mt-40 d-flex align-items-center flex-wrap">
                                        <a href="#" class="app-btn el-primary-btn d-inline-flex align-items-center">
                                            <span class="icon-wrapper me-2"><i class="fa-brands fa-google-play"></i></span>
                                            <div class="app-btn-content">
                                                <span>Get it on</span>
                                                <strong>Google Play</strong>
                                            </div>
                                        </a>
                                        <a href="#" class="app-btn white-btn d-inline-flex align-items-center el-box-shadow">
                                            <span class="icon-wrapper me-2"><i class="fa-brands fa-apple"></i></span>
                                            <div class="app-btn-content">
                                                <span>Get it on</span>
                                                <strong>App Store</strong>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="hero-car mt-5 mt-xl-0">
                                <img src="<?php echo base_url("public/assets/img/electric-car/hero-car.png"); ?>" alt="hero car" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="el-header-socials at-header-social d-none d-sm-flex align-items-center position-absolute">
                    <ul class="social-list ms-3">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <span class="title fw-bold">
                        <svg width="16" height="54" viewBox="0 0 16 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.2929 53.7071C7.68342 54.0976 8.31658 54.0976 8.70711 53.7071L15.0711 47.3431C15.4616 46.9526 15.4616 46.3195 15.0711 45.9289C14.6805 45.5384 14.0474 45.5384 13.6569 45.9289L8 51.5858L2.34315 45.9289C1.95262 45.5384 1.31946 45.5384 0.928934 45.9289C0.53841 46.3195 0.53841 46.9526 0.928934 47.3431L7.2929 53.7071ZM7 4.37114e-08L7 53L9 53L9 -4.37114e-08L7 4.37114e-08Z" fill="#5F5F5F"/>
                        </svg>
                        Follow on
                    </span>
                </div>
            </section>
            <!--electric hero end-->

            <!--about section start-->
            <section class="el-about-section pt-120 position-relative z-1 bg-light">
                <img src="<?php echo base_url("public/assets/img/shapes/el-blur-2.png"); ?>" alt="blur" class="position-absolute end-0 top-50 translate-middle-y z--1">
                <img src="<?php echo base_url("public/assets/img/shapes/blur-part-2.png"); ?>" alt="blur" class="position-absolute start-0 top-0 z--1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="el-section-title d-flex align-items-center flex-wrap flex-md-nowrap mb-5">
                                <div class="title-left text-end flex-shrink-0">
                                    <h6 class="text-el-primary mb-1">
                                        <span class="me-2">
                                            <svg width="80" height="12" viewBox="0 0 80 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M79.5 6H5.5" stroke="#5CAD2F" stroke-width="1.5"/>
                                            <path d="M-2.62268e-07 6L9 0.803848L9 11.1962L-2.62268e-07 6Z" fill="#5CAD2F"/>
                                            </svg>    
                                        </span>
                                        Our Mission
                                    </h6>
                                    <h2 class="el-heading">Our aim is <br/>for DropStop </h2>
                                </div>
                                <div class="title-desc ms-4 position-relative">
                                    <p class="mb-0">
                                        Our aim is for DropStop to be the bridge to help wild campers keep their access to freedom while supporting local businesses and keeping communities and park-up spots clean and tidy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 justify-content-center">
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                                <div class="el-about-box">
                                    <span class="icon-wrapper position-relative">
                                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.15528 12.0677H28.2449C29.0207 17.0042 33.2972 20.8541 38.5438 20.8541H43.8156C44.7217 20.8541 45.4562 20.1195 45.4562 19.2135V17.3395H54.3594C55.2654 17.3395 56 16.605 56 15.6989C56 14.7929 55.2654 14.0583 54.3594 14.0583H45.4562V6.7958H54.3594C55.2654 6.7958 56 6.06123 56 5.15517C56 4.24911 55.2654 3.51455 54.3594 3.51455H45.4562V1.64062C45.4562 0.734562 44.7217 0 43.8156 0H38.5438C33.3011 0 29.0212 3.84639 28.2449 8.78642H5.15528C2.331 8.78642 0 11.069 0 13.9417V36.7865C0 39.6688 2.34106 41.9417 5.15528 41.9417H7.0292V49.0875C7.0292 49.9936 7.76377 50.7281 8.66983 50.7281H12.4995C13.2381 53.75 15.9673 56 19.2137 56C22.46 56 25.1892 53.75 25.9278 50.7281H35.3443C36.0829 53.75 38.8123 56 42.0585 56C45.3048 56 48.0341 53.75 48.7727 50.7281H54.3594C55.2654 50.7281 56 49.9936 56 49.0875V44.6942C56 39.4292 51.7167 35.1458 46.4516 35.1458H46.2525L40.0052 28.8985C38.3678 27.2612 36.1907 26.3594 33.8746 26.3594H12.1844C9.36009 26.3594 7.02909 28.6418 7.02909 31.5145V38.6603H5.15528C4.13164 38.6605 3.28125 37.8328 3.28125 36.7864V13.9417C3.28125 12.9208 4.10659 12.0677 5.15528 12.0677ZM38.5438 3.28125H42.175V17.573H38.5438C34.5352 17.573 31.3978 14.3092 31.3978 10.4272C31.3978 6.48047 34.5913 3.28125 38.5438 3.28125ZM19.2136 52.7188C17.2113 52.7188 15.5823 51.0897 15.5823 49.0875C15.5823 47.0853 17.2114 45.4562 19.2136 45.4562C21.2158 45.4562 22.8447 47.0852 22.8447 49.0875C22.8447 51.0898 21.2158 52.7188 19.2136 52.7188ZM42.0583 52.7188C40.056 52.7188 38.427 51.0897 38.427 49.0875C38.427 47.0853 40.0561 45.4562 42.0583 45.4562C44.0605 45.4562 45.6895 47.0852 45.6895 49.0875C45.6895 51.0898 44.0606 52.7188 42.0583 52.7188ZM27.8834 29.6406H33.8746C35.3141 29.6406 36.6673 30.2011 37.685 31.2187L41.6122 35.1458H27.8834V29.6406ZM10.3105 31.5145C10.3105 30.4936 11.1358 29.6406 12.1845 29.6406H24.6022V35.1458H10.3105V31.5145ZM10.3105 38.427H46.4516C49.9074 38.427 52.7188 41.2385 52.7188 44.6942V47.4469H48.7745C48.0367 44.4247 45.3059 42.175 42.0583 42.175C38.8117 42.175 36.081 44.4246 35.3425 47.4469H25.9293C25.1909 44.4246 22.4598 42.175 19.2118 42.175C15.9661 42.175 13.2359 44.4243 12.4976 47.4469H10.3105V38.427Z" fill="#5CAD2F"/>
                                        </svg>
                                    </span>
                                    <h5 class="el-heading mt-4 mb-3">Discover Local Facilities</h5>
                                    <p class="mb-4">
                                        Find nearby campsites, pubs, and other spots offering essential facilities in the UK.
                                    </p>
                                    <a href="#" class="el-explore">Explore More
                                        <span class="ms-2">
                                            <svg width="32" height="8" viewBox="0 0 32 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 4L26.5 4.00001" stroke="#5CAD2F" stroke-width="1.5"/>
                                            <path d="M32 3.99997L26 7.46407L26 0.535867L32 3.99997Z" fill="#5CAD2F"/>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                                <div class="el-about-box active">
                                    <span class="icon-wrapper position-relative">
                                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2639 37.7354L29.9978 14.5334C30.2843 13.6738 29.8198 12.7446 28.9602 12.4581C28.1007 12.1716 27.1715 12.6361 26.8849 13.4957L19.151 36.6978C18.8646 37.5574 19.3291 38.4865 20.1887 38.7731C20.3607 38.8304 20.5357 38.8576 20.7076 38.8576C21.3945 38.8577 22.0347 38.423 22.2639 37.7354Z" fill="#5CAD2F"/>
                                        <path d="M33.8555 30.5376C36.5694 30.5376 38.7773 28.3296 38.7773 25.6157C38.7773 22.9018 36.5694 20.6938 33.8555 20.6938C31.1415 20.6938 28.9336 22.9018 28.9336 25.6157C28.9336 28.3296 31.1415 30.5376 33.8555 30.5376ZM33.8555 23.9751C34.7601 23.9751 35.4961 24.711 35.4961 25.6157C35.4961 26.5203 34.7601 27.2563 33.8555 27.2563C32.9508 27.2563 32.2148 26.5203 32.2148 25.6157C32.2148 24.711 32.9508 23.9751 33.8555 23.9751Z" fill="#5CAD2F"/>
                                        <path d="M15.293 20.6938C12.579 20.6938 10.3711 22.9018 10.3711 25.6157C10.3711 28.3296 12.579 30.5376 15.293 30.5376C18.0069 30.5376 20.2148 28.3296 20.2148 25.6157C20.2148 22.9018 18.007 20.6938 15.293 20.6938ZM15.293 27.2563C14.3883 27.2563 13.6523 26.5203 13.6523 25.6157C13.6523 24.711 14.3883 23.9751 15.293 23.9751C16.1976 23.9751 16.9336 24.711 16.9336 25.6157C16.9336 26.5203 16.1977 27.2563 15.293 27.2563Z" fill="#5CAD2F"/>
                                        <path d="M55.6719 20.3437L49.9508 12.7156L50.174 11.1534C50.247 10.6422 50.0752 10.1264 49.7099 9.76126L46.2296 6.28094L49.7098 2.80063C50.3506 2.16002 50.3506 1.12118 49.7098 0.480457C49.0692 -0.160152 48.0304 -0.160152 47.3897 0.480457L43.9095 3.96077L40.4291 0.480457C40.0641 0.115254 39.5482 -0.0560274 39.037 0.0163789L22.7956 2.33655C22.4442 2.38676 22.1186 2.54961 21.8675 2.80063L1.75916 22.909C-0.586387 25.2545 -0.586387 29.071 1.75916 31.4164L18.7739 48.4312C19.1219 48.7793 19.503 49.0745 19.9062 49.3192V49.9844C19.9062 53.3014 22.6048 56 25.9219 56H49.9844C53.3014 56 56 53.3014 56 49.9844V21.3281C56 20.9732 55.8848 20.6277 55.6719 20.3437ZM4.07933 29.0963C3.01315 28.0301 3.01315 26.2954 4.07933 25.2292L23.801 5.50755L38.6889 3.38076L41.5892 6.28105L39.269 8.60123L38.1089 7.44108C37.4683 6.80048 36.4294 6.80048 35.7887 7.44108C35.148 8.08169 35.148 9.12054 35.7887 9.76126L40.4291 14.4017C40.7495 14.7221 41.1694 14.8823 41.5892 14.8823C42.009 14.8823 42.429 14.7221 42.7492 14.4017C43.3899 13.7611 43.3899 12.7223 42.7492 12.0815L41.5891 10.9214L43.9092 8.60123L46.8095 11.5015L44.6826 26.3894L24.9611 46.1111C24.4446 46.6275 23.758 46.9119 23.0276 46.9119C22.2972 46.9119 21.6105 46.6274 21.094 46.1111L4.07933 29.0963ZM52.7188 49.9844C52.7188 51.4921 51.4921 52.7188 49.9844 52.7188H25.9219C24.482 52.7188 23.2995 51.6001 23.1957 50.1863C24.6796 50.1452 26.1512 49.5613 27.2812 48.4312L47.3896 28.3229C47.6406 28.0718 47.8034 27.7462 47.8536 27.3948L49.2944 17.3093L52.7188 21.875V49.9844Z" fill="#5CAD2F"/>
                                        </svg>
                                    </span>
                                    <h5 class="el-heading mt-4 mb-3">Absolutely Free</h5>
                                    <p class="mb-4">
                                        No sign-ins, no registration. Just open the app and find the amenities you need.
                                    </p>
                                    <a href="#" class="el-explore">Explore More
                                        <span class="ms-2">
                                            <svg width="32" height="8" viewBox="0 0 32 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 4L26.5 4.00001" stroke="#5CAD2F" stroke-width="1.5"/>
                                            <path d="M32 3.99997L26 7.46407L26 0.535867L32 3.99997Z" fill="#5CAD2F"/>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                                <div class="el-about-box">
                                    <span class="icon-wrapper position-relative">
                                        <svg width="56" height="56" viewBox="0 0 58 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.3674 37.9825C14.913 37.9825 14.4586 37.8098 14.1131 37.4618C9.97602 33.3272 7.69922 27.8316 7.69922 21.9834C7.69922 16.1352 9.97602 10.6397 14.1131 6.50497C14.8065 5.81152 15.9307 5.81152 16.6242 6.50497C17.3176 7.19842 17.3176 8.32262 16.6242 9.01607C13.1569 12.4786 11.2493 17.0843 11.2493 21.9834C11.2493 26.8825 13.1569 31.4882 16.6242 34.9507C17.3176 35.6418 17.3176 36.7684 16.6242 37.4618C16.2763 37.8098 15.8218 37.9825 15.3674 37.9825Z" fill="#5CAD2F"/>
                                        <path d="M10.3506 43C9.89614 43 9.44172 42.8272 9.09618 42.4793C3.61719 37.0003 0.599609 29.7226 0.599609 21.9834C0.599609 14.2442 3.61719 6.96649 9.09618 1.4875C9.78963 0.794052 10.9138 0.794052 11.6073 1.4875C12.3007 2.18096 12.3007 3.30516 11.6073 3.99861C6.79808 8.80544 4.14971 15.1933 4.14971 21.9834C4.14971 28.7736 6.79808 35.1614 11.6049 39.9706C12.2984 40.664 12.2984 41.7882 11.6049 42.4817C11.2594 42.8272 10.805 43 10.3506 43Z" fill="#5CAD2F"/>
                                        <path d="M47.6495 43C47.195 43 46.7406 42.8272 46.3951 42.4793C45.7016 41.7859 45.7016 40.6617 46.3951 39.9682C51.2043 35.159 53.8503 28.7736 53.8503 21.981C53.8503 15.1885 51.2019 8.80307 46.3951 3.99387C45.7016 3.30042 45.7016 2.17622 46.3951 1.48277C47.0885 0.789314 48.2127 0.789314 48.9062 1.48277C54.3828 6.96649 57.4004 14.2442 57.4004 21.9834C57.4004 29.7226 54.3828 37.0003 48.9038 42.4793C48.5583 42.8272 48.1039 43 47.6495 43Z" fill="#5CAD2F"/>
                                        <path d="M42.6323 37.9825C42.1779 37.9825 41.7235 37.8098 41.3779 37.4618C40.6845 36.7684 40.6845 35.6442 41.3779 34.9507C44.8428 31.4882 46.7504 26.8825 46.7504 21.9834C46.7504 17.0843 44.8428 12.4786 41.3756 9.01607C40.6821 8.32499 40.6821 7.19842 41.3756 6.50497C42.069 5.81152 43.1932 5.81152 43.8867 6.50497C48.0237 10.6397 50.3005 16.1352 50.3005 21.9834C50.3005 27.8316 48.0237 33.3272 43.8867 37.4618C43.5411 37.8098 43.0867 37.9825 42.6323 37.9825Z" fill="#5CAD2F"/>
                                        <path d="M23.8491 40.9173C23.5959 40.9173 23.3379 40.8629 23.0965 40.7492C22.3297 40.3895 21.9226 39.5375 22.1261 38.7139L25.5484 24.9418H18.9429C18.2802 24.9418 17.6719 24.5726 17.3666 23.9833C17.0613 23.394 17.111 22.684 17.4944 22.142L30.4712 3.7998C30.9446 3.13238 31.8084 2.87441 32.5634 3.17025C33.3231 3.46609 33.7846 4.24002 33.6805 5.04707L32.2013 16.6583H39.0601C39.7299 16.6583 40.3429 17.0346 40.6434 17.631C40.9464 18.2274 40.8872 18.9445 40.492 19.4841L25.281 40.1931C24.9378 40.6617 24.4006 40.9173 23.8491 40.9173Z" fill="#5CAD2F"/>
                                        </svg>
                                    </span>
                                    <h5 class="el-heading mt-4 mb-3">Built by Van Lifers</h5>
                                    <p class="mb-4">
                                        We live the van life, so we took our experiences and built DropStop to make your life easier.
                                    </p>
                                    <a href="#" class="el-explore">Explore More
                                        <span class="ms-2">
                                            <svg width="32" height="8" viewBox="0 0 32 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 4L26.5 4.00001" stroke="#5CAD2F" stroke-width="1.5"/>
                                            <path d="M32 3.99997L26 7.46407L26 0.535867L32 3.99997Z" fill="#5CAD2F"/>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--dealership-->
                <div class="el-dealership-section pt-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12">
                                <div class="row g-4">
                                    <div class="col-xl-5 col-lg-6">
                                        <div class="feature-img">
                                            <img src="<?php echo base_url("public/assets/img/electric-car/girl.png"); ?>" alt="girl" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="el-dealership-content">
                                            <div class="el-section-title">
                                                <h6 class="text-el-primary mb-1">About Us
                                                    <span class="ms-2">
                                                        <svg width="80" height="12" viewBox="0 0 80 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 6L74 6.00001" stroke="#5CAD2F" stroke-width="1.5"/>
                                                        <path d="M79.5 6L70.5 11.1962L70.5 0.803847L79.5 6Z" fill="#5CAD2F"/>
                                                        </svg>
                                                    </span>
                                                </h6>
                                                <h2 class="mb-3">The Van Life App Built by <br> <mark class="bg-transparent p-0 text-el-primary">Van Lifers</mark></h2>
                                                <p>
                                                    Hey, we’re Jo and Shaan, founders of DropStop and full-time van lifers.
                                                </p>
                                                <p>
                                                    We are a couple who are incredibly passionate about the van-life community. This isn’t just because we live in our van but also because of the caring and supportive community we have found ourselves a part of. There’s nothing more comforting than the ‘look out for each other’ code that is a part of this lifestyle. And that’s what DropStop is here to do – to look out for you. DropStop exists to make living on the road easier, by connecting van-lifers with businesses that provide trusted facilities and amenities.                                             </p>

                                                </p>
                                            </div>
                                            <div class="el-author-info d-flex align-items-center flex-wrap">
                                                <div class="author-info-content">
                                                    <h5 class="mb-0">Jo and Shaan</h5>
                                                    <span>Founders and full-time van lifers.</span>
                                                </div>
                                            </div>
                                            <a href="#" class="btn el-secondary-btn mt-5">Explore More
                                                <span class="ms-2">
                                                    <svg width="29" height="8" viewBox="0 0 29 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 4L23 4" stroke="white" stroke-width="1.3"/>
                                                    <path d="M28.5 4L22.5 7.4641L22.5 0.535898L28.5 4Z" fill="white"/>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="el-spacer-bottom"></div>
                <!--dealership end-->
            </section>
            <!--about section end-->

            <!--service section start-->
            <section class="el-service-section pb-70 pt-40 position-relative z-1 overflow-hidden">
                <span class="bg-shape position-absolute top-0 start-0 w-100 z--1" data-background="<?php echo base_url("public/assets/img/shapes/el-bg.jpg"); ?>"></span>
                <div class="container position-relative">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="el-section-title">
                                <h6 class="mb-3">Services
                                    <span class="ms-2">
                                        <svg width="80" height="13" viewBox="0 0 80 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 6.99817L74 6.99818" stroke="#5CAD2F" stroke-width="1.5"/>
                                        <path d="M79.5 6.99817L70.5 12.1943L70.5 1.80202L79.5 6.99817Z" fill="#5CAD2F"/>
                                        </svg>
                                    </span>
                                </h6>
                                <h2 class="mb-0">Services Might be Looking For <mark class="bg-transparent p-0 text-el-primary">Van Lifer’s </mark></h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 align-self-end">
                            <div class="text-end mt-4 mt-md-0">
                                <button type="button" class="el-service-slider-prev el-service-slider-control"><i class="fas fa-arrow-left"></i></button>
                                <button type="button" class="el-service-slider-next el-service-slider-control ms-3"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="el-service-slider swiper pb-5">
                            <div class="swiper-wrapper">

                                <?php
                                $service = [
                                    array(
                                        "tag" => "Electricity",
                                        "title" => "Electricity Hook-Ups",
                                        "image" => "solar.jpg",
                                        "content" => "It's the ability to have a working power outlet in your tent whilst your pitched on a campsite that provides electric power points."
                                    ),
                                    array(
                                        "tag" => "EvChargin",
                                        "title" => "EV Charge",
                                        "image" => "station.jpg",
                                        "content" => "An electric vehicle charging station is equipment that connects an electric vehicle (EV) to a source of electricity to recharge electric cars."
                                    ),
                                    array(
                                        "tag" => "WaterRefill",
                                        "title" => "Water Refill Stations",
                                        "image" => "waterfillstation4.jpg",
                                        "content" => "Water refill stations allow people to fill up reusable water bottles with purified water. It can be found in many places like gyms and shopping malls."
                                    )
                                ];
                                foreach ($service as $key => $value) {
                                    ?>
                                    <div class="el-service-box bg-white rounded overflow-hidden swiper-slide">
                                        <figure class="overflow-hidden mb-0">
                                            <a href="services.html"><img src="<?php echo base_url("public/assets/img/electric-car/" . $value["image"]); ?>" alt="<?php echo $value["tag"]; ?>" class="img-fluid"></a>
                                        </figure>
                                        <div class="el-service-box-content">
                                            <a href="services.html">
                                                <h4 class="mb-3"><?php echo $value["title"]; ?></h4>
                                            </a>
                                            <p class="mb-4">
                                                <?php echo $value["content"]; ?>

                                            </p>

                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <span class="els-circle-gradient position-absolute z--1"></span>
                </div>
            </section>
            <!--service section end-->

            <!--car listing start-->
            <section class="el-car-listing position-relative z-1 overflow-hidden">
                <span class="elc-circle-gradient gradient-1 position-absolute z--1"></span>
                <span class="elc-circle-gradient gradient-2 position-absolute z--1"></span>
                <img src="assets/img/shapes/road.png" alt="socket" class="position-absolute socket start-0 bottom-0 z--1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-7 col-xl-8 col-lg-10">
                            <div class="el-section-title d-flex align-items-center flex-wrap flex-md-nowrap">
                                <div class="title-left text-end flex-shrink-0">
                                    <h6 class="text-el-primary mb-1">
                                        <span class="me-2">
                                            <svg width="80" height="12" viewBox="0 0 80 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M79.5 6H5.5" stroke="#5CAD2F" stroke-width="1.5"/>
                                            <path d="M-2.62268e-07 6L9 0.803848L9 11.1962L-2.62268e-07 6Z" fill="#5CAD2F"/>
                                            </svg>
                                        </span>
                                        Better Experiences 
                                    </h6>
                                    <h2 class="mb-0">Help Us Make DropStop<br/> Even Better</h2>
                                </div>
                                <div class="title-desc position-relative ms-4 mt-3 mt-md-0">
                                    <p class="mb-0">Love what we're doing? Feel free to support our mission and help the concept grow faster by spreading the word!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="el-car-listing-slider mt-5 position-relative">
                        <img src="assets/img/shapes/leaf-2.png" alt="leaf" class="position-absolute leaf-shape z--1">
                        <img src="assets/img/shapes/el-doted-box.png" alt="doted" class="position-absolute doted-box z--1">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="faq-tabs mt-5 brands-filter">

                                    <div class="tab-content mt-60">
                                        <div class="tab-pane fade show active" >
                                            <div class="row g-4">
                                                <div class="col-xl-6">
                                                    <div class="accordion theme-accordion" id="accordion_1">
                                                        <?php
                                                        $faqlist1 = [
                                                            array(
                                                                "qus" => "What is DropStop?",
                                                                "ans" => "DropStop is a map-based app designed for van lifers to easily locate nearby facilities such as water refill stations, electricity hook-ups, showers, and more. There is places to go all over the UK, DropStop is your go-to guide.",
                                                            ),
                                                            array(
                                                                "qus" => "How much does the app cost?",
                                                                "ans" => "The app is absolutely free for users! No sign-ins, no registration. Just download the app, kick back and start exploring knowing your every essential need is only a drop away.",
                                                            ),
                                                            array(
                                                                "qus" => "Do we have to pay for the DropStop facilities? ",
                                                                "ans" => "It depends on each DropStop, the general answer is yes, please make sure you read the description for the individual facility prices for each DropStop location.",
                                                            ),
                                                            array(
                                                                "qus" => "Can I visit any DropStop at anytime?",
                                                                "ans" => "It’s always best to check each DropStops description to check if they have restricted opening hours. Some locations may only be open seasonally.",
                                                            ),
                                                            array(
                                                                "qus" => "Can I save my favourite DropStops?",
                                                                "ans" => "You sure can, there is a love heart icon on the main screen which will allow you to favourite your memorable DropStops.",
                                                            )
                                                        ];
                                                        foreach ($faqlist1 as $key => $value) {
                                                            ?>

                                                            <div class="accordion-item">
                                                                <div class="accordion-header">
                                                                    <a href="#ac_<?php echo $key; ?>" class="accordion-button collapsed" data-bs-toggle="collapse">
                                                                        <?php echo $key + 1; ?>. <?php echo $value["qus"]; ?>
                                                                    </a>
                                                                </div>
                                                                <div class="accordion-collapse  collapse" id="ac_<?php echo $key; ?>" data-bs-parent="#accordion_<?php echo $key; ?>">
                                                                    <div class="accordion-body">
                                                                        <p>
                                                                            <?php echo $value["ans"]; ?>                                                                        
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="accordion theme-accordion" id="accordion_2">
                                                        <?php
                                                        $faqlist2 = [
                                                            array(
                                                                "qus" => "Can I report a problem? ",
                                                                "ans" => "Absolutely, if you come across anything of concern during your DropStop visit, a three dotted icon on right hand corner of the DropStop will help you report anything to us. Alternatively you can write to us at info@dropstop.app. ",
                                                            ),
                                                            array(
                                                                "qus" => "Can I suggest a new facility or location?",
                                                                "ans" => "Absolutely! We encourage our users to share new spots and facilities by emailing us at info@dropstop.app . Your contributions help the community grow and thrive.",
                                                            ),
                                                            array(
                                                                "qus" => "How do you ensure the quality of listed facilities?",
                                                                "ans" => "Our team at DropStop is dedicated to ensuring that all listed facilities meet a certain standard. We also rely on our community of users to report any issue they may of had.",
                                                            ),
                                                            array(
                                                                "qus" => "How can I help support DropStop?",
                                                                "ans" => "It’s easy! Just spread the word and help grow our community and support each-other!",
                                                            )
                                                        ];
                                                        foreach ($faqlist2 as $key => $value) {
                                                            ?>

                                                            <div class="accordion-item">
                                                                <div class="accordion-header">
                                                                    <a href="#ac_<?php echo $key; ?>" class="accordion-button collapsed" data-bs-toggle="collapse">
                                                                        <?php echo $key + 6; ?>. <?php echo $value["qus"]; ?>
                                                                    </a>
                                                                </div>
                                                                <div class="accordion-collapse  collapse" id="ac_<?php echo $key; ?>" data-bs-parent="#accordion_<?php echo $key; ?>">
                                                                    <div class="accordion-body">
                                                                        <p>
                                                                            <?php echo $value["ans"]; ?>                                                                        
                                                                        </p>
                                                                    </div>
                                                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--car listing end-->




            <!--feature section start-->
            <section class="el-feature-section ptb-120 position-relative z-1">
                <img src="<?php echo base_url("public/assets/img/shapes/el-wave.png"); ?>" alt="wave" class="position-absolute end-0 bottom-0 z--1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 align-self-end">
                            <div class="el-feature-left">
                                <h6 class="text-el-primary mb-1">DropStop for Businesses
                                    <span class="ms-2">
                                        <svg width="80" height="12" viewBox="0 0 80 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 5.99902L74 5.99903" stroke="#5CAD2F" stroke-width="1.5"/>
                                        <path d="M79.5 5.99902L70.5 11.1952L70.5 0.802871L79.5 5.99902Z" fill="#5CAD2F"/>
                                        </svg>
                                    </span>
                                </h6>
                                <h2 class="el-heading mb-30">Boost Your Revenue & Support <br> the <mark class="bg-transparent p-0 text-el-primary">Van Life Community</mark></h2>
                                <p>
                                    For many businesses, the ‘wild camp’ van life community is an untapped revenue stream. Year-round, there are people living, travelling or holidaying in their vans who need your services. DropSop connects you with potential customers who are willing to pay for the amenities you offer.
                                </p>
                                <ul class="el-features-list md-feature-list d-flex flex-wrap">
                                    <li>
                                        <h4 class="mb-3 el-heading smallheader"><mark class="bg-transparent text-el-primary p-0">01. </mark>List Your Facilities</h4>
                                        <p class="mb-0 fs-sm">Whether you offer showers, laundry, or just a tap for water refills, list them on DropStop.</p>
                                    </li>
                                    <li>
                                        <h4 class="mb-3 el-heading smallheader"><mark class="bg-transparent text-el-primary p-0">02. </mark>Set Your Price</h4>
                                        <p class="mb-0 fs-sm">Decide how much you'd like to charge for each service and publish it on your business profile.</p>
                                    </li>
                                    <li>
                                        <h4 class="mb-3 el-heading smallheader"><mark class="bg-transparent text-el-primary p-0">03. </mark>Watch the Van Lifers Roll In</h4>
                                        <p class="mb-0 fs-sm">With such a large community, watch as van lifers seek your services and news of your place spreads throughout the community.</p>
                                    </li>

                                </ul>
                                <a href="#.html" class="el-feature-explore fw-bold mt-5 d-inline-block">See All Feature
                                    <span class="ms-1">
                                        <svg width="50" height="16" viewBox="0 0 50 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M49.2071 8.70637C49.5976 8.31585 49.5976 7.68269 49.2071 7.29216L42.8432 0.9282C42.4526 0.537675 41.8195 0.537675 41.4289 0.9282C41.0384 1.31872 41.0384 1.95189 41.4289 2.34241L47.0858 7.99927L41.4289 13.6561C41.0384 14.0466 41.0384 14.6798 41.4289 15.0703C41.8195 15.4609 42.4526 15.4609 42.8432 15.0703L49.2071 8.70637ZM0 8.99927H48.5V6.99927H0V8.99927Z" fill="#5CAD2F"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="feature-img position-relative w-100 h-100 mt-5 mt-xl-0">
                                <img src="<?php echo base_url("public/assets/img/electric-car/solar-lg.jpg"); ?>" alt="solar" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!--feature section end-->

            <!--feedback section start-->
            <section class="el-fd-apps overflow-hidden whitebackground" data-background="<?php echo base_url("public/assets/img/shapes/bg-blur.png"); ?>">

                <div class="el-apps-section pb-120">
                    <div class="container">
                        <div class="row align-items-center g-5">
                            <div class="col-xl-6">
                                <div class="el-apps-left">
                                    <img src="<?php echo base_url("public/assets/img/electric-car/mobile1.jpg"); ?>" alt="mobile" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="el-apps-right">
                                    <h6 class="el-text-primary mb-1">Available Apps
                                        <span class="ms-2">
                                            <svg width="80" height="12" viewBox="0 0 80 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 6L74 6.00002" stroke="#5CAD2F" stroke-width="1.5"/>
                                            <path d="M79.5 6L70.5 11.1961L70.5 0.803846L79.5 6Z" fill="#5CAD2F"/>
                                            </svg>
                                        </span>
                                    </h6>
                                    <h2 class="el-heading mb-3">Download DropStop  <br>for <mark class="p-0 bg-transparent text-el-primary">Free</mark></h2>
                                    <p class="mb-40">
                                        Drop Stop is your one-stop app to find these places local to wherever you happen to be in the UK, and you can join our community for free today. Just download the app and get free access to all the facilities you need for your van-life adventures.
                                    </p>
                                    <div class="apps-btn-group d-flex align-items-center flex-wrap">
                                        <a href="#" class="app-btn el-primary-btn d-inline-flex align-items-center">
                                            <span class="icon-wrapper me-2"><i class="fa-brands fa-google-play"></i></span>
                                            <div class="app-btn-content">
                                                <span>Get it on</span>
                                                <strong>Google Play</strong>
                                            </div>
                                        </a>
                                        <a href="#" class="app-btn white-btn d-inline-flex align-items-center el-box-shadow">
                                            <span class="icon-wrapper me-2"><i class="fa-brands fa-apple"></i></span>
                                            <div class="app-btn-content">
                                                <span>Get it on</span>
                                                <strong>App Store</strong>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--feedback section end-->

            <!--footer section start-->
            <footer class="footer-section">
                <div class="footer-wrapper pt-120 position-relative z-1 overflow-hidden" data-background="assets/img/shapes/texture-bg.png">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-lg-5">
                                <div class="footer-widget widget-basic">
                                    <h3 class="widget-title-large mb-4 text-white">Have a Question? Feel Free to Ask..Feedback</h3>
                                    <p class="mb-40">Our team is always here to help. Reach out to us with any queries or concerns by emailing us at info@dropstop.app </p>
                                    <div class="phone-box d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle bg-primary text-white"><i class="flaticon-phone-call"></i></span>
                                        <h4 class="text-white ms-3 mb-0">+1-0000-0000</h4>
                                    </div>
                                    <div class="sb-form mt-40">
                                        <h5 class="text-white mb-4">Get latest updates & offers</h5>
                                        <form class="footer-sb-form position-relative">
                                            <input type="email" placeholder="Enter your email..." class="bg-white w-100">
                                            <button type="submit" class="btn btn-primary">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="ms-lg-5 ms-xl-0 mt-5 mt-lg-0">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <a href="#" class="footer-logo d-inline-block"><img src="assets/img/logo.png" alt="logo"></a>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <div class="footer-social d-inline-block text-start">
                                                    <h6 class="text-white">Follow us on</h6>
                                                    <ul class="footer-social-list">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-30">
                                        <div class="col-sm-8">
                                            <div class="footer-widget footer-nav-widget mb-5 mb-sm-0">
                                                <h6 class="widget-title text-white mb-3">Benefits of Joining DropStop</h6>
                                                <p>Increased Footfall: DropStop can direct a new customer base right to your doorstep.</p>
                                                <p>Community Engagement: Engage with a supportive and eco-conscious community that values a business supporting their lifestyle.</p>
                                                <p>Simple Pricing: You are in full control of your own extra revenue stream, no subscription fee or commissions. What you make is 100% yours. </p>

                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="footer-widget footer-nav-widget mb-5 mb-sm-0">
                                                <h6 class="widget-title text-white mb-3">Quick links</h6>
                                                <ul class="footer-nav">
                                                    <?php
                                                    foreach ($mainMenu as $key => $value) {
                                                        ?>
                                                        <li class = ""><a href = "#"><?php echo $value["title"]; ?></a> </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-sm-7">
                                    <div class="copyright-text">
                                        <p class="mb-0">&copy; All rights reserved.</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="copyright-links text-start text-sm-end mt-1 mt-sm-0">
                                        <a href="#">Terms of use</a>
                                        <a href="#">Privacy policy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer section end-->

        </div>
        <!-- main content wrapper ends -->


        <button class="theme-scrolltop-btn"><i class="fa-regular fa-hand-pointer"></i></button>
        <!--scrolltop button end-->

        <!--build:js-->
        <script src="<?php echo base_url("public/assets/js/vendors/jquery.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/jquery-ui.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/appear.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/popper.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/bootstrap.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/easing.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/swiper.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/massonry.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/bootstrap-slider.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/magnific-popup.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/waypoints.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/counterup.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/isotop.pkgd.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/moment.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/date-picker.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/progressbar.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/slick.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/countdown.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/custom-scrollbar.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/price-range.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/vendors/image-rotate.min.js"); ?>" ></script>
        <script src="<?php echo base_url("public/assets/js/app.js"); ?>" ></script>
        <!--endbuild-->
    </body>


    <!-- Mirrored from autohive-html.themetags.com/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Dec 2023 12:43:29 GMT -->
</html>