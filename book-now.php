<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Dry Cleaners | Home</title>

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

    <!-- Active Navigation Styles -->
    <style>
        .menu-item.active .item-link,
        .tf-btn.active {
            color: #ffd700 !important;
            font-weight: 600;
        }

        .menu-item.active .item-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 2px;
            background: #ffd700;
        }
    </style>
</head>

<body class="preload-wrapper">
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">

        <!-- Header Include -->
        <?php include 'includes/header.html'; ?>
        <main>
            <section class="tf-slideshow about-us-page position-relative">
                <div class="banner-wrapper">
                    <img src="assets/NDC-booking-1.jpg" alt="cleaning image" class="book-now-header-image">>
                    <div class="box-content text-center">
                        <div id = "heading-booknow" class="container">
                            <div class="heading text-center">Book Your Cleaning</div> <br>
                            <p class="text-center text_white-5">Secure bookings, payments, and order tracking powered by
                                CleanCloud.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flat-spacing-9 pt_0">
                <div class="container">
                    <div class="bg_grey-2 radius-10 p-3 p-md-5">
                        <!-- CleanCloud Embed: replace data-url with your live booking URL -->
                        <div class="ratio ratio-16x9 radius-8 overflow-hidden">
                            <iframe title="CleanCloud Booking" src="https://cleancloudapp.com/embedded/"
                                style="border:0;width:100%;height:100%" allowfullscreen loading="lazy"></iframe>
                        </div>
                        <div id= "buttons-book" class="d-flex flex-wrap align-items-center gap-12 mt-3">
                            <a href="#" class="tf-btn btn-sm radius-3 btn-fill d-flex align-items-center gap-8">
                                <!-- Google Play badge placeholder -->
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M3.6 1.8l11.2 11.2-3.2 3.2L0.4 5z"></path>
                                    <path d="M21.6 12L4 20.8l6.4-6.4z"></path>
                                </svg>
                                <span>Get it on Google Play</span>
                            </a>
                            <a href="#" class="tf-btn btn-sm radius-3 btn-outline d-flex align-items-center gap-8">
                                <!-- Apple badge placeholder -->
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M16 13.5c0 3.6 3.2 4.8 3.2 4.8s-2 5.7-7.2 5.7c-3.8 0-5.6-2.5-5.6-2.5S4.8 19.2 4.8 16c0-4 3.2-6.4 6.4-6.4 2.4 0 3.2 1.6 4.8 1.6 1.6 0 2.4-1.6 2.4-1.6s-1.6-2.4-4.8-2.4c-4 0-8 3.2-8 8 0 4.8 3.2 8 8 8 5.6 0 8-4.8 8-4.8S16 17.1 16 13.5z">
                                    </path>
                                </svg>
                                <span>Download on the App Store</span>
                            </a>
                            <span class="text_black-2 small">Replace these links with your real store URLs.</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flat-spacing-12 pt_0">
                <div class="container">
                    <div class="tf-grid-layout md-col-3 sm-col-1 gap-20">
                        <div id = "first-block" class="bg_grey-2 p-3 radius-10">
                            <div id = "first-block-heading" class="fw-7 mb_6">Why book online?</div>
                            <ul class="m-0 ps-3">
                                <li>Real-time availability and instant confirmation</li>
                                <li>Secure payments and order tracking</li>
                                <li>Pick-up and delivery scheduling</li>
                            </ul>
                        </div>
                        <div  id = "second-block" class="bg_grey-2 p-3 radius-10">
                            <div  id = "second-block-heading" class="fw-7 mb_6">Need help?</div>
                            <p class="mb_6">Call us at <a id = "second1-block-heading" href="#">(212) 555-1234</a> or email <a
                            id = "second1-block-heading"  href="#">info@nationaldrycleaners.com</a>.</p> <br>
                            <a href="contact-1.html" id = "second1-block-heading" class="tf-btn btn-line btn-sm radius-3">Contact us<i
                                    class="icon icon-arrow1-top-left"></i></a>
                        </div>
                        <div id = "first-block" class="bg_grey-2 p-3 radius-10">
                            <div id = "first-block-heading" class="fw-7 mb_6">Popular services</div>
                            <ul class="m-0 ps-3">
                                <li>Dry Cleaning & Steam Laundry</li>
                                <li>Bridal Wear Cleaning & Restoration</li>
                                <li>Leather, Suede & Fur Cleaning</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer Include -->
        <?php include 'includes/footer.html'; ?>

    </div>

    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>
    <!-- /gotop -->


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>