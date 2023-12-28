<?php

session_start();

// Ensure the user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: /login.php');
    exit();
}


$products = [
    40 => 'Ac Service',
    41 => 'Wash Service',
    42 => 'Refrigerator Service',
    43 => 'Plumbing Service',
    44 => 'Electricity Service',
    45 => 'Washroom Cleaning',
    46 => 'House Cleaning',
    47 => 'Hair Cutting',
    48 => 'Makeup',
    49 => 'Massage',
    50 => 'Vehicle Service',
    51 => 'Flat Tyre',
    52 => 'Vehicle Towing',
    53 => 'Vehicle AC Repair',
    
    // ... up to Product 10
];

// MOST VIEWED
$viewCounts = [];
foreach ($products as $productID => $productName) {
    $cookieName = 'product_view_count_' . $productID . '_' . md5($_SESSION['userid']);
    $viewCounts[$productID] = isset($_COOKIE[$cookieName]) ? intval($_COOKIE[$cookieName]) : 0;
}

arsort($viewCounts);
$top5MostViewed = array_slice($viewCounts, 0, 5, true);

// Construct the cookie name based on the user ID
$cookieName = 'recently_viewed_' . md5($_SESSION['userid']);


// Read the recently viewed products from the user-specific cookie
$recentlyViewed = isset($_COOKIE[$cookieName]) ? explode(',', $_COOKIE[$cookieName]) : [];
?>


<!DOCTYPE html>

<html>
<head>
<title>Servic - Services</title>
<link href="style.css" rel="stylesheet"/>
</head>
<body>
<?php include 'header.php'; ?>
<?php if (isset($_COOKIE['recently_viewed_' . md5($_SESSION['userid'])])): ?>
<div class="recentmost">
<div>
<h2>Most Visited Services</h2>
<?php
foreach ($top5MostViewed as $productID => $viewCount) {
    if ($viewCount >= 1) {
        echo '<li>' . $products[$productID] . ' (Views: ' . $viewCount . ')</li>';
    }
}
?>

</div>
<div>
<h2>Last Visited Services</h2>
<?php
foreach ($recentlyViewed as $productID) {
    echo '<li>' . $products[$productID] . '</li>';
}
?>
</div>
</div>
<?php endif; ?>
<div class="container">
<h1>Our Services</h1>
<div class="services-category">
    <h2>Home Appliance Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>AC Service</h3>
            <a href="ac_service.php"><img src="images/acservice.png" alt="AC Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Wash/Dryer Service</h3>
            <a href="washing_machine_service.php"><img src="images/washingmachine.png" alt="Washing Machine Service" class="cardimg"></a>
        </div>
    <div class="service-card">
        <h3>Refrigerator Service</h3>
        <a href="refrigerator_service.php"><img src="images/Fridge.png" alt="Fridge Service" class="cardimg"></a>
    </div>
</div>
</div>
<div class="services-category">
    <h2>Home Maintenance Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Plumbing Service</h3>
            <a href="plumbing_service.php"><img src="images/Plumbing.png" alt="Plumbing Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Electricity Service</h3>
            <a href="electricity_service.php"><img src="images/electricity.png" alt="Electricity Service" class="cardimg"></a>
        </a></div><div class="service-card">
            <h3>Washroom Cleaning</h3>
            <a href="washroom_cleaning.php"><img src="images/washroom.png" alt="Washroom Service" class="cardimg"></a>
        </div><div class="service-card">
            <h3>House Cleaning</h3>
            <a href="house_cleaning.php"><img src="images/Housecleaning.png" alt="House Cleaning Service" class="cardimg"></a>
        </div>
    </div>
</div>
<div class="services-category">
    <h2>Personal Care Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Hair Cutting</h3>
            <a href="hair_cutting.php"><img src="images/haircut.png" alt="Haircut Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Makeup</h3>
            <a href="makeup.php"><img src="images/makeup.png" alt="makeup Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Massage</h3>
            <a href="massage.php"><img src="images/massage.png" alt="massage Service" class="cardimg"></a>
        </div>
    </div>
</div>
<div class="services-category">
    <h2>Vehicle Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Vehicle Service</h3>
            <a href="vehicle_service.php"><img src="images/Vehicleservice.png" alt="Vehicle Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Flat Tyre</h3>
            <a href="flat_tyre.php"><img src="images/Flattyre.png" alt="Flattyre Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Vehicle Towing</h3>
            <a href="vehicle_towing.php"><img src="images/Towing.png" alt="Towing Service" class="cardimg"></a>
        </div>
        <div class="service-card">
            <h3>Vehicle AC Repair</h3>
            <a href="vehicle_ac_repair.php"><img src="images/CarAc.png" alt="AC Repair Service" class="cardimg"></a>
        
    
        </div>
    </div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
