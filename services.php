<?php
// Array of services/products
$services = [
    ["image" => "images/products/white-4.jpg", "title" => "Dry Cleaning & Steam Laundry", "price" => 10, "badge" => "Best Seller"],
    ["image" => "images/products/white-4.jpg", "title" => "Wet Cleaning", "price" => 8, "badge" => "Popular"],
    ["image" => "images/products/white-4.jpg", "title" => "Wash & Fold by Weight", "price" => 5, "badge" => "New"],
    ["image" => "images/products/white-4.jpg", "title" => "Bridal Wear & Wedding Gown Cleaning & Restoration", "price" => 50, "badge" => "Premium"],
    ["image" => "images/products/white-4.jpg", "title" => "Alterations & Repairs", "price" => 0, "badge" => "Service"],
    ["image" => "images/products/white-4.jpg", "title" => "Leather, Suede & Fur Cleaning", "price" => 30, "badge" => "Specialty"],
    ["image" => "images/products/white-4.jpg", "title" => "Handmade & Synthetic Rug Cleaning", "price" => 40, "badge" => "Specialty"],
    ["image" => "images/products/white-4.jpg", "title" => "Rug Repairs", "price" => 25, "badge" => "Repair"],
    ["image" => "images/products/white-4.jpg", "title" => "Steam Upholstery Cleaning", "price" => 35, "badge" => "Popular"],
    ["image" => "images/products/white-4.jpg", "title" => "Mattress Cleaning", "price" => 40, "badge" => "Healthy Home"],
    ["image" => "images/products/white-4.jpg", "title" => "Household Items: Bedding, Quilts, Blankets & Comforters", "price" => 12, "badge" => "Home"],
    ["image" => "images/products/white-4.jpg", "title" => "Curtains & Blinds Cleaning", "price" => 25, "badge" => "Home Decor"],
    ["image" => "images/products/white-4.jpg", "title" => "Car Interior Steam Cleaning", "price" => 30, "badge" => "Auto"],
    ["image" => "images/products/white-4.jpg", "title" => "Odour & Smoke Removal", "price" => 20, "badge" => "Restoration"],
    ["image" => "images/products/white-4.jpg", "title" => "Hockey & Sports Gear Cleaning", "price" => 18, "badge" => "Sports"],
    ["image" => "images/products/white-4.jpg", "title" => "House Deep Cleaning & Sanitation", "price" => 60, "badge" => "Sanitation"],
    ["image" => "images/products/white-4.jpg", "title" => "Pakistani/Indian Formal Dress Cleaning & Steam Pressing", "price" => 15, "badge" => "Ethnic Wear"],
    ["image" => "images/products/white-4.jpg", "title" => "Boat Cleaning", "price" => 55, "badge" => "Recreation"],
    ["image" => "images/products/white-4.jpg", "title" => "Shoe Repairing and Cleaning", "price" => 10, "badge" => "Footwear"],
];

// Get sorting option from URL
$sort = $_GET['sort'] ?? 'featured';

// Get current sort display name for the dropdown
$sortDisplayNames = [
    'featured' => 'Featured',
    'az' => 'Alphabetically, A-Z',
    'za' => 'Alphabetically, Z-A',
    'low-high' => 'Price, low to high',
    'high-low' => 'Price, high to low'
];
$currentSortName = $sortDisplayNames[$sort] ?? 'Featured';

// Sorting logic
switch ($sort) {
    case 'az':
        usort($services, function($a, $b) {
            return strcmp(strtolower($a['title']), strtolower($b['title']));
        });
        break;
    case 'za':
        usort($services, function($a, $b) {
            return strcmp(strtolower($b['title']), strtolower($a['title']));
        });
        break;
    case 'low-high':
        usort($services, function($a, $b) {
            if ($a['price'] == $b['price']) {
                return 0;
            }
            return ($a['price'] < $b['price']) ? -1 : 1;
        });
        break;
    case 'high-low':
        usort($services, function($a, $b) {
            if ($a['price'] == $b['price']) {
                return 0;
            }
            return ($a['price'] > $b['price']) ? -1 : 1;
        });
        break;
    case 'featured':
    default:
        // Keep original order for featured
        break;
}

// Pagination
$perPage = 8;
$total = count($services);
$page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
$start = ($page - 1) * $perPage;
$paginatedServices = array_slice($services, $start, $perPage);
$totalPages = ceil($total / $perPage);

