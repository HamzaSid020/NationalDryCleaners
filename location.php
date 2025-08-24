<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>National Dry Cleaners | Our Store</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

    <style>
        /* Hero Section */
        .hero-section {
            position: relative;
            height: 350px;
            background: url('assets/NDC-booking0.jpg') center center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
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
            color: #fff;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        /* Locations Section */
        .locations-section {
            background: #f9f9f9;
            padding: 60px 20px;
        }

        .location-card {
            background: #fff;
            border-radius: 12px;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .location-list {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .location-list li {
            margin-bottom: 5px;
        }

        /* Mobile Horizontal Scroll */
        @media (max-width: 768px) {
            .locations-row {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                gap: 15px;
                scrollbar-width: thin;
                scrollbar-color: #ccc transparent;
            }

            .locations-row>div {
                flex: 0 0 85%;
            }
        }
    </style>
</head>

<body class="preload-wrapper">
    <!-- Preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>

    <div id="wrapper">
        <!-- Header -->
        <?php include 'includes/header.html'; ?>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="text-white">Our Store & Locations</h1>
                <p class="lead">Find us easily and see all the neighborhoods we proudly serve.</p>
            </div>
        </section>

        <!-- Our Store -->
        <section class="flat-spacing-16">
            <div class="container">
                <div class="tf-grid-layout md-col-2">
                    <div class="tf-ourstore-img">
                        <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=3%20Marvin%20Ave,%20Oakville,%20ON%20L6H%200Z6+(National%20Dry%20Cleaners)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                    </div>
                    <div class="tf-ourstore-content">
                        <h5 class="mb_24">National Dry Cleaners — Oakville</h5>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Address</strong></p>
                            <p>3 Marvin Ave, Oakville, ON L6H 0Z6</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Phone</strong></p>
                            <p>(212) 555-1234</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Email</strong></p>
                            <p>info@nationaldrycleaners.com</p>
                        </div>
                        <div class="mb_36">
                            <p class="mb_15"><strong>Open Time</strong></p>
                            <p class="mb_15">Mon–Sat: 9:00 AM – 7:00 PM</p>
                            <p>Sun: 11:00 AM – 5:00 PM</p>
                        </div>
                        <div>
                            <a href="https://maps.google.com/?q=3+Marvin+Ave,+Oakville,+ON+L6H+0Z6"
                                class="tf-btn btn-outline-dark radius-3" target="_blank">
                                <span>Get Directions</span><i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Locations We Serve -->
        <section class="flat-spacing-16 locations-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Locations We Serve</h2>
                    <p class="lead">Proudly serving Oakville, Burlington, and Milton neighborhoods with trusted cleaning
                        services.</p>
                </div>

                <div class="row g-4 locations-row">
                    <!-- Oakville Locations -->
                    <div class="col-md-4">
                        <div class="location-card p-4 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <img src="images/icons/oakville.jpg" alt="Oakville Icon" class="me-3" width="50">
                                <h4 class="mb-0">Oakville</h4>
                            </div>
                            <ul class="location-list">
                                <li>Old Oakville</li>
                                <li>Kerr Village</li>
                                <li>Bronte</li>
                                <li>Eastlake (Morrison & Ford)</li>
                                <li>Clearview</li>
                                <li>College Park</li>
                                <li>Iroquois Ridge North</li>
                                <li>Iroquois Ridge South (Falgarwood)</li>
                                <li>Glen Abbey</li>
                                <li>Palermo</li>
                                <li>River Oaks</li>
                                <li>Uptown Core</li>
                                <li>Bronte Creek</li>
                                <li>Central Oakville</li>
                                <li>Southwest Oakville</li>
                                <li>West Oak Trails</li>
                                <li>West Oakville</li>
                                <li>Westmount</li>
                                <li>Glenorchy/Sixteen Hollow</li>
                                <li>Joshua Creek/Meadows</li>
                                <li>Wedgewood Creek</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Burlington Locations -->
                    <div class="col-md-4">
                        <div class="location-card p-4 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <img src="images/icons/burlington.jpg" alt="Burlington Icon" class="me-3" width="50">
                                <h4 class="mb-0">Burlington</h4>
                            </div>
                            <ul class="location-list">
                                <li>Aldershot</li>
                                <li>Alton Village</li>
                                <li>Brant Hills</li>
                                <li>Brant / Downtown Burlington</li>
                                <li>Corporate (Tansley & Corporate)</li>
                                <li>Dynes</li>
                                <li>Elizabeth Gardens</li>
                                <li>Headon Forest</li>
                                <li>Maple</li>
                                <li>Millcroft</li>
                                <li>Mountainside</li>
                                <li>Orchard</li>
                                <li>Palmer</li>
                                <li>Plains</li>
                                <li>Pinedale</li>
                                <li>Roseland</li>
                                <li>Shoreacres</li>
                                <li>Tansley Woods</li>
                                <li>The Orchard</li>
                                <li>Tyandaga</li>
                                <li>North Burlington / Rural Burlington</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Milton Locations -->
                    <div class="col-md-4">
                        <div class="location-card p-4 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <img src="images/icons/milton.jpg" alt="Milton Icon" class="me-3" width="50">
                                <h4 class="mb-0">Milton</h4>
                            </div>
                            <ul class="location-list">
                                <li>Old Milton</li>
                                <li>Beaty</li>
                                <li>Bronte Meadows</li>
                                <li>Bowes</li>
                                <li>Cobden</li>
                                <li>Clarke</li>
                                <li>Coates</li>
                                <li>Dempsey</li>
                                <li>Dorset Park</li>
                                <li>Fallingbrook</li>
                                <li>Ford</li>
                                <li>Forrest Grove</li>
                                <li>Harrison</li>
                                <li>Milton Heights</li>
                                <li>Mountainview</li>
                                <li>Scott</li>
                                <li>Timberlea</li>
                                <li>Valleyview</li>
                                <li>Walker</li>
                                <li>Willmott</li>
                                <li>Agerton</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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