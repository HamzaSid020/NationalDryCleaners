<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Dry Cleaners | Services</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Icons & CSS -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <style>
        /* Hero section */
        .hero-section {
            position: relative;
            background: url('images/services/services-hero.jpg') no-repeat center center/cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            text-align: center;
            z-index: 2;
        }

        .service-card {
            background: #fff;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .service-label {
            font-size: 18px;
            color: #d63447;
        }

        /* Optional subtle section background */
        .services-section {
            background: #f9f9f9;
            padding: 60px 0;
        }

        ul {
            padding-left: 1rem;
        }

        ul li {
            margin-bottom: 0.5rem;
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
            <!-- Hero Section with Background Image -->
            <section class="hero-section">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="heading display-4 fw-bold">Our Services</h1>
                    <p class="lead">Comprehensive care for garments, home, and specialty items. Professional service you can trust.</p>
                </div>
            </section>

            <!-- Services Grid -->
            <section class="services-section">
                <div class="container">
                    <div class="row g-4">
                        <!-- Garment Cleaning -->
                        <div class="col-md-4">
                            <div class="service-card text-center p-4 shadow-sm h-100">
                                <div class="service-label fw-7 mb-3">Garment Cleaning</div>
                                <ul class="text-start">
                                    <li>Dry Cleaning & Steam Laundry</li>
                                    <li>Wet Cleaning</li>
                                    <li>Wash & Fold by Weight</li>
                                    <li>Bridal Wear / Wedding Gown Cleaning & Restoration</li>
                                    <li>Pakistani / Indian Formal Dress Cleaning & Steam Pressing</li>
                                    <li>Leather, Suede & Fur Cleaning</li>
                                    <li>Handmade & Synthetic Rug Cleaning</li>
                                    <li>Alterations & Repairs</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Home & Upholstery -->
                        <div class="col-md-4">
                            <div class="service-card text-center p-4 shadow-sm h-100">
                                <div class="service-label fw-7 mb-3">Home & Upholstery</div>
                                <ul class="text-start">
                                    <li>Steam Upholstery Cleaning</li>
                                    <li>Mattress Cleaning</li>
                                    <li>Household Items: Bedding, Quilts, Blankets & Comforters</li>
                                    <li>Curtains & Blinds Cleaning</li>
                                    <li>Odour & Smoke Removal</li>
                                    <li>House Deep Cleaning & Sanitation</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Specialty & Sports -->
                        <div class="col-md-4">
                            <div class="service-card text-center p-4 shadow-sm h-100">
                                <div class="service-label fw-7 mb-3">Specialty & Sports</div>
                                <ul class="text-start">
                                    <li>Car Interior Steam Cleaning</li>
                                    <li>Hockey & Sports Gear Cleaning</li>
                                    <li>Boat Cleaning</li>
                                    <li>Shoe Repairing & Cleaning</li>
                                    <li>Rug Repairs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Request Quote Button -->
                    <div class="text-center mt-5">
                        <a href="contact-1.html" class="tf-btn btn-line btn-icon radius-3">
                            <span>Book Now</span><i class="icon icon-arrow1-top-left"></i>
                        </a>
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

    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