// Build query string for pagination links
function buildQueryString($page, $sort) {
    $params = [];
    if ($page > 1) $params['page'] = $page;
    if ($sort !== 'featured') $params['sort'] = $sort;
    return !empty($params) ? '?' . http_build_query($params) : '?page=1';
}
?>
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

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

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
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
        }

        .service-card img {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        .pagination a {
            margin: 0 5px;
            text-decoration: none;
        }

        .pagination li.active a {
            font-weight: bold;
        }
        
        /* Dropdown styling */
        .tf-dropdown-sort {
            position: relative;
        }
        
        .tf-dropdown-sort .btn-select {
            padding: 10px 15px;
            border: 1px solid #ddd;
            background: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            border-radius: 4px;
        }
        
        .tf-dropdown-sort .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
            min-width: 200px;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        .tf-dropdown-sort .select-item {
            padding: 0;
            margin: 0;
            border: none;
        }
        
        .tf-dropdown-sort .select-item a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
            border: none;
            margin: 0;
        }
        
        .tf-dropdown-sort .select-item:hover a,
        .tf-dropdown-sort .select-item.active a {
            background: #f5f5f5;
        }
        
        .tf-dropdown-sort .select-item:first-child a {
            border-radius: 4px 4px 0 0;
        }
        
        .tf-dropdown-sort .select-item:last-child a {
            border-radius: 0 0 4px 4px;
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
                    <h1 class="heading display-4 fw-bold text-white">Our Services</h1>
                    <p class="lead">Comprehensive care for garments, home, and specialty items. Professional service you
                        can trust.</p>
                </div>
            </section>

            <section class="flat-spacing-1">
                <div class="container">
                    <div class="tf-shop-control grid-3 align-items-center">
                        <div class="tf-control-filter">
                            <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                class="tf-btn-filter"><span class="icon icon-filter"></span><span
                                    class="text">Filter</span></a>
                        </div>
                        <ul class="tf-control-layout d-flex justify-content-center">
                            <li class="tf-view-layout-switch sw-layout-2" data-value-grid="grid-2">
                                <div class="item"><span class="icon icon-grid-2"></span></div>
                            </li>
                            <li class="tf-view-layout-switch sw-layout-3" data-value-grid="grid-3">
                                <div class="item"><span class="icon icon-grid-3"></span></div>
                            </li>
                            <li class="tf-view-layout-switch sw-layout-4 active" data-value-grid="grid-4">
                                <div class="item"><span class="icon icon-grid-4"></span></div>
                            </li>
                            <li class="tf-view-layout-switch sw-layout-5" data-value-grid="grid-5">
                                <div class="item"><span class="icon icon-grid-5"></span></div>
                            </li>
                            <li class="tf-view-layout-switch sw-layout-6" data-value-grid="grid-6">
                                <div class="item"><span class="icon icon-grid-6"></span></div>
                            </li>
                        </ul>
                        <div class="tf-control-sorting d-flex justify-content-end">
                            <div class="tf-dropdown-sort">
                                <div class="btn-select">
                                    <span class="text-sort-value"><?= htmlspecialchars($currentSortName) ?></span>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <div class="dropdown-menu" style="display: none;">
                                    <div class="select-item <?= $sort == 'featured' ? 'active' : '' ?>">
                                        <a href="?sort=featured&page=1" class="text-value-item">Featured</a>
                                    </div>
                                    <div class="select-item <?= $sort == 'az' ? 'active' : '' ?>">
                                        <a href="?sort=az&page=1" class="text-value-item">Alphabetically, A-Z</a>
                                    </div>
                                    <div class="select-item <?= $sort == 'za' ? 'active' : '' ?>">
                                        <a href="?sort=za&page=1" class="text-value-item">Alphabetically, Z-A</a>
                                    </div>
                                    <div class="select-item <?= $sort == 'low-high' ? 'active' : '' ?>">
                                        <a href="?sort=low-high&page=1" class="text-value-item">Price, low to high</a>
                                    </div>
                                    <div class="select-item <?= $sort == 'high-low' ? 'active' : '' ?>">
                                        <a href="?sort=high-low&page=1" class="text-value-item">Price, high to low</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-layout wrapper-shop" data-grid="grid-4">
                        <?php foreach ($paginatedServices as $service): ?>
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="service-detail.php" class="product-img">
                                        <img class="lazyload img-product" data-src="<?php echo htmlspecialchars($service['image']); ?>"
                                            src="<?php echo htmlspecialchars($service['image']); ?>"
                                            alt="<?php echo htmlspecialchars($service['title']); ?>">
                                    </a>
                                    <?php if (!empty($service['badge'])): ?>
                                        <div class="on-sale-wrap text-end">
                                            <div class="on-sale-item"><?php echo htmlspecialchars($service['badge']); ?></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="card-product-info">
                                    <a href="service-detail.php"
                                        class="title link"><?php echo htmlspecialchars($service['title']); ?></a>
                                    <span
                                        class="price"><?php echo $service['price'] > 0 ? '$' . number_format($service['price'], 0) : 'Custom Pricing'; ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if ($totalPages > 1): ?>
                    <ul class="pagination mt-4">
                        <?php if ($page > 1): ?>
                            <li><a href="<?= buildQueryString($page - 1, $sort) ?>">Prev</a></li>
                        <?php endif; ?>
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="<?= $i == $page ? 'active' : '' ?>">
                                <a href="<?= buildQueryString($i, $sort) ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <?php if ($page < $totalPages): ?>
                            <li><a href="<?= buildQueryString($page + 1, $sort) ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                    <?php endif; ?>
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <script>
    $(document).ready(function() {
        // Handle dropdown sorting
        $('.tf-dropdown-sort .select-item a').click(function(e) {
            e.preventDefault();
            var sortValue = $(this).attr('href');
            window.location.href = sortValue;
        });
        
        // Handle dropdown toggle
        $('.tf-dropdown-sort .btn-select').click(function() {
            $(this).next('.dropdown-menu').toggle();
        });
        
        // Close dropdown when clicking outside
        $(document).click(function(e) {
            if (!$(e.target).closest('.tf-dropdown-sort').length) {
                $('.dropdown-menu').hide();
            }
        });
        
        // Update sort value display when item is clicked
        $('.tf-dropdown-sort .select-item a').click(function() {
            var selectedText = $(this).text();
            $('.text-sort-value').text(selectedText);
            $('.dropdown-menu').hide();
        });
    });
    </script>
</body>

</html>