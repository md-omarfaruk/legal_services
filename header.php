<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ---------------------Bootstrap--------------------------- -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <!-- ---------------------Roboto-Google-Font--------------------------- -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->

    <!-- ---------------------Bootstrap-Icon-------------------------- -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->

    <!-- ---------------------Main-Stylesheet--------------------------- -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- ---------------------Header-Section-Start--------------------------- -->
    <header>
        <div class="header-logo-area py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php echo  get_theme_mod('top_header_logo'); ?>" class="header-logo"
                                width="224" alt="Legal Services"></a>
                    </div>
                    <div class="col-lg-9 d-flex justify-content-end">
                        <div class="opening-hours me-5">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_theme_file_uri( 'assets/img/icons/clock.png' );?>" class="header-icon-img" alt="">
                                <h4 class="hours roboto-regular"><?php echo get_theme_mod( 'opening_hours');?></h4>
                            </div>
                            <p class="day roboto-regular">Our Opening Hours <?php echo get_theme_mod( 'opening_days');?></p>
                        </div>

                        <div class="direct-contact me-5">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_theme_file_uri( 'assets/img/icons/headphone.png' );?>" class="header-icon-img" alt="">
                                <h4 class="contact-number roboto-regular"><?php echo get_theme_mod( 'mobile_number');?></h4>
                            </div>
                            <p class="direct-contact-text roboto-regular">Direct : <?php echo get_theme_mod( 'direct_mobile_number');?></p>
                        </div>
                        <div class="header-social-icons">
                            <a href="<?php echo get_theme_mod( 'facebook' ); ?>"><i class="bi bi-facebook me-3"></i></a>
                            <a href="<?php echo get_theme_mod( 'twitter' ); ?>"><i class="bi bi-twitter me-3"></i></a>
                            <a href="<?php echo get_theme_mod( 'youtube' ); ?>"><i class="bi bi-youtube me-3"></i></a>
                        </div>
                        <div class="header-search-icon ms-4">
                            <i class="bi bi-search"></i>
                            <h6 class="search roboto-regular mt-2">Search</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- -----------------Navbar-Start------------------------- -->
        <div class="header-nav" id="header-navbar-one">
            <nav class="navbar navbar-expand-lg py-0 roboto-regular">
                <div class="container-lg">
                    <a class="navbar-brand responsive-logo" href="index.html"><img src="<?php echo get_theme_file_uri( 'assets/img/responsive-logo.png' );?>"
                            width="110" alt="Legal Services"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="27" fill="white"
                            class="bi bi-list-columns-reverse" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M0 .5A.5.5 0 0 1 .5 0h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 0 .5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10A.5.5 0 0 1 4 .5m-4 2A.5.5 0 0 1 .5 2h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 4h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 8h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item d-flex">
                                <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link" href="about_us.html">ABOUT US</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="our_team.html">OUR TEAM</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="dropdown position-relative">PRACTICE AREA<i class="bi bi-star-fill mx-3"></i>
                                <ul class="dropdown-menu position-absolulte">
                                    <li><a class="dropdown-item" href="accident_cases.html">Accident Cases</a></li>
                                    <li><a class="dropdown-item" href="medical_malpractice.html">Medical Malpractice</a>
                                    </li>
                                    <li><a class="dropdown-item" href="immigration.html">Immigration</a></li>
                                </ul>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="gallery.html">GALLERY</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="video_gallery.html">VIDEO GALLERY</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="appointment.html">APPOINTMENT</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- -----------------Fixed-Navbar-Start------------------------- -->
        <div class="header-fixed-nav" id="header-navbar-two">
            <nav class="navbar navbar-expand-lg p-0 roboto-regular">
                <div class="container">
                    <a class="navbar-brand" id="fixed-nav-logo" href="index.html"><img
                            src="<?php echo get_theme_file_uri( 'assets/img/fixed-nav-logo.webp' );?>" width="54" alt="Legal Services"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item d-flex">
                                <a class="nav-link  active" aria-current="page" href="index.html">HOME</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="about_us.html">ABOUT US</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="our_team.html">OUR TEAM</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="dropdown position-relative">PRACTICE AREA<i class="bi bi-star-fill mx-3"></i>
                                <ul class="dropdown-menu position-absolulte">
                                    <li><a class="dropdown-item" href="accident_cases.html">Accident Cases</a></li>
                                    <li><a class="dropdown-item" href="medical_malpractice.html">Medical Malpractice</a>
                                    </li>
                                    <li><a class="dropdown-item" href="immigration.html">Immigration</a></li>
                                </ul>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="gallery.html">GALLERY</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="video_gallery.html">VIDEO GALLERY</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="appointment.html">APPOINTMENT</a>
                                <i class="bi bi-star-fill mx-3"></i>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- -----------------Fixed-Navbar-End------------------------- -->
        <!-- -----------------Navbar-End------------------------- -->
    </header>
    <!-- ---------------------Header-Section-End--------------------------- -->