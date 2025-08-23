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
        /* Logo Loader Styles */
        .logo-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            animation: fadeOutLoader 1s ease-in-out 2s forwards;
            /* fade out after 2s */
        }

        .logo-loader-content {
            text-align: center;
            animation: logoPulse 2s ease-in-out infinite;
        }

        .logo-loader img {
            width: 200px;
            height: auto;
            max-width: 90vw;
            filter: grayscale(0%);
            transition: all 0.3s ease;
        }

        .logo-loader-text {
            margin-top: 15px;
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 400;
            color: #333;
            letter-spacing: 1px;
            opacity: 0.7;
        }

        @keyframes logoPulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.8;
            }
        }

        /* Fade out loader automatically */
        @keyframes fadeOutLoader {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                pointer-events: none;
            }
        }

        /* Mobile optimizations */
        @media (max-width: 768px) {
            .logo-loader img {
                width: 150px;
            }

            .logo-loader-text {
                font-size: 16px;
                margin-top: 12px;
            }
        }
    </style>
</head>

<body>
    <!-- Logo Loader -->
    <div class="logo-loader" id="logoLoader">
        <div class="logo-loader-content">
            <img src="images/logo/logo.png" alt="National Dry Cleaners" />
            <div class="logo-loader-text">National Dry Cleaners</div>
        </div>
    </div>

    <!-- Header Include -->
    <?php include 'includes/header.html'; ?>

    <main>
        <section class="tf-slideshow slider-effect-fade slider-video position-relative">
            <div class="wrap-slider">
                <video src="images/slider/slider-video.mp4" autoplay muted playsinline loop></video>
                <div class="box-content">
                    <div class="container">
                        <h1 class="fade-item fade-item-2 heading-video">
                            The Cleaner<br> Superstore
                        </h1>
                        <p class="fade-item fade-item-1 subheading-video tagline">
                            Trusted since Lahore, now serving Canada 🍁
                        </p>
                        <div class="mt-3 d-flex flex-column align-items-start gap-12">
                            <a href="book-now.html" class="fade-item fade-item-3 tf-btn text-white"
                                style="border: 2px solid white; background: transparent; padding: 12px 24px; text-decoration: none; border-radius: 4px;">
                                <span>Book Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Marquee -->
        <div class="tf-marquee marquee-sm bg_dark">
            <div class="wrap-marquee speed-1">
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Dry Cleaning & Steam Laundry</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Wet Cleaning</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Wash & Fold by Weight</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Bridal Wear Cleaning & Restoration</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Alterations & Repairs</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Leather, Suede & Fur Cleaning</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Curtains & Blinds Cleaning</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Car Interior Steam Cleaning</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">Hockey & Sports Gear Cleaning</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none">
                            <path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <p class="text text-white text-uppercase fw-6">House Deep Cleaning & Sanitation</p>
                </div>
            </div>
        </div>

        <!-- Shop Collection -->
        <section class="flat-spacing-4 pt_4">
            <div class="container">
                <div class="tf-grid-layout md-col-2 tf-img-with-text style-2">
                    <div class="tf-content-wrap text-center w-100 wow fadeInUp" data-wow-delay="0s">
                        <span class="sub-heading text-uppercase fw-7">About Us</span>
                        <div class="heading">Who we are</div>
                        <p class="description">Established in 1967 in Lahore, National Dry Cleaners now brings decades
                            of premium garment care to Canada. We combine European equipment, DLI-certified methods and
                            expert craftsmanship to deliver an impeccable finish—every time.</p>
                    </div>
                    <div class="tf-image-wrap wow fadeInUp" data-wow-delay="0s">
                        <img class="lazyload home-page-images" data-src="assets/NDC-home-1.jpg"
                            src="assets/NDC-home-1.jpg" alt="collection-img">
                    </div>
                </div>
            </div>
        </section>
        <!-- /Shop Collection -->

        <!-- Our Services -->
        <section class="flat-spacing-4 pt_4">
            <div class="container">
                <div class="tf-grid-layout md-col-2 tf-img-with-text style-2">
                    <div class="tf-content-wrap text-center w-100 wow fadeInUp" data-wow-delay="0s">
                        <span class="sub-heading text-uppercase fw-7">Our Services</span>
                        <div class="heading">Expert care for your garments and home</div>
                        <div class="description">
                            <div class="row gx-3 gy-3 text-start mt-3">
                                <div class="col-md-6">
                                    <ul class="list-unstyled m-0">
                                        <li>Drycleaning & Steam Laundry</li>
                                        <li>Wet Cleaning</li>
                                        <li>Wash & Fold by Weight</li>
                                        <li>Bridal Wear/Wedding Gowns Cleaning & Restoration</li>
                                        <li>Alterations & Repairs</li>
                                        <li>Leather, Suede & Fur Cleaning</li>
                                        <li>Handmade & Synthetic Rug Cleaning</li>
                                        <li>Rug Repairs</li>
                                        <li>Steam Upholstery Cleaning</li>
                                        <li>Mattress Cleaning</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled m-0">
                                        <li>Household Items: Bedding, Quilts, Blankets & Comforters</li>
                                        <li>Curtains & Blinds Cleaning</li>
                                        <li>Car Interior Steam Cleaning</li>
                                        <li>Odour & Smoke Removal</li>
                                        <li>Hockey & Sports Gear Cleaning</li>
                                        <li>House Deep Cleaning & Sanitation</li>
                                        <li>Pakistani/Indian Formal Dress Cleaning & Steam Pressing</li>
                                        <li>Boat Cleaning</li>
                                        <li>Shoe Repairing and Cleaning</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="contact-1.html" class="tf-btn btn-line btn-icon radius-3">
                                    <span>Request a Quote</span><i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                   <div class="tf-image-wrap wow fadeInUp" data-wow-delay="0s">
                        <img class="lazyload" data-src="images/collections/collection-40.jpg"
                            src="images/collections/collection-40.jpg" alt="services-image">
                   </div>

            </div>
        </section>
        <!-- /Our Services -->

        <!-- Shop Collection -->
        <section class="flat-spacing-4 pt_4">
            <div class="container">
                <div class="tf-grid-layout md-col-2 tf-img-with-text style-2">
                    <div class="tf-image-wrap wow fadeInUp" data-wow-delay="0s">
                        <img class="lazyload home-page-images" data-src="assets/NDC-home-2.jpg"
                            src="assets/NDC-home-2.jpg" alt="collection-img">
                    </div>
                    <div class="tf-content-wrap text-center w-100 wow fadeInUp px-5" data-wow-delay="0s">
                        <h2 class="sub-heading text-uppercase fw-7 text-start">The Process</h2>
                        <div class="heading text-start">Every step with love & care</div>
                        <p class="description text-start">
                            • Inspection & tagging <br>
                            • Stain treatment <br>
                            • Cleaning (dry, wet or steam) <br>
                            • Expert finishing & pressing <br>
                            • Quality check <br>
                            • Ready for pickup or delivery
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Shop Collection -->

        <!-- Testimonial -->
        <section class="flat-spacing-12 line">
            <div class="container">
                <div class="wrap-carousel wrapper-thumbs-testimonial flat-thumbs-testimonial">
                    <div class="box-left wow fadeInUp" data-wow-delay="0s">
                        <div class="swiper tf-thumb-tes" data-preview="1" data-space="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img-sw-thumb">
                                        <img class="lazyload img-product" data-src="images/item/tets1.jpg"
                                            src="images/item/tets1.jpg" alt="image-product">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-sw-thumb">
                                        <img class="lazyload img-product" data-src="images/item/tets2.jpg"
                                            src="images/item/tets2.jpg" alt="image-product">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box-right wow fadeInUp" data-wow-delay="0s">
                        <div class="swiper tf-sw-tes-2" data-preview="1" data-space-lg="40" data-space-md="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item lg">
                                        <div class="icon icon-quote"></div>
                                        <div class="rating">
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                        </div>
                                        <p class="text fw-5">
                                            I've trusted National Dry Cleaners with my wedding dress and everyday
                                            garments—impeccable results and friendly service every time.
                                        </p>
                                        <div class="divider"></div>
                                        <div class="author box-author">
                                            <div class="box-img d-md-none">
                                                <img class="lazyload img-product" data-src="images/item/tets1.jpg"
                                                    src="images/item/tets1.jpg" alt="image-product">
                                            </div>
                                            <div class="content">
                                                <div class="name">Jenifer Unix</div>
                                                <a href="product-detail.html" class="metas link">Purchase item :
                                                    <span>Oversized Printed T-shirt</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item lg">
                                        <div class="icon icon-quote"></div>
                                        <div class="rating">
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                            <i class="icon-start"></i>
                                        </div>
                                        <p class="text fw-5">
                                            Fast turnaround, spotless cleaning, and they removed stubborn odours from
                                            my winter coat. Highly recommend!
                                        </p>
                                        <div class="divider"></div>
                                        <div class="author box-author">
                                            <div class="box-img d-md-none">
                                                <img class="lazyload img-product" data-src="images/item/tets2.jpg"
                                                    src="images/item/tets2.jpg" alt="image-product">
                                            </div>
                                            <div class="content">
                                                <div class="name">Robert smith</div>
                                                <a href="product-detail.html" class="metas link">Purchase item : <span>
                                                        The Scot Collar Mint</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-sw nav-next-slider nav-next-tes-2 lg"><span class="icon icon-arrow-left"></span>
                        </div>
                        <div class="nav-sw nav-prev-slider nav-prev-tes-2 lg"><span
                                class="icon icon-arrow-right"></span></div>
                        <div class="sw-dots style-2 sw-pagination-tes-2"></div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /Testimonial -->

        <!-- /Marquee -->
        <!-- Blogs post -->
        <section class="flat-spacing-14">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Care Tips & News</span>
                </div>
                <div class="hover-sw-nav view-defaul hover-sw-3">
                    <div class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30"
                        data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1"
                        data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay="0s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="assets/NDC-home-3.jpg"
                                                src="assets/NDC-home-3.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Fabric Care</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">How to care for delicate fabrics at
                                                home</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".1s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="assets/NDC-home-4.jpg"
                                                src="assets/NDC-home-4.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Laundry Tips</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Removing odours: What really works</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".2s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="assets/NDC-home-5.jpg"
                                                src="assets/NDC-home-5.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Dry Cleaning</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Stain removal guide: Coffee, wine,
                                                oil</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".3s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/blog-4.jpg"
                                                src="images/blog/blog-4.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Stain Care</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Seasonal storage: Keep your garments
                                                fresh</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".4s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/blog-5.jpg"
                                                src="images/blog/blog-5.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Home Care</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Dry cleaning vs. wet cleaning
                                                explained</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/blog-6.jpg"
                                                src="images/blog/blog-6.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Home Care</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Stain removal guide: Coffee, wine,
                                                oil</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span
                            class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span
                            class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-recent justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Blogs post -->

        <!-- brand -->
        <section class="flat-spacing-1">
            <div class="container">
                <div class="flat-title wow fadeInUp text-center mb-4" data-wow-delay="0s">
                    <span class="title">Our Partners</span>
                </div>
                <div class="swiper tf-sw-brand" data-loop="true" data-play="true" data-preview="6" data-tablet="3"
                    data-mobile="2" data-space-lg="0" data-space-md="0" data-autoplay="3000" data-speed="2000"
                    style="height: 80px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item"
                                style="height: 80px; display: flex; align-items: center; justify-content: center;">
                                <img class="lazyload" data-src="assets/bmk promotion.jpg" src="assets/bmk promotion.jpg"
                                    alt="image-brand" style="max-height: 50px; width: auto; object-fit: contain;">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item"
                                style="height: 80px; display: flex; align-items: center; justify-content: center;">
                                <img class="lazyload" data-src="assets/Brocode-1.png" src="assets/Brocode-1.png"
                                    alt="image-brand" style="max-height: 50px; width: auto; object-fit: contain;">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item"
                                style="height: 80px; display: flex; align-items: center; justify-content: center;">
                                <img class="lazyload" data-src="assets/ctv logo.png" src="assets/ctv logo.png"
                                    alt="image-brand" style="max-height: 50px; width: auto; object-fit: contain;">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item"
                                style="height: 80px; display: flex; align-items: center; justify-content: center;">
                                <img class="lazyload" data-src="assets/bmk promotion.jpg" src="assets/bmk promotion.jpg"
                                    alt="image-brand" style="max-height: 50px; width: auto; object-fit: contain;">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item"
                                style="height: 80px; display: flex; align-items: center; justify-content: center;">
                                <img class="lazyload" data-src="assets/Brocode-1.png" src="assets/Brocode-1.png"
                                    alt="image-brand" style="max-height: 50px; width: auto; object-fit: contain;">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item"
                                style="height: 80px; display: flex; align-items: center; justify-content: center;">
                                <img class="lazyload" data-src="assets/ctv logo.png" src="assets/ctv logo.png"
                                    alt="image-brand" style="max-height: 50px; width: auto; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dots style-2 sw-pagination-brand justify-content-center"></div>
            </div>
        </section>
        <!-- /brand -->

    </main>

    <!-- Footer Include -->
    <?php include 'includes/footer.html'; ?>

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
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
